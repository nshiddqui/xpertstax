<?php

namespace App\Controller;

use App\Controller\AppController;

abstract class CrudController extends AppController {

    public $addRedirect;
    public $updateRedirect;
    public $editErrorAction;
    public $editErrorView;
    public $getAllRoles;
    public $getAllOwnersTypes;
    public $additionalData;

    public function __construct(\Cake\Http\ServerRequest $request = null, \Cake\Http\Response $response = null, $name = null, $eventManager = null, $components = null) {
        parent::__construct($request, $response, $name, $eventManager, $components);
        $this->viewBuilder()->setTemplatePath('/Crud/');
    }

    public function index($options = []) {
        if (!count($datas = $this->{$this->modelClass}->indexData($options))) {

            $message = "No {$this->modelClass} Found";
        }
        $columns = $this->{$this->modelClass}->getColumns();
        $this->set(compact('datas', 'message', 'columns'));
    }

    function view($id) {
        if (empty($data = $this->{$this->modelClass}->viewData($id))) {

            $this->setError([], 404, "{$this->modelClass} Not Found. You may not be authorized to view this {$this->modelClass}");
        }
        $this->set(compact('data'));
    }

    // modify data before adding
    protected function beforeAdd($data) {
        // set created_by to current user
        $data['user_id'] = $this->Auth->user('id');

        return $data;
    }

    public function add($options = array()) {
        $newEntity = $this->{$this->modelClass}->newEntity();
        if ($this->request->is(['post', 'put'])) {
            // new data cant have an id
            if ($this->request->getData('id')) {
                $this->setError([], 1007);
                return;
            }
            $DataToInsert = $this->beforeAdd($this->request->getData());
            array_push($DataToInsert, $this->additionalData);
            $patchEntity = $this->{$this->modelClass}->patchEntity($newEntity, $DataToInsert, $options);

            if (is_array($result = $this->{$this->modelClass}->save($patchEntity))) {
                return false;
            }
            $this->redirect(['action' => 'index', $this->modelClass]);
        }
        $this->set(compact('newEntity'));
    }

    // modify data before update
    protected function beforeUpdate($data) {
        // set modified_by to current user
        $data[$this->modelClass]['modified_by'] = $this->Auth->user('id');

        return $data;
    }

    public function update($id) {
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
            if ($this->updateRedirect != '/users/' && $this->updateRedirect != '/clients/' && $this->updateRedirect != '/email_templates/' . $id) {
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

    protected function _getEditLists($data) {
        return $data;
    }

    protected function _editError($errors, $data) {
        if (!empty($errors['message'])) {
            $message = $errors['message'];
        }
        $this->setError($errors, 0, $message);

        $action = $this->editErrorAction ? $this->editErrorAction : "edit";
        $view = $this->editErrorView ? $this->editErrorView : "edit";

        if (!$this->request->is('api')) {
            $data = $this->request->data;
            if ($this->getAllRoles) {
                $this->loadModel('Role');
                $data['roles'] = $this->Role->find('all', array('order' => 'Role.id'));
            }

            if ($this->getAllOwnersTypes) {
                $this->loadModel('OwnerType');
                $data['Owner_details'] = $this->OwnerType->find('list', array('fields' => 'owner_type'));
            }
            $data = $this->_getEditLists($data);
            $this->set(compact('data'));
            $this->action = $action;
            $this->view = $view;
        }
    }

    public function _getColumns($data) {
        
    }

}
