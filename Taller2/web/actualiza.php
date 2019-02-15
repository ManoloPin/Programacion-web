<?php

session_start();

	$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $tarjeta = $_POST['tarjeta'];
    $Franquisia = $_POST['Franquisia'];
    $Titular = $_POST['Titular'];
    $tarjeta_numero = $_POST['tarjeta_numero'];
    $anoc = $_POST['anoc'];
    $mesc = $_POST['mesc'];
    $cvv2 = $_POST['cvv2'];
    $Nombre_1 = $_POST['Nombre_1'];
    //$edad =  $_POST['edad'];
    $tel = $_POST['tel'];
    $direccion =  $_POST['direccion'];
    $Localidad = $_POST['Localidad'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $Pais = $_POST['Pais'];
    $textarea = $_POST['textarea'];
	
	
   




	$sql = $mysqli->query("update tbcontactos set nombre='$nombre', apellido=$apellido,  correo=$correo, Titular=$Titular, tarjeta=$tarjeta, Franquisia=$Franquisia, tarjeta_numero=$tarjeta_numero, anoc=$anoc,  mesc=$mesc, cvv2=$cvv2, Nombre_1=$Nombre_1,  tel=$tel, direccion='$direccion', Localidad=$Localidad, city=$city state=$state, zipcode=$zipcode, Pais=$Pais textarea=$textarea, where id=$id");
?>	

	 <SCRIPT LANGUAGE="javascript"> 
         alert("Contacto Actualizado"); 
     </SCRIPT> 
     <META HTTP-EQUIV="Refresh" CONTENT="0; URL=listar.php">


