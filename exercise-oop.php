<?php

class Company {
    public $name;
    public $location;
    public $totEmployees;
    public $avg_salary;
    public $sumSalary; 
    public static $counter = 0; 
    public static $avg_annual_Cost = [];

    public function __construct($nomeAzienda, $localita, $numeroDipendenti, $salarioMedio){
        $this->name = $nomeAzienda;
        $this->location = $localita;
        $this->totEmployees = $numeroDipendenti;
        $this->avg_salary = $salarioMedio;
        self::$counter++;

    }

    public function introduceCompany(){
        if($this->totEmployees > 0){
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->totEmployees dipendenti. \n";
        }else{
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti. \n";
        }
    }

    public function sumSalary($months){
        $this->sumSalary = $this->totEmployees * ($this->avg_salary * $months);
    }

    public function stampSumSalary(){
        echo "L'azienda $this->name spende $this->sumSalary. \n";
    }

    public static function howManyCompanys(){
        echo "Sono state create " . self::$counter . " aziende. \n";
    }


}

$company1 = new Company ("Aulab", "Italia", 50, 1500);
$company2 = new Company ("Netflix", "Canada", 1000, 2000);
$company3 = new Company ("Apple", "New York", 6000, 6000);
$company4 = new Company ("Deliveroo", "Spagna", 0, 800);
$company5 = new Company ("Amazon", "USA", 50000, 2500);

$company1->introduceCompany();
$company2->introduceCompany();
$company3->introduceCompany();
$company4->introduceCompany();
$company5->introduceCompany();

$company1->sumSalary(6);
$company2->sumSalary(6);
$company3->sumSalary(6);
$company4->sumSalary(6);
$company5->sumSalary(6);

$company1->stampSumSalary();
$company2->stampSumSalary();
$company3->stampSumSalary();
$company4->stampSumSalary();
$company5->stampSumSalary();

Company::howManyCompanys();










?>
