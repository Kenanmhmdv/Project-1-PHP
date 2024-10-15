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
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="Göndər">
    </form>

    <?php


session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];

        $password = $_POST["password"];


        $_SESSION["user"] = $username;



        if(isset($_SESSION["user"])){

            header("Location: admin.php");
        }
    }




        if (isset($_COOKIE["username"])) {
            if (($_COOKIE["username"] == $username) && ($_COOKIE["password"] == $password)) {
                $_SESSION["username"] = $username;
                header(header: "Location: admin.php");
            }
        } else (header(header: "Location: register.php"));
   


    ?>


    <?php include './partialse/footer.php' ?>

</body>

</html>