<?php
    if(count($_POST) >= 0){
        require_once 'directory_creator.php';
        $directoryCreator = new CreateDirectory();
        $output = $directoryCreator->create();
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <h1>File and Directory Assignment</h1>
    <p>Enter a folder name and the contents of a file. Folder names should contain alphanumeric characters only.</p>
    <?php echo $output ?>
    <form method="post" action="#">
        <div class="mb-3">
            <label for="folderName" class="form-label">Folder Name</label>
            <input type="text" class="form-control" id="folderName" name="folderName">
        </div>
        <div class="mb-3">
            <label for="fileContent" class="form-label">File Content</label>
            <textarea style ="height: 300px;" class="form-control" id="fileContent" name="fileContent"></textarea>
        </div>
        <div class = "mb-3">
            <button type="submit" class="btn btn-primary" name="submitButton" id="submitButton">Add Name</button>
        </div>
    </form>
    </div>
  </body>
</html>