<!DOCTYPE html>
<html>
<head>
  <title>Display Race records from Database</title>
  <link rel="stylesheet" href="../css/records.css">
</head>
<body>

<h2>Race Details</h2>

<table>
  <tr>
    <td>id</td>
    <td>Race</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "../../controller/connection/connection.php"; // Using database connection file here

$records = mysqli_query($conn, "SELECT * FROM races ORDER BY `idRace` ASC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['idRace']; ?></td>
    <td><?php echo $data['race']; ?></td>  
    <td><a href="../update/race.php?idRace=<?php echo $data['idRace']; ?>">Edit</a></td>
    <td><a href="../../controller/delete/race.php?idRace=<?php echo $data['idRace']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>