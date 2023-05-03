<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOM Video</title>

<!--========== Link CSS ==========-->
    <link rel="stylesheet" href="news_video.css">

<!--========== Link Icons ==========-->
    <script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

<!--========== Navigation Bar ==========-->
    <header>
        <nav>
            <div class="logo">
                <img src=".././assets/img/logoputih.png" alt="">
            </div>

            <div class="searchbox">
                <input type="search" placeholder="Cari">
                <button id="search"><i class="fa-solid fa-magnifying-glass" style="color: white;"></i></button>
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
<!--========== End Navigation Bar ==========-->

<!--========== Content ==========-->
    <main class="video-content">
        <section class="content-left">
            <div class="video-left">
                <video controls>
                    <source src=".././assets/video/banner_video.mp4">
                </video>
                <h1>Berita Video Left</h1>
                <p class="writer">By writer, Sense Of Mip</p>
                <p class="time">(Keterangan waktu)</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum aperiam ratione temporibus earum,
                    voluptatibus provident nostrum accusantium maiores, ut harum in minima dignissimos quos impedit
                    laudantium voluptatem expedita saepe modi. Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Ut modi provident animi? Quos velit exercitationem saepe nulla a id asperiores dolore
                    voluptate, praesentium dolorem magni nostrum, vero tenetur incidunt! Labore.</p>
            </div>
        </section>
        <section class="content-right">
            <h2>Video Lainnya</h2>
            <div class="another-video-right">
                <a href = ".././news_page/news.php">
                    <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 1</h3>  
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 2</h3>
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 3</h3>    
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 4</h3>   
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 5</h3>    
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 6</h3> 
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 7</h3> 
                        </div>
                    </article>
                </a>
    
                <a href = ".././news_page/news.php">
                    <article>
                        <img src = ".././assets/img/banner.png">
                        <div>
                            <h3>Berita Video 8</h3> 
                        </div>
                    </article>
                </a>
                </div>
        </section>
    </main>
<!--========== End Content ==========-->

<!--========== random-news Section ==========-->
    <div class="text-random-news">
        <h2>Anda Mungkin juga Menyukai</h2>
    </div>

    <main class="random-news">
        <div class="random-news-left">
            <a href=".././news_page/news.php">
                <article>
                    <img src=".././assets/img/banner.png" alt="">
                    <div>
                        <h3>Berita random news 1</h3>
                    </div>
                </article>
            </a>
        </div>
        <div class="random-news-main">
            <a href=".././news_page/news.php">
                <article>
                    <img src=".././assets/img/banner.png" alt="">
                    <div>
                        <h3>Berita random news 2</h3>
                    </div>
                </article>
            </a>
        </div>
        <div class="random-news-right">
            <a href=".././news_page/news.php">
                <article>
                    <img src=".././assets/img/banner.png" alt="">
                    <div>
                        <h3>Berita random news 3</h3>
                    </div>
                </article>
            </a>
        </div>
        </section>
    </main>
<!--========== End random-news Section ==========-->

<!--========== Footer ==========-->
    <footer id="tentang">
        <div class = "footer-container">
            <div class = "footer-left">
                <a href=".././landing_page/index.php">
                    <img src=".././assets/img/logoputih.png" alt="">
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
    <script src="news_page.js"></script>
</body>
</html>