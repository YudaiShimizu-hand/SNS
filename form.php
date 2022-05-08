<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST" action="form_do.php" enctype="multipart/form-data">
        <h1>投稿フォーム</h1>
        <input type="file" name="image" required>
        <input type="text" name="body" required>
        </br>
        <input type="submit" value="送信">
    </form>
</body>
</html>