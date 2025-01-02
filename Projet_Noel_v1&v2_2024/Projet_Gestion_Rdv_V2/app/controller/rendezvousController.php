<?php
    class rendezvousController{

        function indexRendezvous(){
            global $modelP;
            $rendezvous = $modelP->getAllRendezvous();
            require_once '../app/view/rendezvous/list.php';
        }

        function removeRendezvous(){
            global $modelP;
            $id = $_GET['id'];
            $modelP->deleteRendezvous($id);
            header('location:index.php?controller=rendezvous');
        }

        function pageAddRendezvous(){
            global $modelP;
            $clients = $modelP->getClients();
            require_once '../app/view/rendezvous/add.php';
        }

        function saveRendezvous() {
            global $modelP;
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $description = $_POST['description'];
            $client_id = $_POST['client_id'];
            
            //  données date valide
            if (!empty($date) && !empty($heure) && !empty($description) && !empty($client_id)) {
                $modelP->addRendezvous($date, $heure, $description, $client_id);
                header('Location: index.php?controller=rendezvous');
            } else {
                echo'erreur de format date  ';
            }
        }
        function getRendezvous(){
            global $modelP;
            $id = $_GET['id'];
            $rendezvou =  $modelP->getByIdRendezvous($id); 
            $clients = $modelP->getClients();
            require_once '../app/view/rendezvous/edit.php';
            
        }
        function updateRendezvous(){
            global $modelP;
            global $model;
            $id =$_POST['id'];
            $date =$_POST['date'];
            $heure = $_POST['heure'];
            $description= $_POST['description'];
            $client_id = $_POST['client_id'];

                if ($date && $heure && $description && $client_id) {
                    $modelP->updateR($id, $date, $heure, $description, $client_id);
                    header('Location: index.php?controller=rendezvous');
                } else {
                   
                    echo "Une ou plusieurs valeurs sont invalides.";
                }

           /* $modelP->updateR($id,$date,$heure,$description,$client_id);
            header('location:index.php?controller=rendezvous');*/
        }
    }
    


?>