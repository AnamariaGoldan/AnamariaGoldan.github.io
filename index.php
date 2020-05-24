<?php

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'TW';
$connection = mysqli_connect($host,$user,$pass,$db);
$query = "select * from meniu_filtrare";
$result = mysqli_query($this->conn, $query);
$row = $result->fetch_assoc();
while ($row = $result->fetch_assoc()){
    echo $row['nume_filtru'] . ' ' .  $row['subcategorii'];
}

?>
