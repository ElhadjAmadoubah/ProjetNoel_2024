<?php

class ClientModel{


    function getAllClient(){
        global $connexion;
        $sql ="SELECT * FROM clients";
        return $connexion->query($sql)->fetchAll();
    }
    
    function deleteClient($id){
        global $connexion;
        $sql ="DELETE FROM clients WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }
    
    function addClient($nom,$prenom,$email,$telephone){
        global $connexion;
        $sql ="INSERT INTO clients (nom,prenom,email,telephone) values (?,?,?,?)";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$nom,$prenom,$email,$telephone]);
    }
    
    function updateC( $id,$nom, $prenom, $email, $telephone) {
        global $connexion;
        $sql = "UPDATE clients SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?";
        
        try {
            $smtp = $connexion->prepare($sql);
            $smtp->execute([$nom, $prenom, $email, $telephone, $id]);
            
        } catch (PDOException $e) {
            
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
    }
    
    function getByIdClient($id){
        global $connexion;
        $sql ="SELECT * FROM clients where id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }
    
}




?>


