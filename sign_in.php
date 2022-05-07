<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
    <form action="sign_in_do.php" method="POST">
        <h2>会員登録</h2>
        <p>会員ID:</p>
        <input type="text" name="user">
        <p>名前:</p>
        <input type="text" name="name">
        <p>パスワード:</p>
        <input type="password" name="password">
        <p>電話番号:</p>
        <input type="tel" name="tel">
        <p><input type="submit" value="登録"></p>
    </form>
</body>
</html>