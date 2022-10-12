<?php
    if(count($_POST) >= 0){
        require_once 'addName.php';
        $addName = new AddNames();
        $output = $addName->addClearNames(); 
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
    <h1>Add Names</h1>
    <form method="post" action="#">
        <button type="submit" class="btn btn-primary" name="addButton" id="addButton">Add Name</button>
        <button type="submit" class="btn btn-primary" name="clearButton" id="clearButton">Clear Names</button>

        <div class="mb-3">
            <label for="nameInput" class="form-label">Enter Name</label>
            <input type="text" class="form-control" id="nameInput" name="nameInput">
        </div>
        <div class="mb-3">
            <label for="nameArea" class="form-label">List of Names</label>
            <textarea style ="height: 500px;" class="form-control" id="nameList" name="nameList"><?php echo $output ?></textarea>
        </div>
    </form>
    </div>
  </body>
</html>