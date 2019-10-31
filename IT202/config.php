<?php

session_start();

$host = "sql2.njit.edu"; /* Host name */
$user = "sr844"; /* User */
$password = "hotshot1145"; /* Password */
$dbname = "sr844"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}