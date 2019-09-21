<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;

class AdvancedHtmlHelper extends HtmlHelper {

    public function image($path, array $options = array()) {
        $imagePath = urldecode($this->Url->image($path, $options));
        if (!file_exists(WWW_ROOT . $imagePath)) {
            $path = 'image-not-available.jpg';
        }
        return parent::image($path, $options);
    }

}
