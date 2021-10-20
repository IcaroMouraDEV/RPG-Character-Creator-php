<?php

    //include database connection
    include "../connection/connection.php";
    
    $race = $_POST["race"];
    $query = "INSERT INTO races (race) 
            VALUES ('$race')";
    
    if (mysqli_query($conn, $query)) {
        mysqli_close($conn); // Close connection
        header("location:../../view/records/race.php"); // redirects to race records page
        exit;
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
?>
