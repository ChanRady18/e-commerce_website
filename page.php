<?php
$title = "";
$content = "";
$pageid = "";
if (isset($_GET['pageid'])) {
    $pageid = $_GET['pageid'];
    $result = dbSelect("tbl_page", "*", "pageid = $pageid", "");
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $content = $row['content'];
}
?>

<div class="container">
    <div class="product-area section">
        <h2><?= $title ?> </h2>
        <hr>
        <div>
            <?= $content ?>
        </div>
    </div>
</div>