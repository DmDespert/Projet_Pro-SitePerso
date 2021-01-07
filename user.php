<?php

// Intégration de la librairie Smarty (moteur de template)
require 'php/smarty/Smarty.class.php';

// Intégration de la librairie Smarty (moteur de template)
require 'php/class_mysql_dimsigner.php';

// On instancie la classe Smarty pour en faire un objet PHP
$smarty = new Smarty;
// On ne met pas le moteur Smarty en mode debug
$smarty->debugging = false;
// On désactive le cache de résultat intermédiaires
$smarty->caching = false;
// On définit le chemin où se trouveront les templates (modèles HTML)
$smarty->template_dir = 'templates';
// On définit le chemin des fichiers compilés de Smarty
$smarty->compile_dir = 'compilation';


$db		= new dimsigner();

// Démarrage de la session PHP, comme ça on peut utiliser la variable $_SESSION ensuite
session_start();


// On vérifie si le client est déjà connecté
if (isset($_GET['destroy']))
{
	session_destroy();
	header('location: user.php');
	exit;
}
if (isset($_SESSION['login']))
{
	$smarty->assign('authentifie', true);
}
// SI cette variable existe, c'est que le formulaire est soumis
elseif (isset($_POST['username']))
{
	if ($db->authentify($_POST['username'], $_POST['psw']))
	{
		$_SESSION['login']	= $_POST['username'];
		$_SESSION['url']	= $db->get_url($_POST['username']);
		$smarty->assign('authentifie', true);
	}
	else
	{
		$smarty->assign('authentifie', false);
	}
}
else
{
	$smarty->assign('authentifie', false);
}
$smarty->assign('url', $_SESSION['url']);
$smarty->display('user.htm');