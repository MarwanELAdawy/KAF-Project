<?php
$errors = array();
$db['db_host']='localhost';
$db['db_user']='marioeid';
$db['db_pass']='01006007990';
$db['db_name']='health_care';
foreach($db as $key => $value)
{
          define(strtoupper($key),$value);
}
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// check the connection
if (!$conn) {
  //  echo 'Connection  error ' . mysqli_connect_error();
}
