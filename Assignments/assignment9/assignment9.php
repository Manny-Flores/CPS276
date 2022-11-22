<?php
    if(count($_POST) > 0){
        require_once 'classes/insertNote.php';
        $inserter = new noteInsert();
        $output = $inserter->insert();
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
    <h1>Add Notes</h1>
    <p><a href='listNotes'>Display Notes</a></p>
    <?php echo $output ?>
    <form method="post" action="#" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="datetime" class="form-label">Date and Time</label>
            <input type="datetime-local" class="form-control" id="datetime" name="datetime">
        </div>
        <div class="mb-3">
        <label for="note" class="form-label">Note</label>
            <textarea style ="height: 300px;" class="form-control" id="note" name="note"></textarea>
        </div>
        <div class = "mb-3">
            <button type="submit" class="btn btn-primary" name="submitButton" id="submitButton">Submit</button>
        </div>
    </form>
    </div>
  </body>
</html>