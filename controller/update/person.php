<?php

    include "../connection/connection.php"; // Using database connection file here

    //include database connection
    include "../connection/connection.php";    

    // get id through query string
    $id = $_POST['idPerson'];
    
    $query = mysqli_query($conn,"SELECT * FROM races"); // select query

    $data = mysqli_fetch_array($query); // fetch data

    if(isset($_POST['submit'])){ // when click on Update button

        // Values to take
        $name = $_POST["nme"]; //take name
        $level = $_POST["experienceLevel"]; //take level
        $race = $_POST["race"]; //take race
        $title = $_POST["title"]; //take title

        $str = $_POST["str"]; //take strength
        $vit = $_POST["vit"]; //take vitality
        $dex = $_POST["dex"]; //take dexterity
        $spi = $_POST["spi"]; //take spirit
        $int = $_POST["int"]; //take intelligence
        $wis = $_POST["wis"]; //take wisdom
        $luk = $_POST["luk"]; //take luck

        $money = $_POST["mny"]; //take money
        $bounty = $_POST["bounty"]; //take bounty
        
        include "../validation/person-race.php"; // include race validation

        include "../validation/person-title.php"; // include title validation
        
        $query = mysqli_query($conn,"UPDATE persons SET nme='$name', experienceLevel='$level', idRace='$race', idtitle='$title', strength='$str', vitality='$vit', dexterity='$dex', spirit='$spi', intelligence='$int', wisdom='$wis', luck='$luk', mny='$money', bounty='$bounty' WHERE idPerson='$id'");
        
        if($query){
            mysqli_close($conn); // Close connection
            header("location:../../view/records/person.php"); // redirects to all records page
            exit;
        }else{
            echo "update Fail!";
        }    	
    }
?>