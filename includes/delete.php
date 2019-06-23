<?php
require 'mypagedb_config.php';

 // delete condition
  if(isset($_GET['delete_id']) ) {
    $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
    $con->exec($sql_query);
    header("Location: $_SERVER[PHP_SELF]");
  }
