<!DOCTYPE html>
<html>
<head>
  <title>Display Person records from Database</title>
  <link rel="stylesheet" href="../css/records.css">
</head>
<body>

<div id="table">
    <h2>Person Details</h2>

    <table>
        <thead>
            <td>Id</td>
            <td>Name</td>
            <td>Level</td>
            <td>Race</td>
            <td>Title</td>
            <td>Strength</td>
            <td>Vitality</td>
            <td>Dexterity</td>
            <td>Spirit</td>
            <td>Intelligence</td>
            <td>Wisdom</td>
            <td>Luck</td>
            <td>Money</td>
            <td>Bounty</td>
            <td>Edit</td>
            <td>Delete</td>
        </thead>

<?php

include "../../controller/connection/connection.php"; // Using database connection file here

$records = mysqli_query($conn, "SELECT * FROM persons ORDER BY `idPerson` ASC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>

        <tbody>
            <td><?php echo $data['idPerson']; ?></td>
            <td><?php echo $data['nme']; ?></td>
            <td><?php echo $data['experienceLevel']; ?></td>
            <td><?php echo $data['idRace']; ?></td>
            <td><?php echo $data['idTitle']; ?></td>
            <td><?php echo $data['strength']; ?></td>
            <td><?php echo $data['vitality']; ?></td>
            <td><?php echo $data['dexterity']; ?></td>
            <td><?php echo $data['spirit']; ?></td>
            <td><?php echo $data['intelligence']; ?></td>
            <td><?php echo $data['wisdom']; ?></td>
            <td><?php echo $data['luck']; ?></td>
            <td><?php echo $data['mny']; ?></td>
            <td><?php echo $data['bounty']; ?></td>
            <td><a href="../update/person.php?idPerson=<?php echo $data['idPerson']; ?>">Edit</a></td>
            <td><a href="../../controller/delete/person.php?idPerson=<?php echo $data['idPerson']; ?>">Delete</a></td>
        </tbody>
    
<?php
}
?>
    </table>
</div>	
</body>
</html>