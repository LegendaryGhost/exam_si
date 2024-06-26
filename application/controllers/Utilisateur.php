<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('utilisateur_model');
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('templates/connexion');
	}

    public function traitement_login()
    {
        $email = $this->input->post('email');
        $mot_de_passe = $this->input->post('mot_de_passe');
        $utilisateur = $this->utilisateur_model->login($email, $mot_de_passe);
        if ($utilisateur)
        {
            $this->session->set_userdata('id_utilisateur', $utilisateur->id);
            redirect('pret');
        }
        else
        {
            redirect('utilisateur');
        }
    }

    public function inscription()
    {
        $this->load->view('templates/inscription');
    }

    public function traitement_inscription()
    {
        $nom = $this->input->post('nom');
        $email = $this->input->post('email');
        $mot_de_passe = $this->input->post('mot_de_passe');
        $this->utilisateur_model->inscription($nom, $email, $mot_de_passe);
        redirect('utilisateur');
    }

    public function liste()
    {
        $this->load->view('templates/liste');
    }

    public function accueil()
    {
        $this->load->view('templates/accueil');
    }

    public function ammortissement()
    {
        $this->load->view('templates/ammortissement');
    }

    public function analyse()
    {
        $this->load->view('templates/analyse');
    }

    public function deconnexion()
    {
        $this->session->unset_userdata('id_utilisateur');
        redirect('utilisateur');
    }


}
