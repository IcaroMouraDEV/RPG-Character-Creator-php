<?php

include "../connection/connection.php"; // Using database connection file here

$id = $_GET['idRace']; // get id through query string

$query = mysqli_query($conn,"DELETE FROM races WHERE races . idRace = '$id'"); // delete query

if($query){
    mysqli_close($conn); // Close connection
    header("location:../../view/records/race.php"); // redirects to race records page
    exit;	
}else{
    echo "Error deleting record"; // display error message if not delete
}
?>