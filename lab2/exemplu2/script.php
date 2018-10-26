<?php
    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Nu se poate conecta la serverul MySql");
    mysql_select_db("pai_lab") or die("Nu se poate selecta baza de date");

    $nume = $_POST['nume'];
    $varsta = $_POST['varsta'];

    $query = mysql_querry("select * from persoane where nume='$nume' and varsta='$varsta'");
    $nr_inreg = mysql_num_rows($query);

    if($nr_inreg > 0){
        
    }
?>