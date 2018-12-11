<?php 
	$connection = OCILogon("student", "student", "XE");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Hello</title>

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
<div class="container text-center">
	<h3>Choose an option</h3>
	<form action="<?php $PHP_SELF ?>" method="get" class="list-group">
	  <button type="submit" name="btn" class="list-group-item list-group-item-action" value="1">Afisare</button>
	  <button type="submit" name="btn" class="list-group-item list-group-item-action" value="2">Inserare/Modificare</button>
	  <button type="submit" name="btn" class="list-group-item list-group-item-action" value="3">Cautare dupa nume si prenume</button>
	  <button type="submit" name="btn" class="list-group-item list-group-item-action" value="4">Modificare dba</button>
	</form>
	<?php 
	if (isset($_GET['btn'])){
		if($_GET['btn'] == 1){ 
		?>
		<table class="table mt-5">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">ID</th>
			  <th scope="col">Nume</th>
			  <th scope="col">Prenume</th>
			  <th scope="col">An</th>
			  <th scope="col">Salariu</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
			$stmt = OCIParse($connection, "SELECT * from angajati1");
			OCIExecute($stmt);
			while(OCIFetch($stmt)){
				$id = OCIResult($stmt, "ID");
				$nume = OCIResult($stmt, "NUME");
				$prenume = OCIResult($stmt, "PRENUME");
				$an = OCIResult($stmt, "AN");
				$salariu = OCIResult($stmt, "SALARIU");
				print("<tr>".
				"<th scope='row'> $id </th>".
				"<td>$nume</td>".
				"<td>$prenume</td>".
				"<td>$an</td>".
				"<td>$salariu</td>".
				"</tr>"
				);
			}			
		?>
  </tbody>
</table>
<?php } ?>

<?php if($_GET['btn'] == 3){ 
		?>
		<h4 class="mt-5">Inserati numele si prenumele</h4>
		<form action="<?php $PHP_SELF ?>" method="get">
			<div class="form-group">
				<input type="hidden" name="btn" value=3>
				<label>Nume</label>
				<input type="text" class="form-control" id="nume" name="nume_form">
			 </div>
			 <div class="form-group">
				<label>Prenume</label>
				<input type="text" class="form-control" id="prenume" name="prenume_form">
			 </div>
			 <button class="btn btn-primary" value="submit">Cauta</button>
			 <button class="btn btn-warning" value="reset">Reset</button>
		</form>
		
		<table class="table mt-5">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">ID</th>
			  <th scope="col">Nume</th>
			  <th scope="col">Prenume</th>
			  <th scope="col">An</th>
			  <th scope="col">Salariu</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
			if(isset($_GET['nume_form']) && isset($_GET['prenume_form'])){
			$nume1 = $_GET['nume_form'];
			$prenume1 = $_GET['prenume_form'];
			$stmt = OCIParse($connection, "SELECT * from angajati1 where nume='$nume1' and prenume='$prenume1'");
			OCIExecute($stmt);
			while(OCIFetch($stmt)){
				$id = OCIResult($stmt, "ID");
				$nume = OCIResult($stmt, "NUME");
				$prenume = OCIResult($stmt, "PRENUME");
				$an = OCIResult($stmt, "AN");
				$salariu = OCIResult($stmt, "SALARIU");
				print("<tr>".
				"<th scope='row'> $id </th>".
				"<td>$nume</td>".
				"<td>$prenume</td>".
				"<td>$an</td>".
				"<td>$salariu</td>".
				"</tr>"
				);
			}
						
		?>
  </tbody>
</table>
<?php } } ?>

<?php if($_GET['btn'] == 2){ 
		?>
		<h4 class="mt-5">Inserati numele,prenumele si anul</h4>
		<form action="<?php $PHP_SELF ?>" method="get">
			<div class="form-group">
				<input type="hidden" name="btn" value=2>
				<label>Nume</label>
				<input type="text" class="form-control" id="nume" name="nume_form">
			 </div>
			 <div class="form-group">
				<label>Prenume</label>
				<input type="text" class="form-control" id="prenume" name="prenume_form">
			 </div>
			 <div class="form-group">
				<label>An</label>
				<input type="text" class="form-control" id="an" name="an_form">
			 </div>
			 <div class="form-group">
				<label>Noul salariu</label>
				<input type="text" class="form-control" id="salariu" name="salariu_form">
			 </div>
			 <button class="btn btn-primary" value="submit">Cauta</button>
			 <button class="btn btn-warning" value="reset">Reset</button>
		</form>
		
		<table class="table mt-5">
		  <thead class="thead-dark">
			<tr>
			  <th scope="col">ID</th>
			  <th scope="col">Nume</th>
			  <th scope="col">Prenume</th>
			  <th scope="col">An</th>
			  <th scope="col">Salariu</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
			if(isset($_GET['nume_form']) && isset($_GET['prenume_form']) && isset($_GET['an_form']) && isset($_GET['salariu_form'])){
			$nume1 = $_GET['nume_form'];
			$prenume1 = $_GET['prenume_form'];
			$an1 = $_GET['an_form'];
			$salariu1 = $_GET['salariu_form'];
			$stmt = OCIParse($connection, "SELECT * from angajati1 where nume='$nume1' and prenume='$prenume1' and an='$an1'");
			OCIExecute($stmt);
			while(OCIFetch($stmt)){
				$id = OCIResult($stmt, "ID");
				$nume = OCIResult($stmt, "NUME");
				$prenume = OCIResult($stmt, "PRENUME");
				$an = OCIResult($stmt, "AN");
				$salariu = OCIResult($stmt, "SALARIU");
				print("<tr>".
				"<th scope='row'> $id </th>".
				"<td>$nume</td>".
				"<td>$prenume</td>".
				"<td>$an</td>".
				"<td>$salariu</td>".
				"</tr>"
				);
			}
						
		?>
  </tbody>
</table>
<?php } } ?>

<?php
} 
?>
</div>
</body>
</html>
