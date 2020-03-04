<?php
    class Persona{

        public $nombre = 'daniel';
       
        public function Hablar($mensaje){
         echo  "$mensaje";
        }

    }
    $persona = new Persona();
    $persona->Hablar("whats your name and last name");
   
?>
