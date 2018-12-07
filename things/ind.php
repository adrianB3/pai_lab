<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>lab 3</title>
	<meta name="description" content="lab 3">
	<link rel="stylesheet" href="css/styles.css?v=1.0">
	<link href="css/bootstrap.css" rel="stylesheet" />

<link href="css/bootstrap-theme.css" rel="stylesheet" />
</head>
<script src="js/bootstrap.min.js"></script>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-4 text-center p-5">
                <h3 style="background-color: aliceblue;">Admin Facultate</h3>
                <hr>
				<div class="p-3">
					<div class="list-group">
						<a href="http://localhost/main.php?opt=1" class="list-group-item list-group-item-action"> 
							Afisare Studenti
						</a>
						<a href="http://localhost/main.php?opt=2" class="list-group-item list-group-item-action">
							Inserare student
						</a>
						<a href="http://localhost/main.php?opt=3" class="list-group-item list-group-item-action">
							Update date student
						</a>
						<a href="http://localhost/main.php?opt=4" class="list-group-item list-group-item-action">
							Stergere student
						</a>
					 </div>
				</div>
				<hr>
            </div>
			<div class="col-md-8 p-5">
				<h4> <?php echo $page_title ?> </h4>
				<hr>
				<?php include($template); ?>
				<hr>
			</div>
        </div>
    </div>
</body>
</html>