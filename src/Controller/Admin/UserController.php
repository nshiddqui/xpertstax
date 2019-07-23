<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class UserController extends AppController {

    public function login() {
        $this->viewBuilder()->setLayout(false);
        $usersess = $this->Auth->user();
        if (!empty($usersess)) {
            $this->redirect(['controller' => 'User', 'action' => 'login', 'prefix' => 'admin']);
        } else {
            if ($this->request->is('post')) {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect(['action' => 'index', 'prefix' => 'admin']);
                }
                $this->Flash->error(__('Invalid username or password, try again'));
            }
        }
    }

    public function index() {
        
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function file() {
        if ($this->request->is('post')) {
            $file = $this->request->getData('files');
            $fileName = time();
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
//set file name with time for unique file name
            $fileName = $fileName . '.' . $ext;
            $path = '/download/documents';
//set file path for server disk
            $uploadPath = WWW_ROOT . $path;
            if (!is_dir($uploadPath)) {
//if folder not exist, creat efolder
                mkdir($uploadPath, 0777, true);
            }
            if (!move_uploaded_file($file['tmp_name'], $uploadPath . DS . $fileName)) {
//if file not upload on path, return with flash error
                $this->Flash->error(__('Fail to upload documents.'));
                echo 1;
                die;
                return false;
            } else {
                $documentsTable = TableRegistry::get('Documents');
                $data['title'] = $this->request->getData('title');
                $data['description'] = $this->request->getData('description');
                $data['url'] = $fileName;
                $documents = $documentsTable->newEntity($data);
                if ($documentsTable->save($documents)) {
                    $this->Flash->set('Documents uploaded successful', [
                        'element' => 'success'
                    ]);
                    $this->redirect($this->referer());
                } else {
                    $this->Flash->set('Unable to Upload Documents. Please try again later', [
                        'element' => 'error'
                    ]);
                }
            }
        }
    }

    public function blog() {
        if ($this->request->is('post')) {
            $file = $this->request->getData('files');
            $fileName = time();
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
//set file name with time for unique file name
            $fileName = $fileName . '.' . $ext;
            $path = '/img/blogs';
//set file path for server disk
            $uploadPath = WWW_ROOT . $path;
            if (!is_dir($uploadPath)) {
//if folder not exist, creat efolder
                mkdir($uploadPath, 0777, true);
            }
            if (!move_uploaded_file($file['tmp_name'], $uploadPath . DS . $fileName)) {
//if file not upload on path, return with flash error
                $this->Flash->error(__('Fail to upload documents.'));
                echo 1;
                die;
                return false;
            } else {
                $blogTable = TableRegistry::get('Blogs');
                $data['title'] = $this->request->getData('title');
                $data['short_description'] = $this->request->getData('short_description');
                $data['long_description'] = $this->request->getData('long_description');
                $data['url'] = $fileName;
                $blog = $blogTable->newEntity($data);
                if ($blogTable->save($blog)) {
                    $this->Flash->set('Blog uploaded successful', [
                        'element' => 'success'
                    ]);
                    $this->redirect($this->referer());
                } else {
                    $this->Flash->set('Unable to Blog Documents. Please try again later', [
                        'element' => 'error'
                    ]);
                }
            }
        }
    }

}
