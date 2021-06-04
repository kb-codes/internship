<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "admin"; /* Database name */
$categoryTable="category";
$session_name = "uname"; /* Session name */

if (!defined('TBL_ADMIN')) define('TBL_ADMIN', 'auth'); //login table
if (!defined('TBL_CATEGORY')) define('TBL_CATEGORY', 'category'); //category table
if (!defined('TBL_CA')) define('TBL_CA', 'current_affairs'); //current_affairs table
if (!defined('TBL_GK')) define('TBL_GK', 'general_knowledge'); //general_knowledge table
if (!defined('TBL_OTHER_CATEGORY')) define('TBL_OTHER_CATEGORY', 'other_category'); //other_category table
if (!defined('TBL_QUESTIONS')) define('TBL_QUESTIONS', 'questions'); //questions table

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}