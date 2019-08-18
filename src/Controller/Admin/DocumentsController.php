<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 *
 * @method \App\Model\Entity\Document[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Fileupload');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->set('documents', $this->Documents->find('All'));
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $document = $this->Documents->get($id, [
            'contain' => []
        ]);

        $this->set('document', $document);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $document = $this->Documents->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $fuConfig['upload_path'] = DOC_ROOT;
            $fuConfig['allowed_types'] = ['png', 'jpg'];
            $fuConfig['max_size'] = 0;
            $this->Fileupload->init($fuConfig);
            if (!$this->Fileupload->upload('files')) {
                $fError = $this->Fileupload->errors();
                if ($fError[0] == 'upload_invalid_filetype') {
                    $this->Flash->error(__('ExtNotAllowed'));
                } else {
                    $this->Flash->error(__('FileNotUpload'));
                }
            } else {
                $data['url'] = $this->Fileupload->output('file_name');
                unset($data['files']);
                $document = $this->Documents->patchEntity($document, $data);
                if ($this->Documents->save($document)) {
                    $this->Flash->success(__('The document has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('document'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $document = $this->Documents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $fuConfig['upload_path'] = DOC_ROOT;
            $fuConfig['allowed_types'] = ['png', 'jpg'];
            $fuConfig['max_size'] = 0;
            $this->Fileupload->init($fuConfig);
            if (!$this->Fileupload->upload('files')) {
                $fError = $this->Fileupload->errors();
                if ($fError[0] == 'upload_invalid_filetype') {
                    $this->Flash->error(__('ExtNotAllowed'));
                } else {
                    $this->Flash->error(__('FileNotUpload'));
                }
            } else {
                $data['url'] = $this->Fileupload->output('file_name');
                unset($data['files']);
                $document = $this->Documents->patchEntity($document, $data);
                if ($this->Documents->save($document)) {
                    $this->Flash->success(__('The document has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('document'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
