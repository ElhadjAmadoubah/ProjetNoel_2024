<?php

    $controller = $_GET["controller"]?? 'etudiant';

    if($controller == 'etudiant'){
        require_once '../app/controller/etudiantController.php';
        //echo'controller=etudiant';
        if(isset($_GET['action']) && !empty($_GET['action'])){
            if($_GET['action']=='add'){
                pageAddEtudiant();
            }
            
            if($_GET['action']=='delete'){
                removeEtudiant();
            }
            if($_GET['action']=='save'){
                saveEtudiant();
            }
            if($_GET['action']=='edit'){
                getEtudiant();
            }
            if($_GET['action']=='update'){
                updateEtudiant();
            }
        }else{
            indexEtudiant();
        }
    }else{
        require_once '../app/controller/coursController.php';
        //echo'controller=cours';
        if(isset($_GET['action']) && !empty($_GET['action'])){
            if($_GET['action']=='add'){
                pageAddCours();
            }
            
            if($_GET['action']=='delete'){
                removeCours();
            }
            if($_GET['action']=='save'){
                saveCours();
            }
            if($_GET['action']=='edit'){
                getCours();
            }
            if($_GET['action']=='update'){
                updateCours();
            }
        }else{
            indexCours();
        }
        
    }
  
?>