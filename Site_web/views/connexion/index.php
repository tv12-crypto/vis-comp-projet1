<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>GSB Connexion</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="all" href="../public/all.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="../public/t_style.css">
	<link rel="stylesheet" type="text/css" media="all" href="../public/t_style_01.css">
</head>
<body>
	<img id="logo_cnt" src="../images/gsb_logo.jpg" alt="GSB_logo">
	<form class="conexion" name="form_connexion" method="post" action="?c=connexion&f=connexion" autocomplete="off">
		<legend>Connexion</legend>
		<div class="form-group row">
			<fieldset class="conexion" for="inputEmail3" class="col-sm-2 col-form-label">
			<div class="col-sm-5"></div>
    		<div class="col-sm-3">
					<p><i class="fas fa-user"></i><input type="email" class="form-control" id="inputEmail3" name="login" placeholder="Login"></p>
				  	<p><i class="fas fa-key"></i><input type="password" class="form-control" id="inputPassword3" name="mdp" placeholder="Mot de passe"></p>
			</div>
			<div class="col-sm-4"></div>
			<div class="form-group row">
				<div class="col-sm-5"></div>
				<div class="col-sm-3">
					<input id="input_01" type="submit" name="connexion" value="Connexion">
					<input id="input_01" type="reset" name="effacer" value="Effacer">
				</div>
				<div class="col-sm-4"></div>
			</div>
			</fieldset>
		</div>
	</form>

	<!--     PHP     -->
	<?php
		if ($_SESSION['error_connexion']==1){
			echo "<p id='error_connexion'>Usuaire ou Password invalide</p>";
		}
		$_SESSION['error_connexion']=0;
	?>
	
	<!-- JavaScript -->
	<script src="../public/script_01.js"></script>
	<script src="../public/jquery-3.4.1.min.js"></script>
	<script src="../public/bootstrap.min.js"></script>
</body>
</html>