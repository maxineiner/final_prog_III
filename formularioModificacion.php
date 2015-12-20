<table>
	<tr>
		<td>TITULO</td>
		<td><input type="text" id="txtTitulo" value="<?php echo $objJson->titel; ?>" class="txt" /></td>
	</tr>	
	<tr>
		<td>INTERPRETE</td>		
		<td><input type="text" id="txtInterprete" value="<?php echo $objJson->interpret; ?>" class="txt" /></td>
	</tr>	
	<tr>
		<td>A&Ntilde;O</td>
		<td><input type="text" id="txtAnio" value="<?php echo $objJson->jahr; ?>" class="txt" /></td>
	</tr>	
	<tr>
		<td colspan="2">
			<input type="button" class="btn btn-danger" value="Guardar" onclick="guardarModificacion()" />
		</td>	
	</tr>	
</table>
<input type="hidden" id="hdnIdCd" value="<?php echo $objJson->id; ?>" />
