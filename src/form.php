<?php

require_once "config.php";
require_once "function.php";

$data = connect();


//Если заказ добавлен отправим письмо
if ($data) {
    $res = sendOrder((int)$data["order"]);
    #---------------------------НАЧАЛО ОТЛАДКА---------------------------#
    echo "<pre>";
    print_r($res);
    echo "</pre>";
    #---------------------------КОНЕЦ ОТЛАДКА----------------------------#;
}
