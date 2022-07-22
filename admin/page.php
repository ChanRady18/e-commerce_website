<?php

$error = -1;
$errormsg = "";

 if (isset($_GET['action']) && $_GET['action'] == "1") {
          $pageid = $_GET['pageid'];
   $title = $_POST['title'];
   $content = $_POST['content'];
    $date = date('Y/m/d H:i:s');
     $data = ["title" => "$title", "content" => "$content", "lastupdated" => $date];
     $result = dbUpdate("tbl_page", $data, "pageid =$pageid", " ");
}
$result = dbSelect("tbl_page", "*", "", "");

?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3 float-left"><b>Page</b> </h1>
        <?php

        ?>
        <div class="row " style="clear:both">
            <div class="col-12">
                <div class="card">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= substr(htmlspecialchars($row['content']), 0, 300) . "..." ?></td>
                            <td><?= $row['lastupdated'] ?></td>
                            <td>
                                <a href="index.php?p=pageform&pageid=<?= $row['pageid'] ?>" class="link"> <i
                                        class="align-middle" data-feather="edit"></i> </a>
                            </td>
                        </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Button trigger modal -->