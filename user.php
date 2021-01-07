<?php

// Int�gration de la librairie Smarty (moteur de template)
require 'php/smarty/Smarty.class.php';

// Int�gration de la librairie Smarty (moteur de template)
require 'php/class_mysql_dimsigner.php';

// On instancie la classe Smarty pour en faire un objet PHP
$smarty = new Smarty;
// On ne met pas le moteur Smarty en mode debug
$smarty->debugging = false;
// On d�sactive le cache de r�sultat interm�diaires
$smarty->caching = false;
// On d�finit le chemin o� se trouveront les templates (mod�les HTML)
$smarty->template_dir = 'templates';
// On d�finit le chemin des fichiers compil�s de Smarty
$smarty->compile_dir = 'compilation';


$db		= new dimsigner();

// D�marrage de la session PHP, comme �a on peut utiliser la variable $_SESSION ensuite
session_start();


// On v�rifie si le client est d�j� connect�
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