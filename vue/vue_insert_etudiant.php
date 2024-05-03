<h3> Ajout d'une nouveau Etudiant </h3>
<form method="post">
	<table>
		<tr>
			<td> Nom de l'étudiant  </td>
			<td> <input type="text" name="nom"></td>
		</tr>
		<tr>
			<td> Prénom de l'étudiant  </td>
			<td> <input type="text" name="prenom"></td>
		</tr>
		<tr>
			<td> Email contact </td>
			<td> <input type="text" name="email"></td>
		</tr>
		<tr>
			<td> Date Naissance </td>
			<td> <input type="date" name="dateNais"></td>
		</tr>
		<tr>
			<td> Statut de la scolarité </td>
			<td> <select name="statut" >
					<option value="alternant">Alterant</option>
					<option value="initial">Initial</option>
				 </select>
			</td>
		</tr>
		<tr>
			<td> La classe de l'étudiant </td>
			<td> <select name="idclasse" >
				<?php
				foreach($lesClasses as $uneClasse){
					echo "<option value='".$uneClasse['idclasse']."'>";
					echo $uneClasse['nom']; 
					echo "</option>";

				}
				?>
				 </select>
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" name="Valider" value="Valider"></td>
		</tr>
	</table>
	
</form>








