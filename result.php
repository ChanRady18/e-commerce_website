<?php include("includes/head.php"); ?>

<div class="content_wrapper">

    <div id="sidebar">
        <div id="sidebar_title">Categories</div>
        <ul id="cats">
            <?php
            getCats();
            ?>
        </ul>

        <div id="sidebar_title">Brands</div>
        <ul id="cats">
            <?php
            getBrands();
            ?>
        </ul>
    </div>

    <div id="content_area">
        <div id="product_box">
            <?php
            if (isset($_GET['search'])) {
                $search_query = $_GET['user_query'];

                $run_query_by_pro_id = mysqli_query($con, "select * from products where product_keywords like '%$search_query%' ");

                while ($row_pro = mysqli_fetch_array($run_query_by_pro_id)) {

                    $pro_id = $row_pro['product_id'];
                    $pro_cat = $row_pro['product_cat'];
                    $pro_brand = $row_pro['product_brand'];
                    $pro_name = $row_pro['product_name'];
                    $pro_price = $row_pro['product_price'];
                    $pro_image = $row_pro['product_image'];

                    echo "
                        <div id='single_product'>
                            <img src='admin/product_image/$pro_image' width ='180'/>
                            <h3>$pro_name</h3>
                            <p id='price'><b>Price : $$pro_price</b></p>
                            <a class='det' href='details.php?pro_id=$pro_id'>Details</a>
                            <a href='index.php?add_cart=$pro_id'>
                                <button id='addtocard' style = 'float:right'>Add to cart</button>
                            </a>
                        </div>";
                }
            }
            ?>

            <?php get_pro_by_cat_id(); ?>

            <?php get_pro_by_brand_id(); ?>

        </div> <!-- product_box -->
    </div>

</div><!-- /.content_wrapper -->

<?php include("includes/footer.php"); ?>