<h2> Gestion des étudiants </h2>
<?php

	$lesClasses = $unControleur->selectAllClasses (); 

	require_once ("vue/vue_insert_etudiant.php");

	if (isset($_POST['Valider']))
	{
		$unControleur->insertEtudiant ($_POST); 
	}

	$lesEtudiants = $unControleur->selectAllEtudiants ();

	require_once ("vue/vue_select_etudiants.php");
?>