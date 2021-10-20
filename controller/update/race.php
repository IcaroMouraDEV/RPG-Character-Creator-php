<?php

include "../connection/connection.php"; // Using database connection file here

// get id through query string
$id = $_POST['idRace'];

$query = mysqli_query($conn,"SELECT * FROM races"); // select query

$data = mysqli_fetch_array($query); // fetch data

if(isset($_POST['submit'])){ // when click on Update button

    $race = $_POST['race'];
	
    $query = mysqli_query($conn,"UPDATE races SET race='$race' WHERE idRace='$id'");
	
    if($query){
        mysqli_close($conn); // Close connection
        header("location:../../view/records/race.php"); // redirects to all records page
        exit;
    }else{
        echo "update Fail!";
    }    	
}
?>
