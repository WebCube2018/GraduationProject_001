<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/config.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/function.php";

$data["title"] = "Список пользователей";

try {
    $pdo = new PDO(HOST_NAME, USER_NAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data["users"] = allUsers();
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

loadTwig("users", $data);
