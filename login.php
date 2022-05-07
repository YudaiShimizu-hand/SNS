<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
</head>
<body>
    <form action="login_do.php" method="POST">
        <p>会員ID:</p>
        <input type="text" name="user" required>
        <p>パスワードを入力:</p>
        <input type="password" name="password" required>
        <p><input type="submit" value="ログイン"></p>
    </form>
</body>
</html>