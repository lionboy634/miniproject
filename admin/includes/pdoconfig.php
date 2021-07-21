<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "1.2.3.4.5.asiedu";
$DB_name = "hostel";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>