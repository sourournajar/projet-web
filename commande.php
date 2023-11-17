<?php
class command
{
    private ?int $idcom = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private ?string $adresse = null;
    private ?string $statut = null;
    private ?string $date = null;

    public function __construct($id = null, $n, $p, $a, $r, $s,$d)
    {
        $this->idcom = $id;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $a;
        $this->adresse = $r;
        $this->statut = $s;
        $this->date = $d;
    }


    public function getidcomm()
    {
        return $this->idcom;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getstatut()
    {
        return $this->statut;
    }
    public function setT($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    public function getdate()
    {
        return $this->date;
    }

    public function setdate($date)
    {
        $this->date = $date;

        return $this;
    }
}
class panier
{
    private ?int $idp = null;
    private ?string $qont = null;
    private ?string $prix = null;


    public function __construct($idp = null, $q, $p)
    {
        $this->idp = $idp;
        $this->qont = $q;
        $this->prix = $p;
    }


    public function getidp()
    {
        return $this->idp;
    }


    public function getqont()
    {
        return $this->qont;
    }


    public function setNom($qont)
    {
        $this->qont = $qont;

        return $this;
    }


    public function getprix()
    {
        return $this->prix;
    }


    public function setPrenom($prix)
    {
        $this->prix = $prix;

        return $this;
    }

}