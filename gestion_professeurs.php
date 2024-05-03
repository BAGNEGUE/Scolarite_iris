<h2> Gestion des Professeurs </h2>

<?php
	$leProfesseur = null; //Professeur à modifier 

	if (isset($_GET['action']) && isset($_GET['idprofesseur']))
	{
		$action = $_GET['action']; 
		$idprofesseur = $_GET['idprofesseur']; 

		switch($action)
		{
			case "sup" : $unControleur->deleteProfesseur($idprofesseur) ; break;
			case "edit" : 
			$leProfesseur = $unControleur->selectWhereProfesseur ($idprofesseur);
			
			break; 
		}
	}
	require_once ("vue/vue_insert_professeur.php");

	if (isset($_POST['Valider']))
	{
		$unControleur->insertProfesseur ($_POST); 
	}

	if (isset($_POST['Modifier']))
	{
		$unControleur->updateProfesseur ($_POST); 
		header("Location: index.php?page=4");
	}

	
	if (isset($_POST['Filtrer']))
	{
		$filtre = $_POST['filtre']; 
		$lesProfesseurs = $unControleur->searchAllProfesseurs($filtre);
	}else {

		$lesProfesseurs = $unControleur->selectAllProfesseurs (); 
	}
	require_once ("vue/vue_select_professeurs.php");
?>