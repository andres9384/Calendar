<?php
session_start();

require 'database.php';
if(isset($_SESSION['user_id'])){
    $record = $conn->prepare('SELECT id , email , password FROM user WHERE id = :id ');
    $record->bindParam(':id',$_SESSION['user_id']);
    $record->execute();
    $result = $record->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if(count($result) > 0){
        $user = $result;

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets\css\style.css">
</head>
<body>
    
<?php 
require 'partial/header.php';

?>
<?php 
if(!empty($user)): ?>
<br>Bienvenido. <?= $user['email']?>
<br>tu estas satisfactoriamente registrado 

<a href="logout.php">Logout</a>

<?php  else:?>
    <h1>Bienvenido inicia sesion</h1>

<a href="login.php">Iniciar sesion</a> or
<a href="signup.php">Registarse</a> 

<?php  endif;?> 


</body>
</html>