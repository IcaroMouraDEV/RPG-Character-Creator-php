<?php

    include "../../controller/connection/connection.php"; // Using database connection file here

    $id = $_GET['idtitle']; // get id through query string

    $query = mysqli_query($conn,"SELECT * FROM titles where titles . idtitle='$id'"); // select query

    $data = mysqli_fetch_array($query); // fetch data

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Title</title>
        <link rel="stylesheet" href="../css/form.css">
    </head>
    <body>
        <div id="content">
                <form action="../../controller/update/title.php" method="post">
                <fieldset>
                    <div id="content-items">
                        <div class="item">
                            <label for="">Id title: </label>
                            <input type="number" value="<?php echo $data['idtitle'] ?>" name="idtitle" placeholder="1" required="">
                        </div>
                        <div class="item">                                
                            <label for="">Title: </label>
                            <input type="text" value="<?php echo $data['title'] ?>" name="title" placeholder="noob" required="">
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