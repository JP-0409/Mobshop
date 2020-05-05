
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="./Index.html" class="active">Home</a>
          <div class="dropdown">
               <button class="dropbtn">Smartphone
                    <i class="fa fa-caret-down"></i>
               </button>
               <div class="dropdown-content">
                    <a href="#">Oppo</a>
                    <a href="#">Vivo</a>
                    <a href="#">Redmi</a>
                    <a href="#">Apple</a>
                    <a href="#">Oneplus</a>
               </div>
          </div>
          <a href="#news">Compare</a>
          <a href="#contact">Contact Us</a>
          <a href="#about">About</a>
          <div class="dropdown">
               <button class="dropbtn">
                    <i class="fa fa-user"></i>
               </button>
               <div class="dropdown-content">
                    <a href="./PHP/login.php">Login</a>
                    <a href="./PHP/Register.php">Sign up</a>
               </div>
               <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
          <div class="search">
               <form action="">
                    <input type="text" placeholder="Search" name="search" required>
                    <button type="submit">
                         Search
                    </button>
               </form>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>






