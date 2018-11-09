<?php
    $o = $_GET['opt'];
    if ($o == 1){
        include("afisare.php");
    }
    if ($o == 2){
        include("inserare.html");
    }
    if ($o == 3){
        include("update.php");
    }
    if ($o == 4){
        include("stergere.php");
    }

    // The paths needs to be changed according to your server!
?>