<?php session_start();
    
    if (!isset($_SESSION['user_id'])) {
        header("location:../index.php");
    }

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylev1.1.3.css">
    <title>Document</title>
</head>
<body>

    <header>
        <nav>
            <ul>
                <div class="hamburger">
                <div class="list list-1"></div>
                <div class="list list-2"></div>
                <div class="list list-3"></div>
                </div>
                <div class="links">
                <a href="userpage.php" class="header_link"><li>Home Page</li></a>
                <a href="" class="header_link"><li>my Profile</li></a>
                <a href="../function/log_out.php" class="header_link"><li>Log Out</li></a>
                </div>
            </ul>
        </nav>
    </header>