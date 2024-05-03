<?php
	session_start();
	require_once("controleur/controleur.class.php"); 
	$unControleur = new Controleur ();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iris Scolarité</title>
	<meta charset="utf-8">
</head>
<body>
<center>
	<h1> Gestion de la scolarité d'IRIS </h1>
	<br/>

	<?php
		if ( ! isset($_SESSION['email'])){
			require_once("vue/vue_form.php");
		}
		if (isset($_POST['ValiderForm'])){
			$email = $_POST['email']; 
			$mdp = $_POST['mdp'];
			$unUser = $unControleur->verifConnexion($email, $mdp); 
			if ($unUser != null){
				//enregistrement dans la SESSION 
				$_SESSION['nom'] = $unUser['nom']; 
				$_SESSION['prenom'] = $unUser['prenom']; 
				$_SESSION['email'] = $unUser['email'];
				$_SESSION['role'] = $unUser['role'];  
				header("Location: index.php?page=1");
			}
			else{
				echo "<br/> Veuillez vérifier vos identifiants"; 
			}
		}
	if (isset($_SESSION['email'])){
	echo '
		<a href="index.php?page=1"> 
			<img src="images/logo.png" height="100" width="100"> </a>
		<a href="index.php?page=2"> 
			<img src="images/classes.jpeg" height="100" width="100"> </a>
		<a href="index.php?page=3"> 
			<img src="images/etudiants.jpeg" height="100" width="100"> </a>
		<a href="index.php?page=4"> 
			<img src="images/professeurs.png" height="100" width="100"> </a>
		<a href="index.php?page=5"> 
			<img src="images/enseignements.png" height="100" width="100"> </a>
		<a href="index.php?page=6"> 
			<img src="images/sedeconnecter.jpeg" height="100" width="100"> </a>
		'; 
	
		if (isset($_GET['page'])){
			$page = $_GET['page'];
		}else {
			$page = 1 ; 
		}
		//$page = (isset($_GET['page'])) ? $_GET['page'] : 1 ; 
		switch ($page){
			case 1 : require_once ("home.php"); break; 
			case 2 : require_once ("gestion_classes.php"); break; 
			case 3 : require_once ("gestion_etudiants.php"); break; 
			case 4 : require_once ("gestion_professeurs.php"); break; 
			case 5 : require_once ("gestion_enseignements.php"); break; 
			case 6 : session_destroy(); 
					unset($_SESSION['email']); 
					header("Location: index.php");
					break;
			default : require_once ("erreur.php"); break; 
		}
	} //fin du if 
	?>
</center>
</body>
</html>











