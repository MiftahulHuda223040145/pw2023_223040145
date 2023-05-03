<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!--========== Link CSS ==========-->
    <link rel="stylesheet" href="login.css">

<!--========== Link Icons ==========-->
<script src="https://kit.fontawesome.com/147cba14f0.js" crossorigin="anonymous"></script>
</head>

<body>

<!--========== Login Form ==========-->
    <div id="login-form" class="login-page">
        <div class="form-box">
            <h2>Log In</h2>
            <form id="login" class="input-group-login">
                <input type="text" class='input-field' placeholder="Email" required >
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Ingatkan Saya</span>
                <button type="submit" class="submit-btn">Log in</button>
                <p class="link-register">Belum punya akun? <a href=".././login_register/register.php">Register</a></p>
            </form>
        </div>
    </div>
<!--========== End Login Form ==========-->

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

</body>
</html>