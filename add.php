<?php
require_once('configDB.php');

$task = $_POST['task'];

if($task === ''){
    echo 'Введите задание!';
    exit;
}

$sql = "INSERT INTO `tasks` (task) VALUES(?)";
$query = $pdo->prepare($sql);
$query->execute([$task]);

header('Location: /');