<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afisare studenti</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md text-center p-5">
                <h3>Afisare Studenti</h3>
                <hr>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Nume</th>
                    <th scope="col">Prenume</th>
                    <th scope="col">An Studiu</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    mysql_connect("localhost", "root", "wrappi5nG!@#") or die("Eroare la conectarea la baza de date");
                    mysql_select_db("facultate") or die("Nu se poate deschide baza de date");

                    $querry = mysql_query("select * from studenti");


                    $nr_col = mysql_num_fields($querry);
                    $nr_rows = mysql_num_rows($querry);

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
                </tbody>
                </table>
                <a href="index.html" class="btn btn-outline-primary">Home</a>
            </div>
        </div>
    </div>
</body>
</html>