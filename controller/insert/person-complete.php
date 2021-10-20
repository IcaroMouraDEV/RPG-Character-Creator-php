<?php

    //include database connection
    include "../connection/connection.php";
    
    // Values to take
    $name = $_POST["nme"]; //take name
    $level = $_POST["lvl"]; //take level
    $race = $_POST["race"]; //take race
    $title = $_POST["title"]; //take title

    $str = $_POST["str"]; //take strength
    $vit = $_POST["vit"]; //take vitality
    $dex = $_POST["dex"]; //take dexterity
    $spi = $_POST["spi"]; //take spirit
    $int = $_POST["int"]; //take intelligence
    $wis = $_POST["wis"]; //take wisdom
    $luk = $_POST["luk"]; //take luck

    $money = $_POST["money"]; //take money
    $bounty = $_POST["bounty"]; //take bounty
    
    include "../validation/person-race.php"; // include race validation

    include "../validation/person-title.php"; // include title validation

    //Insert in database
    $sql = "INSERT INTO persons (nme, experienceLevel, strength, vitality, dexterity, intelligence, wisdom, luck, mny, bounty, idRace, idTitle, spirit) 
            VALUES ('$name', '$level', '$str', '$vit', '$dex', '$int', '$wis', '$luk', '$money', '$bounty', '$race', '$title','$spi')"; // Inserir no BD
    
    if (mysqli_query($conn, $sql)) { //registration validation
        mysqli_close($conn); // Close connection
        header("location:../../view/records/person.php"); // redirects to race records page
        exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>