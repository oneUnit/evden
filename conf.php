<?php
// Старт сессии, файл должен быть сохранен без DOM информации
session_start();

include_once 'module.php';
// Параметры подключения к бд
$db_host = 'sql2.freemysqlhosting.net';
$db_login = 'sql285525';
$db_passwd = 'bR8*tZ2!';
$db_name = 'sql285525';

// подключаемся к бд
$db = new mysql(); // Создаем новый объект класса
$db -> connect($db_host, $db_login, $db_passwd, $db_name);
?>