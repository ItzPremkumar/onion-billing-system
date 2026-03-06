<?php
$conn = pg_connect("host=localhost dbname=prem user=postgres password=root");

if(!$conn){
    die("Connection Failed");
}

$result = pg_query($conn, "SELECT current_database()");
$row = pg_fetch_row($result);

echo "Connected Database: " . $row[0];
exit;
?>