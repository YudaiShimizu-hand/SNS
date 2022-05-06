<?php
require('db_plus.php');
$counts = $db->query('select count(*) as cnt from forms');
$count = $counts->fetch_assoc();
$max_page = floor(($count['cnt']+1)/5+1);
$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_NUMBER_INT);
$start = ($page -1)*5;
$forms = $db->prepare('select * from forms order by id desc limit ?, 5');
if(!$forms){
    echo '取得できません';
}
$forms->bind_param('i', $start);
$forms->execute();

$forms->bind_result($id, $body);
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
    <?php while($forms->fetch()):?>
        <p><a href="show.php?id=<?= $id; ?>"><?= $body; ?></a></p>
    <?php endwhile; ?>
    <?php if ($page>1): ?>
    <p><a href="?page=<?= $page-1; ?>"><?= $page-1;?>ページ目へ</a></p>
    <?php endif; ?>
    <?php if($page<$max_page): ?>
    <p><a href="?page=<?= $page+1; ?>"><?= $page+1;?>ページ目へ</a></p>
    <?php endif; ?>
</body>
</html>