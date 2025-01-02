<?php

class Database{

  private $serveur="localhost";
  private $port = "5432";
  private  $user="postgres";
  private  $pwd="USA2K30";
  private  $dbname="projet_noel_db";


  function getConnexion(){
    try {
        $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname", $this->user, $this->pwd);
       // erreur de connexion a la db
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connection reussi ";
        return $connexion;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    
  }

}

?>