<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model {

    public function login($email, $mot_de_passe) {
        $query = "SELECT * FROM utilisateur WHERE email = %s AND mot_de_passe = %s";
        $query = sprintf($query, $this->db->escape($email), $this->db->escape($mot_de_passe));
        $result = $this->db->query($query);
        return $result->row();
    }

    public function inscription($nom, $email, $mot_de_passe) {
        $query = "INSERT INTO utilisateur (nom, email, mot_de_passe) VALUES (%s,%s,%s)";
        $query = sprintf($query, $this->db->escape($nom), $this->db->escape($email), $this->db->escape($mot_de_passe));
        $this->db->query($query);
    }
}
