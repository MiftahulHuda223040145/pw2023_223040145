<?php

session_start();

require 'php/functions.php';
$dbusers = query("SELECT * FROM users")[0];
$dblatest = query("SELECT * FROM newslatest");
$dbtrending = query("SELECT * FROM newstrending NATURAL JOIN category");
$dbrecomend = query("SELECT * FROM newsrecomendation NATURAL JOIN category");
$dbnewsvideo = query("SELECT * FROM newsvideo NATURAL JOIN category LIMIT 0,1");
$dbnewsvideo2 = query("SELECT * FROM newsvideo NATURAL JOIN category LIMIT 1,4");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM</title>

    <!--========== Link CSS ==========-->
    <link rel="stylesheet" href="css/style.css">

    <!--========== Link Icons ==========-->
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

    <!--========== Navigation Bar ==========-->
    <header>
        <nav>
            <div class="logo-pict">
                <img src="assets/img/logoputih.png" alt="">
            </div>
            <div class="searchbox">
                <form action="" method="post">
                    <input type="search" id="keyword" name="keyword" autofocus placeholder="Sorry Not Working Yet"
                        autocomplete="off" disabled>
                    <button id="search" name="search" id="search"><i class="fa-solid fa-magnifying-glass"
                            style="color: black;"></i></button>
                </form>
            </div>

            <div class="nav-list"></div>
            <ul>
                <li><a href="#berita-trending" class="nav-content">Trending</a></li>
                <li><a href="#recomendation" class="nav-content">Rekomendasi</a></li>
                <li><a href="#berita-video" class="nav-content">Video</a></li>
                <li><a href="#random" class="nav-content">For You</a></li>
                <button>
                    <?php if (isset($_SESSION['login'])): ?>
                        <a href="php/user/account-information-users.php?id=<?= $_SESSION['id'] ?>" class="btnaccif">
                            <img src="assets/img/<?= $_SESSION['gambar']; ?>" alt=""> <?= $_SESSION['username']; ?></a>
                    <?php else: ?>
                        <a href="php/login.php">
                            <button class="btn-login">
                                <p>Login</p>
                            </button>
                            <a>
                            <?php endif; ?>
                </button></li>
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

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--========== Home Page ==========-->
    <!-- Swiper -->
    <section class="home-page" id="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="php/news_content.php">
                        <h1>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <img src="assets/img/pict1.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="php/news_content.php">
                        <h1>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <img src="assets/img/pict2.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="php/news_content.php">
                        <h1>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <img src="assets/img/pict3.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!--========== End Home Page ==========-->

    <!--========== Featured News ==========-->
    <section class="featured-news">
        <a href="php/news_content.php">
            <div class="featured-content">
                <h2>Lorem Ipsum</h2>
                <img src="assets/img/pict4.jpg" alt="">
            </div>
        </a>
    </section>
    <!--========== End Featured News ==========-->

    <!--========== Trending Section ==========-->
    <section class="content-trend" id="berita-trending">
        <div class="content-trend-wrap">
            <h2>Berita Trending</h2>
            <div class="artikel-wrap">
                <?php if ($dbtrending): ?>
                    <?php foreach ($dbtrending as $trend): ?>
                        <a href="php/news_content.php" class="link-artikel1">
                            <div class="artikel-1">
                                <div class="card">
                                    <div class="thumb">
                                        <img src="assets/img/banner.png" alt="">
                                    </div>
                                    <article>
                                        <p>
                                            <?= $trend['jenis']; ?>
                                        </p>
                                        <h3>
                                            <?= $trend['judul']; ?>
                                        </h3>
                                        <span>
                                            <p>
                                                <?= $trend['deskripsi']; ?>
                                            </p>
                                        </span>
                                    </article>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </a>
                <div>
    </section>
    <!--========== End Trending Section ==========-->

    <!--========== Main Content ==========-->
    <main class="main-content" id="recomendation">
        <section class="main-content-left">
            <h2>Rekomendasi Untuk Anda</h2>
            <div class="content-left">
                <?php if ($dbrecomend): ?>
                    <?php foreach ($dbrecomend as $rec): ?>
                        <a href="php/news_content.php">
                            <article>
                                <img src="assets/img/banner.png">
                                <p>
                                    <?= $rec['jenis']; ?>
                                </p>
                                <div>
                                    <h3>
                                        <?= $rec['judul']; ?>
                                    </h3>
                                    <p>
                                        <?= $rec['deskripsi']; ?>
                                    </p>
                                </div>
                            </article>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>



        <section class="main-content-right">
            <h2>Terbaru</h2>
            <div class="content-right">
                <?php if ($dblatest): ?>
                    <?php foreach ($dblatest as $latest): ?>
                        <a href="php/news_content.php">
                            <article>
                                <img src="assets/img/banner2.png">
                                <div>
                                    <h3>
                                        <?= $latest['judul']; ?>
                                    </h3>
                                    <p>
                                        <?= $rec['jenis']; ?>
                                    </p>
                                    <p>
                                        <?= $latest['waktu']; ?>
                                    </p>
                                </div>
                            </article>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <!--========== End Main Content ==========-->

    <!--========== News Video Sectiom ==========-->
    <section class="banner-video" id="berita-video">
        <h2>Tonton Juga</h2>
        <?php if ($dbnewsvideo): ?>
            <?php foreach ($dbnewsvideo as $video1): ?>
                <div class="video-top">
                    <a href="php/news_video.php">
                        <video class="video" autoplay loop muted>
                            <source src="assets/video/banner_video.mp4">
                        </video>
                        <p>
                            <?= $video1['jenis']; ?>
                        </p>
                        <h3>
                            <?= $video1['judul']; ?>
                        </h3>
                    </a>
                </div>
            <?php endforeach; ?>

            <div class="cont">
                <?php foreach ($dbnewsvideo2 as $video2): ?>
                    <div class="video-container">
                        <div class="video-wrap">
                            <a href="php/news_video.php">
                                <video class="video1" autoplay loop muted>
                                    <source src="assets/video/banner_video.mp4">
                                </video>
                                <p>
                                    <?= $video1['jenis']; ?>
                                </p>
                                <h3>
                                    <?= $video2['judul'] ?>
                                </h3>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="clearfix"></div>
    </section>
    <!--========== End News Video Sectiom ==========-->

    <!--========== Random News Section ==========-->
    <main class="random-news" id="random">
        <section class="random-news-left">
            <div class="random-news-left-top">
                <p>Lorem</p>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner.png" alt="">
                        <h3>Berita Random left 1</h3>
                    </article>
                </a>
            </div>

            <div class="random-news-left-bottom">
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random left 2</h3>
                        </div>
                    </article>
                </a>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random left 3</h3>
                        </div>
                    </article>
                </a>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random left 4</h3>
                        </div>
                    </article>
                </a>
            </div>
        </section>

        <section class="random-news-main">
            <div class="random-news-main-top">
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner.png" alt="">
                        <h3>Berita Random Main 1</h3>
                    </article>
                </a>
            </div>

            <div class="random-news-main-bottom">
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Main 2</h3>
                        </div>
                    </article>
                </a>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Main 3</h3>
                        </div>
                    </article>
                </a>
            </div>
        </section>

        <section class="random-news-right">
            <div class="random-news-right-top">
                <p>Lorem</p>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner.png" alt="">
                        <h3>Berita Random Right 1</h3>
                    </article>
                </a>
            </div>

            <div class="random-news-right-bottom">
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Right 2</h3>
                        </div>
                    </article>
                </a>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Right 3</h3>
                        </div>
                    </article>
                </a>
                <a href="php/news_content.php">
                    <article>
                        <img src="assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Right 4</h3>
                        </div>
                    </article>
                </a>
            </div>
        </section>
    </main>
    <!--========== End Random News Section ==========-->

    <!--========== Footer ==========-->
    <footer id="tentang">
        <div class="footer-container">
            <div class="footer-left">
                <a href="#home">
                    <img src="assets/img/logoputih.png" alt="">
                </a>
                <h2>Tentang</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad corrupti non magni nam neque corporis
                    tempore officiis, numquam perferendis eius earum consequuntur molestiae obcaecati nulla eveniet
                    autem maxime, provident quae.</p>
            </div>
            <div class="footer-right">
                <h2>Contact Me</h2>

                <div class="footer-icon">
                    <a href="https://www.instagram.com/miphld/?hl=id"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/miftahul-huda-4468a724b/"><i
                            class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Miftahul Huda | 223040145 | Universitas Pasundan</p>
        </div>
    </footer>
    <!--========== End footer ==========-->

    <!--========== Link Javascript ==========-->
    <script src="js/script.js"></script>
</body>

</html>