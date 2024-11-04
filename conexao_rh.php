<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "login_rh"; //unica coisa que muda

if ($con = mysqli_connect($server, $user, $pass, $bd)){
    echo "conectado";
} else{
    echo "erro!";
}