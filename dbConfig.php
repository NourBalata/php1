<?php 
// Include configuration file 
require_once 'config.php'; 
 
$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
//Check for connection error
if($db->connect_error){
  die("Error in DB connection: ".$db->connect_errno." : ".$db->connect_error);    
}
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}