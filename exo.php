exo1
<?php

        class Personne
        {
            public $nom;
            public $age;

            public function __construct($name, $age)
            {
                $this->nom = $name;
                $this->age = $age;
            }

            public function getInfo()
            {
                return "je suis ".$this->nom." et j'ai ".$this->age." ans";
            }
        }

            $myPersonne = new Personne("kone", 19);
            
            echo $myPersonne->getInfo();


