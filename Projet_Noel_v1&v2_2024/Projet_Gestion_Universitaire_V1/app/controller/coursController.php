<?php
 require_once('../app/model/coursModel.php');

function indexCours(){
    $cours = getAllCours();
    require_once '../app/view/cours/list.php';
}

function removeCours(){
    $id = $_GET['id'];
    deleteCours($id);
    header('location:index.php?controller=cours');
}

function pageAddCours(){
    require_once '../app/view/cours/add.php';
}

function saveCours(){
    $nomCours =$_POST['nom_cours'];
    $codeCours =$_POST['code_cours'];
    $nombreHeures =$_POST['nombre_heures'];
    addCours($nomCours,$codeCours,$nombreHeures);
    header('location:index.php?controller=cours');
}

function getCours(){
    $id = $_GET['id'];
    $cour = pg_fetch_assoc(getCoursById($id)); 
    require_once '../app/view/cours/edit.php';
}

function updateCours(){
    $id = $_POST['id'];
    $nomCours = $_POST['nom_cours'];
    $codeCours= $_POST ['code_cours'];
    $nombreHeures=$_POST['nombre_heures'];
    updateC($id,$nomCours,$codeCours,$nombreHeures);
    header('location:index.php?controller=cours');
}

?>

