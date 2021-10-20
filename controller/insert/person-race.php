<?php

// mysql select query
$quer = "SELECT * FROM `races`";

//mysql query
$result2 = mysqli_query($conn, $quer);

$options2 = "";

//create options from database
while($row2 = mysqli_fetch_array($result2))
{
    $options2 = $options2."<option>$row2[1]</option>";
}

?>