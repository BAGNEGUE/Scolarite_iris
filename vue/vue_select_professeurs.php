<h3> Liste des Professeurs  </h3>
<form method="post">
	Filtrer par : <input type="text" name="filtre"> 
	<input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1"> 
	<tr>
		<td> Id Professeur </td>
		<td> Nom  </td>
		<td> Prénom</td>
		<td> Email</td>
		<td> Dipôme Obtenu </td>
		<td> Opérations </td>
	</tr>
	<?php
	if (isset($lesProfesseurs)){
		foreach ($lesProfesseurs as $unProfesseur){
			echo "<tr>";
			echo "<td>".$unProfesseur['idprofesseur']."</td>";
			echo "<td>".$unProfesseur['nom']."</td>";
			echo "<td>".$unProfesseur['prenom']."</td>";
			echo "<td>".$unProfesseur['email']."</td>";
			echo "<td>".$unProfesseur['diplome']."</td>"; 
			echo "<td> <a href='index.php?page=4&action=sup&idprofesseur=".$unProfesseur['idprofesseur']."'>"; 
			echo "<img src='images/supprimer.png' height='30' witdh='30'> </a>"; 

			echo "<a href='index.php?page=4&action=edit&idprofesseur=".$unProfesseur['idprofesseur']."'>"; 
			echo "<img src='images/editer.jpeg' height='30' witdh='30'> </a>";
			echo "</td>";

			echo "</tr>";
		}
	}
	?>
</table>






