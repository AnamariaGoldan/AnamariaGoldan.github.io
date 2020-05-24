<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tw';
$connection = mysqli_connect($host,$user,$pass,$db);
$query = "select * from meniu_filtrare";
$result = mysqli_query($connection, $query);
while ($row = $result->fetch_assoc()){
    echo $row['nume_filtru'] . ' ' .  $row['subcategorii'];
}

?>
