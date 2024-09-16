<?php
//conectar a la bd
$conexion  = new mysqli("localhost","root","","diciembre");

//recibimos datos de la formulario html
$materia = $_POST("materia");

//generamos la consulta para dar de alta en la bd
$alta = "INSERT INTO materia(nombre) VALUE (`$materia`)"


//ejecutamos la consulta 
$conexion->query($alta);
//verificamos el alta
if($conexion){
    echo "se ha dado de alta la materia".$materia;
}else{
    echo "no se ha dado de alta la materia".$materia;
    
}