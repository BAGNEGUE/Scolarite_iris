<h3> Ajout d'une nouveau Professeur </h3>
<form method="post">
	<table>
		<tr>
			<td> Nom du professeur </td>
			<td> <input type="text" name="nom" 
			value="<?= ($leProfesseur!=null)?$leProfesseur['nom']:'' ?>">
			</td>
		</tr>
		<tr>
			<td> Prénom du professeur </td>
			<td> <input type="text" name="prenom"
				value="<?= ($leProfesseur!=null)?$leProfesseur['prenom']:'' ?>"></td>
		</tr>
		<tr>
			<td> Email professeur </td>
			<td> <input type="text" name="email"
				value="<?= ($leProfesseur!=null)?$leProfesseur['email']:'' ?>"></td>
		</tr>
		<tr>
			<td> Diplôme préparé  </td>
			<td> <input type="text" name="diplome" value="<?= ($leProfesseur!=null)?$leProfesseur['diplome']:'' ?>"></td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" 
				<?= ($leProfesseur!=null)? ' name="Modifier" value="Modifier" ' : ' name="Valider" value="Valider" ' ?>
				> </td>
		</tr>
	</table>
	<?= 
	($leProfesseur!=null)?'<input type="hidden" name="idprofesseur" value="'.$leProfesseur['idprofesseur'].'" >' : ''
	?>
</form>
