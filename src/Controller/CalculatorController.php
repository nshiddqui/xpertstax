<?php

namespace App\Controller;

use App\Controller\AppController;

class CalculatorController extends AppController {

    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
	    $this->Auth->allow(); 
    }
    
    public function gstCalculator() {
        
    }

    public function taxCalculator() {
        
    }

    public function tdsLatePaymentCalculator() {
        
    }

    public function tdsReturnPaymentCalculator() {
        
    }

    public function netProfitCalculator() {
        
    }

    public function hraCalculator() {
        
    }

}
