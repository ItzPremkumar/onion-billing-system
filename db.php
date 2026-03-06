<?php
 $conn=pg_connect("host=localhost port=5434 dbname=prem user=postgres password=root");
if(!$conn)
{
 echo("Data base connection fail");
}
?>