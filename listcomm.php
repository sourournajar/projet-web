<?php
include "../controller/commandeC.php";

$c = new commandeC();
$tab = $c->listcommande();

?>

<center>
    <h1>List of players</h1>
    <h2>
        <a href="addcomm.php">Add player</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr>
        <th>Id comm</th>
        <th>data</th>
        <th>statut</th>
        <th>montant</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $command) {
    ?>




        <tr>
            <td><?= $command['id']; ?></td>
            <td><?= $command['nom']; ?></td>
            <td><?= $command['prenom']; ?></td>
            <td><?= $command['email']; ?></td>
            <td><?= $command['adresse']; ?></td>
            <td><?= $command['statut']; ?></td>
            <td><?= $command['date']; ?></td>
            <td align="center">
                <form method="POST" action="updatecomm.php">
                    <input type="submit" name="update" value="Update">
                    <input type="hidden" value=<?PHP echo $command['id']; ?> name="id">
                </form>
            </td>
            <td>
                <a href="deletecomm.php?id=<?php echo $command['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>