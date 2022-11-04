<?php
    if(count($_POST) > 0){
        require_once 'classes/fileUploadProc.php';
        $uploader = new fileUploadProc();
        $output = $uploader->upload();
    }else{
      $output = "";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <h1>File Upload</h1>
    <p><a href='fileList'>Show File List</a></p>
    <?php echo $output ?>
    <form method="post" action="#" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="fileName" class="form-label">File Name</label>
            <input type="text" class="form-control" id="fileName" name="fileName">
        </div>
        <div class="mb-3">
            <input type="file" class="form-control form-control-sm" id="file" name="file">
        </div>
        <div class = "mb-3">
            <button type="submit" class="btn btn-primary" name="submitButton" id="submitButton">Upload File</button>
        </div>
    </form>
    </div>
  </body>
</html>