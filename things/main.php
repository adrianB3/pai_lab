<?php
	$page_title = "Afisare Studenti";
	$template = 'afisare_studenti.php';
	if (isset($_GET['opt'])){
		$opt = $_GET['opt'];
		if($opt==1){
			$page_title = "Afisare Studenti";
			$template = 'afisare_studenti.php';
		}
		if($opt==2){
			$page_title = "Inserare Student";
			$template = 'inserare_student.html';
			
		}
		if($opt==3){
			$page_title = "Update Student";
			$template = 'update_student.php';
		}
		if($opt==4){
			$page_title = "Stergere Student";
			$template = 'stergere_student.php';
		}
	}	
	include('ind.php');
?>