<?php
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: user_admin.php');
	}
include("includes/head_.php")
?>
<link rel="stylesheet" href="icono.css">

<br>
<?php if (isset($_SESSION['message'])) {?>
	<div class="alert alert-<?= $_SESSION['mensaje_type'];  ?> alert-dismissible fade show text-center" role="alert">
<h4> <?= $_SESSION['message']; ?></h4>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php session_unset(); } ?>
			<div class="container mb-4">
						<div class="">
							<div class="  container  border  col-lg-4 shadow-lg text-center rounded-3">
								<div class="mb-2"></div>
										<div class="mb-3">
											<h3 >Usuario</h3>
										<!-- <img src="img/user2.jfif" class="rounded-circle border border-primary" alt="" height="180px"> -->
										<div class="icons-font-login">

											<i class="bi bi-person-circle" class="icons--font--color--login"></i>
										</div>
										</div>
		<form action="crud.php" method="post">
			<div class="mb-3">
				<label for="exampleInputEmail1" class=""> <img src="icons/person-fill.svg" alt=""height="22px">Correo</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="txtUsu" aria-describedby="emailHelp"  placeholder="Email">
				</div>
		  <div class="mb-3">

		    <label for="exampleInputEmail1" class="form-label">
					Contraseña</label>
				<img src="icons/eye-fill.svg" alt="" onclick="mostrar()" height="20px">
					<input type="password" class="form-control" id="password" name="txtPass"  placeholder="Password" aria-describedby="emailHelp" >

			  <div id="emailHelp" class="form-text">Iniciar cuenta.</div>
			</div>
			<button type="submit" name="user_login_" class="btn btn-primary mb-3"> <img src="icons/key.svg" class="" height="40px" alt="">Ingresar</button>
		</form>
	</div>
</div>
</div>
<script src="js/mostrarPass.js" charset="utf-8"></script>

<?php
include("includes/footer_.php")
?>
