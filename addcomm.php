<?php

include '../Controller/commandeCphp';
include '../model/commande.php';

$error = "";

// create client
$joueur = null;

// create an instance of the controller
$joueurC = new commandeC();
if (
    isset($_POST["id"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["statut"]) &&
    isset($_POST["date"])
) {
    if (
        !empty($_POST['id']) &&
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST['adresse']) &&
        !empty($_POST['statut']) &&
        !empty($_POST["date"])
    ) {
        $joueur = new command(
            null,
            $_POST['id'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['adresse'],
            $_POST['statut'],
            $_POST['date'],
        );
        $joueurC->addcommande($command);
        header('Location:listcomm.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commande </title>
</head>

<body>
    <a href="listcommand.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" />
                    <span id="erreurNom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom :</label></td>
                <td>
                    <input type="text" id="prenom" name="prenom" />
                    <span id="erreurPrenom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td>
                    <input type="text" id="email" name="email" />
                    <span id="erreurEmail" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="adresse">adresse :</label></td>
                <td>
                    <input type="text" id="adresse" name="adresse" />
                    <span id="erreuradresse" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="statut">statut :</label></td>
                <td>
                    <input type="text" id="statut" name="statut" />
                    <span id="erreurstatut" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="date">date :</label></td>
                <td>
                    <input type="text" id="date" name="date" />
                    <span id="erreurdate" style="color: red"></span>
                </td>
            </tr>

            <td>
                <input type="submit" value="Save">
            </td>
            <td>
                <input type="reset" value="Reset">
            </td>
        </table>

    </form>
</body>

</html>