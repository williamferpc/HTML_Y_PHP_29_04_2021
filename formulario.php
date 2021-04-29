<?php
    echo "<h1>Informacion ingresada</h1>";
    echo "Su nombre es: ".$_REQUEST["nombre"];
    echo "<br>Su Edad es: ".$_REQUEST["edad"];
    echo "<br>Su genero es: ".$_REQUEST["genero"];
    echo "<br>Su correo electronico es: ".$_REQUEST["email"];
    if(isset($_REQUEST["terminos"])){
        echo "<br>Acepto los terminos y condiciones: SI";
    }else{
        echo "<br>Acepto los terminos y condiciones: NO";
    }
?>