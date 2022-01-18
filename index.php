<!-- /**
* 
*      Definire classe Persona:
*          - ATTRIBUTI (private):
*              - nome
*              - cognome
*              - dataNascita (stringa)
*          - METODI:
*              - costruttore che accetta nome e cognome
*              - setter/getter per ogni variabile
*              - printFullPerson: che stampa "nome cognome: dataNascita"
*              - toString: che ritorna "nome cognome: dataNascita"
* 
* 
*      Definire classe Employee che eredita da Persona:
*          - ATTRIBUTI (private):
*              - stipendio
*              - dataAssunzione
*          - METODI:
*              - costruttore che accetta nome, cognome e stipendio
*              - setter/getter per variabili 
*              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
*              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
* 
*/ -->


<?php
    class Person {
        private $name;
        private $surname;
        private $dateOfBirth;

        public function __construct($name, $surname) {
            $this -> setName($name);
            $this -> setSurname($surname); 
        }
    
        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            $this -> name = $name;
        }

        public function getSurname() {
            return $this -> surname;
        }
        
        public function setSurname($surname) {
            $this -> surname = $surname;
            
        }
        public function getDate() {
            return $this -> dateOfBirth;
        }

        public function setDate($dateOfBirth) {
            $this -> dateOfBirth = $dateOfBirth;
        }

        public function printFullPerson() {
            return $this -> getName() . " ". $this -> getSurname() . " : ". $this -> getDate();
        }

        public function __toString() {
            return $this -> printFullPerson();   
        }

        
    }

    class Employee extends Person {
        private $salary;
        private $assumptionDate;

        public function __construct($name, $surname, $salary) {
            parent::__construct($name, $surname); 
            $this -> setSalary($salary);
            // $this -> setAssumptionDate($assumptionDate);
        }

        public function getSalary(){
            return $this -> salary;
        }

        public function setSalary($salary){
            $this -> salary = $salary;
        }

        public function getAssumptionDate(){
            return $this -> assumptionDate;
        }

        public function setAssumptionDate($assumptionDate){
            $this -> assumptionDate = $assumptionDate;
        }

        public function printFullEmployer() {
            return parent::printFullPerson()."Stipendio ".$this -> getSalary(). " (" ."Data Assunzione :". $this -> getAssumptionDate().")";
        }

        public function __toString() {
            return  $this -> printFullEmployer();
        }
    }
     
    $p1 = new Person("Lucia", "Rossi");
    $p2 = new Person("Marco", "Bianchi");
    $p3 = new Person ("Maria", "Verdi");

    $p1 -> setDate("10/02/1983");
    $p2 -> setDate("23/07/1994");
    $p3 -> setDate("05/01/1992");

    $e1 = new Employee($p1 -> getName(), $p1 -> getSurname(), 1500);
    $e2 = new Employee($p2 -> getName(), $p2 -> getSurname(), 1200);
    $e3 = new Employee($p3 -> getName(), $p3 -> getSurname(), 1350);


    $e1 -> setAssumptionDate("01/05/2015");
    $e2 -> setAssumptionDate("01/07/2018");
    $e3 -> setAssumptionDate("01/10/2016");




    echo $p1. "<br>";
    echo $p2. "<br>";
    echo $p3. "<br>";
    
    echo "<br>-----------------------------<br><br>";
    
    echo $e1. "<br>";
    echo $e2. "<br>";
    echo $e3. "<br>";


?>