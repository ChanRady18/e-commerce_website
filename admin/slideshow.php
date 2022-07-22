<?php
$result = dbSelect("tbl_slideshow", "*", "", "order by sorder asc");
$num = mysqli_num_rows($result);
$recperpage = RECPERPAGE;
$pagenum = ceil($num / $recperpage);
$offset = 0;
if (isset($_GET['pp'])) {
    $offset = ($_GET['pp'] - 1) * $recperpage;
}
$result =  dbSelect("tbl_slideshow", "*", "", "order by sorder asc limit $recperpage offset $offset ");

$error = -1;
$errmsg = "";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "0":
            $ssid = $_GET['ssid'];
            $file = $_GET['file'];
            $result = dbDelete("tbl_slideshow", "ssid=$ssid");
            unlink("../images/slideshow/$file");
            if ($result)
                $error = 0;
            $errmsg = "A Slideshow has been Delete Sucessfully !";

            break;
        case "1":
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $description = $_POST['description'];
            $link = $_POST['link'];

            $result = dbSelect("tbl_slideshow", "max(sorder) ", "", "");
            $row = mysqli_fetch_array($result);
            $sorder = $row[0] + 1;
            $shown = "0";
            if (isset($_POST['shown'])) {
                $shown = "1";
            }

            $img = "noname.jpg";
            // if (!empty($_FILES['fileimg']) && $_FILES['fileimg']['size'] > 0) {
            //     $img = "Slideshow_" . time() . "." . pathinfo($_FILES['fileimg']['name'], PATHINFO_EXTENSION);
            //     $path = "images/slideshow/";
            //     move_uploaded_file($_FILES['fileimg']['tmp_name'], $path . $img);

            //     $thumbnailimg = resize_image($path . $img, 50, 50);
            //     imagejpeg($thumbnailimg, $path . " thumbnail/" . $img);
            // }

            if (!empty($_FILES['fileimg']) && $_FILES['fileimg']['size'] > 0) {
                $img = "Slideshow_" . time() . "." . pathinfo($_FILES['fileimg']['name'], PATHINFO_EXTENSION);
                $path = "../images/slideshow/";
                move_uploaded_file($_FILES['fileimg']['tmp_name'], $path . $img);



                $data = [
                    "title" => "$title", "subtitle" => "$subtitle", "description" => "$description",
                    "link" => "$link", "shown" => "$shown", "sorder" => $sorder, "img" => "$img"
                ];
                $result = dbInsert("tbl_slideshow", $data);
            }
            // $data = [
            //     "title" => "$title", "subtitle" => "$subtitle", "description" => "$description",
            //     "link" => "$link", "shown" => "$shown", "sorder" => $sorder, "img" => "$img"
            // ];
            // $result = dbInsert("tbl_slideshow", $data);

            if ($result) {
                $error = 0;
                $errmsg = "A slideshow  has been added Successfully !";
            } else {
                $error = 1;
                $errmsg = "Failed to add a slideshow ";
            }
            break;
        case "3":
            $ssid = $_GET['ssid'];
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $description = $_POST['description'];
            $link = $_POST['link'];

            $shown = "0";
            $oldimg = $_POST['oldimg'];

            $img = "";

            if (isset($_POST['shown'])) {
                $shown = "1";
            }
            if (!empty($_FILES['fileimg']) && $_FILES['fileimg']['size'] > 0) {
                $img = "Slideshow_" . time() . "." . pathinfo($_FILES['fileimg']['name'], PATHINFO_EXTENSION);
                $path = "../images/slideshow/";
                move_uploaded_file($_FILES['fileimg']['tmp_name'], $path . $img);
                unlink($path . $oldimg);
            } else {
                $img = $oldimg;
            }
            $data = [
                "title" => "$title", "subtitle" => "$subtitle", "description" => "$description",
                "link" => "$link", "shown" => "$shown", "img" => "$img"
            ];
            $result = dbUpdate("tbl_slideshow", $data, "ssid=$ssid");
            if ($result) {
                $error = 0;
                $errmsg = "A SlideShow has been updated Sucessfully";
            }

            break;
        case "4":
            $ssid = $_GET['ssid'];
            $shown = ($_GET['shown'] == "1" ? "0" : "1");
            $data = ["shown" => "$shown"];
            dbUpdate("tbl_slideshow", $data, "ssid=$ssid ");
            break;
    }
}

?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3 float-left"><b>SlideShow</b>
        </h1>
        <a href="index.php?p=slideshowform" class="btn btn-warning float-right">Add SlideShow</a>
        <div style="clear:both"></div>
        <!--alert message -->
        <?php
        if ($error != -1) {
        ?>
        <div class="alert alert-info" role="alert">
            <?= $errmsg ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
        }
        ?>
        <!--end alert message -->
        <div class="row " style="clear:both">
            <div class="col-12">
                <div class="card">
                    <?php
                    if ($num > 0) {
                    ?>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>SubTitle</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><img src="../images/slideshow/<?= $row['img'] ?>" width="50px" />
                            </td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['subtitle'] ?></td>
                            <td><?= $row['description'] ?></td>
                            <td><?= $row['link'] ?></td>
                            <td width="120px">
                                <a href="index.php?p=slideshow&action=4&shown=<?= $row['shown'] ?>&ssid=<?= $row['ssid'] ?>"
                                    class="link"> <i class="align-middle"
                                        data-feather="<?= ($row['shown'] == '1') ? "eye" : "eye-off" ?>"></i> </a>
                                <a href="index.php?p=slideshow&action=0&file=<?= $row['img'] ?>&ssid=<?= $row['ssid'] ?>"
                                    data-target="#deleteModal<?= $row['ssid'] ?>" class="link"> <i class="align-middle"
                                        data-feather="trash"></i> </a>
                                <a href="index.php?p=slideshowform&action=2&ssid=<?= $row['ssid'] ?>" class="link"> <i
                                        class="align-middle" data-feather="edit"></i> </a>

                            </td>
                        </tr>
                        <?php
                                $i++;
                            }
                            ?>
                        <?php
                    } else {
                        echo "<p> NO Slideshow </p> ";
                    }
                        ?>
                    </table>
                    <?php
                        if ($pagenum > 1) {
                        ?>
                    <nav>
                        <ul class="pagination justify-content-end">
                            <li class=" page-item"><a class="page-link" href="index.php?p=slideshow&&pp=1">Previous</a>
                            </li>
                            <?php
                                    for ($i = 1; $i <= $pagenum; $i++) {
                                    ?>
                            <?php
                                    }
                                    ?>
                            <li class="page-item"><a class="page-link"
                                    href="index.php?p=slideshow&&pp=<?= $pagenum ?>">Last</a></li>
                        </ul>
                    </nav>
                    <?php
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Button trigger modal -->