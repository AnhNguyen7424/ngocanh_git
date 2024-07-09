<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="gui" value="gui">Gửi</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];

        if ($password === '123456') {
            header('Location: hi.php');
            exit();
        } else {
            echo '<p style="color: red;">Mật khẩu sai!</p>';
        }
    }
    ?>
</body>
</html>
