<?php
	require_once ("modele/modele.class.php"); 
	class Controleur {
		private $unModele ; 

		public function __construct (){
			$this->unModele = new Modele (); 
		}
		
		/******** Gestion des classes *******************/
		public function selectAllClasses (){
			return $this->unModele->selectAllClasses();
		}

		public function searchAllClasses ($filtre){
			return $this->unModele->searchAllClasses($filtre);
		}
		//$tab <==> $_POST du formulaire 
		public function insertClasse ($tab){
			$this->unModele->insertClasse($tab);
		}
		public function deleteClasse ($idclasse){
			$this->unModele->deleteClasse($idclasse);
		}

		public function selectWhereClasse ($idclasse){
			return $this->unModele->selectWhereClasse($idclasse);
		}

		public function updateClasse ($tab){
			$this->unModele->updateClasse ($tab);
		}

		public function countClasses (){
			return $this->unModele->countClasses(); 
		}

		/******** Gestion des Professeurs *******************/
		public function selectAllProfesseurs (){
			return $this->unModele->selectAllProfesseurs();
		}

		public function insertProfesseur ($tab){
			$this->unModele->insertProfesseur($tab);
		}

		public function searchAllProfesseurs ($filtre){
			return $this->unModele->searchAllProfesseurs($filtre);
		}

		public function deleteProfesseur ($idprofesseur){
			$this->unModele->deleteProfesseur($idprofesseur);
		}

		public function selectWhereProfesseur ($idprofesseur){
			return $this->unModele->selectWhereProfesseur($idprofesseur);
		}

		public function updateProfesseur ($tab){
			$this->unModele->updateProfesseur ($tab);
		}
		public function countProfesseurs (){
			return $this->unModele->countProfesseurs(); 
		}
		/******** Gestion des Etudiants *******************/
		public function selectAllEtudiants (){
			return $this->unModele->selectAllEtudiants();
		}

		public function insertEtudiant ($tab){
			$this->unModele->insertEtudiant ($tab);
		}
		public function countEtudiants (){
			return $this->unModele->countEtudiants(); 
		}

		/******** Gestion des Enseignements *******************/
		public function selectAllEnseignements (){
			return $this->unModele->selectAllEnseignements();
		}

		public function insertEnseignement ($tab){
			$this->unModele->insertEnseignement ($tab);
		}
		public function countEnseignements (){
			return $this->unModele->countEnseignements(); 
		}

		public function verifConnexion ($email, $mdp){
			return $this->unModele->verifConnexion ($email, $mdp); 
		}

		public function selectAllInscriptions (){
			return $this->unModele->selectAllInscriptions(); 
		}

		/*****************************Appel de procédure ****************/
		public function appelProcedure ($nomP, $tab) {
			$this->unModele->appelProcedure ($nomP, $tab);
		}

	}
?>	






