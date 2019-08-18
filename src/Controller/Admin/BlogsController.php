<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Fileupload');
    }

    public function index() {
        $this->set('blogs', $this->Blogs->find('All'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $blog = $this->Blogs->get($id, [
            'contain' => []
        ]);

        $this->set('blog', $blog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $blog = $this->Blogs->newEntity();
        if ($this->request->is('post')) {
            $error = 0;
            $data = $this->request->getData();
            if (!empty($data['files']['name'])) {
                $fuConfig['upload_path'] = BLOG_ROOT;
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
                    $error++;
                } else {
                    $data['url'] = $this->Fileupload->output('file_name');
                }
            }
            unset($data['files']);
            $blog = $this->Blogs->patchEntity($blog, $data);
            if ($error === 0 && $this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $blog = $this->Blogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $error = 0;
            $data = $this->request->getData();
            if (!empty($data['files']['name'])) {
                $fuConfig['upload_path'] = BLOG_ROOT;
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
                    $error++;
                } else {
                    $data['url'] = $this->Fileupload->output('file_name');
                }
            }
            unset($data['files']);
            $blog = $this->Blogs->patchEntity($blog, $data);
            if ($error === 0 && $this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $this->set(compact('blog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('The blog has been deleted.'));
        } else {
            $this->Flash->error(__('The blog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
