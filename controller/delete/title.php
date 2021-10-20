<?php

include "../connection/connection.php"; // Using database connection file here

$id = $_GET['idtitle']; // get id through query string

$query = mysqli_query($conn,"DELETE FROM titles WHERE titles . idtitle = '$id'"); // delete query

if($query){
    mysqli_close($conn); // Close connection
    header("location:../../view/records/title.php"); // redirects to title records page
    exit;	
}else
{
    echo "Error deleting record"; // display error message if not delete
}
?>