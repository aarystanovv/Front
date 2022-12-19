<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Podkova:wght@800&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/babel-standalone/babel.min.js"></script>
        <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
        <script src="https://unpkg.com/vue-material@beta"></script>
    <title>Qazaq Republic</title>
</head>
<body>

<!-- Header -->

    <header>
        <div class="header_left">
            <button class="homebut">
                <a href="./main.php" title="Home" class="qrsvg"><img class="logo" src="./img/QR.jpg"></a>
            </button>
            <div class="qazrep">
                <p>QAZAQ REPUBLIC</p>
            </div>
        </div>
        <div class="header_right">
            <div class="signup">
                <?php if(!isset($_SESSION['user'])){
                    ?>
                    <a href="./forms/registration.php">Sign-Up</a>
                    <?php
                } else{
                    print_r($_SESSION['user']['full_name']);
                } ?>
            </div>
            <button class="basketbut">
                <a href="./basket.html" title="basket" class="basketsvg"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-cart3" viewBox="0 0 16 16">
                      <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                </a>
            </button>
            <button class="searchbut">
                <a href="./search.html" title="search" class="searchsvg"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </a>
            </button>
            <button class="hamburger" onclick="openSide()">
                <span></span>
                <span></span>
                <span></span>
            </button>
    
        </div>
    </header>



<!-- Sidebar -->

    <div class="sidebar" id="sidebar">
        <ul class="sidebar__menu">
            <li class="menu__item">
                <a href="#aboutus" class="menu__link">About us</a>
            </li>

            <li class="menu__item">
                <a href="#catalog" class="menu__link">Catalog</a>
            </li>

            <li class="menu__item">
                <a href="#lookbook" class="menu__link">LookBook</a>
            </li>

            <li class="menu__item">
                <a href="#contacts" class="menu__link">Contacts</a>
            </li>
        </ul>
    </div>

