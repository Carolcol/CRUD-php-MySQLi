<?php 
require_once 'connect.php';

require_once 'addUser.php';

require_once 'editUser.php';

require_once 'deleteUser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		thead {
			color: white;
			background-color: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<h3>Cadastro de Clientes</h3> 
					<form action="" method="POST">
						<label for="firstname">Nome</label>
						<input type="text" id="firstname"  name="firstname" class="form-control"><br>
						<label for="email">E-mail</label>
						<input type="text"  name="email" id="email" class="form-control"><br>
						<label for="city">Cidade</label>
						<input type="text"  name="city" id="city" class="form-control"><br>
						<label for="state">Estado</label> 
						<input type="text"  name="state" id="state" class="form-control"><br>
						<br>
						<input type="submit" name="addnew" class="btn btn-success" value="Salvar">
						<input type="submit" name="update" class="btn btn-warning" value="Editar">
						<input type="submit" name="delete" class="btn btn-danger" value="Deletar">
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php 
		require_once 'users.php';
	?>
</body>
</html>

