<?php

    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Eroare la conectarea la baza de date");
    mysql_select_db("facultate") or die("Nu se poate deschide baza de date");

    $marca = $_POST['marca_form'];
    $nume = $_POST['nume_form'];
    $prenume = $_POST['prenume_form'];
    $anStudiu = $_POST['anstudiu_form'];

    $numeorg = $_POST['nume_org'];
    $prenumeorg = $_POST['prenume_org'];

    mysql_query("update studenti set Marca='$marca',Nume='$nume',Prenume='$prenume',An_Studiu='$anStudiu' where Nume='$numeorg' and Prenume='$prenumeorg')");
    include("afisare.php");

    mysql_close();
?>