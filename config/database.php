<?php


//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

// define('DB_HOST', 'localhost');
// define('DB_USER', 'sally');
// define('DB_PASS', '123456');
// define('DB_NAME', 'php_dev');

// //create connection
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// //check connection
// if($conn->connect_error) {
//     die('Connection Failed '.$conn->connect_error);
// }

