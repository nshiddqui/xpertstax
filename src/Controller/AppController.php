<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $permission = [
        'Sales'
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Security');
        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Paginator', [
            'className' => 'MyPaginate'
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'User',
                'action' => 'login',
                'prefix' => 'admin'
            ],
            'authError' => 'Did you really think you are allowed to see that?',
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'pan_number', 'password' => 'password']
                ]
            ],
            'storage' => 'Session',
            'unauthorizedRedirect' => false
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(Event $event) {
        $this->set('queryParams', $this->request->getAttribute('params'));
        if ($this->request->getParam('prefix')) {
            $this->viewBuilder()->setLayout('auth_layout');
        }
        $userDetails = $this->Auth->user();
        if ($userDetails) {
            $this->_isAllowToUesd($userDetails);
            $this->set('authUser', $this->Auth->user());
        }
        parent::beforeFilter($event);
    }

    public function _isAllowToUesd($user) {
        if ($this->request->getParam('controller') != "Users" || $this->request->getParam('action') != "edit") {
            if ($user['details_field'] != '1') {
                $this->redirect(['controller' => 'Users', 'action' => 'edit']);
            }
        }
    }

}
