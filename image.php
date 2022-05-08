<?php
    require('db_plus.php');

    $name = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $content = file_get_contents($_FILES['image']['tmp_name']);
    $size = $_FILES['image']['size'];

    $st = $db->prepare('insert into images(image_name, image_type, image_content, image_size, created_at) values (:image_name, :image_type, :image_content, :image_size, now()) ');
    $st->bind_param(':image_name', $name);
    $st->bind_param(':image_type', $type);
    $st->bind_param(':image_content', $content);
    $st->bind_param(':image_size', $size);
    $st->execute();
?>