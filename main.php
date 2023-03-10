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
            <div class="signup" style="color: white; font-size: 25px; font-family: 'Podkova',serif; position: sticky; top: 33px; text-align: center; margin-top: 24px;">
                <?php if(!isset($_SESSION['user'])){
                    ?>
                    <a href="registration.php">Sign-Up</a>
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

<!-- Content -->


    <div class="content">

    <video class="video" width=100% controls >
        <source src="123/qazaqrep.MP4" type="video/mp4">
        Your browser does not support the video tag.
    </video>



<!-- About us -->
<div id="aboutus">
    <div class="parallax au">
        <div class="mask"></div>
     </div>
    <div class="waq">
        <div class="text">
        <h1>We are <br>Qazaq Republic</h1>
        <p>The word Qazaq means ???free??? from <br>ancient T??rkic, therefore our prints have <br>a double meaning. It???s a play on words:</p>
        <pre>Born to be Qazaq</pre>
        <pre id="first">Born to be Free</pre>
        </div>
        <div class="sur">
        <img class="imgg" width="40%" src="./img/qaz.jpg" alt="">
        </div>
</div>
</div>

<div class="bastyq">
    <div class="custom-shape-divider-top-1639846922">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <h1>Saken Joldas</h1>
    <div class="ske">
        <div class="car">
        <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/saken.jpg" alt="saken" class="d-block" style="width:100%">
      </div>
      <!--div class="carousel-item">
        <img src="./img/qrs.jpeg" alt="qrs" class="d-block" style="width:100%">
      </-!div>
      <div-- class="carousel-item">
        <img src="./img/foto.jpg" alt="qrs" class="d-block" style="width:100%">
      </div-->
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>
    </div>

    <div class="tes">
    <p><span>Saken Zholdas</span> is a well-known Kazakh director and founder of <br>our brand <span>Qazaq Republic</span>, which was launched in 2017. Now we <br>have more than 30 points of sale all over the country. In the <br>beginning we had no confidence in the quality of the products,<br>so for the first year we worked in a test mode. Now we are<br> working with top retailers of the country, such as Meloman, Duty <br>Free, Shymbulak, FashionPark, Gazpromneft. During this time,<br> the sales have grown almost 20 times.In the future we plan to<br> introduce more assortment.</p>
        <p class="it"><span>The idea</span> of our brand is to convey a piece of culture,<br> national identity. <span>The uniqueness</span> of our brand is in high-quality <br>presentation and modern style, which is not a shame to wear.</p>
    </div>
</div>
</div>





<!-- Catalog -->
    <div id="catalog">
        <!-- <img id="cat" src="cat.png" alt=""> -->
        <div class="parallax ct">
            <div class="mask"></div>
         </div>
        <div class="twos">

        <div class="parent pone">
            <div class="child bg-one">
                <a class="grads" href="jeans.html">jeans</a>
            </div>
        </div>

        <div class="parent ptwo">
            <div class="child bg-two">
                <a class="grads" href="jeidee.html">jeide</a>
            </div>
        </div>

        </div>

        <div class="twos">
        <div class="parent ptwo">
            <div class="child bg-three">
                <a class="grads" href="./qosymsha.html">qosymsha</a>
            </div>
        </div>

        <div class="parent pone">
            <div class="child bg-four">
                <a class="grads" href="./gift.html">gift</a>
            </div>
        </div>

        </div>

    </div>
    <!-- LookBook -->
    <div class="parallax lb">
        <div class="mask"></div>
     </div>
     <div id="lookbook">
        <section class="looks">
            <div class="looks">
                <div class="text_photo">
                    <div class="text_photo_col">
                        <a href="lookbook.html"><img src="./img/l1.jpg" alt="" class="photo"></a>
                        <div class="textt">
                            <h4>Look 1</h4>
                        </div>
                    </div>
                    <div class="text_photo_col">
                        <a href="lookk.html"><img src="./img/l3.jpg" alt="" class="photo"></a>
                        <div class="text">
                            <h4>Look 2</h4>
                        </div>
                    </div>
                    <div class="text_photo_col">
                        <a href="bookk.html"><img src="./img/l2.jpg" alt="" class="photo"></a>
                        <div class="text">
                            <h4>Look 3</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     </div>
<!-- Contacts -->
    <div class="parallax cn">
        <div class="mask"></div>
     </div>

<div id="contacts">
    <div class="cities">
        <div id="logo" onclick="window.location.reload()"><img src="https://www.coloradoeagles.com/assets/img/Location-Icon-Circle-LtBlue-769be885ce.png" alt="" height=70px></div>
        <div id="Almaty" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">-Almaty-</div>
        <div id="Nur-Sultan" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">-Nur-Sultan-</div>
        <div id="Shymkent" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">-Shymkent-</div>
        <div id="Aqtobe" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">-Aqtobe-</div>
        <div id="Aqtau" onclick="change(this)" onmouseover="big(this)" onmouseout="small(this)">-Aqtau-</div>
    </div>
          <pre>09:00-22:00 || ar k??n??</pre>
    <div class="textcity">
            <p id="h">Qosh keld??n??zder!</p>
            <p id="t"> </p>
        </div>
        <div class="main">

        <img id="map" src="./img/all.png" alt="" usemap="#workmap" style="width: 60%; ">
        <map name="workmap">
            <area shape="circle" coords="320,280,80" alt="" href="https://go.2gis.com/bnmsog">
            <area shape="circle" coords="90,420,120" alt="" href="https://go.2gis.com/dmvdrw">
            <area shape="circle" coords="650,200,120" alt="" href="https://go.2gis.com/h63gkw">
            <area shape="circle" coords="550,440,80" alt="" href="https://go.2gis.com/l6w31">
            <area shape="circle" coords="800,420,120" alt="" href="https://2gis.kz/almaty/firm/70000001040035508?m=76.939%2C43.2671%2F16">
          </map>

    </div>


</div>
<div class="wues">
    <form>
        <div class="emailBox">
          <label for="emailAddress">Eger suraqtar??n??z bolsa,asty??a jazyp ket??n??z</label><br>
          <input id="emailAddress" type="email" size="44" maxLength="64" style="border: 0.2px solid black;height:30px" required
                 placeholder="Your e-mail"><br><br>
        </div>

        <div class="messageBox">
          <input id="messagee" size="54"  style="border: 0.2px solid black; height: 30px;" required
                    placeholder="Aty-jon"></input><br>
          <label for="message">Suraq</label><br>
          <textarea id="message" cols="54" rows="8" style="border: 0.2px solid black;" required
                    placeholder="Bari jaqsy bolady!"></textarea>
        </div>
        <div id="app">
            <button class="button" @click="download" style="border: 0.5px solid black; width: auto">Send</button>
        </div>
    </form>
    <img src="./img/25.png" alt="" style="width: 40%;">
</div>

<div class="subscribe" style="position: relative; height: 280px;">
    <form >
    <h1 style="padding-top: 20px;">Join to the movement</h1>
    <p>Sign up to the newsletter and be the first one to know <br>about new arrivals and special offers</p>
    <input type="email" class = "email" placeholder=" Enter your e-mail " style="border: 0.2px solid black; height: 35px; width: 350px; margin-bottom: 20px;">
    <input type="submit" class = "submit" value=" Subscribe " @click="downloadd" style="border: 0.5px solid #0c12c2; background-color: #0c12c2; color:white; height: 35px; width: auto;">
</form>
<div class="iconss">
    <a href="https://www.facebook.com/qazaq.republic.brand" class="fa fa-facebook"></a>
    <a href="https://www.instagram.com/qazaq.republic/" class="fa fa-instagram"></a>
    <a id="qala" href="whatsapp://send?phone=77789489800&text=" class="fa fa-whatsapp"></a>
    <a href="https://t.me/WeAreQR" class="fa fa-telegram"></a>
</div>
<div class="custom-shape-divider-bottom-1639900400">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>
</div>


<!-- Footer -->

    <footer>

        <!-- Copyright -->
        <div class = "copyright" style="background-color: #0045c0;">
          ?? 2017 Copyright:
          <a class="footer_a" href="main.html" id = "footer_a">Qazaq Republic - Design: Dollar Bills</a>
        </div>
        <!-- Copyright -->
      </footer>
      <script type="text/javascript" src="script.js"></script>
</body>
</html>
