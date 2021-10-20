<?php

include "../connection/connection.php"; // Using database connection file here

// get id through query string
$id = $_POST['idtitle'];

$query = mysqli_query($conn,"SELECT * FROM titles"); // select query

$data = mysqli_fetch_array($query); // fetch data

if(isset($_POST['submit'])){ // when click on Update button

    $title = $_POST['title'];
	
    $query = mysqli_query($conn,"UPDATE titles SET title='$title' WHERE idTitle='$id'");
	
    if($query){
        mysqli_close($conn); // Close connection
        header("location:../../view/records/title.php"); // redirects to all records page
        exit;
    }else{
        echo "update Fail!";
    }    	
}
?>