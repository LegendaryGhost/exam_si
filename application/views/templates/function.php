<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulation_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function generateAmortizationTable($principal, $interestRate, $durationInMonths, $startDate) {
        $monthlyInterestRate = $interestRate / 12 / 100;
        $numberOfPayments = $durationInMonths;
      
        $amortizationTable = [];
      
        $remainingBalance = $principal;
        $monthlyPayment = $principal * $monthlyInterestRate / (1 - pow(1 + $monthlyInterestRate, -$numberOfPayments));
        for ($month = 1; $month <= $numberOfPayments; $month++) {
          $interestPaid = $remainingBalance * $monthlyInterestRate;
          $principalRepaid = $monthlyPayment - $interestPaid;
      
          $amortizationTable[] = [
            'No.' => $month,
            'Payment Date' => date('Y-m-d', strtotime($startDate . " +$month months")),
            'Initial Balance' => number_format($remainingBalance, 2), // Round to 2 decimals
            'Monthly Payment' => number_format($monthlyPayment, 2), // Round to 2 decimals
            'Interest Paid' => number_format($interestPaid, 2), // Round to 2 decimals
            'Principal Repaid' => number_format($principalRepaid, 2), // Round to 2 decimals
            'Remaining Balance' => number_format($remainingBalance - $principalRepaid, 2), // Round to 2 decimals
          ];
      
          $remainingBalance -= $principalRepaid;
        }
      
        return $amortizationTable;
    }
      
    public function calculateLoanSummary($amortizationTable) {
        $monthlyPayment = (float) str_replace(',', '', $amortizationTable[0]['Monthly Payment']);
        $totalInterestPaid = 0;
        $totalPrincipalRepaid = 0;
      
        foreach ($amortizationTable as $row) {
          $totalInterestPaid += (float) $row['Interest Paid']; // Convertir en nombre avant l'addition
          $totalPrincipalRepaid += (float) $row['Principal Repaid']; // Convertir en nombre avant l'addition
        }
      
        $totalAmountPaid = $totalInterestPaid + $totalPrincipalRepaid;
      
        return [
          'monthlyPayment' => number_format($monthlyPayment, 2), // Arrondir à 2 chiffres après la virgule
          'totalInterestPaid' => number_format($totalInterestPaid, 2), // Arrondir à 2 chiffres après la virgule
          'totalAmountPaid' => number_format($totalAmountPaid, 2), // Arrondir à 2 chiffres après la virgule
        ];
    }

    public function login($login, $password) {
      $query = $this->db->query("SELECT id FROM Client WHERE Login = '$login' AND mdp = '$password'");
      $user = $query->row_array(); // Récupère les données de l'utilisateur s'il existe
      
      if ($user) {
          // Connexion réussie, enregistrement de l'ID utilisateur dans la session
          $this->session->set_userdata('user_id', $user['id']);
          redirect('accueil'); // Redirection vers la page d'accueil
      }
  }

  public function inscription($nom, $login, $password) {
      $query = $this->db->query("INSERT INTO Client (Nom, Login, mdp) VALUES ('$nom', '$login', '$password')");
      if ($this->db->affected_rows() > 0) {
          // Inscription réussie, enregistrement de l'ID utilisateur dans la session
          $user_id = $this->db->insert_id(); // Récupère l'ID de l'utilisateur nouvellement inscrit
          $this->session->set_userdata('user_id', $user_id);
          redirect('accueil'); // Redirection vers la page d'accueil
      }
  }

  public function insertSimulation($nomSimulation, $idClient, $principal, $interestRate, $durationInMonths, $startDate) {

    $data = array(
        'nom_simulation' => $nomSimulation,
        'idClient' => $idClient,
        'montant_pret' => $principal,
        'teg' => $interestRate,
        'duree_amortissement' => $durationInMonths,
        'date_debut' => $startDate
    );
    $this->db->insert('Simulation', $data);
}

public function getSimulationsByClientId($idClient) {
    $query = $this->db->query("SELECT * FROM Simulation WHERE idClient = '$idClient'");
    $simulations = $query->result_array();

    foreach ($simulations as &$simulation) {
        $amortizationTable = $this->generateAmortizationTable($simulation['montant_pret'], $simulation['teg'], $simulation['duree_amortissement'], $simulation['date_debut']);
        $loanSummary = $this->calculateLoanSummary($amortizationTable);
        $simulation['loanSummary'] = $loanSummary;
    }

    return $simulations;
}

}
