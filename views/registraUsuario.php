<?php 
$pageTitle="Registrar residente";
include_once("../views/header_index.php");?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10 offset1">
			<h1>Registrar Usuario</h1>
			<form class="form-horizontal" action="../controllers/registraUsuario.php" method="POST">
				<div class="control-group">
					<label class="control-label" for="nombre">Nombre</label>
					<div class="controls"> <input type="text" id="nombre" name="nombre" placeholder="Nombre completo"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="email">Correo</label>
					<div class="controls"><input type="text" id="email" name="email"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="password">Contrase&ntilde;a</label>
					<div class="controls"><input type="password" id="password" name="password"></div>
				</div>
				<div class="control-group">
					<label class="control-label" for="c_password">Confirmar Contrase&ntilde;a</label>
					<div class="controls"><input type="password" id="c_password" name="c_password"></div>
				</div>
				<div class="control-group">
					<label class="control-label">Tipo de Usuario</label>
					<div class="controls">
						<select name="tipo">
							<option id="1" value="1">Administrador</option>
							<option id="2" value="2">Anal&iacute;sta</option>
							<option id="3" value="3">Operador</option>
						</select>
					</div>
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
