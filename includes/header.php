<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="ti-headphone-alt"></i> 023 880 880</li>
                            <li><i class="ti-email"></i> support@mugiwarahub.com</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-location-pin"></i> <a
                                    href="https://goo.gl/maps/oUhvT4kBh8xmxg9h7">ទីតាំងហាង</a>
                            </li>
                            <li><i class="ti-user"></i> <a href="index.php?p=login"
                                    <?php echo ($page == "login.php") ?>>គណនី</a></li>
                            <li><i class="ti-power-off"></i><a href="index.php?p=register"
                                    <?php echo ($page == "register.php") ?>>ចុះឈ្មោះគណនីថ្មី</a></li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php"><img src="images/2.png" width="66px" alt="logo"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <form method="get" action="result.php" enctype="multipart/form-data">
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar">
                            <a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                        </div>
                        <div class="sinlge-bar shopping">
                            <a href="index.php?p=cart" class="single-icon"><i class="ti-bag"></i> <span
                                    class="total-count">2</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <?php
                        $pageid = "";
                        if (!isset($_GET['pageid'])) {
                            $pageid = "";
                        }
                        ?>
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li><a href="index.php"
                                                    <?php echo ($page == "home.php") ? "class='active'" : "  " ?>>Home</a>
                                            </li>
                                            <li><a href="index.php?p=book"
                                                    <?php echo ($page == "book.php") ? "class='active'" : ""; ?>>សៀភៅ<i
                                                        class="ti-angle-down"></i><span class="new">New</span></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">CLASSIC MANGA</a></li>
                                                    <li><a href="#">DISCOVER A NEW SERIES</a></li>
                                                    <li><a href="#">MODERN FAVORITE</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=toygame"
                                                    <?php echo ($page == "toygame.php") ? "class='active'" : ""; ?>>ប្រដាប់ក្មេងលេង
                                                    & ល្បែងកម្សាន្ត</a></li>
                                                    <li><a href="index.php?p=page&pageid=1"
                                                    <?php echo ($pageid == 1) ? "class='active'" : ""; ?>>ទំនាក់ទំនង
                                                </a></li>
                                                    <li><a href="index.php?p=page&pageid=2"
                                                    <?php echo ($pageid == 2) ? "class='active'" : ""; ?>>អំពីយើង
                                                </a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->