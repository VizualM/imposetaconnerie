<?php
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=impose', 'root', '');
		$db->query('SET NAMES utf8');
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
?>