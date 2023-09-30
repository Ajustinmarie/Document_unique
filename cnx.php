<?php


$dsn  = 'mysql:host=localhost;dbname=document_unique;charset=utf8';
$user = "root";
$pass = "";
try {
    $cnx = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
    echo 'Une erreur est survenue';


/*
    $dsn  = 'mysql:host=localhost;dbname=u764107237_duer;charset=utf8';
    $user = "u764107237_justin";
    $pass = "Leadership1988@";
    try {
        $cnx = new PDO($dsn, $user, $pass);
    } catch(PDOException $e) {
        echo 'Une erreur est survenue';
*/



}?>