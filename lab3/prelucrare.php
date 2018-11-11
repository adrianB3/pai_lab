<?php
    $o = $_GET['opt'];
    if ($o == 1){
        include("afisare.php");
    }
    if ($o == 2){
        include("inserare.html");
    }
    if ($o == 3){
        include("update.html");
    }
    if ($o == 4){
        include("stergere.html");
    }

    // The paths needs to be changed according to your server!
?>