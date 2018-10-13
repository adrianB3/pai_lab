<?php
$link = mysqli_connect("127.0.0.1", "root", "wrappi5nG!@#1"); // wtf, password in plain sight, php sucks

if (!$link) {
    echo "Eroare: Nu a fost posibilă conectarea la MySQL." . PHP_EOL;
    echo "Valoarea errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Valoarea error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Succes: Conexiunea la MySQL a fost stabilită! Baza de date my_db este minunată." . PHP_EOL;
echo "Informație despre host: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>