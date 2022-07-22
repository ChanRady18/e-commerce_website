<?php

$result_cla = dbSelect("tbl_product", "*", "product_type='1'", "limit 5 ");
$num_cla = mysqli_num_rows($result_cla);


$result_new = dbSelect("tbl_product", "*", "product_type='2'", " ");
$num_new = mysqli_num_rows($result_new);

$result_fav = dbSelect("tbl_product", "*", "product_type='3'", " ");
$num_fav = mysqli_num_rows($result_fav);

?>

<div class="container">
    <div class="product-area section">
        <h2>All Books</h2>
    </div>

    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Classic Manga</h1>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result_cla)) {
                    ?>
                    <div class="single-list">
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="images/product/<?= $row['product_img'] ?>" height='140' />
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h4 class="title"><a href="#"><?= $row['product_name'] ?></a></h4>
                                    <p class="price with-discount">$<?= $row['product_price'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>New Series</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result_new)) {
                    ?>
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="images/product/<?= $row['product_img'] ?>" height='140' />
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h4 class="title"><a href="#"><?= $row['product_name'] ?></a></h4>
                                    <p class="price with-discount">$<?= $row['product_price'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    }
                    ?>
                    <!-- End Single List  -->
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Modern Favorite</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result_fav)) {
                    ?>
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="images/product/<?= $row['product_img'] ?>" height='140' />
                                    <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 no-padding">
                                <div class="content">
                                    <h4 class="title"><a href="#"><?= $row['product_name'] ?></a></h4>
                                    <p class="price with-discount">$<?= $row['product_price'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        $i++;
                    }
                    ?>
                    <!-- End Single List  -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Home List  -->
</div>