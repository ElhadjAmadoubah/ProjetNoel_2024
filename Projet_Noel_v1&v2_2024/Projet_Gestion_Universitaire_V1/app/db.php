<?php


$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="USA2K30";
$dbname="projet_noel_db";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
  // echo "succes";
}




?>