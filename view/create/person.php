<?php

    //include database connection
    include "../../controller/connection/connection.php";

    //include options methods to form
    include "../../controller/insert/person-title.php"; //option from title

    include "../../controller/insert/person-race.php"; //option from race

?>

<!DOCTYPE html>

<html>

    <head>

        <title> RPR CHARACTER CREATOR </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/form.css">

    </head>

    <body>
        <!-- Form to take data from database -->
        <form action="../../controller/insert/person-complete.php" method="post">
            <fieldset>
                <div id="content-items">
                    <h3>Status</h3>
                    <div class="item">
                        <label>Name: </label>
                        <input type="text" required="" placeholder="Ícaro" name="nme">
                    </div>
                    <div class="item">
                        <label>Level: </label>
                        <input type="number" required="" placeholder="777" name="lvl">
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
                        <input type="number" required="" placeholder="100" name="str">
                    </div>
                    <div class="item">
                        <label>Vitality: </label>
                        <input type="number" required="" placeholder="100" name="vit">
                    </div>
                    <div class="item">
                        <label>
                            <label>Dexterity: </label>
                            <input type="number" required="" placeholder="100" name="dex">
                        </label>
                    </div>
                    <div class="item">
                        <label>Spirit: </label>
                        <input type="number" required="" placeholder="100" name="spi">
                    </div>
                    <div class="item">
                        <label>Intelligence: </label>
                        <input type="number" required="" placeholder="100" name="int">
                    </div>
                    <div class="item">
                        <label>Wisdom: </label>
                        <input type="number" required="" placeholder="100" name="wis">
                    </div>
                    <div class="item">
                        <label>Luck: </label>
                        <input type="number" required="" placeholder="100" name="luk">
                    </div>
                    <div class="item">
                        <label>Money: </label>
                        <input type="number" required="" placeholder="100.000.000" name="money">
                    </div>
                    <div class="item">
                        <label>Bounty: </label>
                        <input type="number" required="" placeholder="500.000.000" name="bounty">
                    </div>
                    <div class="submit">
                        <input type="submit">
                    </div>
                </div>
            </fieldset>
        </form>
        <!-- End Form to take data from database -->
    </body>

</html>
