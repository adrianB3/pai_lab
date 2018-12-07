<?php
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "facultate") or die("can't connect to database");
	//mysqli_select_db("facultate") or die("can't select database");
	
	$querry = mysqli_query($conn ,"select * from studenti");
	
	$numOfRes = 1;
	
	if($numOfRes == 0){
		echo "<p>No results</p>";
	}
	else {
		
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nume</th>
      <th scope="col">Varsta</th>
    </tr>
  </thead>
  <tbody>
	<?php 
		while($row=mysqli_fetch_row($querry)){
			echo "<tr>";
			foreach($row as $value){
				echo "<td>".$value."</td>";
			}
			echo "</tr>";
		}
	?>
  </tbody>
</table>
	<?php }
		mysqli_close($conn);
	?>