<?php 
 
function startSqlConection() {
    $localhost 	= "localhost:3307"; 
    $username 	= "root"; 
    $password 	= ""; 
    $dbname 	= "shopusersV3"; 

    $con = new mysqli($localhost, $username, $password, $dbname); 

    if($con->connect_error) {
        die("connection failed : " . $con->connect_error);
    }

    return $con;
}
 
