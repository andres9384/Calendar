<?php 

$server = 'localhost';
$username = 'root';
$pasword = '';
$database = 'login';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$pasword);
} catch(PDOException $e){
    die('Coneccion fallida:'.$e->getMessage());
    
}
 ?>