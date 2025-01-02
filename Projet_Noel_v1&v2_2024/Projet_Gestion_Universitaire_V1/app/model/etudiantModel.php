<?php
require_once('../app/db.php');

function getAllEtudiants(){
    global $connexion;
    $sql ="SELECT * FROM etudiants ";
    return pg_query($connexion,$sql);
}

function deleteEtudiant($id){
    global $connexion;
    $sql ="DELETE FROM etudiants WHERE id =$id";
   return pg_query($connexion,$sql);
}

function addEtudiant($nom,$prenom,$email,$filiere){
    global $connexion;
    $sql ="INSERT INTO etudiants (nom,prenom,email,filiere) values
     ('$nom','$prenom','$email','$filiere')";
   return pg_query($connexion,$sql);
}

function updateE($id,$nom,$prenom,$email,$filiere){
    global $connexion;
    $sql ="UPDATE etudiants SET nom='$nom',prenom='$prenom',email='$email',filiere='$filiere'
    where id=$id";
   return pg_query($connexion,$sql);
}
function getEtudiantById($id){
    global $connexion;
    $sql ="SELECT * FROM etudiants where id = $id";
    return pg_query($connexion,$sql);
}
?>


