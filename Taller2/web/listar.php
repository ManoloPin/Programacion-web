<?php
	session_start();
	if(isset($_SESSION['nombreusu']))
	{
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Formulario web</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosdos.css">
    <script src="js/metodos.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
						<span class="sr-only">Desplegar / Ocultar Menu</span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                    <a href="index.php" class="navbar-brand">Formulario web</a>
                </div>
                <div class="collapse navbar-collapse" id="navegacion-fm">
                    <ul class="nav navbar-nav">
                        <li><a href="cerrars.php"><span class="glyphicon glyphicon-remove"></span>Salir</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">




            <a class="btn btn-success" data-toggle="modal" data-target="#nuevoUsu">Nuevo Contacto</a><br><br>
            <table class='table'>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>tarjeta</th>
                    <th>Franquisia</th>
                    <th>Titular</th>
                    <th>Tarjeta Numero</th>
                    <th>Año C</th>
                    <th>Mes c</th>
                    <th>cvv2</th>
                    <th>Nombre</th>
                    <!--<th>Edad</th>-->
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>localidad</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>Codigo Postal</th>
                    <th>Pais</th>
                    <th>Comentarios</th>
                    <th><span class="glyphicon glyphicon-wrench"></span></th>
                </tr>
                <?php
			$mysqli = new mysqli("localhost", "root", "", "bdpersona");		
			if ($mysqli->connect_errno) {
			    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			    exit();
			}
			$consulta= "SELECT * FROM tbcontactos";
			if ($resultado = $mysqli->query($consulta)) 
			{
				while ($fila = $resultado->fetch_row()) 
				{					
					echo "<tr>";
					echo "<td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td><td>$fila[5]</td><td>$fila[6]</td><td>$fila[7]</td><td>$fila[8]</td><td>$fila[9]</td><td>$fila[10]</td><td>$fila[11]</td><td>$fila[12]</td><td>$fila[13]</td><td>$fila[14]</td><td>$fila[15]</td><td>$fila[16]</td><td>$fila[17]</td><td>$fila[18]</td><td>$fila[19]</td>";	
					echo"<td>";						
				    echo "<a data-toggle='modal' data-target='#editUsu' data-id='" .$fila[0] ."' data-nombre='" .$fila[1] ."' data-apellido='" .$fila[2] ."' data-correo='" .$fila[3]."' data-tarjeta='" .$fila[4] ."' data-Franquisia='" .$fila[4] ."' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span>Editar</a> ";			
					echo "<a class='btn btn-danger' href='elimina.php?id=" .$fila[0] ."'><span class='glyphicon glyphicon-remove'></span>Eliminar</a>";		
					echo "</td>";
					echo "</tr>";
				}
				$resultado->close();
			}
			$mysqli->close();			
			
	

?>
            </table>
        </div>



        <div class="modal" id="nuevoUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Nuevo Contacto</h4>
                    </div>
                    <div class="modal-body">
                        <form action="insertar.php" method="GET">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre"></input>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input class="form-control" id="apellido" name="apellido" type="text" placeholder="apellido"></input>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input class="form-control" id="correo" name="correo" type="email" placeholder="correo" ></input>
                            </div>
                            <label align="right" for="Datos Bancarios">Datos Bancarios</label>
                            <div class="form-group">
                                <label for="tarjeta">Tarjeta:</label>
                                <input class="form-control" id="tarjeta" name="tarjeta" type="text" placeholder="tarjeta"></input>
                            </div>
                            <div class="form-group">
                                <label for="Franquisia">Franquisia</label>
                                <input class="form-control" id="Franquisia" name="Franquisia" type="text" placeholder="Franquisia"></input>
                            </div>
                            <div class="form-group">
                                <label for="Titular">Titular:</label>
                                <input class="form-control" id="Titular" name="Titular" type="text" placeholder="Titular" ></input>
                            </div>
                            <div class="form-group">
                                <label for="tarjeta_numero">Tarjeta Numero</label>
                                <input class="form-control" id="tarjeta_numero" name="tarjeta_numero" type="number" placeholder="Tarjeta Numero"></input>
                            </div>
                            <div class="form-group">
                                <label for="anoc">Año de Caducacion</label>
                                <input class="form-control" id="anoc" name="anoc" type="text" placeholder="Año"></input>
                            </div>
                            <div class="form-group">
                                <label for="mesc">Mes de Caducacion</label>
                                <input class="form-control" id="mesc" name="mesc" type="text" placeholder="mesc" ></input>
                            </div>
                            <div class="form-group">
                                <label for="cvv2">cvv2</label>
                                <input class="form-control" id="cvv2" name="cvv2" type="text" placeholder="cvv2"></input>
                            </div>
                            <div class="form-group">
                                <label for="Nombre_1">Nombre </label>
                                <input class="form-control" id="Nombre_1" name="Nombre_1" type="text" placeholder="Nombre y Apellido"></input>
                            </div>
                            <div class="form-group">
                                <label for="tel">Telefono:</label>
                                <input class="form-control" id="tel" name="tel" type="text" placeholder="Telefono" ></input>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion:</label>
                                <input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion"></input>
                            </div>
                            <div class="form-group">
                                <label for="Localidad">Localidad:</label>
                                <input class="form-control" id="Localidad" name="Localidad" type="text" placeholder="Localidad"></input>
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <input class="form-control" id="city" name="city" type="text" placeholder="Ciudad" ></input>
                            </div>
                            <div class="form-group">
                                <label for="state">Estado o provincia</label>
                                <input class="form-control" id="state" name="state" type="text" placeholder="Estado O provincia"></input>
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Codigo Postal:</label>
                                <input class="form-control" id="zipcode" name="zipcode" type="text" placeholder="Codigo Postal"></input>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Pais:</label>
                                <input class="form-control" id="Pais" name="Pais" type="text" placeholder="Pais"></input>
                            </div>
                            <div class="form-group">
                                <label for="textarea">Comentarios:</label>
                                <input class="form-control" id="textarea" name="textarea" type="text" placeholder="textarea"></input>
                            </div>


                            <input type="submit" class="btn btn-success" value="Guardar">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4>Editar Contacto</h4>
                    </div>
                    <div class="modal-body">
                        <form action="actualiza.php" method="POST">

                            <input id="id" name="id" type="hidden"></input>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input class="form-control" id="nombre" name="nombre" type="text"></input>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input class="form-control" id="apellido" name="apellido" type="text"></input>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input class="form-control" id="correo" name="correo" type="email"></input>
                            </div>

                            <label align="right" for="Datos Bancarios">Datos Bancarios</label>
                            <div class="form-group">
                                <label for="tarjeta">Tarjeta:</label>
                                <input class="form-control" id="tarjeta" name="tarjeta" type="text" placeholder="tarjeta"></input>
                            </div>
                            <div class="form-group">
                                <label for="Franquisia">Franquisia</label>
                                <input class="form-control" id="Franquisia" name="Franquisia" type="text" placeholder="Franquisia"></input>
                            </div>
                            <div class="form-group">
                                <label for="Titular">Titular:</label>
                                <input class="form-control" id="Titular" name="Titular" type="text" placeholder="Titular" ></input>
                            </div>
                            <div class="form-group">
                                <label for="tarjeta_numero">Tarjeta Numero</label>
                                <input class="form-control" id="tarjeta_numero" name="tarjeta_numero" type="number" placeholder="Tarjeta Numero"></input>
                            </div>
                            <div class="form-group">
                                <label for="anoc">Año de Caducacion</label>
                                <input class="form-control" id="anoc" name="anoc" type="text" placeholder="Año"></input>
                            </div>
                            <div class="form-group">
                                <label for="mesc">Mes de Caducacion</label>
                                <input class="form-control" id="mesc" name="mesc" type="text" placeholder="mesc" ></input>
                            </div>
                            <div class="form-group">
                                <label for="cvv2">cvv2</label>
                                <input class="form-control" id="cvv2" name="cvv2" type="text" placeholder="cvv2"></input>
                            </div>
                            <div class="form-group">
                                <label for="Nombre_1">Nombre </label>
                                <input class="form-control" id="Nombre_1" name="Nombre_1" type="text" placeholder="Nombre y Apellido"></input>
                            </div>
                            
                            <div class="form-group">
                                <label for="tel">Telefono:</label>
                                <input class="form-control" id="tel" name="tel" type="text" placeholder="Telefono" ></input>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion:</label>
                                <input class="form-control" id="direccion" name="direccion" type="text" placeholder="Direccion"></input>
                            </div>
                            <div class="form-group">
                                <label for="Localidad">Localidad:</label>
                                <input class="form-control" id="Localidad" name="Localidad" type="text" placeholder="Localidad"></input>
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <input class="form-control" id="city" name="city" type="text" placeholder="Ciudad" ></input>
                            </div>
                            <div class="form-group">
                                <label for="state">Estado o provincia</label>
                                <input class="form-control" id="state" name="state" type="text" placeholder="Estado O provincia"></input>
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Codigo Postal:</label>
                                <input class="form-control" id="zipcode" name="zipcode" type="text" placeholder="Codigo Postal"></input>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Pais:</label>
                                <input class="form-control" id="Pais" name="Pais" type="text" placeholder="Pais"></input>
                            </div>
                            <div class="form-group">
                                <label for="textarea">Comentarios:</label>
                                <input class="form-control" id="textarea" name="textarea" type="text" placeholder="textarea"></input>
                            </div>

                            <input type="submit" class="btn btn-success">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('#editUsu').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient0 = button.data('id')
            var recipient1 = button.data('nombre')
            var recipient2 = button.data('apellido')
            var recipient3 = button.data('correo')
            var recipient4 = button.data('tarjeta')
            var recipient5 = button.data('direccion')
           // Extrae información de los  data-* attributes
            // Si es necesario, puede iniciar una solicitud AJAX aquí (y luego hacer la actualización en una devolución de llamada).
            // Actualiza el contenido modal. Utilizaremos jQuery aquí, pero en su lugar podría usar una biblioteca de enlace de datos u otros métodos.

            var modal = $(this)
            modal.find('.modal-body #id').val(recipient0)
            modal.find('.modal-body #nombre').val(recipient1)
            modal.find('.modal-body #apellido').val(recipient2)
            modal.find('.modal-body #correo').val(recipient3)
            modal.find('.modal-body #tarjeta').val(recipient4)
            modal.find('.modal-body #direccion').val(recipient5)
        });

    </script>

</body>

</html>

<?php
	}
	else
	{
		?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=index.php">
<?php
	}
?>
