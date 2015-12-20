<?php
?>
<html>
<head>
	<title>Final Programaci&oacute;n III</title>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
		<script src="js/ajaxJquery.js" type="text/javascript" ></script>		
</head>
<body>
	<div class="container" >
		<div id="divEncabezado" class="page-header">
			<h1>Apellido y Nombre:&nbsp;<em><?php echo isset($_SESSION["Apellido"]) ? $_SESSION["Apellido"] . ", " . $_SESSION["Nombre"] : "Sin SESION"; ?></em></h1>
			<h1><em class="cookie"><?php echo isset($_COOKIE["MiCookie"]) ? $_COOKIE["MiCookie"] : "Sin COOKIE"; ?></em></h1>
		</div>
		<div class="CajaInicio" >
			<table border="0" style="height:500px;width:100%">
				<tr>
					<td width="50%">
						<div id="divPuntos" class=" ">
							<ol>
							<li>
								<div>a)&nbsp;(1 pt.)<br/>Pedir y guardar (en una variable de sesi&oacute;n) el apellido y nombre del alumno. Mostrar la variable de sesi&oacute;n en el 'divEncabezado'.<br/>
									 b)&nbsp;(1 pt.)<br/>Guardar en un archivo de texto el apellido y nombre del alumno en el archivo 'sesion.txt', ubicado en la carpeta 'archivos'.</div>
								<input type="button" value="Punto 1" class="MiBotonUTNMenu" onclick="punto1()" />
							<li>
								<div>(2pts.)<br/>Guardar (en la carpeta 'imagenes') una foto. Validar que sea &uacute;nicamente una imagen con extensi&oacute;n jpg, que no se repita el nombre y que el tama&ntilde;o no supere 1 MB.</div>
								<input type="button" value="Punto 2" class="MiBotonUTNMenu" onclick="punto2()" />
							<li>
								<div>(2pts.)<br/>Utilizando PDO, traer de la tabla 'cds' los registros que seleccione el usuario (por 't&iacute;tulo', usar 'like'). Validar por javascript que el dato no este vacio antes del env&iacute;o.</div>
								<input type="button" value="Punto 3" class="MiBotonUTNMenu" onclick="punto3()" />
							<li>
								<div>a)&nbsp;(1 pt.)<br/>Guardar en una COOKIE (que expire en 30 segundos), los valores recuperados de las variables de SESION. Mostrarla en el 'divEncabezado'.<br/>
									 b)&nbsp;(1 pt.)<br/>Recuperar el contenido del archivo de texto y mostrarlo por 'alert'.</div>
								<input type="button" value="Punto 4" class="MiBotonUTNMenu" onclick="punto4()" />
							<li>
								<div>a)&nbsp;(2 pts.)<br/>Utilizando PDO, generar un listado que traiga TODOS los registros de la tabla 'cds' agregando un campo para la MODIFICACION.<br/>
									 b)&nbsp;(2pts.)<br/>Utilizar Json para traer el registro seleccionado y volcarlo en el formulario de modificaci&oacute;n.<br/>
									 c)&nbsp;(2pts.)<br/>Utilizando PDO, efectuar la modificaci&oacute;n.</div>
								<input type="button" value="Punto 5" class="MiBotonUTNMenu" onclick="punto5()" />
								
							</ol>
						
						</div>
					</td>
					<td width="50%" height="100%">					
						<div id="divCuerpo" class="CajaUno">
						Cuerpo
						</div>
					</td>
				</tr>
			</table>
			<pre>ATENCION!!!
				8 pts. ----> NOTA: 4
				9 pts. ----> NOTA: 5
				10 pts. ---> NOTA: 6
				11 pts. ---> NOTA: 7
				12 pts. ---> NOTA: 8
				13 pts. ---> NOTA: 9
				14 pts. ---> NOTA: 10
			</pre>
		</div>
	</div>
</body>
</html>