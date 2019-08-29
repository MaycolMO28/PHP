<?php 


include ('conexion.php');


$nombre = $_POST["nombre_registro"];
$apellido = $_POST["apellido_registro"];
$correo = $_POST['email'];
$fecha_usuario=$_POST["date_usuario"];
$password = $_POST["contraseña_registro"];
$tipo_sexo= $_POST["sexo"];

//ejecutamos la consulta para realizr un insert


$insertar = "INSERT INTO Usuarios (Nombre,Apellido,Email,Password,Fecha,Sexo) VALUES ('$nombre','$apellido','$correo','$password','$fecha_usuario','$tipo_sexo')";

$sentencia_agregar = $pdo -> prepare($insertar);
$sentencia_agregar -> execute(array($nombre,$apellido,$correo,$fecha_usuario,$password,$tipo_sexo));
if (isset($sentencia_agregar)) {


    echo "USUARIO AGREGADO";
    # code...
}


 ?>