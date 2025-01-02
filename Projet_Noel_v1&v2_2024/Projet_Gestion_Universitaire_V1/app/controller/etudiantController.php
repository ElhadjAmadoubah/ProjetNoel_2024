<?php
    require_once('../app/model/etudiantModel.php');

    function indexEtudiant(){
       $etudiants = getAllEtudiants();
       require_once '../app/view/etudiant/list.php';
    }

    function removeEtudiant(){
        $id = $_GET['id'];
        deleteEtudiant($id);
        header('location:index.php?controller=etudiant');
    }

    function pageAddEtudiant(){
        require_once '../app/view/etudiant/add.php';
    }

    function saveEtudiant(){
        $nom =$_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $filiere = $_POST['filiere'];
        addEtudiant($nom,$prenom,$email,$filiere);
        header('location:index.php?controller=etudiant');
    }
    function getEtudiant(){
        $id = $_GET['id'];
        $etudiant = pg_fetch_assoc(getEtudiantById($id)); 
        require_once '../app/view/etudiant/edit.php';
    }
    function updateEtudiant(){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom= $_POST ['prenom'];
        $email=$_POST['email'];
        $filiere=$_POST['filiere'];
        updateE($id,$nom,$prenom,$email,$filiere);
        header('location:index.php?controller=etudiant');
    }


?>