<?php
    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Eroare la conectarea la baza de date");
    mysql_select_db("lab_pai") or die("Nu se poate deschide baza de date");
    
    $querry = mysql_query("select * from persoane");

    $nr_col = mysql_num_fields($querry);
    $nr_rows = mysql_num_rows($querry);

    echo "<table align=’center’ BORDER=’2’>";
    echo "<tr>";
    echo "<th>Nume</th>";
    echo "<th>Varsta</th>";
    echo "<th>Localitate</th>";
    echo "</tr>";

    if($nr_rows > 0){
        while($row = mysql_fetch_row($querry)){
            echo "<tr>";
            foreach($row as $value){
                echo "<td>$value</td>";
            }
            echo "<tr>";
        }
    }
    else{
        die("Nicio inregistrare");
    }

    mysql_close();
?>