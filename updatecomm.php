<?php

include '../Controller/commandeC.php';
include '../model/commande.php';
$error = "";

// create client
$command = null;
// create an instance of the controller
$commandeC = new commandeC();


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
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $command = new command(
            null,
            $_POST['id'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['adresse'],
            $_POST['statut'],
            $_POST['date'],

        );
        var_dump($command);
        
        $commandC->updatecomm($command, $_POST['id']);

        header('Location:listcomm.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listcomm.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idcomm'])) {
        $command = $commandeC->showcommand($_POST['idcomm']);
        
    ?>

        <form action="" method="POST">
            <table>
            <tr>
                    <td><label for="id">Idcomm :</label></td>
                    <td>
                        <input type="text" id="idJoueur" name="idcomm" value="<?php echo $_POST['idcomm'] ?>" readonly />
                        <span id="erreurcomm" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td>
                        <input type="text" id="nom" name="nom" value="<?php echo $command['nom'] ?>" />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="prenom">Prénom :</label></td>
                    <td>
                        <input type="text" id="prenom" name="prenom" value="<?php echo $command['prenom'] ?>" />
                        <span id="erreurPrenom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td>
                        <input type="text" id="email" name="email" value="<?php echo $command['email'] ?>" />
                        <span id="erreurEmail" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="telephone">adresse :</label></td>
                    <td>
                        <input type="text" id="adresse" name="adresse" value="<?php echo $command['adresse'] ?>" />
                        <span id="erreuradresse" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="statut">statut :</label></td>
                    <td>
                        <input type="text" id="statut" name="statut" value="<?php echo $command['statut'] ?>" />
                        <span id="erreurstatut" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="date">date :</label></td>
                    <td>
                        <input type="text" id="date" name="date" value="<?php echo $command['date'] ?>" />
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
    <?php
    }
    ?>
</body>

</html>