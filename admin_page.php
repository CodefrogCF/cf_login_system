<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" href="./assets/favicon.ico">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="header">
        <a href=""><img src="./assets/images/logo-192x192.webp" class="logo"></a>
        <a href=""><h1>LoginForm</h1></a>
    </div>

    <div class="container">
        <div class="box">
            <h1 class="welcome-text">Welcome, <span><?= $_SESSION['name'] ?></span></h1>
            <p>This is an <span>admin</span> page</p>
            <button onclick="window.location.href='logout.php'">Logout</button>
        </div>
    </div>

</body>

</html>