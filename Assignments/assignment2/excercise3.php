<?php
    $tableOutput = '<table border="1">';
    $numRows = 15;
    $numCells = 5;

    for($i = 1; $i <= $numRows; $i++){
        $tableOutput .= "<tr>";
        for($j = 1; $j <= $numCells; $j++){
            $tableOutput .= <<<HTML
            <td> Row $i Cell $j </td>
HTML;
        }
        $tableOutput .= "</tr>";
    }
    $tableOutput .= "</table>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Excercise 3</title>
</head>
<body>
      <?php echo $tableOutput; ?>
</body>
</html>