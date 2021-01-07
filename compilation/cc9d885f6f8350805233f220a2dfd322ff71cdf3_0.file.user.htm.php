<?php /* Smarty version 3.1.27, created on 2015-12-13 15:16:05
         compiled from "templates\user.htm" */ ?>
<?php
/*%%SmartyHeaderCode:10079566d7da5522132_76080410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc9d885f6f8350805233f220a2dfd322ff71cdf3' => 
    array (
      0 => 'templates\\user.htm',
      1 => 1450016163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10079566d7da5522132_76080410',
  'variables' => 
  array (
    'authentifie' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566d7da573e774_20109405',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566d7da573e774_20109405')) {
function content_566d7da573e774_20109405 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10079566d7da5522132_76080410';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- BASIC INFO -->
		<title>Dimsigner.com</title>
		<meta name="author" content="Despert Dimitri">
		<meta name="keywords" content="webdesigner, webdesigner meaux, dimsigner, dimsigner.com, webdesign dimitri, dimitri despert, despert dimitri, despert, dimitri web, web infographiste, infographiste web, webdesign, infographiste, communication visuelle">
		<meta name="description" content="Infographiste, webdesigner, photographe">

		<!-- FAVICONS -->
		<link rel="icon" href="images/favicons/favicon.ico">
		<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
		
		<!-- LIBRARIES CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animpage.css">

		<!-- SPECIFIC CSS -->
		<link rel="stylesheet" href="css/style.css">
		
		<!--googlefont-->
		
	</head>
	<body>

		<div class="animsition sizing-userpage">
		
			<?php if (!$_smarty_tpl->tpl_vars['authentifie']->value) {?>
			<nav class="menu-top">
			
				<a href="index.htm" class="logo animsition-link"><img src="img/logo.png" alt="logo"/></a>
				<div class="menu"><i class="fa fa-bars"></i></div>
				
				<div class="showmenu closedMenu">
					<ul class="inmenu">
						<li><a href="#about-me">Portfolio</a></li>
						<li><a class="animsition-link" href="index.htm#contact" >Contact</a></li>
						<li><a class="btn animsition-link" href="index.htm">Retour</a></li>
					</ul>
				</div>
				
			</nav>
		
			<nav class="menu-bottom usersectiongtb">
				<ul class="socialnetworks">
					<li><a href="https://www.facebook.com/dimsigner" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.linkedin.com/in/dimsigner" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="https://plus.google.com/+Dimsignerwb" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li>&nbsp;</li>
				</ul>
			</nav>
			<?php }?>
		
			<?php if ($_smarty_tpl->tpl_vars['authentifie']->value) {?>
			<nav class="loggedsection">
				<div class="table-out">
					<div class="table-in">
						<p class="pcenter loggedbar">
							<a href="index.htm" data-toggle="tooltip" data-placement="top" title="Retourner a l'accueil"><i class="fa fa-arrow-left"></i></a>
							<a href="https://www.google.com/intl/fr_fr/drive/" data-placement="top" title="Uploader des fichiers via GoogleDrive"><i class="fa fa-download"></i></a>
							<a href="user.php?destroy=1" data-placement="top" title="Se deconnecter"><i class="fa fa-user-times"></i></a>
						</p>
					</div>
				</div>
			</nav>
			<?php }?>
			
			<?php if (!$_smarty_tpl->tpl_vars['authentifie']->value) {?>
			<header class="loginsectionbg">
				<div class="table-out">
					<div class="table-in">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="loginbg" data-sr="wait 0.4s">
										<h1 class="title-inner">Bienvenue,</h1>
										<p class="content-login">Si vous etes client, vous avez recu par email votre login et mot de passe afin de consulter l'avancement de votre projet. </p>
										<form action="user.php" method="POST">
											<p>
												<label for="username">Entrez votre compte</label>
												<input type="text" id="username" name="username" class="chmp" placeholder="">
											</p>
											<p>
												<label for="password">Entrez votre mot de passe</label>
												<input type="password" id="password" name="psw" class="chmp" placeholder="">
											</p>
											<p class="labelrmb">
												<label for="rememberme">Se souvenir de moi</label>
												<input name="rememberme" id="rememberme" type="checkbox" class="rememberme" value="forever">
											</p>
											<button type="submit" class="btn-lg btn-form">Se connecter</button>
											<p class="content-login" style="margin-top: 15px;">
												Sinon, vous pouvez <a class="animsition-link" href="index.htm">retourner a l'accueil</a> afin de me contacter pour d'obtenir un devis ou tout renseignement supplementaire.
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<?php } else { ?>
				<!-- Projet du client -->
				<iframe src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="iframe-size"></iframe>
			<?php }?>
			
		</div>
		
		<!-- jQuery -->
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"><?php echo '</script'; ?>
>

		<!-- Bootstrap Core JavaScript -->
		<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/smoothscroll.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/smoothscroll.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/animpage.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/jquery.stellar.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='js/scrollReveal.min.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
?>