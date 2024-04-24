<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pret_model extends CI_Model {

    public function calculer_pret($amortizationTable) {
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

    public function ajouter($nomSimulation, $idClient, $principal, $interestRate, $durationInMonths, $startDate) {

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

    public function trouver_par_utilisateur($id_utilisateur)
    {
        $query = $this->db->query("SELECT * FROM utilisateur WHERE id = " . (int)$id_utilisateur);
        $simulations = $query->result_array();

        foreach ($simulations as &$simulation) {
            $amortizationTable = $this->generateAmortizationTable($simulation['montant_pret'], $simulation['teg'], $simulation['duree_amortissement'], $simulation['date_debut']);
            $loanSummary = $this->calculateLoanSummary($amortizationTable);
            $simulation['loanSummary'] = $loanSummary;
        }

        return $simulations;
    }

}
