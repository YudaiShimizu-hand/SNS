<?php
    require('db_plus.php');
    $stmt = $db->prepare('delete from forms where id=?');
    if(!$stmt){
        echo "stmtのerror";
    }
    $id = filter_input(INPUT_GET, 'id');
    $stmt->bind_param('i', $id);
    $stmt->execute();

    header('Location: index.php');
?>