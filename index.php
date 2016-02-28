<?php
if(isset($_SESSION['user'])){
    
    header('location:home.php');
    
}else{
    
    echo'
    <h1>Usted no esta autorizado para acceder a esta aplicacion</h1>
    <p><a href="login.php">Login</a></p>
    ';
}


?>