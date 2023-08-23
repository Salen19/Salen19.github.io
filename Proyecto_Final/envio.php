<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="turismo";

    $con=mysqli_connect($host,$user,$password,$db);
    if(!$con){
        die(" :( ");
    }
    mysqli_select_db($con,$db);

    //trabajando con las variables
    $usuario=$_POST["usuario"];
    $correo=$_POST["correo"];
    $comentarios=$_POST["comentarios"];

    $sql="INSERT INTO contacto VALUES ('$usuario','$correo','$comentarios')";

    $ejecutar=mysqli_query($con,$sql);

    //Usamos las condicionales
    if($ejecutar){
        echo"<script>alert('Datos enviados correctamente')</script>";
        echo"<script>window.location.href=('index.html')</script>";
    }
    else{
        echo"<script>alert('Problemas al Enviar')</script>";
        echo"<script>window.location.href=('index.html')</script>";
    }
?>