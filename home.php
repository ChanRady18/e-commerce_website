 <?php

    $result = dbSelect("tbl_product", "*", "product_pop='1'", "");
    $num = mysqli_num_rows($result);

    $result_cla = dbSelect("tbl_product", "*", "product_type='1'", " limit 3");
    $num_cla = mysqli_num_rows($result_cla);


    $result_new = dbSelect("tbl_product", "*", "product_type='2'", " limit 3");
    $num_new = mysqli_num_rows($result_new);

    $result_fav = dbSelect("tbl_product", "*", "product_type='3'", " limit 3");
    $num_fav = mysqli_num_rows($result_fav);



    ?>

 <!-- Start Product Area -->
 <div class="product-area section">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title">
                     <h2>Trending Item</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <div class="product-info">
                     <div class="tab-content" id="myTabContent">
                         <!-- Start Single Tab -->
                         <div class="tab-pane fade show active" id="man" role="tabpanel">
                             <div class="tab-single">
                                 <div class="row">
                                     <?php
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                     <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                         <div class="single-product">
                                             <div class="product-img">
                                                 <a href="#">
                                                     <img class="default-img"
                                                         src="images/product/<?= $row['product_img'] ?>" alt="#">
                                                     <img class="hover-img"
                                                         src="images/product/<?= $row['product_img'] ?>" alt="#">
                                                 </a>
                                                 <div class="button-head">
                                                     <div class="product-action">
                                                         <a title="Wishlist" href="#"><i
                                                                 class=" ti-heart "></i><span>Add to
                                                                 Wishlist</span></a>
                                                     </div>
                                                     <div class="product-action-2">
                                                         <a title="Add to cart"
                                                             href="index.php?add_cart=<?= $row['product_id'] ?>">Add to
                                                             cart</a>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="product-content">
                                                 <h3><a href="product-details.html"><?= $row['product_name'] ?></a></h3>
                                                 <div class="product-price">
                                                     <span>$<?= $row['product_price'] ?></span>
                                                 </div>
                                             </div>

                                         </div>

                                     </div><?php
                                                $i++;
                                            }
                                                ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Product Area -->


 <section class="section free-version-banner">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-8 offset-md-2 col-xs-12">
                 <div class="section-title mb-60">
                     <span class="text-white wow fadeInDown" data-wow-delay=".2s"
                         style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Mugiwarahub</span>
                     <br>
                     <h5 class="text-white wow fadeInUp" data-wow-delay=".4s"
                         style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">យើងសង្ឃឹមថាអ្នក
                         អាចស្វែងរក<br> <br> សុបិន្តនៅទីនេះ.</h5>
                     <p class="text-white wow fadeInUp" data-wow-delay=".6s"
                         style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                         <br> សំុចាត់ទុកទីនេះជាភាពកក់ក្តៅ
                     </p>

                     <div class="button">
                         <a href="#" target="_blank" rel="nofollow" class="btn wow fadeInUp"
                             data-wow-delay=".8s">Explore Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

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
                    ?>
                 <!-- End Single List  -->
             </div>
         </div>
     </div>
 </section>
 <!-- End Shop Home List  -->

 <!-- Start Shop Services Area -->
 <section class="shop-services section home">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-rocket"></i>
                     <h4>ដឹកជញ្ជូនដោយឥតគិតថ្លៃ</h4>
                     <p>ពេលចំណាយលើស $១០០</p>
                 </div>
                 <!-- End Single Service -->
             </div>
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-reload"></i>
                     <h4>ត្រឡប់មកវិញដោយឥតគិតថ្លៃ</h4>
                     <p>ក្នុងរយៈពេល 30 ថ្ងៃ</p>
                 </div>
                 <!-- End Single Service -->
             </div>
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-lock"></i>
                     <h4>ទូទាត់ប្រកបដោយសុវត្ថិភាព</h4>
                     <p>ការទូទាត់សុវត្ថិភាព 100%</p>
                 </div>
                 <!-- End Single Service -->
             </div>
             <div class="col-lg-3 col-md-6 col-12">
                 <!-- Start Single Service -->
                 <div class="single-service">
                     <i class="ti-tag"></i>
                     <h4>តម្លៃ​ពិសេស</h4>
                     <p>តម្លៃ​ សមរម្យ</p>
                 </div>
                 <!-- End Single Service -->
             </div>
         </div>
     </div>
 </section>
 <!-- End Shop Services Area -->

 <!-- Start Shop Newsletter  -->
 <section class="shop-newsletter section">
     <div class="container">
         <div class="inner-top">
             <div class="row">
                 <div class="col-lg-8 offset-lg-2 col-12">
                     <!-- Start Newsletter Inner -->
                     <div class="inner">
                         <h4>ចុះឈ្មោះដំបូង</h4>
                         <p> ចុះឈ្មោះដំបូងដើម្បីបញ្ចុះតម្លៃ <span>10%</span>ក្នុងការទិញលើកដំបូង</p>
                         <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                             <input name="EMAIL" placeholder="Your email address" required="" type="email">
                             <button class="btn">Subscribe</button>
                         </form>
                     </div>
                     <!-- End Newsletter Inner -->
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Shop Newsletter -->