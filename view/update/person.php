<?php

    include "../../controller/connection/connection.php"; // Using database connection file here

    //include options methods to form
    include "../../controller/insert/person-title.php"; //option from title

    include "../../controller/insert/person-race.php"; //option from race

    $id = $_GET['idPerson']; // get id through query string

    $query = mysqli_query($conn,"SELECT * FROM persons where persons . idPerson='$id'"); // select query

    $data = mysqli_fetch_array($query); // fetch data

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Person</title>
        <link rel="stylesheet" href="../css/form.css">
    </head>
    <body>
        <div id="content">
            <form action="../../controller/update/person.php" method="post">
                <fieldset>
                    <div id="content-items">
                        <div class="item">
                            <label for="">Id person: </label>
                            <input type="number" value="<?php echo $data['idPerson'] ?>" name="idPerson" placeholder="1" required="">
                        </div>
                        <div class="item">                                
                            <label for="">Name: </label>
                            <input type="text" value="<?php echo $data['nme'] ?>" name="nme" placeholder="icaro" required="">
                        </div>
                        <div class="item">
                            <label>Level: </label>
                            <input type="number" required="" placeholder="1" name="experienceLevel" value="<?php echo $data['experienceLevel'] ?>">
                        </div>
                        <div class="item">
                            <label>Race: </label>
                            <select name="race">
                                <?php echo $options2;?>
                            </select>
                        </div>
                        <div class="item">
                            <label>Title: </label>
                            <select name="title">
                                <?php echo $options;?>
                            </select>
                        </div>
                        <div class="item">
                            <label>Strength: </label>
                            <input type="number" required="" placeholder="100" name="str" value="<?php echo $data['str'] ?>">
                        </div>
                        <div class="item">
                            <label>Vitality: </label>
                            <input type="number" required="" placeholder="100" name="vit" value="<?php echo $data['vit'] ?>">
                        </div>
                        <div class="item">
                            <label>
                                <label>Dexterity: </label>
                                <input type="number" required="" placeholder="100" name="dex" value="<?php echo $data['dex'] ?>">
                            </label>
                        </div>
                        <div class="item">
                            <label>Spirit: </label>
                            <input type="number" required="" placeholder="100" name="spi" value="<?php echo $data['spi'] ?>">
                        </div>
                        <div class="item">
                            <label>Intelligence: </label>
                            <input type="number" required="" placeholder="100" name="int" value="<?php echo $data['int'] ?>">
                        </div>
                        <div class="item">
                            <label>Wisdom: </label>
                            <input type="number" required="" placeholder="100" name="wis" value="<?php echo $data['wis'] ?>">
                        </div>
                        <div class="item">
                            <label>Luck: </label>
                            <input type="number" required="" placeholder="100" name="luk" value="<?php echo $data['luk'] ?>">
                        </div>
                        <div class="item">
                            <label>Money: </label>
                            <input type="number" required="" placeholder="100.000.000" name="mny" value="<?php echo $data['mny'] ?>">
                        </div>
                        <div class="item">
                            <label>Bounty: </label>
                            <input type="number" required="" placeholder="500.000.000" name="bounty" value="<?php echo $data['bounty'] ?>">
                        </div>
                        <div class="submit">
                            <input type="submit" value="submit" name="submit">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>