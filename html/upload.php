<?php
require "nav.php";
require "include.php";
?>

<div class="container mt-5">
    <h2 class="mb-4">Upload XML File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="file" class="form-label">Choose XML file</label>
            <input type="file" class="form-control" id="file" name="file" accept=".xml" required>
        </div>
        <button type="submit" class="btn btn-primary mb-4">Upload</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_FILES["file"]){
                $file = $_FILES['file'];
                $fileTmpName = $file['tmp_name'];
                $xml = new DOMDocument;
                $xml->load($fileTmpName);
                Validate($xml);
            }
        }
    ?>
</div>

<?php
require "bot.php"
?>