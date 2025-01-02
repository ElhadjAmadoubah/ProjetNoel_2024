<?php 

    require_once '../app/db.php';
    require_once '../app/model/clientModel.php';
    require_once '../app/model/rendezvousModel.php';
    require_once '../app/controller/clientController.php';
    require_once '../app/controller/rendezvousController.php';
    $database = new Database();
    $connexion = $database->getConnexion();
    $model = new ClientModel();
    $modelP = new rendezvousModel();
    
    $controller = $_GET['controller'] ?? 'rendezvous'; 

        if ($controller === 'rendezvous') {
            $ctl = new rendezvousController($modelP, $model); 
        } else {
            $ctl = new ClientController($model); 
        }
          //  $ctl = new clientController();
          // $ctl = new rendezvousController();
    
    if($controller == 'rendezvous'){
        require_once '../app/controller/rendezvousController.php';
        //echo'rendezvous';

        if(isset($_GET['action']) && !empty($_GET['action'])){
            if($_GET['action']=='add'){
                $ctl->pageAddRendezvous();
            }
            
            if($_GET['action']=='delete'){
                $ctl->removeRendezvous();
            }
            if($_GET['action']=='save'){
                $ctl->saveRendezvous();
            }
            if($_GET['action']=='edit'){
                    $ctl->getRendezvous();
            }
            if($_GET['action']=='update'){
                    $ctl->updateRendezvous();
                    
            }
        }else{
            $ctl->indexRendezvous();
        }
        
    }else{
        require_once '../app/controller/clientController.php';
        //echo'client';
        if(isset($_GET['action']) && !empty($_GET['action'])){
            if($_GET['action']=='add'){
                $ctl->pageAddClient();
            }
            
            if($_GET['action']=='delete'){
                $ctl->removeClient();
            }
            if($_GET['action']=='save'){
                $ctl->saveClient();
            }
            if($_GET['action']=='edit'){
                    $ctl->getClient();
            }
            if($_GET['action']=='update'){
                    $ctl->updateClient();
            }
        }else{
            $ctl->indexClient();
        } 
    }
?>