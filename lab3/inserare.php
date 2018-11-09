<?php

    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Eroare la conectarea la baza de date");
    mysql_select_db("facultate") or die("Nu se poate deschide baza de date");

    $marca = $_POST['marca_form'];
    $nume = $_POST['nume_form'];
    $prenume = $_POST['prenume_form'];
    $anStudiu = $_POST['anstudiu_form'];

    $querry = mysql_query("insert into studenti values('$marca','$nume','$prenume',$anStudiu)");
    include("afisare.php");

    mysql_close();
?>