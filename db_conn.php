<?php
// database connection
$sname = "mysql_db";
$uname = "root";
$password = "root";
$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection failed";
}
