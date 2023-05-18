<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM | <?= $title; ?></title>

<!--========== Link Icons ==========-->
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

<!--========== Navigation Bar ==========-->
<header>
        <nav>
            <div class="logo-pict">
                <img src="../assets/img/logoputih.png" alt="">
            </div>
                        
            <div class="searchbox">
                <input type="search" placeholder="Cari">
                <button id="search"><i class="fa-solid fa-magnifying-glass" style="color: black;"></i></button>
            </div>

            <div class="nav-list"></div>
                <ul>
                    <li><a href="#home" class="nav-content">Home</a></li>
                    <li><a href="#berita-trending" class="nav-content">Trending</a></li>
                    <li><a href="#berita-video" class="nav-content">Video</a></li>
                    <li><a href="#tentang" class="nav-content">Tentang</a></li>
                    <li><a href=".././login_register/login.php" class="nav-btnlogin"><button class="btn-login">Login</button></a></li>
                </ul>
            </div>
            
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>  
    </header>