<?php
require('db_plus.php');
$id = filter_input(INPUT_GET, 'id');
$stmt = $db->prepare('select * from forms where id=?');
$stmt->bind_param("i", $id);
$stmt->execute();

$stmt->bind_result($id, $body);
$stmt->fetch();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集</title>
</head>
<body>
    <form method="POST" action="update_do.php">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <input type="text" name="body" value="<?= $body; ?>">
        </br>
        <input type="submit" value="送信">
    </form>
</body>
</html>