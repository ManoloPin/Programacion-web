<?php
	header('Content-type: application/json');
	require_once 'config.php';
	$response = array();
	// Verificacion del envio del formulario via AJAX
	if ($_POST) {
		
		$Nombre = trim($_POST['Nombre']);
		$Apellido = trim($_POST['Apellido']);
		$Genero = trim($_POST['Genero']);
		$Correo = trim($_POST['Correo']);
        $Tarjeta = trim($_POST['Tarjeta']);
		$Franquisia = trim($_POST['Franquisia']);
		$Titular = trim($_POST['Titular']);
		$tarjeta_numbero = trim($_POST['tarjeta_numbero']);
        $añoc = trim($_POST['añoc']);
		$mesc = trim($_POST['mesc']);
		$cvv2 = trim($_POST['cvv2']);
		$Nombre_1 = trim($_POST['Nombre_1']);
        $tel = trim($_POST['tel']);
		$Direccion = trim($_POST['Direccion']);
		$Localidad = trim($_POST['Localidad']);
		$city = trim($_POST['city']);
        $Pais = trim($_POST['Pais']);
        $textarea = trim($_POST['textarea']);
		
		$Nombre = strip_tags($Nombre);
		$Apellido = strip_tags($Apellido);
		$Genero = strip_tags($Genero);
		$Correo = strip_tags($Correo);
        $Tarjeta = strip_tags($Tarjeta);
		$Franquisia = strip_tags($Franquisia);
		$Titular = strip_tags($Titular);
		$tarjeta_numbero = strip_tags($tarjeta_numbero);
		$añoc = strip_tags($añoc);
		$mesc = strip_tags($mesc);
		$cvv2 = strip_tags($cvv2);
		$Nombre_1 = strip_tags($Nombre_1);
		$tel = strip_tags($tel);
		$Direccion = strip_tags($Direccion);
		$Localidad = strip_tags($Localidad);
		$city = strip_tags($city);
		$Pais = strip_tags($Pais);
		$textarea = strip_tags($textarea);

		$query = "INSERT INTO usuarios(Nombres,Apellio,Genero,Correo,Tarjeta,Franquisia,Titular,tarjeta_numbero,añoc,mesc,cvv2,Nombre_1,tel,Direccion,Localidad,city,Pais,textarea) VALUES(:Nombres,::Apellio,:Genero,:Correo,:Tarjeta,:Franquisia,:Titular,:tarjeta_numbero,:añoc,:mesc,:cvv2,:Nombre_1,:tel,:Direccion,:Localidad,:city,:Pais,:textarea)";
		
		$stmt = $DBcon->prepare( $query );
		$stmt->bindParam(':Nombre', $Nombre);
		$stmt->bindParam(':Apellido', $Apellido);
		$stmt->bindParam(':Genero', $Genero);
		$stmt->bindParam(':Correo', $Correo);
        $stmt->bindParam(':Tarjeta', $Tarjeta);
        $stmt->bindParam(':Franquisia', $Franquisia);
		$stmt->bindParam(':tarjeta_numbero', $tarjeta_numbero);
		$stmt->bindParam(':añoc', $añoc);
		$stmt->bindParam(':mesc', $mesc);
		$stmt->bindParam(':cvv2', $cvv2);
		$stmt->bindParam(':Nombre_1', $Nombre_1);
		$stmt->bindParam(':tel', $tel);
		$stmt->bindParam(':Direccion', $Direccion);
		$stmt->bindParam(':Localidad', $tLocalidad);
		$stmt->bindParam(':city', $city);
		$stmt->bindParam(':Pais', $Pais);
		$stmt->bindParam(':textarea', $textarea);
        
        
		// Verifica el registro exitoso
        if ( $stmt->execute() ) {
			$response['status'] = 'success';
			$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Usted se ha registrado con éxito, puede iniciar sesión ahora';
        } else {
            $response['status'] = 'error'; // No pudo registrarse
			$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No se pudo registrar, intente de nuevo más tarde';
        }	
	}
	
	echo json_encode($response);