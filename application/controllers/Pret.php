<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pret extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('auth');
        if (!est_connecte()) {
            redirect('utilisateur');
        }
    }

    public function index()
	{
		$this->load->view('templates/accueil');
	}

    public function traitement_inscription()
    {
        $montant = $this->input->post('montant');
        $taux = $this->input->post('taux');
        $duree = $this->input->post('duree');
        $date_debut = $this->input->post('date_debut');
        $this->utilisateur_model->inscription($montant, $taux, $duree, $date_debut);
        redirect('utilisateur');
    }


}
