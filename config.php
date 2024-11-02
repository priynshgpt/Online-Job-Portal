<?php
/**
 */
$host = "localhost";
$user  = "root";
$password =  "";
$database = "jobportal";
$database2 = "location";
$db1 = new mysqli($host, $user, $password, $database);
/*if($db1->connect_errno > 0){
    die('Unable to connect to database' . $db1->connect_error);
}else{
    echo "Database jobportal is connected.";
}
*/
$db2 = new mysqli($host, $user, $password, $database2);
/*if($db2->connect_errno > 0){
    die('Unable to connect to database' . $db2->connect_error);
}else{
    echo "Database location is connected.";
}
*/
?>