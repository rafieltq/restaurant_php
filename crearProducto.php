<?php
echo "Ingresando la vuelta";

//echo"Formulario enviado!";
/*Paso 1>Recibimos los datos desde el Form*/
$NOMBRE = $_POST['txtNombre'];
$CATEGORIA = $_POST['txtCategoria'];
$DISTRIBUIDOR = $_POST['txtDistribuidor'];
$PRECIO = $_POST['txtPrecio'];

/*Paso 2>Validando los datos*/
if (empty($NOMBRE)) {
    echo "<h3>Debe llenar el Nombre.</h3>";
}
if (empty($CATEGORIA)) {
    echo "<h3>Debe detallar la CATEGORIA del producto.</h3>";
}
if (empty($DISTRIBUIDOR)) {
    echo "<h3>Debe detallar la DISTRIBUIDOR del producto.</h3>";
}
if (empty($PRECIO)) {
    echo "<h3>Debe detallar la PRECIO del producto.</h3>";
}
/*Paso 3> Verificamos de forma conjunto que no haya ningun campos 
						obligatorio vacio.
						o*/
//echo"<h3>Puede guardar.</h3>";
/*Paso 4> Conexion a la base de datos*/
/*Datos del Servidor MySql*/

require('auth/conexionBD.php');

/*Paso 5;Realizamos la conexion a la DB y verificamos si fue exitosa*/
$Conectarme = mysqli_connect($Servidor, $UsarioDB, $ClaveDB, $DB) or die("Error con la Base de Datos");
mysqli_select_db($Conectarme, $DB) or die("No se encuentra la BBDD");

/*Paso 6:Guardar (insertar) el registro, verificando si fue 
							exitoso o no*/
$Guardar = "INSERT INTO PRODUCTOS (NOMBRE,CATEGORIA,DISTRIBUIDOR,PRECIO) VALUES ('$NOMBRE','$CATEGORIA','$DISTRIBUIDOR','$PRECIO')";

if (mysqli_query($Conectarme, $Guardar)) {
    echo "<h3>agente registrado, felicidades!.</h3>";
    echo "<h3> <a href='../index.html'>Registrar otro.</a></h3>";
    mysqli_close($Conectarme);
} else {
    echo "<h3>Los sentimos, ha fallado el Registro!.</h3>";
    mysqli_close($Conectarme);
}

mysqli_close($Conectarme);
?>