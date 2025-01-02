<?php

class ClientController{

   function indexClient(){
      global $model;
      $clients = $model->getAllClient();
      require_once '../app/view/client/list.php';
   }

   function removeClient(){
    global $model;
    $id = $_GET['id'];
    $model->deleteClient($id);
    header('location:index.php?controller=client');
    }

    function pageAddClient(){
       require_once '../app/view/client/add.php';
   }

   function saveClient(){
      global $model;
      $nom =$_POST['nom'];
      $prenom =$_POST['prenom'];
      $email =$_POST['email'];
      $telephone =$_POST['telephone'];
      $model->addClient($nom,$prenom,$email,$telephone);
      header('location:index.php?controller=client');
    }

    function getClient(){
      global $model;
       $id = $_GET['id'];
       $client =  $model->getByIdClient($id); 
       require_once '../app/view/client/edit.php';
    }

    
    function updateClient() {
      global $model;
      $id = $_POST['id'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $telephone = $_POST['telephone'];
  
      //  longueur des données
      if (strlen($nom) > 15 || strlen($prenom) > 15 || strlen($email) > 50 || strlen($telephone) > 15) {
          // erreur
          echo "Une ou plusieurs valeurs dépassent la longueur maximale autorisée.";
          return;
      }
  
      $model->updateC($id, $nom, $prenom, $email, $telephone);
      header('location:index.php?controller=client');
      exit();
  }

}

?>
 

