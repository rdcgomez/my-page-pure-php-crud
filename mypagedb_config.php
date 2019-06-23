<?php
//  MySQLi Procedural 
// $host = "localhost";
// $user = "root";
// $password = "";
// $datbase = "dbtuts";
// $con = mysqli_connect($host,$user,$password);
// mysqli_select_db($con,$datbase);

//  PDO (php data objects)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "dbtuts";

  try {
    $con = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch (PDOException $e) {
    //throw $e;
    echo "Connection failed: " . $e->getMessage();
  }

?>