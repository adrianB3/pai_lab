<?php

    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Eroare la conectarea la baza de date");
    mysql_select_db("facultate") or die("Nu se poate deschide baza de date");
  
    $nume = $_POST['numeStudent'];
    $prenume = $_POST['prenumeStudent'];

    $querry = mysql_query("select * from studenti where Nume='$nume' && Prenume='$prenume'");

    $nr_rows = mysql_num_rows($querry);

    if($nr_rows > 0){
        mysql_query("delete from studenti where Nume='$nume' && Prenume='$prenume'");
    }

    else {
        echo "Studentul nu exista in baza de date";
    }

    include("afisare.php");

    mysql_close();
?>