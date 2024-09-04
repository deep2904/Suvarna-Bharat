<?php 	 

//declare variables
$dbhost = 'localhost';  //Default hostname
$dbuser = 'root'; //Default username
$dbpass = ''; //Default password
$dbname = 'food'; //your database name

//Create connection using object oriented way
$con=mysqli_connect($dbhost,$dbuser);
$db=mysqli_select_db($con,$dbname);
//Check Connection
if (!$con) {
    echo "Connect failed: <br />";
}






// //declare variables
// $dbhost = "localhost";  //Default hostname
// $dbuser = "id20488717_canteen"; //Default username
// $dbpass = "Canteen@2023"; //Default password
// $dbname = "id20488717_food"; //your database name


// $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// $db=mysqli_select_db($con,$dbname);
 
// //Check Connection
// if (!$con) {
//     echo "Connect failed: <br />";
// }

?>


