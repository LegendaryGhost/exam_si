<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('est_connecte')) {
    function est_connecte() {
        $CI =& get_instance();
        $is_logged_in = $CI->session->userdata('id_utilisateur');
        return isset($is_logged_in) && $is_logged_in != '';
    }
}
