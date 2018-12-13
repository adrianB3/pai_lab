<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Pai</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
</head>
<script src="js/bootstrap.min.js"></script>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center p-5">
                <h4>Meniu</h4>
                <hr>
                <div class="list-group">
                <form action="<?php $PHP_SELF ?>" method="POST" class="list-group">
	                <button type="submit" name="btn" class="list-group-item list-group-item-action" value="1">Afisare</button>
	                <button type="submit" name="btn" class="list-group-item list-group-item-action" value="2">Inserare/Modificare</button>
	                <button type="submit" name="btn" class="list-group-item list-group-item-action" value="3">Cautare dupa nume si prenume</button>
	                <button type="submit" name="btn" class="list-group-item list-group-item-action" value="4">Modificare dba</button>
	            </form>
                </div>
            </div>
            <div class="col-md-8 p-5">
                <hr>
                <?php
                    $btn = $_POST['btn']; 
                    if(isset($btn)){
                        if($btn == 1){
                            require("afisare.php");
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>