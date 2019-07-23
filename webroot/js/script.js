/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    (function ($) {

        $('#header__icon').click(function (e) {
            e.preventDefault();
            $('body').toggleClass('with--sidebar');
        });

        $('#site-cache').click(function (e) {
            $('body').removeClass('with--sidebar');
        });

    })(jQuery);

});