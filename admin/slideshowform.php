<?php
$action = 1;
$title = "";
$subtitle = "";
$description = "";
$link = "";
$shown = "";
$img = "";
$butname = "Add SlideShow";


if (isset($_GET['action']) && $_GET['action'] == 2) {
    $ssid = $_GET['ssid'];
    $result = dbSelect("tbl_Slideshow", "*", "ssid = $ssid", "");
    $row = mysqli_fetch_array($result);

    $action = "3&ssid=" . $ssid;
    $title = $row['title'];
    $subtitle = $row['subtitle'];
    $description = $row['description'];
    $link = $row['link'];
    $shown = $row['shown'];
    $img = $row['img'];
    $butname = "Update ";
}
?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3 float-left">Add SlideShow
        </h1>
        <div class="row" style="clear: both;">
            <div class="col-12">
                <div class="card">
                    <form action="index.php?p=slideshow&action=<?= $action ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $title ?>" />
                        </div>
                        <div class="form-group">
                            <label>SubTitle</label>
                            <input type="text" name="subtitle" class="form-control" value="<?= $subtitle ?>" />
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                value="<?= $description ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" name="link" class="form-control" value="<?= $link ?>" />
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="shown"
                                <?= $shown == "1" ? "checked" : "" ?>>
                            <label class="form-check-label"> Show </label>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="fileimg">
                            <label class="custom-file-label"> Choose Image Max (1900 x 700 px) </label>
                            <p><?= $img ?></p>
                            <input type="hidden" name="oldimg" value="<?= $img ?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="<?= $butname ?>" />
                            <?php
                            if ($butname == "Add SlideShow") {
                            ?>
                            <input type="reset" class="btn btn-secondary" value="Clear" />
                            <?php
                            } else {
                            ?>
                            <input type="button" class="btn btn-secondary" value="Cancel"
                                onClick="window.location.href='index.php?p=slideshow'">
                            <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>