<?php
$result = dbSelect("tbl_product", "*", "product_categories='2'", " ");
$num = mysqli_num_rows($result);
?>
<div class="container">
    <div class="product-area section">
        <h2>Toy and Games</h2>
    </div>
    <!-- Start Shop Home List  -->
    <section class="shop-home-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Toy</h1>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
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
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <!-- <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($result_fav)) {
                            ?>
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="images/product/<?= $row['product_img'] ?>" height='140' />
                                    <a href="index.php?add_cart=<?= $row['product_id'] ?>" class="buy"><i
                                            class="fa fa-shopping-bag"></i></a>
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
                    ?> -->
                    <!-- End Single List  -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-section-title">
                                <h1>Games</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single List  -->
                    <!-- <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($result_fav)) {
                            ?>
                    <div class="single-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="list-image overlay">
                                    <img src="images/product/<?= $row['product_img'] ?>" height='140' />
                                    <a href="index.php?add_cart=<?= $row['product_id'] ?>" class="buy"><i
                                            class="fa fa-shopping-bag"></i></a>
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
                    ?> -->
                    <!-- End Single List  -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Home List  -->

</div>