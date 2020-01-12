<?php
require_once "../../src/config.php";
require_once "../../src/function.php";

$data["title"] = "Список заказов";

try {
    $pdo = new PDO(HOST_NAME, USER_NAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data["orders"] = allOrder();
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

loadTwig("orders", $data);
