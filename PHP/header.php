<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="dropbtn">
                            <?php
                            echo '<a href="Index.php">HOME</a>';
                            ?>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">MOBILES
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Samsung</a>
                            <a href="#">Vivo</a>
                            <a href="#">Mi</a>
                            <a href="#">Oppo</a>
                            <a href="#">Apple</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">USER
                            <i class="fa fa-user"></i>
                        </button>
                        <div class="dropdown-content">
                            <?php
                            echo '<a href="php/Register.php">SIGN UP</a>';
                            echo '<a href="php/login.php">LOG IN</a>';
                            echo '<a href="#">LOG OUT</a>';
                            ?>
                        </div>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">
                            <?php
                            echo '<a href="php/Contact.php">CONTACT</a>';
                            ?>
                        </button>
                        </button>
                    </div>
                </li>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>