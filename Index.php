<!doctype html>
<html>

<head>
     <title><?php

               session_start();

               require_once('php/CreateDb.php');
               require_once('./php/component.php');


               // create instance of Createdb class
               $database = new CreateDb("Productdb", "Producttb");

               if (isset($_POST['add'])) {
                    /// print_r($_POST['product_id']);
                    if (isset($_SESSION['cart'])) {

                         $item_array_id = array_column($_SESSION['cart'], "product_id");

                         if (in_array($_POST['product_id'], $item_array_id)) {
                              echo "<script>alert('Product is already added in the cart..!')</script>";
                              echo "<script>window.location = 'index.php'</script>";
                         } else {

                              $count = count($_SESSION['cart']);
                              $item_array = array(
                                   'product_id' => $_POST['product_id']
                              );

                              $_SESSION['cart'][$count] = $item_array;
                         }
                    } else {

                         $item_array = array(
                              'product_id' => $_POST['product_id']
                         );

                         // Create new session variable
                         $_SESSION['cart'][0] = $item_array;
                         print_r($_SESSION['cart']);
                    }
               }


               ?>

          Mobshop
     </title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <!-- Latest fonawesome CSS -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="./assets/css/Index.css">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">
</head>

<body>

     <?php require_once("php/header.php"); ?>

     </div>
     </div>
     <!-- Main Content -->
     <div class="Main">

          <!-- Automatic Image Slider -->
          <div class="img-slider">
               <div class="slideshow-container">
                    <img class="mySlides" src="./assets/Picture/7.webp" alt="apple" width="100%">
                    <img class="mySlides" src="./assets/Picture/oppo.png" alt="apple" width="100%">
                    <img class="mySlides" src="./assets/Picture/18.jpg" alt="apple" width="100%">
                    <img class="mySlides" src="./assets/Picture/14.jpg" alt="apple" width="100%">
                    <img class="mySlides" src="./assets/Picture/6.webp" alt="apple" width="100%">
                    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
               </div>
          </div>
          <div class="card-head">
          <h1>TODAYS DEAL</h1>
          </div>
          <!-- this data comes from database-->
          <?php require_once("php/header.php"); ?>
          <div class="container">
               <div class="row text-center py-5">
                    <?php
                    $result = $database->getData();
                    while ($row = mysqli_fetch_assoc($result)) {
                         component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                    }
                    ?>
               </div>
               <h1>add timer using java script for all and add border and style that upper div.</h1>
          </div>


          <!-- Responsive Cards -->
          <div class="card-head">
               <h1>UPCOMING MOBILES</h1>
          </div>

          <div class="row">
               <div class="column">
                    <div class="card">
                         <div class="flip-card">
                              <div class="flip-card-inner">
                                   <div class="flip-card-front">
                                        <img src="./assets/Picture/11.png" alt="Avatar" style="width:100%;height:100%;">
                                   </div>
                                   <div class="flip-card-back">
                                        <h3>APPLE SE 2</h3>
                                        <p>After a long wait, the Apple iPhone SE 2020 has been announced.
                                             It features an Apple A13 Bionic chipset used by the iPhone 11 series,
                                             a 4.7-inch HD Retina display with Touch ID fingerprint sensor and
                                             Haptic Touch.<a href="https://www.91mobiles.com/upcoming-mobiles-in-india">read more@</a>
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
                                        <img src="./assets/Picture/4.jpg" alt="Avatar" style="width: 100%; height: 100%;">
                                   </div>
                                   <div class="flip-card-back">
                                        <h3>ONE PLUS 8</h3>
                                        <p>ONE PLUS-8 is the standard variant of the latest flagship smartphone
                                             featuring a 6.55-inch Fluid AMOLED FHD+ display,
                                             90Hz refresh rate, HDR10+, an octa-core Snapdragon 865 SoC, Dolby
                                             Atmos support and Warp Charge 30T fast charging support.
                                             <a href="https://www.91mobiles.com/upcoming-mobiles-in-india">read more@</a>
                                        </p>
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
                                        <img src="./assets/Picture/1.jpg" alt="Avatar" style="width: 100%; height: 100%;">
                                   </div>
                                   <div class="flip-card-back">
                                        <h3>HONOR 30</h3>
                                        <p>is the most affordable smartphone in the trio featuring a 6.53-inch FHD+
                                             punch-hole display, a Kirin 985 SoC,
                                             8GB RAM, 256GB of storage space, and an OLED panel.
                                             The Honor 30 comes with a single selfie camera sensor while the other
                                             two models have dual selfie camera modules.
                                             <a href="https://www.91mobiles.com/upcoming-mobiles-in-india">read more@</a>
                                        </p>
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
                                        <img src="./assets/Picture/17.png" alt="Avatar" style="width: 100%; height: 100%;">
                                   </div>
                                   <div class="flip-card-back">
                                        <h3>REDMI NOTE 9</h3>
                                        <p>Xiaomi Redmi Note 9 Pro Max was announced last month alongside the Redmi
                                             Note 9 Pro.
                                             However the device did not go on sale in India due to the coronavirus
                                             lockdown until
                                             May, 3, 2020.
                                             <a href="https://www.91mobiles.com/upcoming-mobiles-in-india">read more@</a>
                                        </p>
                                   </div>
                              </div>
                         </div>
                         <!-- <h3>Card 4</h3>
                        <p>Some text</p>
                        <p>Some text</p> -->
                    </div>
               </div>
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
                              <address>
                                   <span><i class="fa fa-phone "></i>&nbsp; +91-9586175499</span>
                              </address>

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

     <script type="text/javascript" src="./assets/js/Index.js"></script>
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <!-- javascript-->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>