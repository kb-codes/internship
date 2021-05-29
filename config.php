<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "admin"; /* Database name */
$table = "auth"; /* Table name */
$categoryTable="category";
$session_name = "uname"; /* Session name */

if (!defined('TBL_ADMIN')) define('TBL_ADMIN', 'auth');

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}