<?php

require_once('../app/db.php');

function getAllCours(){
    global $connexion;
    $sql ="SELECT * FROM cours";
    return pg_query($connexion,$sql);
}

function deleteCours($id){
    global $connexion;
    $sql ="DELETE FROM cours WHERE id =$id";
   return pg_query($connexion,$sql);
}

function addCours($nomCours,$codeCours,$nombreHeures){
    global $connexion;
    $sql ="INSERT INTO cours (nom_cours,code_cours,nombre_heures) values
     ('$nomCours','$codeCours','$nombreHeures')";
   return pg_query($connexion,$sql);
}

function updateC($id,$nomCours,$codeCours,$nombreHeures){
    global $connexion;
    $sql ="UPDATE cours SET nom_cours='$nomCours',code_cours='$codeCours',nombre_heures='$nombreHeures' where id=$id";
   return pg_query($connexion,$sql);
}

function getCoursById($id){
    global $connexion;
    $sql ="SELECT * FROM cours where id = $id";
    return pg_query($connexion,$sql);
}

?>