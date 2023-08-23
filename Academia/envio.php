<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";

    $con=mysqli_connect($hos,$user,$password,$db)or die("Problemas al conectar");
    mysqli_select_db($con,$db);

    //trabajando con las variables
    $nombres=$_POST["nombres"];
    $direccion=$_POST["direccion"];
    $correo=$_POST["correo"];
    $comentarios=$_POST["comentarios"];

    $sql="INSERT INTO datos VALUES ('$nombres','$direccion','$correo','$comentarios')";

    $ejecutar=mysqli_query($con,$sql);

    //Usamos las condicionales
    if($ejecutar){
        echo"<script>alert('Problemas al Enviar')</script>";
        echo"<script>window.location.href=('index.html')</script>";
    }
    else{
        echo"<script>alert('Datos enviados correctamente')</script>";
        echo"<script>window.location.href=('index.html')</script>";
    }
?>