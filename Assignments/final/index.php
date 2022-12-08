<?php
    require_once('pages/routes.php');
?>
<!doctype html>
<html lang="en">
    <head>
		<title>Final Project</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			.error {
				color: red;
				margin-left: 5px;
			}
			.space {
				margin-right: 30px;
			}
			input[type=submit]{
				margin: 10px 0;
			}
			</style>
	</head>

	<body class="container">
        <?php
            echo $nav;
            echo $result[0];
            echo $result[1];
        ?>
	</body>
</html>