<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 'karine')
	die("Affichage interdit !");
?>
<!DOCTYPE html>
<html lang="fr"> <!--<![endif]-->

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="content-language" content="fr" />
		
		<!-- BASIC INFO -->
		<title>Karine Dupont-Reyner</title>
		<meta property="og:site_name" content="Karine Dupont-Reyner">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://www.karinedupontreyner.com">
		<meta property="og:title" content="Karine Dupont-Reyner">
		<meta name="author" content="Despert Dimitri">
		<meta name="keywords" content="karine dupont reyner avocat, maitre karine dupont reyner, karine dupont reyner, karine dupont-reyner, karinedupont-reyner, karinedupontreyner, karine avocate, avocate droit de la famille, droit de la famille paris, avocate karine paris, karine avocate paris, avocate droit famille karine, droit de la famille, amours toxiques, avocate reportage france 5, honoraires avocats droit famille, honoraires avocats paris, amours toxiques fr5, france 5 documentaire avocate, karine france 5">
		<meta property="og:description" content="Fond&eacute; par Karine DUPONT-REYNER en 2009, le cabinet consacre son activit&eacute;&nbsp;exclusivement au droit de la famille et au droit des personnes.">
		<!--meta name="description" content="Fond&eacute; par Karine DUPONT-REYNER en 2009, le cabinet consacre son activit&eacute;&nbsp;exclusivement au droit de la famille et au droit des personnes."-->

		<!-- FAVICONS -->
		<link rel="icon" href="images/favicons/favicon.ico">
		<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
		<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>

		<!-- CSS
		================================= -->

		<!-- GOOGLE FONTS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300' rel='stylesheet' type='text/css'>
		
		<!--RECAPTCHA-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- LIBRARIES CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.min.css">

		<!-- SPECIFIC CSS -->
		<link rel="stylesheet" href="css/style.css">

		<!-- COLORS -->
		<!-- <link id="color-css" rel="stylesheet" href="css/colors/pink.css"> -->
		<!-- <link id="color-css" rel="stylesheet" href="css/colors/red.css"> -->
		<link id="color-css" rel="stylesheet" href="css/colors/orange.css">
		<!-- <link id="color-css" rel="stylesheet" href="css/colors/yellow.css"> -->
		<!-- <link id="color-css" rel="stylesheet" href="css/colors/green.css"> -->
		<!-- <link id="color-css" rel="stylesheet" href="css/colors/turquoise.css"> -->
		<!-- <link id="color-css" rel="stylesheet" href="css/colors/blue.css"> -->
		
		<link rel="stylesheet" href="css/rework.css">
		
	</head>

	<body class="enable-animations enable-preloader">

		<div id="document" class="document">

			<!-- HEADER
			================================= -->
			<header class="header-section section section-dark navbar navbar-fixed-top">

				<div class="container">

					<div class="navbar-header navbar-left">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- HEADER LOGO -->
						<a class="navbar-logo navbar-brand anchor-link" href="#accueil">
							<img src="images/logos/header-logo.png" srcset="images/logos/header-logo@2x.png 2x" alt="Drew">
						</a>

					</div>

					<nav id="navigation" class="navigation navbar-collapse collapse navbar-right">
						
						<!-- NAVIGATION LINKS -->
						<ul id="header-nav" class="nav navbar-nav">
							
							<li style="border: 0;"><a href="#hero" class="hidden">Top</a></li>

							<li><a href="#accueil">Accueil</a></li>
							<li><a href="#headline">Pr&eacute;sentation</a></li>
							<li><a href="#valor">Valeurs et comp&eacute;tences</a></li>
							<li><a href="#team">Notre &eacute;quipe</a></li>
							<li><a href="#honoraires">Honoraires</a></li>
							<li><a href="#contact-maps">Contact</a></li>
							
							<!-- HEADER ACTION BUTTON -->
							<!--li class="header-action-button"><a href="#" class="btn btn-primary">Action Button</a></li-->

						</ul>

					</nav>

				</div>
				
				<a href="#accueil" class="go-back-up anchor-link"><span class="fa fa-angle-up"></a>
				
			</header>

			<!-- HERO
			================================= -->
			<section id="accueil" class="hero-section hero-layout-simple hero-fullscreen section section-dark">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax" data-stellar-ratio="0.4">
						<div class="background-size-device"><img src="images/backgrounds/background-top.jpg" alt="" style="opacity: 0.3;"></div>
						<div class="background-size-medium"><img src="images/backgrounds/background-top-medium.jpg" alt="" style="opacity: 0.3"></div>
						<div class="background-size-smd"><img src="images/backgrounds/background-top-smd.jpg" alt="" style="opacity: 0.3"></div>
					</div>

				</div>

				<div class="container">
					<div class="table-cell-top">
						<div style="display: table-cell; vertical-align: middle;">
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
									<img src="images/contents/logo-center.png" class="logo-type-height" alt="" data-animation="zoomIn"/>
									<p style="color: #fff; text-align: center; font-size: 18px;">Fond&eacute; par Karine DUPONT-REYNER en 2009, le cabinet consacre son activit&eacute;&nbsp;exclusivement au droit de la famille et au droit des personnes.</p>
									<a href="#contact-maps" class="btn btn-lg btn-primary anchor-link btn-top"><i class="fa fa-phone"></i> Contact</a> <a href="#video" class="btn btn-lg btn-primary anchor-link btn-top"><i class="fa fa-play-circle"></i> Video</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- HERO START LINK -->
				<a href="#headline" class="hero-start-link anchor-link"><span class="fa fa-angle-down"></span></a>

			</section>

			<!-- HEADLINE
			================================= -->
			<section id="headline" class="headline-section section-gray section">

				<div class="container">

					<h1 class="section-heading text-center hidden">Tagline</h1>

					<div class="row">
						<div class="col-md-12">
						
							<p class="headline-text" style="text-align: justify">
								Tr&egrave;s sensibilis&eacute;e au sort des victimes de violences psychologiques au sein du&nbsp;couple et connaissant le fonctionnement de personnalit&eacute;s 
								manipulatrices, elle a particip&eacute; en 2012 au documentaire r&eacute;alis&eacute; par la journaliste Dani&egrave;le ALET &laquo; Amours toxiques &raquo; 
								qui a &eacute;t&eacute; diffus&eacute; sur France 5 &agrave; plusieurs reprises.<br /><br />
								Sa vocation premi&egrave;re est de conseiller et d&rsquo;accompagner sa client&egrave;le dans toutes les composantes de la s&eacute;paration : juridiques, patrimoniales et&nbsp;psychologiques 
								avec le bon sens, la rigueur et l&rsquo;&eacute;coute attentive&nbsp;indispensables.
								Pour ce faire, le cabinet met &agrave; la disposition de sa client&egrave;le tout son savoir-faire articul&eacute; autour de la rigueur, l&rsquo;exigence, 
								la disponibilit&eacute;, l&rsquo;&eacute;coute et la formation.
							</p>

						</div>
					</div>
					<div id="video" class="row">
						<div class="col-md-10 col-md-offset-1">

							<div class="video-embed">

								<!-- VIDEO EMBED FROM VIMEO -->
								<!-- iframe class="video-async" data-source="vimeo" data-video="115134273" data-color="f3ae73" allowfullscreen></iframe -->
								
								<!-- VIDEO EMBED FROM YOUTUBE -->
								<iframe class="video-async" data-source="youtube" data-video="HZJYvfMHrfE" allowfullscreen></iframe>

							</div>

						</div>
					</div>

				</div>

			</section>

			<!-- TESTIMONIAL SLIDER
			================================= -->
			<section id="valor" class="testimonial-slider-section section-dark section section-title-sign">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax" data-stellar-ratio="0.4">
						<img src="images/backgrounds/inner-bg1.jpg" style="opacity: 0.15;">
					</div>

				</div>
				
				<div class="container">

					<h1 class="section-heading text-center" data-animation="fadeInUp">Valeurs et comp&eacute;tences</h1>

				</div>

			</section>

			<!-- FAQ
			================================= -->
			<section class="faq-section section">

				<div class="container">

					<div class="faq-row row">

						<div class="col-md-6">
							<div class="faq-item">
								<span class="faq-item-icon fa fa-certificate"  data-animation="zoomIn"></span>
								<h4 class="faq-item-heading">Une forte exp&eacute;rience</h4>
								<div class="faq-item-text" style="text-align: justify">Inscrite au barreau de Paris depuis 1998, Karine DUPONT-REYNER a acquis&nbsp;une solide exp&eacute;rience aupr&egrave;s de deux cabinets d&rsquo;avocats parisiens en droit&nbsp;des affaires. Depuis 2009, elle se consacre quasi exclusivement au droit de la&nbsp;famille et au droit des personnes. Le contentieux du droit de la famille&nbsp;repr&eacute;sente d&eacute;sormais plus de 95% de son activit&eacute; professionnelle.
								Son expertise en droit des affaires est un v&eacute;ritable atout afin d&rsquo;analyser les&nbsp;documents patrimoniaux &nbsp;dans le cadre de la d&eacute;fense des int&eacute;r&ecirc;ts financiers&nbsp;de ses clients</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="faq-item">
								<span class="faq-item-icon fa fa-certificate"  data-animation="zoomIn"></span>
								<h4 class="faq-item-heading">Une sensibilit&eacute; aux victimes</h4>
								<div class="faq-item-text" style="text-align: justify">La pr&eacute;sence d&rsquo;un conjoint manipulateur dans le cadre d&rsquo;une proc&eacute;dure de s&eacute;paration dont le pouvoir de nuisance et de toxicit&eacute; tant sur l&rsquo;autre conjoint que sur les enfants est encore sous-estim&eacute; ou m&eacute;connu de la justice et n&eacute;cessite de faire appel &agrave; un avocat familiaris&eacute; &agrave; ce type de personnalit&eacute;s.</div>
							</div>
						</div>
						
					</div>
					<div class="faq-row row">

						<div class="col-md-6">
							<div class="faq-item">
								<span class="faq-item-icon fa fa-certificate"  data-animation="zoomIn"></span>
								<h4 class="faq-item-heading">Une assistance accompagn&eacute;e</h4>
								<div class="faq-item-text" style="text-align: justify">Karine DUPONT-REYNER vous assistera et vous repr&eacute;sentera devant les Tribunaux et Cours d&rsquo;Appel pour toutes proc&eacute;dures en mati&egrave;re&nbsp;de :
								<ul style="padding-top: 10px;">
									<li><i>divorce amiable ou contentieux</i></li>
									<li><i>s&eacute;paration de concubins ou partenaires d&rsquo;un pacte civil de solidarit&eacute;</i></li>
									<li><i>fixation des modalit&eacute;s d&rsquo;exercice de l&rsquo;autorit&eacute; parentale (pension alimentaire, droits de visite et d&rsquo;h&eacute;bergement, etc..)</i></li>
									<li><i>partage des biens et liquidations de r&eacute;gimes matrimoniaux</i></li>
									<li><i>tutelle ou curatelle.</i></li>
								</ul></div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="faq-item">
								<span class="faq-item-icon fa fa-certificate"  data-animation="zoomIn"></span>
								<h4 class="faq-item-heading">Une &eacute;coute et une disponibilit&eacute; valoris&eacute;es</h4>
								<div class="faq-item-text" style="text-align: justify">L&rsquo;&eacute;coute et la disponibilit&eacute; sont tout particuli&egrave;rement valoris&eacute;es au sein du cabinet, car il n&rsquo;est pas envisageable d&rsquo;engager une proc&eacute;dure ou de fournir un conseil avis&eacute; de fa&ccedil;on efficace sans ce lien tr&egrave;s particulier avec nos clients qui est une composante indispensable en mati&egrave;re familiale.<br /><br />Une grande disponibilit&eacute; est n&eacute;cessaire pour constituer le dossier et aider le client dans ses d&eacute;marches de s&eacute;paration.</div>
							</div>
						</div>
						
					</div>
					<div class="faq-row row">

						<div class="col-md-6">
							<div class="faq-item">
								<span class="faq-item-icon fa fa-certificate"  data-animation="zoomIn"></span>
								<h4 class="faq-item-heading">Un premier rendez-vous important</h4>
								<div class="faq-item-text" style="text-align: justify">Le premier rendez-vous de consultation d&rsquo;une dur&eacute;e comprise entre une heure 30 minutes et deux heures est fondamental. Au cours de ce premier rendez-vous, il sera recueilli les nombreux renseignements aupr&egrave;s du client et les premi&egrave;res pi&egrave;ces.</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="faq-item">
								<span class="faq-item-icon fa fa-certificate"  data-animation="zoomIn"></span>
								<h4 class="faq-item-heading">Un <em>Coaching</em> en fonction des circonstances</h4>
								<div class="faq-item-text" style="text-align: justify">La relation avocat-client s&rsquo;apparente souvent &agrave; du <em>coaching</em> tant du point de vue du soutien moral du client en situation de fragilit&eacute; le plus souvent que de l&rsquo;optimisation du contenu du dossier.</div>
							</div>
						</div>

					</div>
					<div class="faq-row row">
						<div class="col-md-12">
							<div class="faq-item">
								<div class="faq-item-text" style="text-align: justify">Ces valeurs fondamentales expliquent la raison pour laquelle le cabinet DUPONT-REYNER est un cabinet &agrave; taille humaine et souhaite le rester. Sa mission tient bien plus du &laquo;sur-mesure&raquo; que du &laquo;pr&ecirc;t-&agrave;-porter&nbsp;&raquo; et dans lequel la disponibilit&eacute; et le contact avec l&rsquo;avocat sont ais&eacute;s et permanents.</div>
							</div>
						</div>
					</div>

				</div>

			</section>
			
			<!-- TESTIMONIAL SLIDER
			================================= -->
			<section id="team" class="testimonial-slider-section section-dark section section-title-sign">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax" data-stellar-ratio="0.4">
						<img src="images/backgrounds/inner-bg2.jpg" style="opacity: 0.15;">
					</div>

				</div>
				
				<div class="container">

					<h1 class="section-heading text-center" data-animation="fadeInUp">NOTRE &eacute;QUIPE</h1>

				</div>
			</section>
			
			<!-- TWO COLS DESCRIPTION SECTION
			================================= -->
			<section id="two-cols-description" class="two-cols-description-section section-accent section section-adder">

				<div class="container">
				
					<div class="row">
						
						<div class="col-md-6 position-team" data-animation="fadeIn">
						
							<img src="images/backgrounds/Karine.jpg" alt=""/>
				
							<div class="two-cols-description-text">

								<div class="two-cols-description-text-inner">

									<h1 class="section-heading text-left title-twocol-color">Karine DUPONT-REYNER</h1>

									<p>Titulaire d&rsquo;un DESS en droit europ&eacute;en des affaires &agrave; l&rsquo;Universit&eacute; Paris V-Ren&eacute; Descartes, Karine DUPONT-REYNER a exerc&eacute; dans deux cabinets sp&eacute;cialis&eacute;s en droit des affaires pour se consacrer exclusivement au droit de la famille depuis 2009.</p>
									
								</div>

							</div>
						
						</div>
						
						<div class="col-md-6 position-team" data-animation="fadeIn">
						
							<img src="images/backgrounds/Alice.jpg" alt=""/>

							<div class="two-cols-description-text">

								<div class="two-cols-description-text-inner">

									<h1 class="section-heading text-left title-twocol-color">ALICE FILDIER</h1>

									<p>Titulaire d&rsquo;un MASTER II &laquo; RECHERCHE DE DROIT PRIV&Eacute; G&Eacute;N&Eacute;RAL &raquo; avec une sp&eacute;cialit&eacute; en droit des contrats et en droit de la famille &agrave; Paris II- Assas, Alice FILDIER a pr&ecirc;t&eacute; serment en 2011 et a exerc&eacute; pendant quatre ans dans un cabinet sp&eacute;cialis&eacute; en droit des personnes.</p>
									
								</div>

							</div>
						
						</div>
						
					</div>
					
				</div>

			</section>
			
			<!-- TESTIMONIAL SLIDER
			================================= -->
			<section id="honoraires" class="testimonial-slider-section section-dark section section-title-sign">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax" data-stellar-ratio="0.4">
						<img src="images/backgrounds/inner-bg3.jpg" style="opacity: 0.15;">
					</div>

				</div>
				
				<div class="container">

					<h1 class="section-heading text-center" data-animation="fadeInUp">Honoraires</h1>

				</div>
			</section>
			
			<!-- DESCRIPTION
			================================= -->
			<section id="about" class="about-section section">

				<div class="container">

					<div class="row">

						<!-- DESCRIPTION TEXT -->
						<div class="about-text col-md-12">
							<p class="lead" style="text-align: justify">Le cabinet DUPONT-REYNER facture ses diligences au temps pass&eacute;, sur la base d&rsquo;une convention de mission et de r&eacute;mun&eacute;ration laquelle est sign&eacute;e avant toute intervention de l&rsquo;avocat.</p>
							<p>Le premier rendez-vous de consultation d&rsquo;une dur&eacute;e comprise <b>entre une heure trente et deux heures</b> est factur&eacute; 280 &euro; TTC.</p>
							<ul class="icon-list">
								<li>
									<span class="icon-list-icon fa fa-user" data-animation="bounceIn"></span>
									<h4 class="icon-list-title">Karine Dupont-Reyner</h4>
									<hr class="hr-hono">
									<p>Le taux horaire de Me DUPONT-REYNER est de 280 &euro; HT/ heure.</p>
								</li>
								<li>
									<span class="icon-list-icon fa fa-user-plus" data-animation="bounceIn"></span>
									<h4 class="icon-list-title">Collaborateurs</h4>
									<hr class="hr-hono">
									<p>Pour les collaborateurs, le taux horaire s&rsquo;&eacute;l&egrave;ve &agrave; 190 &euro; HT/heure.</p>
								</li>
							</ul>

							<p style="text-align: justify">La signature de la convention de mission et de r&eacute;mun&eacute;ration emporte toujours le versement d&rsquo;une provision sur honoraires comprise g&eacute;n&eacute;ralement 
							entre 1.500 &euro; HT et 2.000 &euro; HT. Elle est par la suite compl&eacute;t&eacute;e en fonction des diligences accomplies et de l&rsquo;&eacute;volution du dossier. Afin de 
							permettre au client d&rsquo;anticiper le co&ucirc;t de la proc&eacute;dure, un budget estimatif pr&eacute;visionnel indicatif des honoraires est fourni avec une fourchette basse et une fourchette haute.</p>

							<p style="text-align: justify">Lorsque la provision sur honoraires est &eacute;puis&eacute;e, le d&eacute;tail des diligences accomplies est transmis au client sans d&eacute;lai et une nouvelle provision 
							sur honoraires est sollicit&eacute;e en fonction des diligences restant &agrave; pr&eacute;voir.Le cabinet ne travaille ni au forfait ni &agrave; l&rsquo;honoraire de r&eacute;sultat.</p>

						</div>

					</div>

				</div>

			</section>

			<!-- CONTACT + MAPS
			================================= -->
			<section id="contact-maps" class="contact-maps-section section">

				<div class="section-background">

					<!-- MAPS BACKGROUND -->
					<div class="section-background-maps">
						<div id="gmap"></div>
				
						<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
						<!-- GOGGLE MAPS CONFIGURATION -->
						<!-- ref: http://maplacejs.com/ -->
						<script>
						var gmap_options = {
							generate_controls : false,
							locations : [{
								lat : 48.864203, 
								lon : 2.269939,
								animation : google.maps.Animation.DROP,
								html : "Drew Headquarter",
								icon : "images/contents/map-1.png",
								clickable : false,
							}],
							map_options : {
								scrollwheel : false,
								mapTypeControl : false,
								streetViewControl : false,
								zoomControlOptions : {
									style : google.maps.ZoomControlStyle.SMALL,
								},
								zoom : 16,
								set_center : [ 48.864170, 2.274355 ], // adjust the "lon" attribute of your first location
							},
							styles : {
								// source: https://snazzymaps.com/style/132/light-gray
								'custom' : [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}],
							},
						};
						</script>
					</div>
				</div>

				<div class="container">
					<div class="contact-maps-row row">
						<div class="col-md-7 col-md-offset-5">

							<div class="contact-maps-box" data-animation="fadeIn">

								<h1 class="section-heading">Contactez nous</h1>
								<p>Si vous avez des questions ou bien souhaitez vous renseigner, vous pouvez nous joindre grace aux informations suivantes</p>

								<div class="row">
									<address class="col-sm-6">
										<strong>Adresse du cabinet :</strong>
										<ul class="fa-ul">
											<li><i class="fa-li fa fa-home"></i>67, Boulevard Lannes  <br>  75116 PARIS</li>
											<li><i class="fa-li fa fa-phone"></i>Phone: (+33) 1 45 04 61 61</li>
											<li><i class="fa-li fa fa-fax"></i>Fax: (+33) 1 45 04 80 20</li>
										</ul>										
									</address>
									<address class="col-sm-6">
										<strong>S'y rendre :</strong>
										<ul class="fa-ul" style="margin-left: 0px;">
											<li><img src="images/contents/metro.png" alt="" width="20px" height="20px"/> <img src="images/contents/ligne9.png" alt="" width="20px" height="20px"/> Metro Ligne 9<li>
											<li><img src="images/contents/metro.png" alt="" width="20px" height="20px"/> <img src="images/contents/ligne2.png" alt="" width="20px" height="20px"/> Ligne 2<li>
											<li><img src="images/contents/rer.png" alt="" width="20px" height="20px"/> <img src="images/contents/rerC.png" alt="" width="20px" height="20px"/> RER Ligne C<li>
											<li><img src="images/contents/bus.png" alt="" width="20px" height="20px"/> <img src="images/contents/busPC1.png" alt="" width="20px" height="20px"/> Bus PC1<li>
											<li><img src="images/contents/bus.png" alt="" width="20px" height="20px"/> <img src="images/contents/bus63.png" alt="" width="20px" height="20px"/> Ligne 63<li>
										</ul>										
									</address>
								</div>

								<form name="contact" action="modules/send-email.php" method="post" class="form">
									<p><strong>Vous pouvez nous &eacute;crire :</strong></p>
									<div class="form-validation alert"></div>
									<div class="form-group">
										<input type="text" name="contact-name" class="form-control" placeholder="Nom/Pr&eacute;nom">
									</div>
									<div class="form-group">
										<input type="text" name="contact-email" class="form-control" placeholder="Adresse email">
									</div>
									<div class="form-group">
										<input type="text" name="contact-subject" class="form-control" placeholder="Objet">
									</div>
									<div class="form-group">
										<textarea name="contact-message" class="form-control" placeholder="Message" rows="5"></textarea>
									</div>
									<div class="form-group">
										<!--div class="g-recaptcha" data-sitekey="6LeqUAkTAAAAAFipo1sOesbFEkEpNJOzlc5bFnK2"></div-->
										<div class="g-recaptcha" data-sitekey="6LeqUAkTAAAAAFipo1sOesbFEkEpNJOzlc5bFnK2"></div>
									</div>
									<div class="form-group">
										<input type="submit" value="Envoyer !" class="btn btn-primary btn-lg btn-block" onclick="alert("Votre mail va être envoyé !");">
									</div>
								</form>

							</div>
							
						</div>
					</div>
				</div>

			</section>

			<!-- FOOTER
			================================= -->
			<section id="footer" class="footer-section section">

				<div class="container">

					<div class="footer-copyright">
						&copy; 2015 Karine Dupont-Reyner | <a href="http://www.dimsigner.com/" target="_blank">Credits</a> <a href="https://www.linkedin.com/pub/karine-reyner/65/3a0/b02?trk=pub-pbmap" target="_blank">Linked In</a></p>
						
					</div>

				</div>

			</section>
		
		</div>

		<!-- LIBRARIES JS
		================================= -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/respimage.min.js"></script>
		<script src="js/jpreloader.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/jquery.nav.min.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/maplace-0.1.3.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>

		<!-- MAIN SCRIPT
		================================= -->
		<script src="js/script.js"></script>

	</body>

</html>