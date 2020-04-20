
<?php 
session_start();
if(isset($_SESSION['user_id'])){
    header('location: /login-php');
}

require ('database.php');

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $record = $conn->prepare('SELECT id,email,password FROM user WHERE email=:email');
    $record->bindParam(':email', $_POST['email']);
    $record ->execute();
    $result = $record->fetch(PDO::FETCH_ASSOC);
    $message = '';
    
    if(count($result) > 0 && password_verify($_POST['password'],$result['password'])){
        $_SESSION['user_id'] = $result['id'];
        header('location: /login-php');
    } else{
        $message = 'lo siento pero sus credenciales no coinciden ';
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body{
    background-color: #3498DB;
    font-size: 20px;

}
div {
    background-color: white;
    border-radius: 10px;
    display: inline-block;
    
   margin-top: 5%;

}

#casilla{
    background-color: #D5D8DC;
    margin: 6px;
    width: 400px;
    height: 30px;
    border-radius: 10px;
    text-align: center;
}
#boton{
    margin: 6px 6px 30px 6px;
    color: white;
    width:200px ;
    height: 35px;
    border-radius: 5px;
    background-color: #2980B9;
    border:#2980B9 solid 1px;
    font-weight: bold;
    font-size: 20px;

}
#boton:hover{
    background:green;
    border-color:green;


}
footer{
    background-color:#D5D8DC ;
    padding: 0px 62px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    align-items: center;
    width: 293px;
    height: 100px;
    color: yellow;  
    display: flex;
    justify-content: center;
}

    </style>
    
</head>
<body>
   
<?php 
require 'partial/header.php';

?>    
<?php if(!empty($message)) : ?>
<p style="text-align:center;"> <?= $message ?></p>
<?php endif; ?>
<center>  
<div>
   <img src="assets/img/login.png" width="250px">
<form action="login.php" method="post">
<input type="email" name="email" placeholder="GMAIL" id="casilla" required><br>
<input type="password" name="password" placeholder="PASSWORD" id="casilla" required><br>

<input type="submit" value="submit" name="submit" placeholder="boton" id="boton"><br>

</form>
<footer>
    <a href="http://" style="text-decoration: none; color: grey;">Olvido su contraseña?</a>
</footer>
</div></center>



</body>
</html>