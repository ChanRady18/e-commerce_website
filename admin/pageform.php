<?php
$pageid = "";
$title = "";
$content = "";

if (isset($_GET['pageid'])) {
    $pageid = $_GET['pageid'];
    $result =  dbSelect("tbl_page", "*", "pageid = $pageid", "");
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $content = $row['content'];
}

?>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3 float-left">Update Page
        </h1>
        <div class="row" style="clear: both;">
            <div class="col-12">
                <div class="card">
                    <form action="index.php?p=page&action=1&pageid<?= $row['pageid'] ?>" method="post">
                        <div class="form-group">
                            <label>
                                <h6>Title</h6>
                            </label>
                            <input type="text" name="title" class="form-control" value="<?= $title ?>" />
                        </div>
                        <div class="form-group">
                            <label>
                                <h6>Content</h6>
                            </label>
                            <textarea name="content" id="content" class="form-control"> <?= $content ?> </textarea>
                        </div>
                        <form action="" class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary" />
                            <input type="button" value="Cancel" class="btn btn-secondary"
                                onclick="window.location.href='index.php?p=page'" />
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
tinymce.init({
    selector: "#content",
    height: "700",
    plugins: "insertdatetime media image preview code",
    toolbar: "undo redo |  bold italic | alignleft alignright aligncenter alignjustify | image media | preview | code",
    image_title: true,
    image_caption: true,
    automatic_uploads: true,
    image_advtab: true,
    file_picker_types: "image media",

    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement("input");
        input.setAttribute("type", "file");
        if (meta.filetype == "image") {
            input.setAttribute("accept", "image/*");
        }
        if (meta.filetype == "media") {
            input.setAttribute("accept", "video/*");
        }

        input.onchange = function() {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                var id = "blobid" + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(",")[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            };
            reader.readAsDataURL(file);
        };
        input.click();
    },
});
</script>