         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">



<body>
    <header class="header">
        <div class="header__container">
            <img src="img/logo.jpg" alt="" class="header__img">
            <a href="#" class="header__logo">Tune Source</a>
            <form class="header__search"  action="search.php" method="GET">
                <input class="header__input" type="search" placeholder="Search for song" name="Search">
                <input class="btn btn-primary" class="form-control" type="submit"name="search" value="Search" />
            </form>
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>



    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <i class='bx bxs-disc nav__icon' ></i>
                    <span class="nav__logo-name">Tune Source</span>
                </a>
                <div class="nav__list">
                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>
                        <a href="index.php" class="nav__link active">
                            <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Home</span>
                        </a>
                    <div class="nav__dropdown">
                    <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Profile</span>
                        <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                    </a>
                    <div class="nav__dropdown-collapse">
                        <div class="nav__dropdown-content">
                            <a href="#" class="nav__dropdown-item"> <?=$_SESSION['name']?></a>
                            <a href="pay.php" class="nav__dropdown-item">Your cart</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="nav__link">
                <i class='bx bx-message-rounded nav__icon' ></i>
                <span class="nav__name">Contac us</span>
                </a>
                <a href="#" class="nav__link">
                <i class='bx bxl-reddit nav__icon' ></i>
                <span class="nav__name">Services</span>
                </a>
            </div>
        </div>
    </div>

    <a href="logout.php" class="nav__link nav__logout">
    <i class='bx bx-log-out nav__icon' ></i>
    <span class="nav__name">Log Out</span>
    </a>
</nav>
</div>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>