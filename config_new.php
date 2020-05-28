<?php
//session_start();
$host = "localhost"; /* Host name */
$user = "id13629689_root"; /* User */
$password = "2Ol47ls=mMwkg|b8"; /* Password */
$dbname = "id13629689_db_login"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
