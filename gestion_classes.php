<h2> Gestion des classes </h2>
 
<?php
if (isset($_SESSION['email']) && isset($_SESSION['role'])  && $_SESSION['role'] == "admin"){
		//gestion admin 
		$laClasse = null; //classe à modifier
 
		if (isset($_GET['action']) && isset($_GET['idclasse']))
		{
			$action = $_GET['action']; 
			$idclasse = $_GET['idclasse'];
 
			switch($action)
			{
				case "sup" : 
				//$unControleur->deleteClasse($idclasse) ;
 
				//appel de la procedure stockés :
				$nomP ="deleteClasse";
				$tab = array($idclasse);
				$unControleur->appelProcedure ($nomP, $tab);
 
				break;
				case "edit" :
 
				$laClasse = $unControleur->selectWhereClasse ($idclasse);
				//var_dump($laClasse);
				break; 
			}
		}
		require_once ("vue/vue_insert_classe.php");
 
		if (isset($_POST['Valider']))
		{
			// $unControleur->insertClasse ($_POST); 
			$nomP ="insertClasse";
				$tab = array($_POST['nom'],$_POST['salle'],$_POST['diplome'] );
				$unControleur->appelProcedure ($nomP, $tab);
		}
 
		if (isset($_POST['Modifier']))
		{
			$unControleur->updateClasse ($_POST); 
			header("Location: index.php?page=2");
		}
	}// fin de la gestion admin 
	if (isset($_POST['Filtrer']))
	{
		$filtre = $_POST['filtre']; 
		$lesClasses = $unControleur->searchAllClasses($filtre);
	}else {
 
		$lesClasses = $unControleur->selectAllClasses (); 
	}
	require_once ("vue/vue_select_classes.php");
?>