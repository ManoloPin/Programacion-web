<?php
	

			$mysqli = new mysqli("localhost", "root", "", "bdpersona");	
			$nom = $_GET['nombre'];
            $apell = $_GET['apellido'];
            $cor = $_GET['correo'];
			$tarjeta = $_GET['tarjeta'];
            $Fran = $_GET['Franquisia'];
            $Tit = $_GET['Titular'];
            $tarjn = $_GET['tarjeta_numero'];
            $anoc = $_GET['anoc'];
            $mesc = $_GET['mesc'];
            $cvv2 = $_GET['cvv2'];
            $Nomb = $_GET['Nombre_1'];
            //$edad = $_GET['edad'];
            $tel = $_GET['tel'];
            $dir = $_GET['direccion'];
            $Loc = $_GET['Localidad'];
            $city = $_GET['city'];
            $state = $_GET['state'];
            $zipcode = $_GET['zipcode'];
            $Pais = $_GET['Pais'];
            $textarea = $_GET['textarea'];
            			 
			$sql = $mysqli->query("insert into tbcontactos (nombre, apellido, correo, tarjeta, Franquisia,Titular,tarjeta_numero, anoc, mesc, cvv2, Nombre_1, tel, direccion, Localidad, city, state, zipcode, Pais, textarea) values ('$nom', '$apell', '$cor', '$tarjeta', '$Fran', '$Tit', '$tarjn', '$anoc', '$mesc','$cvv2','$Nomb', '$tel', '$dir', '$loc', '$city', '$state', '$zipcode', '$Pais', '$textarea') ");			
			
	?>

    <SCRIPT LANGUAGE="javascript">
        alert("Contacto Registrado");

    </SCRIPT>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
