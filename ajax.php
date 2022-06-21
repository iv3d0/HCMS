<?php
include_once 'dbConnection.php';
if (isset($_GET["login"])) :
    $username = isset($_GET['username']) ? $_GET['username'] : '';
    $password = isset($_GET['password']) ? $_GET['password'] : '';

    // $sql->nextRowset();
    try {
        $sql = $conn->prepare("{CALL dbo.SPrCheckUserLogin(?,?)}");
        $success = $sql->execute(array($username, $password));
        // $sql->nextRowset();
        $x = $sql->fetch(PDO::FETCH_NUM);
        echo json_encode($x);
    } catch (PDOException $e) {
        echo json_encode([
            'code' => -1,
            'message' => $e->getMessage()
        ]);
    }
endif;
