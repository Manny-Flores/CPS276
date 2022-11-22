<?php
    if(count($_POST) > 0){
        require_once 'classes/insertNote.php';
        $inserter = new noteInsert();
        $output = $inserter->returnNote();
    }else{
      $output = "";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <h1>Display Notes</h1>
    <p><a href='assignment9'>Add Notes</a></p>
    <form method="post" action="#" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="start" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start" name="start">
        </div>
        <div class="mb-3">
            <label for="end" class="form-label">End Date</label>
            <input type="date" class="form-control" id="end" name="end">
        </div>
        <div class = "mb-3">
            <button type="submit" class="btn btn-primary" name="submitButton" id="submitButton">Get Notes</button>
        </div>
    </form>
    <?php echo $output ?>
    </div>
  </body>
</html>