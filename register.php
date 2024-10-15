<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php include './partialse/header.php' ?>



    <form method="POST" action="login.php">
        <input type="email" name="email">

        <input type="text" name="username">

        <input type="password" name="password">
        <input type="submit" value="Göndər">
    </form>

    <?php
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = $POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        setcookie('email', $email, time() + 3600, '/');
        setcookie('username', $username, time() + 3600, '/');
        setcookie('password', $password, time() + 3600, '/');
    }


    ?>


    <?php include './partialse/footer.php' ?>

</body>

</html>