<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class amortissement_model extends CI_Model {

    public function generer_amortissement($principal, $interestRate, $durationInMonths, $startDate) {
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

}
