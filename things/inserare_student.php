<?php
	$conn = mysql_connect("localhost", "root", "", "facultate") or die("can't connect to database");
	mysql_select_db("facultate") or die("can't select database");
	
	if(isset($_POST['id']) && isset($_POST['nume']) && isset($_POST['varsta'])){
		$id = $_POST['id'];
		$nume = $_POST['nume'];
		$varsta = $_POST['varsta'];
		$querry = mysql_query("select * from studenti where id=$id");
		$result = mysql_fetch_row($querry);
		if(mysql_num_rows($querry) == 0){
			$querry2 = mysql_query("insert into studenti values($id, '$nume', $varsta)");
			echo "<p>Inserted</p>";
			echo "<a href='http://localhost/main.php'>Go Back</a>";
		}
		else{	
			echo "Duplicate";
		}
	}
	
	
	mysql_close($conn);
?>