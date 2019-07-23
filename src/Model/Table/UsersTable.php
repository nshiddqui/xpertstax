<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table {

    public function validationDefault(Validator $validator) {
        $validator->add('username', 'isUnique', ['rule' => 'text']);
        return $validator
                        ->notEmpty('username', 'A email is required')
                        ->notEmpty('password', 'A password is required');
    }

    public function initialize(array $config) {
        
    }
   
}
