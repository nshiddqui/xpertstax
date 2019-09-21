<?php

namespace App\Controller\Admin;

use App\Controller\CrudController;

class SalesController extends CrudController {

    public $accessAction = [
        'customers'
    ];
    public $modelClass = 'customers';

    public function __construct(\Cake\Http\ServerRequest $request = null, \Cake\Http\Response $response = null, $name = null, $eventManager = null, $components = null) {
        parent::__construct($request, $response, $name, $eventManager, $components);
        if (isset($request->getParam('?')['method'])) {
            if (in_array($request->getParam('?')['method'], $this->accessAction)) {
                $this->modelClass = $request->getParam('?')['method'];
            }
        }
    }

    public function index($options = array()) {
        $this->set('title', $this->modelClass);
        parent::index();
    }

    public function add($options = array()) {
        $this->set('title', $this->modelClass);
        $this->set('columns', ['first_name', 'last_name']);
        parent::add();
    }

}
