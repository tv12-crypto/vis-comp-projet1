<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Veillez introduire une note de Frais</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="all" href="../public/all.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="../public/t_style.css">
	<link rel="stylesheet" type="text/css" media="all" href="../public/t_style_01.css">
</head>
<body>
	<header>
		<img id="logo" src="../images/gsb_logo.jpg" alt="GSB_logo">
		<h1>GSB - Visiteur Medical</h1>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  			<a class="navbar-brand" href="?c=visiteur&f=homepage">GSB</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavDropdown">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" href="?c=visiteur&f=homepage">Home<span class="sr-only"></span></a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="?c=visiteur&f=depense">Voir note de frais</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="?c=visiteur&f=consult_depenses">Consulter mes notes de frais</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link" href="?c=visiteur&f=disconnexion">Déconnexion</a>
      				</li>
    			</ul>
  			</div>
		</nav>
	</header>

<main>
<form id="XD"name="form_insert_informe" method="post" action="?c=visiteur&f=process_depense">
	<div>
	<fieldset class="inline" id="XD">
		<legend>Période d'engagement</legend>
		<div>
			<p>
				<label>Mois:</label>
				<select name="month">
					<option value="01">Janvier</option>
					<option value="02">Février</option>
					<option value="03">Mars</option>
					<option value="04">Avril</option>
					<option value="05">Mai</option>
					<option value="06">Juin</option>
					<option value="07">Juillet</option>
					<option value="08">Août</option>
					<option value="09">Septembre</option>
					<option value="10">Octobre</option>
					<option value="11">Novembre</option>
					<option value="12">Décembre</option>
				</select>
			</p>
			<p>
				<label>Année:</label> 
				<select name="year">
					<option value="2020">2020</option>
				</select>
			</p>
		</div>
	</fieldset>
	<fieldset class="inline" class="XD">
		<legend>Frais au forfait</legend>
		<div class="marg">
			<p class="inline"><label>Repas midi : </label><input type="text" name="lunch"> </p>
			<p class="inline"><label>Nuitées : </label><input type="text" name="bedtime"> </p>
		</div>
		<div class="marg">
			<p class="inline"><label>Etape : </label><input type="text" name="step"> </p>
			<p class="inline"><label>Distance (km) : </label><input type="text" name="distance"> </p>
		</div>
	</fieldset>
	</div>
	<div>
	<fieldset class="DX">
		<legend>Hors forfait</legend>
		<p id="hors_frais">1 : 			
			<span class="esp">Date : <input type="date" name="date_hors_frais"></span>
			<span class="esp">Libellé : <input type="text" name="motif"></span> 
			<span class="esp">Qté : <input type="text" name="amount"></span> 
			<input id="add_hors_frais" onclick="PushtoForm()" type="button" value=" + " ></p>
	</fieldset>
	<fieldset class="DX">
		<legend>Hors classification</legend>
		<div class="marg">
			<p class="inline"><label>Nombres justificatifs : </label><input type="text" name="justificate"></p>
			<p class="inline"><label>Montant total : </label><input type="text" name="total_amount"></p>
		</div>
	</fieldset>
	</div>
	<div class="center">
		<input id="input_01" type="submit" name="connexion" value="valider">
		<input id="input_01" type="reset" name="effacer" value="Effacer">
	</div>
</form>
</main>
	<!-- JavaScript -->
	<script src="script_01.js"></script>
	<script src="../public/jquery-3.4.1.min.js"></script>
	<script src="../public/bootstrap.min.js"></script>
</body>
</html>