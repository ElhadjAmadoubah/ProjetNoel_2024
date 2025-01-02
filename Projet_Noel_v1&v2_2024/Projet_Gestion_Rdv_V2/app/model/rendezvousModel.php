<?php

class RendezvousModel{

    /*function getAllRendezvous(){
        global $connexion;
        $sql ="SELECT * FROM rendezvous";
        return $connexion->query($sql)->fetchAll();
    }*/
    function getAllRendezvous() {
        global $connexion;
        $sql = "
            SELECT r.*, c.prenom 
            FROM rendezvous r 
            JOIN clients c ON r.client_id = c.id";
        return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function deleteRendezvous($id){
        global $connexion;
        $sql ="DELETE FROM rendezvous WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }
    function getClients() {
        global $connexion;
        $sql = "SELECT id, prenom FROM clients"; 
        $stmt = $connexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
    function addRendezvous($date,$heure,$description,$client_id){
        global $connexion;
        $sql ="INSERT INTO rendezvous (date,heure,description,client_id) values
        (?,?,?,?)";
        $smtp = $connexion->prepare($sql);
        $smtp ->execute([$date,$heure,$description,$client_id]);
    }
    function getByIdRendezvous($id){
        global $connexion;
        $sql ="SELECT * FROM rendezvous where id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }

    function updateR($id,$date,$heure,$description,$client_id){
        global $connexion;
        $sql ="UPDATE rendezvous SET date=?,heure=?,description=?,client_id=?
        where id=?";
        $smtp =$connexion->prepare($sql);
        $smtp ->execute([$date,$heure,$description,$client_id,$id]);
    }

} 

?>


