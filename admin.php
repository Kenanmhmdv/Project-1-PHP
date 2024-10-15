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

    <?php

  session_start();


    if (!isset($_COOKIE['user'])) {
        header(header: 'location: login.php');
    }




    $username = $_COOKIE['user'] ?? '';


    echo "<h1>Welcom $username</h1 > "

    ?>

    <form action="logout.php" method="POST" >
        <button>Logout</button>
    </form>

    <?php include './partialse/footer.php' ?>

</body>

</html>