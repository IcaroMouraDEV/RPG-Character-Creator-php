<!DOCTYPE html>
<html>
<head>
  <title>Display title records from Database</title>
  <link rel="stylesheet" href="../css/records.css">
</head>
<body>

<h2>Title Details</h2>

<table>
  <tr>
    <td>Id</td>
    <td>Title</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "../../controller/connection/connection.php"; // Using database connection file here

$records = mysqli_query($conn, "SELECT * FROM titles ORDER BY `idtitle` ASC"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['idtitle']; ?></td>
    <td><?php echo $data['title']; ?></td>  
    <td><a href="../update/title.php?idtitle=<?php echo $data['idtitle']; ?>">Edit</a></td>
    <td><a href="../../controller/delete/title.php?idtitle=<?php echo $data['idtitle']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>