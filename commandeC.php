<?php

require '../config.php';

class commandeC
{

    public function listcommande()
    {
        $sql = "SELECT * FROM command";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletecommande($numeroc)
    {
        $sql = "DELETE FROM command WHERE numero = :numero";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':numero', $numeroc);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addcommande($command)
    {
        $sql = "INSERT INTO command  
        VALUES (NULL,:id, :nom,:prenom, :email,:tel,:numero)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $command->getNom(),
                'prenom' => $command->getPrenom(),
                'email' => $command->getEmail(),
                'adresse' => $command->getadresse(),
                'statut' => $command->getstatut(),
                'dat' => $command->getdat(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showcommand($numero)
    {
        $sql = "SELECT * from command where numero = $numero";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $command = $query->fetch();
            return $command;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updatecommand($command, $numero)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE command SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    email = :email, 
                    adresse = :adresse,
                    statut = :statut,
                    dat = :dat
                WHERE numero= :numerocom'
            );
            
            $query->execute([
                'numerocom' => $numero,
                'nom' => $command->getNom(),
                'prenom' => $command->getPrenom(),
                'email' => $command->getEmail(),
                'adresse' => $command->getadresse(),
                'statut' => $command->getstatut(),
                'dat' => $command->getdat(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
