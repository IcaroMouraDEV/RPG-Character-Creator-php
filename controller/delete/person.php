<?php

include "../connection/connection.php"; // Using database connection file here

$id = $_GET['idPerson']; // get id through query string

$query = mysqli_query($conn,"DELETE FROM persons WHERE persons . idPerson = '$id'"); // delete query

if($query){
    mysqli_close($conn); // Close connection
    header("location:../../view/records/person.php"); // redirects to title records page
    exit;	
}else{
    echo "Error deleting record"; // display error message if not delete
}
?>