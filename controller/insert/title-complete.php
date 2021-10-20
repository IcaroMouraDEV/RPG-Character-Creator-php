<?php
    
    //include database connection
    include "../connection/connection.php";

    $title = $_POST["title"];
    $sql = "INSERT INTO titles (title) 
            VALUES ('$title')";
    
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn); // Close connection
        header("location:../../view/records/title.php"); // redirects to race records page
        exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>