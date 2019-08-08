<?php

namespace App\Controller;

use App\Controller\AppController;

class TaxoptimiserController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
	    $this->Auth->allow(); 
    }
    
    public function index() {
        
    }

}
