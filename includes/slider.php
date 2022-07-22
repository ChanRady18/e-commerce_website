<?php

$result = dbSelect("tbl_slideshow", "*", "shown='1'", "order by sorder asc");
$num = mysqli_num_rows($result);
?>

<!-- Slider Area -->
<section class="hero-slider">

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">

            <?php
            for ($i = 0; $i < $num; $i++) {
            ?>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $i ?>"
                <?= ($i == 0) ? "class='active'" : "" ?> aria-current="true" aria-label="Slide 1"></button>
            <?php
            }
            ?>
            <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
            <!-- <div class="carousel-item active" data-bs-interval="10000"> -->
            <div class="carousel-item <?php if ($i <= 0) { echo "active";} ?>" data-bs-interval="10000" >
                <img src="images/slideshow/<?=$row['img']?>" class="d-block w-100" alt="...">
                <div style="text-align:left;background-color:black " class="carousel-caption d-none d-md-block">
                    <h1 style="color: orange; "><?= $row['title'] ?></h1>
                    <h3 style="color: orange; "><?= $row['subtitle'] ?></h3>
                    <h6 style="color:orange; "><?= $row['description'] ?></h6>
                </div>
            </div>
            <?php
                $i++;
            }
            ?>
            <!-- <div class="carousel-item" data-bs-interval="2000">
                <img src="images/1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->