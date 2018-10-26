<?php
    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Nu se poate conecta la serverul MySql");
    mysql_select_db("lab_pai") or die("Nu se poate selecta baza de date");

    //$nume = $_POST['nume'];
    //$varsta = $_POST['varsta'];

    $query = mysql_querry("select * from persoane");
    $nr_inreg = mysql_num_rows($query);

    if($nr_inreg > 0){
        echo "S-au gasit: ".$nr_inreg." inregistrari";
    }
?>