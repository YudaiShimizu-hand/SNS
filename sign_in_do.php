<?php
if(isset($_POST['user'])){
    $db = new mysqli('localhost:8889', 'root', 'root', 'SNS');
    $stmt = $db->prepare('insert into users(id, name, password, tel) values(?,?,?,?)');
    if(!$stmt){
        header('Location: index.php');
    }
    $user = filter_input(INPUT_POST, 'user');
    $name = filter_input(INPUT_POST, 'name');
    $password = filter_input(INPUT_POST, 'password');
    $tel = filter_input(INPUT_POST, 'tel');
    $stmt->bind_param('ssss', $user, $name, $password, $tel);

    $stmt->execute();
    if($stmt){
        header('Location: index.php');
    }
}