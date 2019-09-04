<?php

abstract class CrudController extends AppController
{
    public $addRedirect;

    public $updateRedirect;
    
    public $editErrorAction;
    
    public $editErrorView;
    
    public $getAllRoles;
    
    public $getAllOwnersTypes;

    public function index($options = [])
    {
        if (!count($data = $this->{$this->modelClass}->indexData($options))) {

            $message = "No {$this->modelClass} Found";
        };
        
        $this->set(compact('data', 'message'));
    }

    function view($id)
    {
        if (empty($data = $this->{$this->modelClass}->viewData($id))) {

            $this->setError([], 404, "{$this->modelClass} Not Found. You may not be authorized to view this {$this->modelClass}");
        }

        $this->set(compact('data'));
    }

    // modify data before adding
    protected function beforeAdd($data)
    {
        // set created_by to current user
        $data[$this->modelClass]['created_by'] = $this->Auth->user('id');

        return $data;
    }

    public function add()
    {
        if ($this->request->is(['post', 'put'])) {

            // new data cant have an id
            if ($this->request->data[$this->modelClass]['id']) {

                $this->setError([], 1007);
                return;
            }

            $this->request->data = $this->beforeAdd($this->request->data);

            if (is_array($result = $this->{$this->modelClass}->saveData($this->request->data))) {

                $this->_editError($result, $this->request->data);
                return;
            }
            if($this->addRedirect != '/users/' && $this->addRedirect != '/clients/'){
                // get newly created record
                $new_record = $this->{$this->modelClass}->editData($this->{$this->modelClass}->id);

                // merge input with new record to preserve pass through variables
                $return_data = array_replace_recursive($this->request->data, $new_record);
                
                $this->set('data', $return_data);
            }
            
            $this->set('message', "{$this->modelClass} Added");
            $this->set('status', 201);

            $redirect = $this->addRedirect ? $this->addRedirect : "/" . strtolower(Inflector::pluralize($this->modelClass)) . "/edit/{$this->{$this->modelClass}->id}";
            $this->redirect($redirect);
        }
    }

    // modify data before update
    protected function beforeUpdate($data)
    {
        // set modified_by to current user
        $data[$this->modelClass]['modified_by'] = $this->Auth->user('id');

        return $data;
    }

    public function update($id)
    {
        if ($this->request->is(['post', 'put'])) {

            // data id must match url id
            if ($id != $this->request->data[$this->modelClass]['id']) {

                $this->setError([], 1008);
                return;
            }

            $this->request->data = $this->beforeUpdate($this->request->data);

            if (is_array($result = $this->{$this->modelClass}->saveData($this->request->data))) {

                $this->_editError($result, $this->request->data);
                return;
            }
            if($this->updateRedirect != '/users/' && $this->updateRedirect != '/clients/' && $this->updateRedirect != '/email_templates/'.$id){
            // get newly created record
                $saved_record = $this->{$this->modelClass}->editData($this->{$this->modelClass}->id);

            // merge input with new record to preserve pass through variables
                $return_data = array_replace_recursive($this->request->data, $saved_record);
                
                $this->set('data', $return_data);
            }
            $this->set('message', "{$this->modelClass} Updated");

            $redirect = $this->updateRedirect ? $this->updateRedirect : "/" . strtolower(Inflector::pluralize($this->modelClass)) . "/edit/{$this->{$this->modelClass}->id}";
            $this->redirect($redirect);
        }
    }

    protected function _getEditLists($data)
    {
        return $data;
    }

    protected function _editError($errors, $data)
    {
        if (!empty($errors['message'])) {
            $message = $errors['message'];
        }
        $this->setError($errors, 0, $message);
        
        $action = $this->editErrorAction ? $this->editErrorAction : "edit";
        $view = $this->editErrorView ? $this->editErrorView : "edit";
        
        if (!$this->request->is('api')) {
            $data = $this->request->data;
            if($this->getAllRoles){
                $this->loadModel('Role');
                $data['roles'] = $this->Role->find('all',array('order'=>'Role.id'));
            }
            
            if($this->getAllOwnersTypes){
                $this->loadModel('OwnerType');
                $data['Owner_details'] = $this->OwnerType->find('list',array('fields'=>'owner_type'));
            }
            $data = $this->_getEditLists($data);
            $this->set(compact('data'));
            $this->action = $action;
            $this->view = $view;
        }
    }
}