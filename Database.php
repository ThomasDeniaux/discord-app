<?php
class Database
{

private $_nomBase;
private $_utilisateur;
private $_mdp;
private $_nomServeur;

public function connexion($_nomServeur, $_nomBase, $_utilisateur, $_mdp)
{
	try
{
$connexion = new PDO(mysql:host="$_nomServeur";dbname="_nomBase", "$_utilisateur", "$_mdp");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

}
}
?>