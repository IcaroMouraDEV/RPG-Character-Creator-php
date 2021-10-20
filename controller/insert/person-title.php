<?php

// mysql select query
$query = "SELECT * FROM `titles`";

//mysql query
$result = mysqli_query($conn, $query);

$options = "";

//create options from database
while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[1]</option>";
}


?>