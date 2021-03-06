<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Consultation des notes de Frais</title>
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
    <form name="form_consult_informe" method="post" action="?c=visiteur&f=afficher_selected_informe">
        <fieldset id="form_consult_informe">
            <legend>Consultation des notes de frais</legend>
            <p>Notes de frais du : <select name="informe_date">

                <!--    PHP    -->
                <?php
                $i=0;
                foreach ($dispo_informes as $key => $value) {
                    if ($i%2==0){ 
                        echo  "<option value='$value'>";
                    }else{ 
                        echo "$value</option>";
                    }
                    $i++;
                }
                ?>

            </select><span id="unestilo"></span><input type="submit" name="afficher_informe" value="OK">
            </p>
        </fieldset>
    </form>

    <!--  PHP  -->
    <?php
    if (isset($informe)){
        echo "<fieldset id='afficher_informe'><legend>Notes de frais de " . $informe['date_name']."</legend><p>";
        
        for ($i=0; $i < 6; $i++) {
            if ($i!=2){ 
                echo $_SESSION['form_depense_00'][$i]." : ".$informe['data_informe'][$i]."<br>";
            }
        }
        echo "</p></fieldset>";
    }
    ?>

</main>
</body>
</html>