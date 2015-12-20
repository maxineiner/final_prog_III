<?php
session_start();

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch($queHago){

	case "punto1":
	
		$tabla = "<table>
					<tr>
						<td>Apellido:</td><td><input type='text' id='txtApellido' class='txt' /></td>
					</tr>
					<tr>
						<td>Nombre:</td><td><input type='text' id='txtNombre' class='txt' /></td>
					</tr>
					<tr>
						<td colspan='2'><input type='button' value='Guardar' onclick='guardarPunto1()' class='MiBotonUTNMenu' /></td>
					</tr>
				</table>";
		echo $tabla;
	
		break;
		
	case "guardarPunto1":
		//IMPLEMENTAR
		break;
		
	case "punto2":
	
		$form = "<form >
					<br>
					<input type='file' name='txtFoto' />
					<br>
					<input type='submit' value='Guardar Foto' class='MiBotonUTNMenu' />
				 </form>";
		echo $form;
		
		break;
		
	case "punto3":
		
		$tabla = "<table>
					<tr>
						<td>TITULO:</td><td><input type='text' id='txtTitulo' class='txt' /></td>
					</tr>
					<tr>
						<td colspan='2'><input type='button' value='Mostrar' onclick='mostrarPunto3()' class='MiBotonUTNMenu' /></td>
					</tr>
				</table>";
		echo $tabla;
		
		break;
		
	case "mostrarPunto3":
		//IMPLEMENTAR
		break;
		
	case "punto4":
		//IMPLEMENTAR
		break;
		
	case "punto5":
		//IMPLEMENTAR - AL HACER CLICK EN EL BOTON 'MODIFICAR' INVOCAR 'TRAERJSON'
		break;
		
	case "traerJson":
		//IMPLEMENTAR
		break;
		
	case "formularioPunto5":
		
		require_once "formularioModificacion.php";
		
		break;
		
	case "guardarModificacion":
		//IMPLEMENTAR
		break;
		
	default:
		echo ":(";
}