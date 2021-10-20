<?php

    include "../../controller/connection/connection.php"; // Using database connection file here

    $id = $_GET['idRace']; // get id through query string

    $query = mysqli_query($conn,"select * from races where races . idRace='$id'"); // select query

    $data = mysqli_fetch_array($query); // fetch data

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Race</title>
        <link rel="stylesheet" href="../css/form.css">
    </head>
    <body>
        <div id="content">
                <form action="../../controller/update/race.php" method="post">
                <fieldset>
                    <div id="content-items">
                        <div class="item">
                            <label for="">Id Race: </label>
                            <input type="number" value="<?php echo $data['idRace'] ?>" name="idRace" placeholder="1" required="">
                        </div>
                        <div class="item">                                
                            <label for="">race: </label>
                            <input type="text" value="<?php echo $data['race'] ?>" name="race" placeholder="Humano" required="">
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