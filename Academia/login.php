<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";

    $con=mysqli_connect($hos,$user,$password,$db)or die("Problemas al conectar");
    mysqli_select_db($con,$db);

    //trabajando con las variables
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $sql=mysqli_query($con,"SELECT * FROM academia WHERE ususrio='".$usuario."' and password='".$password."' " );
    $nr=mysqli_num_rows($sql);
    //Uso de mi condicional
    if($nr==1){
        header("Location:pagina.html");
    }else{
        echo"<script>alert('Usuario Incorrecto')</script>";
        echo"<script>window.location.href=('login.html')</script>";
    }
?>