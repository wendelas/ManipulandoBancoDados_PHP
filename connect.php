<?php

declare(strict_types=1);

$pdo = null;

try{
    $pdo = new PDO('mysql:host=mysql;dbname=exemplo','root','admin');
       
}catch (Exception $e){
        echo $e->getMessage();
        die();
    }

