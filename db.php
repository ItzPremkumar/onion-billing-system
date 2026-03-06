<php
 $conn = pg_connect("
host=dpg-d6lguki4d50c73bakap0-a
dbname=oniondb
user=onionuser
password=dpg-d6lguki4d50c73bakap0-a
port=5432
");
if(!$conn)
{
 echo("Data base connection fail");
}

?>
