<?php

namespace App\Controller;

use App\Controller\AppController;

class ServicesController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
	    $this->Auth->allow(); 
    }
    
    public function index() {
        
    }

    public function incometax() {
        
    }

    public function gst() {
        
    }

    public function servicetax() {
        
    }

    public function saletax() {
        
    }

    public function accounting() {
        
    }

    public function companylaw() {
        
    }

    public function audit() {
        
    }

    public function hrSolution() {
        
    }

}
