<?php
    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Eroare la conectarea la baza de date");
    mysql_select_db("lab_pai") or die("Nu se poate deschide baza de date");
    
    $nume = $_POST['nume'];
    
    mysql_query("delete from magazin where nume_produs='$nume'");
    $querry = mysql_query("select * from magazin");
    
    
    $nr_col = mysql_num_fields($querry);
    $nr_rows = mysql_num_rows($querry);

    echo "<table align=’center’ BORDER=’2’>";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Nume Produs</th>";
    echo "<th>Pret</th>";
    echo "<th>Cantitate</th>";
    echo "<th>Valoare</th>";
    echo "</tr>";

    if($nr_rows > 0){
        while($row = mysql_fetch_row($querry)){
            echo "<tr>";
            foreach($row as $value){
                echo "<td>$value</td>";
            }
            $valoare = $row[2]*$row[3];
            echo "<td>$valoare</td>";
            echo "<tr>";
            
        }
    }
    else{
        die("Nicio inregistrare");
    }

    mysql_close();
?>