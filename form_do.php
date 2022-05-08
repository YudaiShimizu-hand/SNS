<?php
require('db_plus.php');
$content = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS );
$stmt = $db->prepare('insert into forms(body) values(?)');
require('image.php');
if(!$stmt){
    echo "stmtのerrorです。";
}
$stmt->bind_param('s', $content);
$ret = $stmt->execute();
if($ret){
    echo '投稿に成功しました。';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿</title>
</head>
<body>
    <a href="index.php">戻る</a>
</body>
</html>