<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class UserController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'register']);
    }

    public function login() {
        $this->viewBuilder()->setLayout(false);
        $usersess = $this->Auth->user();
        if (!empty($usersess)) {
            $this->redirect(['controller' => 'User', 'action' => 'login', 'prefix' => 'admin']);
        } else {
            if ($this->request->is('post')) {
                $user = $this->Auth->identify();
                if ($user) {
                    $this->loadModel('Users');
                    $user = $this->Users->get($user['id'], ['contain' => 'UserDetails'])->toArray();
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'Dashboard', 'action' => 'index', 'prefix' => 'admin']);
                }
                $this->Flash->error(__('Invalid pan number or password, try again'));
            }
        }
    }

    public function index() {
        
    }

    public function register() {
        $this->viewBuilder()->setLayout(false);
        $this->loadModel('Users');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $parts = explode("@", $this->request->getData());
            $first_name = $parts[0];
            $data = array_merge($this->request->getData(), [
                'user_detail' => [
                    'first_name' => $first_name,
                    'last_name' => ''
                ]
            ]);
            $user = $this->Users->patchEntity($user, $data, ['associated' => ['UserDetails']]);
            if ($this->Users->save($user)) {
                $user = $this->Users->get($user->id, ['contain' => 'UserDetails'])->toArray();
                $this->Auth->setUser($user);
                $this->Flash->success(__('Thank you for registered with us.'));
                return $this->redirect(['controller' => 'Dashboard', 'action' => 'index', 'prefix' => 'admin']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
