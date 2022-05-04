<?php
require('db_plus.php');
$id = filter_input(INPUT_GET, 'id');
$stmt = $db->prepare('select * from forms where id=?');
$stmt->bind_param('i', $id);
$stmt->execute();
$stmt->bind_result($id, $body);
$stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細ページ</title>
</head>
<body>
    <p>投稿内容:<?= $body; ?></p>
    <a href="edit.php?id=<?= $id; ?>">編集</a>
    <a href="delete.php?id=<?= $id; ?>">削除</a>
</body>
</html>