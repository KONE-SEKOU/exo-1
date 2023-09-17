<?php 
/* 
    class Personne{

            public $homme;
            public $femme;

            public function genre(){
                echo " quelle est votre genre";
            }
        } */
        //exo 2
          /*   $afficherDetail = new Genre();

            $afficherDetail->genre = "homme";
            $afficherDetail->genre = "femme";
            $afficherDetail->genre(); */


        //EXO3
        
        class Personne{
            public $nom;
            public $age;

            public function __construct($nom, $age ){
                $this->nom = $nom;
                $this->age = $age;
            }
        }
        
   