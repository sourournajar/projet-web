<?php
class Commande
{
    private ?int $id = null;
    private ?string $adresse_livraison = null;
    private ?string $date_commande = null;
    private ?string $client_nom = null;
    private $id_panier = null;

    public function __construct( $adresse, $date, $client_nom,$id_panier)
    {
        $this->adresse_livraison = $adresse;
        $this->date_commande = $date;
        $this->client_nom = $client_nom;
        $this->id_panier = $id_panier;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id_c)
    {
        $this->id = $id_c;
        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse_livraison;
    }

    public function setAdresse($adresse)
    {
        $this->adresse_livraison = $adresse;
        return $this;
    }

    public function getDate_commande()
    {
        return $this->date_commande;
    }

    public function setDate_commande($date)
    {
        $this->date_commande = $date;
        return $this;
    }

    public function getClient_nom()
    {
        return $this->client_nom;
    }

    public function setClient_nom($client_nom)
    {
        $this->client_nom = $client_nom;
        return $this;
    }

    public function getId_panier()
    {
        return $this->id_panier;
    }

    public function setId_panier($id_panier)
    {
        $this->id_panier = $id_panier;
        return $this;
    }
}