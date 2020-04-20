<?php  

require 'database.php';
$message = '';   
if (!empty($_POST['email']) && !empty($_POST['password'])){

    $sql= "INSERT INTO user (email, password) VALUE (:email, :password)";
    $stml = $conn ->prepare($sql);
    $stml->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $stml->bindParam(':password',$password);

if ($stml->execute()){

    $message = 'ha sido creado un usuario exitosamente';
    }
else{
    $message  = 'lo sentimos ah ocurrido un error creando su cuenta ';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
<?php 
if (!empty($message)):?>
<p style="text-align:center;"><?=$message   ?> </p>
<?php endif; ?>  
 
<center>  
<div>
    <h1>Registro</h1>
<form action="signup.php" method="post">

<input type="email" name="email" placeholder="Ingrese gmail" id="casilla" required><br>
<input type="password" name="password" placeholder="ingrese contraseña" id="casilla" required><br>
<input type="password" name="verific_password" placeholder="verificacion de contraseña " id="casilla" ><br>

<input type="submit" value="submit" name="submit" placeholder="boton" id="boton"><br>

</form>
<footer>
    <a href="login.php" style="text-decoration: none; color: grey;">Login</a>
</footer>
</div></center>


</body>
</html>