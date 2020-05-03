<!doctype html>
<html>

<head>
     <title>
          Mobshop
     </title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="./bootstrap/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="./css/style.css">
     <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="./css/Index.css">

</head>

<body>
     <!-- Navigation bar for main page -->
     <div id="navbar">
          <ul>

               <li><a href="./Index.html">Home</a></li>
               <li><a href="#smartphone">Smartphones</a></li>
               <li><a href="#compare">Compare</a></li>
               <li><a href="#tablet">Other</a></li>
               <li><a href="#contactUs">Contact Us</a></li>
               <li style="float: right;"><a href="./html/Login.html">Log in</a></li>
               <li style="float: right;"><a href="Register.php">Sign up</a></li>




               <!-- new added-->
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

               <!-- temporary-->

          </ul>

     </div>
     <!-- Main Content -->
     <div class="Main">
          <!-- Search Bar -->
          <div id="search_bar">
               <form action="">
                    <input type="text" placeholder="Search" name="search" required>
                    <button type="submit">
                         search
                    </button>
               </form>
          </div>
          <div class="content">
               <!-- slide show -->
               <div class="slideshow-container">
                    <div class="mySlides1">
                         <img src="Picture/oppo.png" style="width:100%">
                    </div>

                    <div class="mySlides1">
                         <img src="Picture/redmi.png" style="width:100%">
                    </div>

                    <div class="mySlides1">
                         <img src="Picture/vivo.png" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
               </div>
          </div>
          <!-- Responsive Cards -->
          <body>
               <div class="row">
                    <div class="column">
                         <div class="card">
                              <div class="flip-card">
                                   <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                             <img src="Picture/apple.jpg" alt="Avatar" style="width:100%;height:100%;">
                                        </div>
                                        <div class="flip-card-back">
                                             <h3>APPLE SE 2</h3>
                                             <p>After a long wait, the Apple iPhone SE 2020 has been announced.
                                                  It features an Apple A13 Bionic chipset used by the iPhone 11 series,
                                                  a 4.7-inch HD Retina display with Touch ID fingerprint sensor and
                                                  Haptic Touch.
                                             </p>
                                        </div>
                                   </div>
                              </div>
                              <!-- <h3>Card 1</h3>
                        <p>Some text</p>
                        <p>Some text</p> -->
                         </div>
                    </div>

                    <div class="column">
                         <div class="card">
                              <div class="flip-card">
                                   <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                             <img src="Picture/oneplus.jpg" alt="Avatar" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="flip-card-back">
                                             <h3>ONE PLUS 8</h3>
                                             <p>ONE PLUS-8 is the standard variant of the latest flagship smartphone
                                                  featuring a 6.55-inch Fluid AMOLED FHD+ display,
                                                  90Hz refresh rate, HDR10+, an octa-core Snapdragon 865 SoC, Dolby
                                                  Atmos support and Warp Charge 30T fast charging support.</p>
                                        </div>
                                   </div>
                              </div>
                              <!-- <h3>Card 2</h3>
                        <p>Some text</p>
                        <p>Some text</p> -->
                         </div>
                    </div>

                    <div class="column">
                         <div class="card">
                              <div class="flip-card">
                                   <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                             <img src="Picture/honor30.jpg" alt="Avatar" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="flip-card-back">
                                             <h1>HONOR 30</h1>
                                             <p>is the most affordable smartphone in the trio featuring a 6.53-inch FHD+
                                                  punch-hole display, a Kirin 985 SoC,
                                                  8GB RAM, 256GB of storage space, and an OLED panel.
                                                  The Honor 30 comes with a single selfie camera sensor while the other
                                                  two models have dual selfie camera modules.</p>
                                        </div>
                                   </div>
                              </div>
                              <!-- <h3>Card 3</h3>
                        <p>Some text</p>
                        <p>Some text</p> -->
                         </div>
                    </div>

                    <div class="column">
                         <div class="card">
                              <div class="flip-card">
                                   <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                             <img src="Picture/redminote9.jpg" alt="Avatar" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="flip-card-back">
                                             <h1>REDMI NOTE 9</h1>
                                             <p>Xiaomi Redmi Note 9 Pro Max was announced last month alongside the Redmi
                                                  Note 9 Pro.
                                                  However the device did not go on sale in India due to the coronavirus
                                                  lockdown until
                                                  May, 3, 2020.</p>
                                        </div>
                                   </div>
                              </div>
                              <!-- <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p> -->
                         </div>
                    </div>
               </div>



               <!--new Side navigation  for twitter and linkedIn -->

               <div id="new-mySidenav" class="new-sidenav">
                    <pre><a href="https://www.facebook.com/pis2K19/"target="_blank" id="new-facebook">FACEBOOK    <span class="ion-social-facebook"></span></a></pre>
                    <!-- <pre> <a href="#" id="new-twitter">TWIITTER   <span class="ion-social-twitter"></span></a></pre> -->
                    <pre><a href="https://www.linkedin.com/company/pranam-it-solution" target="_blank"id="new-pinterest">LinkedIn   <span class="ion-social-linkedin"></span></a></pre>
                    <!-- <a href="#" id="new-contact">Contact</a> -->
               </div>




               <!-- Website Footer  start from here-->
               <div class="footer">
                    <div class="footer-content">

                         <div class="footer-section">
                              <h2>Contact</h2>
                              <div class="address">
                                   <p>Government Engineering College, <br>
                                        shamalaji Road,
                                        Modasa.
                                   </p>
                              </div>
                              <div class="contact">
                                   <span><i class="fa fa-phone "></i>&nbsp; 9586175499</span>

                              </div>
                              <div class="email">
                                   <span><i class="fa fa-email "></i>
                                        &nbsp; <a href="bholu0409@gmail.com">
                                             bholu0409@gmail.com
                                        </a>
                                   </span>
                              </div>


                         </div>
                         <div class="footer-section">
                              <h2>About</h2>
                              <div class="about">
                                   <p> this website is made for <br>
                                        smartphone, tablet,<br> laptop compare
                                   </p>
                              </div>

                         </div>

                    </div>
                    <div class="footer-bottom">
                         &copy; Mobshop | @2020
                    </div>
               </div>
     </div>
</body>
<script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="./bootstrap/jquery.min.js"></script>
<script type="text/javascript" src="./bootstrap/popper.min.js"></script>
<script type="text/javascript" src="./js/Index.js"></script>

</html>