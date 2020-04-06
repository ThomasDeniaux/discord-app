<?php
try
{
$connexion = new PDO('mysql:host=localhost;dbname=discord', "root", "");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>