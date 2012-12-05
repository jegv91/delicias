<?php 
$pageTitle="Registrar residente";
include_once("../views/header_index.php");?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10 offset1">
			<h1>Registrar Categoria</h1>
			<form class="form-horizontal" action="../controllers/registraCategoria.php" method="POST">
				<div class="control-group">
					<label class="control-label" for="nombre">Nombre</label>
					<div class="controls"> <input type="text" id="nombre" name="nombre" placeholder="Nombre completo"></div>
				</div>
				<div class="control-group">
					<label class="control-label">Tipo de Categoría</label>
					<div class="controls">
						<select name="tipo">
							<option id="1" value="1">Pasteles</option>
							<option id="2" value="2">Cupcakes</option>
							<option id="3" value="3">Pays</option>
							<option id="4" value="4">Panader&iacute;a</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="descripcion">Descripci&oacute;n</label>
					<div class="controls"><input type="text" id="descripcion" name="descripcion"></div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary">
							<i class="icon-user icon-white"></i> Aceptar
						</button>
						<button type="button"  onclick="history.back()" class="btn btn-danger">
							<i class="icon-remove icon-white"></i> Cancelar
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include_once("footer.html");?>
</body>
</html>
