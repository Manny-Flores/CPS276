<?php
    $listOutput = "<ul>";

    for($i = 1; $i <= 4; $i++){
        $listOutput .= <<<HTML
                <li>
                    $i
                    <ul>
HTML;
        for($j = 1; $j <= 5; $j++){
            $listOutput .= <<<HTML
                        <li>$j</li>
HTML;
        }
        $listOutput .= <<<HTML
                    </ul>
                </li>
HTML;
    }
    $listOutput .= "</ul>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Excercise 1</title>
</head>
<body>
      <?php echo $listOutput; ?>
</body>
</html>