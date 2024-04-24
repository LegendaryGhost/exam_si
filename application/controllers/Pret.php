<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pret extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('auth');
        if (!is_logged_in()) {
            redirect('utilisateur/login');
        }
    }

    public function index()
	{
		$this->load->view('templates/accueil');
	}
}
