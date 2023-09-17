<?php 

    class Personne{

            public $homme;
            public $femme;

            public function genre(){
                echo " quelle est votre genre";
            }
        }
            $afficherDetail = new Genre();

            $afficherDetail->genre = "homme";
            $afficherDetail->genre = "femme";
            $afficherDetail->genre();
   