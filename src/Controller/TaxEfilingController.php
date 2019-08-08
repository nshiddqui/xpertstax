<?php

namespace App\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Controller\AppController;

class TaxEfilingController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
	    $this->Auth->allow(); 
    }
    
    public function salaryefill() {
        
    }

}
