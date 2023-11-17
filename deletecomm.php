<?php
include '../Controller/commandeC.php';
$clientC = new commandeC();
$clientC->deletecommande($_GET["numero"]);
header('Location:listcommande.php');
