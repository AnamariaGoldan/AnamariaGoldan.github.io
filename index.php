<?php
echo "aasdf";
$host = 'sql7.freemysqlhosting.net';
$user = 'sql7343022';
$pass = 'NZKVkwW18G';
$db = 'sql7343022';
echo "aasdf";
$connection = mysqli_connect($host,$user,$pass,$db);
echo "aasdf";
$query = "select * from meniu_filtrare";
$result = mysqli_query($connection, $query);
while ($row = $result->fetch_assoc()){
    echo $row['nume_filtru'] . ' ' .  $row['subcategorii'] . 'sdfasdf';
}

?>
