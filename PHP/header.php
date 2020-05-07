<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Smart Phone
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Samsung</a>
                        <a class="dropdown-item" href="#">Oppo</a>
                        <a class="dropdown-item" href="#">Vivo</a>
                        <a class="dropdown-item" href="#">Redme</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Sign Up</a>
                </li>
                    <a class="nav-link" href="#" tabindex="-1">Log In</a>
                <li>

                </li>
            </ul>


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