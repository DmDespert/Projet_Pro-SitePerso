<?php

class dimsigner
{
	var $login		= "webmysql";
	var $password	= "dMUCAFyKLzVjFb8H";
	var $host		= "127.0.0.1";
	var $res		= false;
	
	// "__construct" est la fonction appel�e naturellement lorsqu'on instancie la classe avec $variable = new dimsigner();
	function __construct()
	{
		// On se connecte � la base MySQL gr�ce aux variable locales "$this->host", etc. puis on stocke le r�sultat dans une variable locale � la classe $this->res
		$this->res = @mysql_connect($this->host, $this->login, $this->password);
	}
	
	// Fonction de nettoyage d'injection SQL
	function	mysql_clean($str, $size)
	{
		$str	= substr($str, 0, $size);
		$str	= str_replace("'", "", $str);
		$str	= str_replace(" ", "", $str);
		return $str;
	}
	
	// V�ritable m�thode (fonction) qu'on code soi-m�me
	function authentify($login, $password)
	{
		$login		= $this->mysql_clean($login, 20);
		$password	= $this->mysql_clean($password, 20);

		// On s�lectionne la base dans laquelle la table authentify se trouve
		if (!mysql_select_db("dimsigner", $this->res))
			die("Une erreur est survenue lors de l'acces a la base dimsigner");

		// On essaye de retrouver notre login / password
		$requete = "SELECT * FROM authentification WHERE `login` = '$login' AND MD5(CONCAT('$password', `graine`)) = `password`";

		$query		= mysql_query($requete, $this->res);
		if ($query === FALSE)
			die("Une erreur est survenue lors de l'acces a la table authentification");
		$num		= mysql_num_rows($query);
		if ($num === false || $num == 0)
			return false;
		return true;	}
	
	function get_url($login)
	{
		$login		= $this->mysql_clean($login, 20);

		// On s�lectionne la base dans laquelle la table authentify se trouve
		if (!mysql_select_db("dimsigner", $this->res))
			die("Une erreur est survenue lors de l'acces a la base dimsigner");

		// On essaye de retrouver notre login / password
		$requete = "SELECT `url` FROM authentification WHERE `login` = '$login'";

		$query		= mysql_query($requete, $this->res);
		if ($query === FALSE)
			die("Une erreur est survenue lors de l'acces a la table authentification");
		$row	= mysql_fetch_array($query, MYSQL_ASSOC);
		return $row['url'];
	}
	
	function	create_login($login, $password)
	{
		// On s�lectionne la base dans laquelle la table authentify se trouve
		if (!mysql_select_db("dimsigner", $this->res))
			die("Une erreur est survenue lors de l'acces a la base dimsigner");
		
		// On g�n�re un nombre al�atoire compris entre 1 milliard et 4 milliards
		$graine = rand(1000000000, 4000000000);
		
		// On ins�re le nouveau compte en base
		$query		= mysql_query("INSERT INTO `authentification` (`password`, `login`, `graine`) VALUES ('".md5($password.$graine)."', '$login', '$graine')", $this->res);
		if ($query === FALSE)
			return false;
		return true;
	}
}





