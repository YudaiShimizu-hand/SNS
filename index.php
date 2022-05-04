<?php
require('db_plus.php');
$forms = $db->query('select * from forms order by id desc');
if(!$forms){
    echo '取得できません';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧ページ</title>
</head>
<body>
    <?php while($form = $forms->fetch_assoc()):?>
        <p><a href="#"><?= $form['body']; ?></a></p>
    <?php endwhile; ?>
</body>
</html>