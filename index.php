<?php

include("config.php");
include "libraries/db.php";

$page = "home.php";
$slider = true;


if (isset($_GET['p'])) {
    $p = $_GET['p'];
    switch ($p) {
        case "book":
            $page = "book.php";
            $slider = false;
            break;
        case "toygame":
            $page = "toygame.php";
            $slider = false;
            break;
            // case "aboutus":
            //     $page = "aboutus.php";
            //     $slider = false;
            //     break;
            // case "contact":
            //     $page = "contact.php";
            //     $slider = false;
            //     break;
        case "page":
            $page = "page.php";
            $slider = false;
            break;
        case "cart":
            $page = "cart.php";
            $slider = false;
            break;
        case "login":
            $page = "login.php";
            $slider = false;
            break;
        case "register":
            $page = "register.php";
            $slider = false;
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<?php include "includes/head.php"; ?>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <?php include "includes/header.php"; ?>
    <?php if ($slider) {
        include "includes/slider.php";
    } ?>
    <?php include $page; ?>
    <?php include "includes/footer.php"; ?>






    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/magnific-popup.js"></script>
    <!-- Waypoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Countdown JS -->
    <script src="js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="js/nicesellect.js"></script>
    <!-- Flex Slider JS -->
    <script src="js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>