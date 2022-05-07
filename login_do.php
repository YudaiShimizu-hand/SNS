<?php
    if(isset($_POST['user'])){
        $db = new mysqli('localhost:8889', 'root', 'root', 'SNS');
        $stmt = $db->prepare('select * from users where id=?');
        $stmt->bind_param('s', $_POST['user']);
        $stmt->execute();
        if($rows = $stmt->fetch()){
            if($rows['password'] == $_POST['password']){
                echo 'ログインに成功しました。';
            }else{
                echo 'ログインに失敗しました。';
            }
        }else{
            echo 'ログインに失敗しました。';
        }
    }