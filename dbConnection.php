<?php
$servername = "V\SQLEXPRESS";
$database = "HR-01";
$username = "sa";
$password = "root";

try {
    $conn = new PDO(
        "sqlsrv:Server={$servername};Database={$database};",
        $username,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
