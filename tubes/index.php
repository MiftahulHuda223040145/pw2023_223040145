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
                <input type="search" placeholder="Cari">
                <button id="search"><i class="fa-solid fa-magnifying-glass" style="color: black;"></i></button>
            </div>

            <div class="nav-list"></div>
                <ul>
                    <li><a href="#home" class="nav-content">Home</a></li>
                    <li><a href="#berita-trending" class="nav-content">Trending</a></li>
                    <li><a href="#berita-video" class="nav-content">Video</a></li>
                    <li><a href="#tentang" class="nav-content">Tentang</a></li>
                    <li><a href="../login_register/login.php" class="nav-btnlogin"><button class="btn-login">Login</button></a></li>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!--========== Home Page ==========-->
  <!-- Swiper -->
    <section class="home-page" id="home">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="news_page/news.php">
                        <h1>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <img src="assets/img/pict1.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="news_page/news.php">
                        <h1>Lorem Ipsum dolor sit amet consectetur adipisicing elit.</h1>
                        <img src="assets/img/pict2.jpg" alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="news_page/news.php">
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

<!--========== Trending Section ==========-->
    <section class="content-trend" id="berita-trending">
        <div class="content-trend-wrap">
            <h2>Berita Trending</h2>
            <div class="artikel-wrap">
                <a href="news_page/news.php" class="link-artikel1">
                    <div class="artikel-1">
                        <div class="card">
                            <div class="thumb">
                                <img src="assets/img/banner.png" alt="">
                            </div>
                            <article>
                                <h3>Berita Trending 1</h3>
                                <span><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis minus, quas quidem tempora modi neque, ipsum dolor numquam nostrum obcaecati architecto commodi?</p></span>
                            </article>
                        </div>
                    </div>
                </a>

                <a href="news_page/news.php" class="link-artikel2">
                    <div class="artikel-2">
                        <div class="card">
                            <div class="thumb">
                                <img src="assets/img/banner.png" alt="">
                            </div>
                            <article>
                                <h3>Berita Trending 2</h3>
                                <span><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam esse nulla aliquam eaque pariatur amet soluta maxime ducimus natus! Praesentium tenetur vero obcaecati maiores</p></span>
                            </article>
                        </div>
                    </div>
                </a>
                    
                <a href="news_page/news.php" class="link-artikel3">
                    <div class="artikel-3">
                        <div class="card">
                            <div class="thumb">
                                <img src="assets/img/banner.png" alt="">
                            </div>
                            <article>
                                <h3>Berita Trending 3</h3>
                                <span><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, minus! Qui quas ducimus pariatur excepturi nihil nulla, consectetur vel! Vel libero voluptatem maxime</p></span>
                            </article>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
<!--========== End Trending Section ==========-->

<!--========== Featured News ==========-->
    <section class="featured-news">
        <a href="news_page/news.php">
            <div class="featured-content">
                <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quibusdam tempora soluta</h2>
                <img src="assets/img/pict4.jpg" alt="">
            </div>
        </a>
    </section>
<!--========== End Featured News ==========-->

<!--========== Main Content ==========-->
    <main class="main-content">
        <section class = "main-content-left">
            <h2>Rekomendasi Untuk Anda</h2>
            <div class = "content-left">
                <a href="news_page/news.php">
                    <article>
                        <img src = "assets/img/banner.png">
                        <div>
                            <h3>Berita Rekomendasi 1</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>   
                        </div>        
                    </article>
                </a>

                <a href="news_page/news.php">
                    <article>
                        <img src = "assets/img/banner.png">
                        <div>
                            <h3>Berita Rekomendasi 2</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>   
                        </div>
                    </article>
                </a>
                    
                <a href="news_page/news.php">
                    <article>
                        <img src = "assets/img/banner.png">
                        <div>
                            <h3>Berita Rekomendasi 3</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>   
                        </div>
                    </article>
                </a>
            </div>
        </section>

        <section class = "main-content-right">
            <h2>Terbaru</h2>
            <div class="content-right"> 
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 1</h3>
                            <p>(Keterangan waktu)</p>   
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 2</h3>
                            <p>(Keterangan waktu)</p> 
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 3</h3>
                            <p>(Keterangan waktu)</p>    
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 4</h3>
                            <p>(Keterangan waktu)</p>    
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 5</h3>
                            <p>(Keterangan waktu)</p>    
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 6</h3>
                            <p>(Keterangan waktu)</p>    
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 7</h3>
                            <p>(Keterangan waktu)</p> 
                        </div>
                    </article>
                </a>

                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Terbaru 8</h3>
                            <p>(Keterangan waktu)</p> 
                        </div>
                    </article>
                </a>
            </div>
        </section>  
    </main>
<!--========== End Main Content ==========-->

<!--========== News Video Sectiom ==========-->
    <section class="banner-video" id="berita-video">
        <h2>Tonton Juga</h2>
        <div class="video-top">
            <a href="news_page/news_video.php">
                <video class="video" autoplay loop muted>
                    <source src="assets/video/banner_video.mp4">
                </video>
                <h3>Berita Video 1</h3>
            </a>
        </div>
        
        <div class="video-wrap">
            <a href="news_page/news_video.php">
                <video class="video1" autoplay loop muted>
                    <source src="assets/video/banner_video.mp4">
                </video>
                <h3>Berita Video 2</h3>
            </a>
            <a href="news_page/news_video.php">
                <video class="video2" autoplay loop muted>
                    <source src="assets/video/banner_video.mp4">
                </video>
                <h3>Berita Video 3</h3>
            </a>
            <a href="news_page/news_video.php">
                <video class="video3" autoplay loop muted>
                    <source src="assets/video/banner_video.mp4">
                </video>
                <h3>Berita Video 4</h3>
            </a>
            <a href="news_page/news_video.php">
                <video class="video4" autoplay loop muted>
                    <source src="assets/video/banner_video.mp4">
                </video>
                <h3>Berita Video 5</h3>
            </a>
        </div>
    </section>
<!--========== End News Video Sectiom ==========-->

<!--========== Random News Section ==========-->
    <main class="random-news">
        <section class="random-news-left">
            <div class="random-news-left-top">
                <p>Lorem</p>
                <a href="news_page/news.php">
                    <article>
                        <img src="assets/img/banner.png" alt="">
                        <h3>Berita Random left 1</h3>
                    </article>
                </a>
            </div>

            <div class="random-news-left-bottom">
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Random left 2</h3>   
                        </div>
                    </article>
                </a>
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Random left 3</h3>   
                        </div>
                    </article>
                </a>
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Random left 4</h3>
                        </div>
                    </article>
                </a>
            </div>
        </section>

        <section class="random-news-main">
            <div class="random-news-main-top">
                <a href="news_page/news.php">
                    <article>
                        <img src="assets/img/banner.png" alt="">
                        <h3>Berita Random Main 1</h3>
                    </article>
                </a>
            </div>

            <div class="random-news-main-bottom">
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Main 2</h3>   
                        </div>
                    </article>
                </a>
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
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
                <a href="news_page/news.php">
                    <article>
                        <img src="assets/img/banner.png" alt="">
                        <h3>Berita Random Right 1</h3>
                    </article>
                </a>
            </div>

            <div class="random-news-right-bottom">
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Right 2</h3>
                        </div>
                    </article>
                </a>
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
                        <div>
                            <h3>Berita Random Right 3</h3>   
                        </div>
                    </article>
                </a>
                <a href = "news_page/news.php">
                    <article>
                        <img src = "assets/img/banner2.png">
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
        <div class = "footer-container">
            <div class = "footer-left">
                <a href="#home">
                    <img src="assets/img/logoputih.png" alt="">
                </a>
                <h2>Tentang</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad corrupti non magni nam neque corporis tempore officiis, numquam perferendis eius earum consequuntur molestiae obcaecati nulla eveniet autem maxime, provident quae.</p>
            </div>
            <div class = "footer-right">
                <h2>Contact Me</h2>
    
                <div class="footer-icon">
                    <a href="https://www.instagram.com/miphld/?hl=id"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/miftahul-huda-4468a724b/"><i class="fa-brands fa-linkedin"></i></a>
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