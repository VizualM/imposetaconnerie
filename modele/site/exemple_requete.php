<?php
	//requete dans variable
	$ma_requete = 'SELECT * FROM ma_table WHERE utilisateur_id = 5';
	//prepare
	$prepa_marequete = $db->prepare($ma_requete);
	//execute
	$exerc_marequette = $prepa_marequette->execute();
	//affiche

	while ($mes_donnees = $prepa_marequette->fetch()) {
		echo '<div>'.$mes_donnees['utilisateur_id'].'<div>';
		echo '<div>'.$mes_donnees['nom_user'].'<div>';
		echo '<div>'.$mes_donnees['prenom_user'].'<div>';
	}
?>