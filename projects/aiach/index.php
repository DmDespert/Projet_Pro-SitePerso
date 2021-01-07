<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 'aiach')
	die("Affichage interdit !");
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- BASIC INFO -->
		<title>Aiach Edelmann Associ&eacute;s</title>
		<meta name="author" content="Dimitri Despert">
		<meta name="keywords" content="aiach, edelmann, avocats, droit du travail, paris, avocats associés, avocats paris">
		<meta name="description" content="AIACH EDELMANN ASSOCIES AVOCATS DROIT DU TRAVAIL">
		<META NAME="Robots" CONTENT="all">

		<!-- FAVICONS -->
		<link rel="icon" href="images/favicons/favicon.ico">
		<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

		<!-- CSS
		================================= -->

		<!-- GOOGLE FONTS -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
		<link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>

		<!-- LIBRARIES CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body class="enable-animations enable-preloader">

		<div id="document" class="document">

			<!-- HEADER
			================================= -->
			<header id="header" class="header-section section section-dark navbar navbar-fixed-top">

				<div class="container-fluid">

					<div class="navbar-header navbar-left">

						<!-- RESPONSIVE MENU BUTTON -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<!-- HEADER LOGO -->
						<a class="navbar-logo navbar-brand anchor-link" href="#top">
							<img src="images/logos/barrelogo.png" srcset="images/logos/barrelogo.png" alt="logo"/><img src="images/logos/barrelogo2.png" srcset="images/logos/barrelogo2.png" alt="logo" class="barrelogo2"/>
						</a>

					</div>

					<nav id="navigation" class="navigation navbar-collapse collapse navbar-right">
						
						<!-- NAVIGATION LINKS -->
						<ul id="header-nav" class="nav navbar-nav">

							<li><a href="#top" class="hidden">Top</a></li>
							<li><a href="#actu">&Agrave; savoir</a></li>
							<li class="dropdown">
							<a id="drop" href="#" class="dropdown-toggle" data-toggle="dropdown">Notre m&eacute;tier <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#specialisations">Sp&eacute;cialit&eacute; en droit du travail</a></li>
								<li><a href="#champs">Domaines d'expertise</a></li>
								<li><a href="#valeurs">Nos valeurs</a></li>
							</ul>
							</li>
							<li><a href="#yourstat">Salari&eacute; ou employeur</a></li>
							<li><a href="#associes">notre &eacute;quipe</a></li>

							<!-- HEADER ACTION BUTTON -->
							<li class="header-action-button"><a href="#contact-maps" class="btn btn-primary">Contact</a></li>

						</ul>

					</nav>

				</div>

			</header>

			<!-- TOP
			================================= -->
			<section id="top" class="top-section top-layout-simple top-fullscreen section section-dark">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax-background" data-stellar-background-ratio="0.4"></div>

				</div>

				<div class="container">

					<div class="top-content">

						<div class="row">
							<div class="col-md-10 col-md-offset-1">

								<div class="top-heading">
								
									<img class="img-style" src="images/logos/aiach.png" alt="Description Image" data-animation="fadeInUp">

									<h1 class="top-title">Aiach Edelmann Associ&eacute;s</h1>

									<p class="top-tagline">Avocats en droit du travail <br />barreau de Paris</p>

								</div>

							</div>
						</div>

					</div>

				</div>

				<!-- TO GO ACTU -->
				<a href="#actu" class="top-start-link anchor-link"><span class="fa fa-angle-double-down"></span></a>

			</section>

			<!-- ACTUALITES
			================================= -->
			<section id="actu" class="headline-section section-gray section">

				<div class="container">
				
					<h2 class="section-heading text-center">&Agrave; <span style="color: #9d043c">savoir </span></h2>

					<h2 class="section-heading text-center hidden">Tagline</h2>

					<div class="row">
						<div class="col-md-12">
							
							<!--Article 1-->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
								<div class="article-size">
									<h4 class="fontcent title-article">Employeurs Syntec, s&eacute;curisez vos forfaits jours !</h4>
									<p>
									Employeurs SYNTEC, vous pouvez d&eacute;sormais s&eacute;curiser vos clauses de forfait jours.<br /><br />
									Certains cadres sont soumis &agrave; une clause de forfait d&eacute;terminant le nombre de jours travaill&eacute;s dans la limite de 218 jours. 
									Cependant, les cadres au forfait ne sont pas corv&eacute;ables &agrave; merci !
									Jusqu&rsquo;&agrave; l&rsquo;avenant &agrave; l&rsquo;accord national SYNTEC du 1er avril 2014, la cour de cassation a consid&eacute;r&eacute; 
									que le dispositif de contr&ocirc;le du temps de travail des cadres au forfait pr&eacute;vu par cette convention collective ne garantissait 
									pas suffisamment le respect du droit au repos du salari&eacute;. Les clauses de forfait jours des cadres autonomes &eacute;tait automatiquement nulles, 
									sauf accord d&rsquo;entreprise mettant en place un dispositif suffisant.
									</p>
								</div>
									<!-- Button trigger modal -->
									<a data-toggle="modal" data-target="#myModal1"><h5 class="underline" >En savoir +</h5></a>

									<!-- Modal -->
									<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel">Employeurs Syntec, s&eacute;curisez vos forfaits jours !</h4>
												</div>
											<div class="modal-body">
												<p>Employeurs SYNTEC, vous pouvez d&eacute;sormais s&eacute;curiser vos clauses de forfait jours.</p>

												<p>Certains cadres sont soumis &agrave; une clause de forfait d&eacute;terminant le nombre de jours travaill&eacute;s dans la 
												limite de 218 jours. Cependant, les cadres au forfait ne sont pas corv&eacute;ables &agrave; merci&nbsp;!</p>

												<p>Jusqu&rsquo;&agrave; l&rsquo;avenant &agrave; l&rsquo;accord national SYNTEC du 1er avril 2014, la cour de cassation a 
												consid&eacute;r&eacute; que le dispositif de contr&ocirc;le du temps de travail des cadres au forfait pr&eacute;vu par cette 
												convention collective ne garantissait pas suffisamment le respect du droit au repos du salari&eacute;. Les clauses de forfait 
												jours des cadres autonomes &eacute;tait automatiquement nulles, sauf accord d&rsquo;entreprise mettant en place un dispositif suffisant.</p>

												<p>La cons&eacute;quence de cette nullit&eacute; est tr&egrave;s lourde: toutes les heures suppl&eacute;mentaires sont dues au-del&agrave; 
												de 35 heures et dans un d&eacute;lai de prescription de 3 ans. Pour une population travaillant plut&ocirc;t 50 heures par semaine, la 
												facture peut s&rsquo;av&eacute;rer sal&eacute;e&nbsp;!</p>

												<p>L&rsquo;avenant &agrave; l&#39;accord national SYNTEC du 1er avril 2014 a s&eacute;curis&eacute; les conventions de forfait jours conclues 
												dans le secteur, en pr&eacute;voyant d&eacute;sormais des garanties suffisantes pour les entreprises d&eacute;pourvues d&#39;accord 
												d&rsquo;entreprise sp&eacute;cifique.</p>

												<p>A titre d&rsquo;exemple, parmi les dispositifs mis en place, un outil de suivi mentionnant l&rsquo;amplitude des journ&eacute;es doit 
												&ecirc;tre mis en &oelig;uvre et l&rsquo;employeur doit mener deux entretiens annuels individuels portant sur la charge de travail individuelle 
												du salari&eacute;, son organisation et l&#39;articulation entre activit&eacute; professionnelle et vie priv&eacute;e.</p>

												<p>Attention&nbsp;! A d&eacute;faut de mettre en place ces dispositifs, la clause est priv&eacute;e d&rsquo;effet !</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--Article 2-->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="article-size">
									<h4 class="fontcent title-article">Salari&eacute;s, les prud&#39;hommes ont d&eacute;sormais un mois pour statuer sur une prise d&#39;acte</h4>
									<p>
									La prise d&rsquo;acte de la rupture du contrat par le salari&eacute; est le fait, pour le salari&eacute; d&#39;annoncer &agrave; son employeur qu&#39;il 
									quitte l&#39;entreprise en &laquo; prenant acte de la rupture de son contrat&nbsp;&raquo;. Le salari&eacute; impute &agrave; l&#39;employeur la 
									responsabilit&eacute; de la rupture, en raison d'un ou plusieurs manquements suffisament graves &agrave; ses obligations emp&ecirc;chant la poursuite du contrat de travail.
									Saisis d&#39;une demande de requalification d&#39;une prise d&#39;acte en licenciement par un salari&eacute;, les prud&#39;hommes ont d&eacute;sormais un mois 
									pour statuer sur une prise d&#39;acte.
									</p>
								</div>
									<!-- Button trigger modal -->
									<a data-toggle="modal" data-target="#myModal2"><h5 class="underline">En savoir +</h5></a>

									<!-- Modal -->
									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel">Salari&eacute;s, les prud&#39;hommes ont d&eacute;sormais un mois pour statuer sur une prise d&#39;acte</h4>
												</div>
											<div class="modal-body">
												<p>La prise d&rsquo;acte de la rupture du contrat par le salari&eacute; est le fait, pour la salari&eacute; d&#39;annoncer &agrave; son employeur qu&#39;il 
												quitte l&#39;entreprise en &laquo; prenant acte de la rupture de son contrat&nbsp;&raquo;. Le salari&eacute; impute &agrave; l&#39;employeur la 
												responsabilit&eacute; de la rupture, en raison d'un ou plusieurs manquements suffisament graves &agrave; ses obligations emp&ecirc;chant la poursuite du contrat de travail.</p>

												<p>Saisis d&#39;une demande de requalification d&#39;une prise d&#39;acte en licenciement par un salari&eacute;, les prud&#39;hommes ont d&eacute;sormais un 
												mois pour statuer sur une prise d&#39;acte.</p>

												<p>L&#39;affaire est dans ce cas port&eacute;e directement devant le bureau de jugement sans phase de conciliation pr&eacute;alable.</p>

												<p>Jusqu&rsquo;&agrave; pr&eacute;sent, le salari&eacute; qui prenait acte de la rupture de son contrat de travail, priv&eacute; des indemnit&eacute;s 
												de ch&ocirc;mage, devait attendre que les juges se prononcent sur le bien-fond&eacute; de sa d&eacute;marche, ce qui pouvait prendre un certain temps 
												(le d&eacute;lai moyen d&eacute;passant un an et pouvant atteindre plus de 2 ans dans certains conseils de prud&#39;hommes).</p>

												<p>La requalification de la prise d&rsquo;acte en licenciement emporte toutes les cons&eacute;quences d&rsquo;un licenciement sans cause r&eacute;elle 
												et s&eacute;rieuse (paiement du pr&eacute;avis, de l&rsquo;indemnit&eacute; l&eacute;gale ou conventionnelle et dommages et int&eacute;r&ecirc;ts).</p>

												<p>Il ne reste plus au salari&eacute; qu&rsquo;&agrave; d&eacute;montrer des manquements suffisamment graves de l&#39;employeur 
												emp&ecirc;chant la poursuite du contrat de travail.&nbsp;</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--Article 3-->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="article-size">
									<h4 class="fontcent title-article">Employeurs, levez la clause de non concurrence dans la lettre de licenciement</h4>
									<p>
									Pour que l&rsquo;employeur puisse renoncer &agrave; appliquer une clause de non-concurrence, le contrat de travail doit imp&eacute;rativement 
									pr&eacute;voir cette facult&eacute;, mais il faut en outre que la lev&eacute;e de l&rsquo;obligation intervienne avant le d&eacute;part 
									effectif du salari&eacute;. <br />La clause de non-concurrence est celle visant &agrave; limiter la libert&eacute; d&#39;un salari&eacute; sortant d&#39;exercer des fonctions 
									&eacute;quivalentes chez un concurrent ou &agrave; son propre compte, sa validit&eacute; &eacute;tant conditionn&eacute;e au respect de certains 
									crit&egrave;res (int&eacute;r&ecirc;ts l&eacute;gitimes de l&#39;entreprise la justifiant&nbsp;; limitation de l&rsquo;obligation dans le temps, 
									dans l&rsquo;espace et &agrave; une activit&eacute; sp&eacute;cifiquement vis&eacute;e&nbsp;; existence d&rsquo;une contrepartie financi&egrave;re suffisante).
									</p>
								</div>
									<!-- Button trigger modal -->
									<a data-toggle="modal" data-target="#myModal3"><h5 class="underline">En savoir +</h5></a>

									<!-- Modal -->
									<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel">Employeurs, levez la clause de non concurrence dans la lettre de licenciement</h4>
												</div>
											<div class="modal-body">
												<p>Pour que l&rsquo;employeur puisse renoncer &agrave; appliquer une clause de non-concurrence, le contrat de travail doit imp&eacute;rativement 
												pr&eacute;voir cette facult&eacute;, <strong>mais il faut en outre que la lev&eacute;e de l&rsquo;obligation intervienne avant le d&eacute;part effectif du salari&eacute;.</strong></p>

												<p>La clause de non-concurrence est celle visant &agrave; limiter la libert&eacute; d&#39;un salari&eacute; sortant d&#39;exercer des fonctions 
												&eacute;quivalentes chez un concurrent ou &agrave; son propre compte, sa validit&eacute; &eacute;tant conditionn&eacute;e au respect de certains 
												crit&egrave;res (int&eacute;r&ecirc;ts l&eacute;gitimes de l&#39;entreprise la justifiant&nbsp;; limitation de l&rsquo;obligation dans le temps, 
												dans l&rsquo;espace et &agrave; une activit&eacute; sp&eacute;cifiquement vis&eacute;e&nbsp;; existence d&rsquo;une contrepartie financi&egrave;re suffisante).</p>

												<p>La contrepartie financi&egrave;re pouvant &ecirc;tre relativement &eacute;lev&eacute;e (30%, 50% voire 100 % du salaire mensuel selon les cas), et 
												l&rsquo;application de la clause se r&eacute;v&eacute;ler finalement peu utile pour l&rsquo;employeur en fin de contrat, il est important que ce dernier puisse renoncer &agrave; 
												cette clause et donc se lib&eacute;rer de l&rsquo;obligation de lui payer la contrepartie financi&egrave;re.</p>

												<p>La condition est que cette facult&eacute; de renonciation soit pr&eacute;vue par la clause de non concurrence.</p>

												<p>Une autre condition, r&eacute;cemment confirm&eacute;e par la Cour de cassation dans un arr&ecirc;t du 21 janvier 2015 mais parfois n&eacute;glig&eacute;e, 
												est que cette renonciation intervienne avant le d&eacute;part effectif du salari&eacute; (la justification de cette solution tenant aux modalit&eacute;s de 
												calcul de l&rsquo;indemnit&eacute; et &agrave; sa date d&rsquo;exigibilit&eacute;).</p>

												<p>Concr&egrave;tement, si le salari&eacute; est licenci&eacute;, qu&rsquo;il n&rsquo;est pas dispens&eacute; d&rsquo;effectuer son pr&eacute;avis de 
												3 mois et que le contrat permet la lev&eacute;e de l&rsquo;obligation de non concurrence dans un d&eacute;lai d&rsquo;un mois suivant la notification 
												du licenciement, la renonciation de l&rsquo;employeur dans le d&eacute;lai imparti pourra produire valablement ses effets.</p>

												<p>A l&rsquo;inverse et dans le m&ecirc;me cas de figure, si le salari&eacute; est dispens&eacute; d&rsquo;effectuer son pr&eacute;avis, son d&eacute;part 
												effectif intervient directement suite &agrave; la notification du licenciement, de sorte que l&rsquo;employeur ne dispose pas du d&eacute;lai d&rsquo;un 
												mois pourtant convenu entre les parties.</p>

												<p>En pratique, afin d&rsquo;&eacute;viter de tomber dans un tel pi&egrave;ge, il est donc plus prudent pour l&rsquo;employeur d&rsquo;anticiper la question 
												en amont, et de lever directement l&rsquo;obligation au sein de la lettre de licenciement plut&ocirc;t que d&rsquo;y proc&eacute;der dans un second temps&hellip;</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!--Article 4-->
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
								<div class="article-size">
									<h4 class="fontcent title-article">Salari&eacute;s, votre mise &agrave; la retraite forc&eacute;e avant 70 ans est consid&eacute;r&eacute;e comme un licenciement</h4>
									<p>
									Le d&eacute;part en retraite correspond &agrave; la situation du salari&eacute; quittant volontairement l&#39;entreprise pour b&eacute;n&eacute;ficier du droit &agrave; une pension de vieillesse. 
									Il suppose qu&rsquo;il soit en droit de faire liquider sa retraite et ait atteint l&rsquo;&acirc;ge de liquidation (62 ans pour les salari&eacute;s n&eacute;s apr&egrave;s 1954).
									La mise &agrave; la retraite d&rsquo;office d&rsquo;un salari&eacute; par l&#39;employeur n&rsquo;est possible que s&rsquo;il a atteint l&#39;&acirc;ge de 70 ans. 
									Avant cet &acirc;ge, la mise &agrave; la retraite n&#39;est possible qu&#39;avec l&#39;accord du salari&eacute;, sous certaines conditions.
									Si les conditions de mise &agrave; la retraite ne sont pas r&eacute;unies, la rupture du contrat de travail par l&#39;employeur doit &ecirc;tre 
									consid&eacute;r&eacute;e comme un licenciement pour motif personnel.
									Dans bien des cas, les d&eacute;parts &agrave; la retraite sont provoqu&eacute;s par l&rsquo;employeur et privil&eacute;gi&eacute;s &agrave; une 
									proc&eacute;dure de licenciement couteuse et plus protectrice des droits du salari&eacute;.
									</p>
									<!-- Button trigger modal -->
								</div>
									<a data-toggle="modal" data-target="#myModal4"><h5 class="underline">En savoir +</h5></a>

									<!-- Modal -->
									<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
													<h4 class="modal-title" id="myModalLabel">Salari&eacute;s, votre mise &agrave; la retraite forc&eacute;e avant 70 ans est consid&eacute;r&eacute;e comme un licenciement</h4>
												</div>
											<div class="modal-body">
												<p>Le d&eacute;part en retraite correspond &agrave; la situation du salari&eacute; quittant volontairement l&#39;entreprise pour b&eacute;n&eacute;ficier 
												du droit &agrave; une pension de vieillesse. Il suppose qu&rsquo;il soit en droit de faire liquider sa retraite et ait atteint l&rsquo;&acirc;ge de liquidation 
												(<strong>62 ans </strong>pour les salari&eacute;s n&eacute;s apr&egrave;s 1954).</p>

												<p>La mise &agrave; la retraite d&rsquo;office d&rsquo;un salari&eacute; par l&#39;employeur n&rsquo;est possible que s&rsquo;il a atteint l&#39;&acirc;ge de 70 ans.
												Avant cet &acirc;ge, la mise &agrave; la retraite n&#39;est possible qu&#39;avec l&#39;accord du salari&eacute;, sous certaines conditions.</p>

												<p>Si les conditions de mise &agrave; la retraite ne sont pas r&eacute;unies, la rupture du contrat de travail par l&#39;employeur doit &ecirc;tre 
												consid&eacute;r&eacute;e comme un <a href="http://vosdroits.service-public.fr/particuliers/N480.xhtml">licenciement pour motif personnel</a>.</p>

												<p>Dans bien des cas, les d&eacute;parts &agrave; la retraite sont provoqu&eacute;s par l&rsquo;employeur et privil&eacute;gi&eacute;s &agrave; une 
												proc&eacute;dure de licenciement co&ucirc;teuse et plus protectrice des droits du salari&eacute;.</p>

												<p>Lorsque la question se pose de savoir qui, du salari&eacute; ou de l&#39;employeur, a pris l&#39;initiative de la rupture, la jurisprudence exige 
												que le salari&eacute; ait manifest&eacute; une volont&eacute; claire et non &eacute;quivoque de partir en retraite. L&#39;employeur doit donc se montrer 
												prudent avant de prendre acte de la rupture du contrat.</p>

												<p>Ainsi et par exemple, la seule demande d&#39;un salari&eacute; &agrave; son employeur de remplir des imprim&eacute;s relatifs &agrave; la liquidation 
												d&#39;une pension de retraite de la s&eacute;curit&eacute; sociale n&#39;est pas une manifestation suffisante de volont&eacute; de la part de ce 
												salari&eacute; de cesser son activit&eacute; professionnelle. Par cons&eacute;quent, la rupture du contrat intervenue &agrave; la suite de cette 
												demande ne constitue pas un d&eacute;part en retraite.</p>

												<p>A d&eacute;faut de volont&eacute; claire et non &eacute;quivoque, les tribunaux reconnaissent que le d&eacute;part en retraite peut &ecirc;tre 
												requalifi&eacute; en licenciement sans cause r&eacute;elle et s&eacute;rieuse.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</section>

			<!-- SPECIALISATION
			================================= -->
			<section id="specialisations" class="about-section section">

				<div class="container">

					<h2 class="section-heading text-center">Certificat de sp&eacute;cialisation <span style="color: #9d043c"> en droit du travail </span></h2>

					<div class="about-row row">

						<!-- DESCRIPTION IMAGE -->
						<div class="about-image col-md-6" data-animation="fadeIn">
							<img src="images/contents/spe.png" alt="Description Image" class="img-spe">
							<p class="fontcent" data-animation="fadeInRight"><a href="http://avocatparis.org/particulier/votre-avocat-2/specialisations.html" target="_blank" style="text-transform: uppercase;">En savoir plus</a></p>
						</div>

						<!-- DESCRIPTION TEXT -->
						<div class="about-text col-md-6">
							<p class="fontjusty">La pratique du droit du travail exige un haut niveau de technicit&eacute; du fait de la complexit&eacute; des textes applicables et de leur nombre toujours croissant.
							Il est donc essentiel de s’adresser &#224; des praticiens sp&eacute;cialis&eacute;s se consacrant quotidiennement &#224; la mati&#232;re et &#224; jour de ses &eacute;volutions constantes.</p>
							<p class="fontjusty">L’expertise juridique de notre cabinet est ainsi garantie par un double certificat de sp&eacute;cialisation couvrant le <b>droit du travail</b> et le <b>droit de la s&eacute;curit&eacute; sociale et de la protection sociale</b>.</p>

							<p class="fontjusty">Sachez que ce certificat est d&eacute;livr&eacute; par l’Ordre des Avocats apr&#232;s un contr&#244;le de connaissance pointu sous r&eacute;serve d’une pratique professionnelle constante d’au moins 4 ans dans le domaine revendiqu&eacute;, 
							et que le titulaire du certificat de sp&eacute;cialit&eacute; est astreint &#224; de strictes  obligations de formation professionnelle continue.</p><br><br>
							
						</div>

					</div>

				</div>

			</section>

			<!-- DOMAINES
			================================= -->
			<section id="champs" class="section-gray section">

				<div class="container">

					<h2 class="section-heading text-center">Domaines <span style="color: #9d043c"> d'expertise</h2>

					<div class="about-row row">
						
						<div class="col-md-12">
					
							<p class="fontjusty about-text">A travers notre activit&eacute; judiciaire et de conseil en droit du travail, nous pratiquons quotidiennement tous les aspects de cette branche du droit, notamment :</p>
						
						</div>
						
						<div class="col-md-6" data-animation="fadeInLeft">
						
							<div class="panel-heading"></div>
							<div class="panel-group" id="DomaineL1" role="tablist" aria-multiselectable="true">
									<div class="panel-heading" role="tab" id="headingOneL">
											<a data-toggle="collapse" href="#collapseOneL" aria-expanded="true" aria-controls="collapseOneL">
												<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Proc&eacute;dures de licenciement et autres ruptures</h4>
											</a>
									</div>
									<div id="collapseOneL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneL">
										<div class="panel-body" style="text-align: justify;">
										Rupture conventionnelle; licenciement pour motifs personnels; licenciement &eacute;conomique individuel et collectif, plan de sauvegarde de l&rsquo;emploi; prise d&rsquo;acte aux torts de l&rsquo;employeur; r&eacute;siliation judicaire du contrat de travail ; rupture anticip&eacute;e des CDD ; d&eacute;part en retraite
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingTwoL">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwoL" aria-expanded="false" aria-controls="collapseTwoL" style="cursor: default;">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  N&eacute;gociation et transaction</h4>
											</a>
									</div>
									<div class="panel-heading" role="tab" id="headingThreeL">
											<a class="collapsed" data-toggle="collapse" href="#collapseThreeL" aria-expanded="false" aria-controls="collapseThreeL">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Requalification du contrat de travail (CDD en CDI, temps partiel en temps plein etc.)</h4>
											</a>
									</div>
									<div id="collapseThreeL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeL">
										<div class="panel-body" style="text-align: justify;">
										Requalification en contrat de travail (d&eacute;tournement des statuts d&rsquo;auto-entrepreneur, d&rsquo;agent commercial, travail dissimul&eacute;); requalification des CDD en CDI; requalification en contrat &agrave; temps plein.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingFourL">
											<a class="collapsed" data-toggle="collapse" href="#collapseFourL" aria-expanded="false" aria-controls="collapseFourL">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Indemnisation du ch&#244;mage</h4>
											</a>
									</div>
									<div id="collapseFourL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourL">
										<div class="panel-body" style="text-align: justify;">
										Conditions de prise en charge, dur&eacute;e et diff&eacute;r&eacute; d&rsquo;indemnisation.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingFiveL">
											<a class="collapsed" data-toggle="collapse" href="#collapseFiveL" aria-expanded="false" aria-controls="collapseFiveL">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  R&eacute;mun&eacute;ration du travail</h4>
											</a>
									</div>
									<div id="collapseFiveL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveL">
										<div class="panel-body" style="text-align: justify;">
										Salaire fixe et salaire variable; primes et avantages en nature; in&eacute;galit&eacute;s salariales; aspect social et fiscal des &eacute;l&eacute;ments de la r&eacute;mun&eacute;ration; frais professionnels.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingSixL">
											<a class="collapsed" data-toggle="collapse" href="#collapseSixL" aria-expanded="false" aria-controls="collapseSixL">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Temps de travail des salari&eacute;s non cadres, cadres et cadres dirigeants</h4>
											</a>
									</div>
									<div id="collapseSixL" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixL">
										<div class="panel-body" style="text-align: justify;">
										Temps partiel, conventions de forfait en heures ou en jours ; heures compl&eacute;mentaires et suppl&eacute;mentaires.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingSevenL">
											<a class="collapsed" data-toggle="collapse" href="#collapseSevenL" aria-expanded="false" aria-controls="collapseSevenL" style="cursor: default;">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Exclusivit&eacute; de travail et obligation de non-concurrence</h4>
											</a>
									</div>
									<div class="panel-heading" role="tab" id="headingEightL">
											<a class="collapsed" data-toggle="collapse" href="#collapseEightL" aria-expanded="false" aria-controls="collapseEightL" style="cursor: default;">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Lieu de travail, mobilit&eacute;</h4>
											</a>
									</div>
							</div>
						
						</div>
						
						<div class="col-md-6" data-animation="fadeInRight">
						
							<div id="panel-heading-modif" class="panel-heading"></div>
							<div class="panel-group" id="DomaineR2" role="tablist" aria-multiselectable="true">
									<div class="panel-heading" role="tab" id="headingOneR">
											<a data-toggle="collapse" href="#collapseOneR" aria-expanded="true" aria-controls="collapseOneR">
												<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Expatriation, d&eacute;tachement et missions hors de France</h4>
											</a>
									</div>
									<div id="collapseOneR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOneR">
										<div class="panel-body" style="text-align: justify;">
										Conditions de travail, de retour et de rapatriement.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingTwoR">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwoR" aria-expanded="false" aria-controls="collapseTwoR">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Sant&eacute; et S&eacute;curit&eacute; au travail</h4>
											</a>
									</div>
									<div id="collapseTwoR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoR">
										<div class="panel-body" style="text-align: justify;">
										Accidents du travail et maladies professionnelles; surcharge de travail; harc&egrave;lement moral et sexuel; inaptitude; maternit&eacute;; pr&eacute;voyance et couverture sant&eacute;.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingThreeR">
											<a class="collapsed" data-toggle="collapse" href="#collapseThreeR" aria-expanded="false" aria-controls="collapseThreeR" style="cursor: default;">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  &Eacute;laboration, conclusion, modification et transfert du contrat de travail</h4>
											</a>
									</div>
									<div class="panel-heading" role="tab" id="headingFourR">
											<a class="collapsed" data-toggle="collapse" href="#collapseFourR" aria-expanded="false" aria-controls="collapseFourR">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;  Proc&eacute;dure disciplinaire et sanctions</h4>
											</a>
									</div>
									<div id="collapseFourR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourR">
										<div class="panel-body" style="text-align: justify;">
										Avertissement; r&eacute;trogradation; mise &agrave; pied; licenciement pour faute simple, grave ou lourde.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingFiveR">
											<a class="collapsed" data-toggle="collapse" href="#collapseFiveR" aria-expanded="false" aria-controls="collapseFiveR">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;   Repr&eacute;sentation du personnel dans l&rsquo;entreprise</h4>
											</a>
									</div>
									<div id="collapseFiveR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveR">
										<div class="panel-body" style="text-align: justify;">
										Contentieux des &eacute;lections professionnelles; d&eacute;signation des d&eacute;l&eacute;gu&eacute;s syndicaux, interrogations et actions des comit&eacute;s d&#39;entreprise; gr&egrave;ve; n&eacute;gociation collective.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingSixR">
											<a class="collapsed" data-toggle="collapse" href="#collapseSixR" aria-expanded="false" aria-controls="collapseSixR">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;   Recours administratifs et contentieux du travail devant le juge administratif</h4>
											</a>
									</div>
									<div id="collapseSixR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixR">
										<div class="panel-body" style="text-align: justify;">
										Autorisation et refus de l&rsquo;inspection du travail de licencier le salari&eacute; prot&eacute;g&eacute;; demande d&#39;annulation d&#39;une d&eacute;cision d&#39;homologation d&rsquo;un Plan de Sauvegarde de l&rsquo;emploi; refus de mise en activit&eacute; partielle, etc.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingSevenR">
											<a class="collapsed" data-toggle="collapse" href="#collapseSevenR" aria-expanded="false" aria-controls="collapseSevenR">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;   Droit p&eacute;nal du travail</h4>
											</a>
									</div>
									<div id="collapseSevenR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSevenR">
										<div class="panel-body" style="text-align: justify;">
										Travail dissimul&eacute;; pr&ecirc;t illicite de main d&rsquo;&oelig;uvre; entrave &agrave; la mise en place et au fonctionnement des institutions repr&eacute;sentatives du personnel, etc.
										</div>
									</div>
									<div class="panel-heading" role="tab" id="headingEightR">
											<a class="collapsed" data-toggle="collapse" href="#collapseEightR" aria-expanded="false" aria-controls="collapseEightR" style="cursor: default;">
											<h4 class="aErease"><i class="fa fa-chevron-circle-down"></i>&nbsp;   Discrimination et in&eacute;galit&eacute;s au travail</h4>
											</a>
									</div>
							</div>
						
						</div>
						
					</div>

				</div>

			</section>

			<!-- NOS VALEURS
			================================= -->
			<section id="valeurs" class="about-section section">

				<div class="container">

					<h2 class="section-heading text-center">Nos <span style="color: #9d043c">valeurs</span></h2>

					<div class="about-row row">
					
						<div class="col-md-12">

							<ul class="icon-list">
								<li>
									<span class="icon-list-icon" data-animation="bounceIn"><img src="images/contents/CONF.png" alt="" width="35px" height="35px" style="margin-left: -3px; margin-top: -2px"/></span>
									<h4 class="icon-list-title">Confiance :</h4>
									<p class="fontjusty">Notre m&eacute;thode de travail est fond&eacute;e sur une relation de confiance mutuelle, s&rsquo;appuyant sur des &eacute;changes continus et une totale disponibilit&eacute;.
									Sachez que toutes les informations et les pi&#232;ces que vous nous communiquez sont couvertes par le secret professionnel et nous permettent de vous 
									apporter analyse juridique et conseils les plus pertinents.
									</p>
								</li>
								<li>
									<span class="icon-list-icon" data-animation="bounceIn"><img src="images/contents/REAC.png" alt="" width="40px" height="40px"/></span>
									<h4 class="icon-list-title">R&eacute;activit&eacute; :</h4>
									<p class="fontjusty">Cabinet de taille humaine, vous savez toujours qui traite votre dossier et qui contacter. Chaque minute pouvant compter, 
									notre m&eacute;thode de travail en &eacute;quipe permet d&rsquo;apporter une r&eacute;ponse imm&eacute;diate face &agrave; une situation d&rsquo;urgence.</p>
								</li>
								<li>
									<span class="icon-list-icon" data-animation="bounceIn"><img src="images/contents/NEGO.png" alt="" width="40px" height="40px"/></span>
									<h4 class="icon-list-title">Culture de la n&eacute;gociation et t&eacute;nacit&eacute; :</h4>
									<p class="fontjusty">Dans toutes les situations conflictuelles, nous tentons syst&eacute;matiquement de rapprocher les parties s&rsquo;opposant. 
									Forts d&rsquo;une exp&eacute;rience quotidienne de la n&eacute;gociation, nous recherchons la meilleure r&eacute;solution dans le cadre d&rsquo;un accord transactionnel &eacute;vitant 
									des proc&eacute;dures pouvant &ecirc;tre longues et al&eacute;atoires. <br /><br />Avocat et client fixent ensemble la strat&eacute;gie, en fonction des leviers juridiques pouvant &ecirc;tre actionn&eacute;s et de 
									vos int&eacute;r&ecirc;ts personnels (financiers, temporels, psychologiques&hellip;). Bien souvent, le proc&egrave;s d&eacute;clenche la n&eacute;gociation. 
									Une m&eacute;diation peut &eacute;galement aider &agrave; d&eacute;nouer certaines situations.
									<br /><br />
									Si aucun accord satisfaisant n&rsquo;est possible, nous d&eacute;fendons vos int&eacute;r&ecirc;ts avec le m&ecirc;me engagement jusqu&rsquo;&agrave; la fin de la proc&eacute;dure.</p>
								</li>
								<li>
									<span class="icon-list-icon" data-animation="bounceIn"><img src="images/contents/DEON.png" alt="" width="40px" height="40px"/></span>
									<h4 class="icon-list-title">D&eacute;ontologie et transparence :</h4>
									<p class="fontjusty"><i>&#171; Je jure, comme avocat, d'exercer mes fonctions avec dignit&eacute;, conscience, ind&eacute;pendance, probit&eacute; et humanit&eacute; &#187;</i> sont les termes 
									du serment que nous avons pr&#234;t&eacute; et qui guident l’exercice de notre m&eacute;tier au quotidien.<br><br>
									La relation avec un avocat ne s'apparente pas &#224; une relation commerciale : l'objectif  est de vous  fournir le meilleur conseil.
									Une fois votre dossier ouvert, dans le m&#234;me souci de transparence et d’efficacit&eacute;, nous vous informons syst&eacute;matiquement des diff&eacute;rentes 
									strat&eacute;gies envisageables, de l'avancement de votre affaire, et nous recueillons vos observations sur tous nos projets avant validation.<br><br>
									Nos diligences vous sont toujours factur&eacute;es sur une base connue, et formalis&eacute;e par une convention d’honoraires en cas de proc&eacute;dure devant le 
									conseil de prud'hommes.</p>
								</li>
							</ul>
							
						</div>

					</div>

				</div>

			</section>

			<!-- BIBLIOTHEQUE
			================================= -->
			<section id="numbers" class="numbers-section section-dark section">

				<div class="section-background">

					<!-- IMAGE BACKGROUND -->
					<div class="section-background-image parallax-background" style="opacity: 0.8" data-stellar-background-ratio="0.4"></div>

				</div>
				
				<div class="container">

					<div class="hgt">
					</div>
						
				</div>

			</section>

			<!-- Statut
			================================= -->
			<section id="yourstat" class="about-section section-gray section">

				<div class="container">
				
					<div id="choiceZone">

						<h2 class="section-heading text-center" data-animation="fadeInUp">salari&eacute;, employeur <span style="color: #9d043c"> ou repr&eacute;sentant du personnel ?</span></h2>

						<div class="about-row row">

							<!-- DESCRIPTION IMAGE -->
							<div class="about-image col-md-12" data-animation="fadeInLeft">
								<p class="fontjusty">Juristes en droit du travail et avocats ind&eacute;pendants avant tout, nous conseillons indistinctement au quotidien les salari&eacute;s, les employeurs, et les repr&eacute;sentants du personnel &#224; titre individuel ou collectif, au-del&#224; des clivages id&eacute;ologiques.</p>
								<p class="fontjusty">L’avantage est concret pour tous nos clients car nous maîtrisons les modes de raisonnement, les m&eacute;thodes de fonctionnement et les pratiques de l’autre partie &#224; la n&eacute;gociation ou &#224; la proc&eacute;dure.
								Quelle que soit votre position dans la relation de travail, b&eacute;n&eacute;ficiez de notre exp&eacute;rience pour construire au mieux votre dossier en vue d’optimiser une n&eacute;gociation et anticiper les risques judiciaires. 
								Le cabinet exerce indiff&eacute;remment son activit&eacute; de conseil en français ou en anglais,  compte tenu de l’internationalisation du monde du travail.<br /><br />Nous travaillons en partenariat avec un cabinet d’avocats du Barreau de New York.
								<br /><br /><h3 class="icon-list-title" style="font-size: 16px;">S&eacute;lectionnez votre statut :</h3>
								</p>
							</div>
							
						</div>
						
						<div class="about-row row">

							<!-- DESCRIPTION TEXT -->
							<div class="about-text col-md-12" data-animation="fadeInRight">
								
									<ul class="icon-list">
										<li class="choice1" style="cursor: pointer;">
											<span class="icon-list-icon"><img src="images/contents/SAL.png" alt="" width="40px" height="40px"/></span>
											<h4 class="icon-list-title">Salari&eacute;</h4>
											<p style="text-align: justify; padding-right: 10px;">Le salari&eacute; peut &ecirc;tre confront&eacute; &agrave; des probl&eacute;matiques tr&egrave;s vari&eacute;es: r&eacute;mun&eacute;ration variable 
											impay&eacute;e, anticipation d&rsquo;un licenciement en pr&eacute;parant le dossier, contestation d&rsquo;un licenciement, modification de ses fonctions, 
											surcharge de travail etc. Il est essentiel de l&rsquo;accompagner et le soutenir, afin de toujours optimiser la situation et l&rsquo;aider &agrave; tourner la page.</p>
										</li>
										<li class="choice2" style="cursor: pointer;">
											<span class="icon-list-icon"><img src="images/contents/EMP.png" alt="" width="40px" height="40px"/></span>
											<h4 class="icon-list-title">Employeur</h4>
											<p style="text-align: justify; padding-right: 10px;">L&rsquo;anticipation est fondamentale et permet de r&eacute;duire fortement les co&ucirc;ts &agrave; la charge de l&rsquo;employeur. Notre mission de conseil 
											est guid&eacute;e par la recherche d&rsquo;un &eacute;quilibre entre le fonctionnement pratique quotidien d&rsquo;une entreprise et ses contraintes juridiques.</p>
										</li>
										<li class="choice3" style="cursor: pointer;">
											<span class="icon-list-icon"><img src="images/contents/RDP.png" alt="" width="40px" height="40px"/></span>
											<h4 class="icon-list-title">Repr&eacute;sentant du personnel</h4>
											<p style="text-align: justify; padding-right: 10px;">Les enjeux peuvent &ecirc;tre collectifs comme individuels. Nous conseillons les Institutions Repr&eacute;sentatives du Personnel, &agrave; la fois dans 
											leur fonctionnement et dans l&rsquo;analyse juridique des probl&eacute;matiques collectives rencontr&eacute;es, toujours guid&eacute;s par le souci d&rsquo;une 
											paix sociale au sein de l&rsquo;entreprise. Sur le plan individuel, les &eacute;lus b&eacute;n&eacute;ficient du statut de salari&eacute; prot&eacute;g&eacute; 
											et nous les assistons en cas de conflit, rupture du contrat ou discrimination li&eacute;e &agrave; leur statut.</p>
										</li>
									</ul>
								
							</div>
						
						</div>
					
					</div>
				
					<div id="salarie">

						<h2 class="section-heading text-center" data-animation="fadeInUp">Vous &#234;tes <span style="color: #9d043c;">salari&eacute; et…</span></h2>

						<div class="about-row row">
						
							<div class="col-md-12" data-animation="fadeInUp">
								
								<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title salPartTitle">
												<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Sur le point de nous contacter ? 
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body" style="text-align: justify;">
												Prenez de l’avance en r&eacute;unissant les pi&#232;ces indispensables &#224; une premi&#232;re analyse de votre situation : 
												contrat de travail et &eacute;ventuels avenants, 12 derniers bulletins de salaires.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Pensez qu’une n&eacute;gociation rapide est envisageable en interne ?
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body" style="text-align: justify;">
											Nous pouvons vous coacher, sans interaction directe avec l’employeur si cela vous est impos&eacute;, pour vous permettre de soulever les bons 
											leviers &#224; chaque stade des pourparlers.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Craignez d’&#234;tre prochainement licenci&eacute; ? 
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body" style="text-align: justify;">
											Ayez le bon r&eacute;flexe en conservant sans attendre les &eacute;l&eacute;ments de preuves qui pourraient vous manquer plus tard 
											(courriels, fiches de temps de pr&eacute;sence, &eacute;valuations, agenda, etc.) et en identifiant les potentiels t&eacute;moins. 
											Ce qui vous parait &eacute;vident devra &#234;tre d&eacute;montr&eacute; devant le Juge pour emporter sa conviction, et des pi&#232;ces probantes 
											faciliteront la n&eacute;gociation.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingFour">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Particuli&#232;rement d&eacute;sorient&eacute; par les &eacute;v&#232;nements ? 
												</a>
											</h4>
										</div>
										<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
											<div class="panel-body" style="text-align: justify;">
											Nous vous aidons &#224; rationaliser une situation v&eacute;cue douloureusement, &#224; recentrer votre &eacute;nergie sur la construction de 
											votre dossier et &#224; d&eacute;finir la strat&eacute;gie.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingFive">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; &Agrave; deux doigts de d&eacute;missionner du fait des manquements de votre employeur ?
												</a>
											</h4>
										</div>
										<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
											<div class="panel-body" style="text-align: justify;">
											N’agissez pas dans la pr&eacute;cipitation et motivez votre d&eacute;part ! La prise d’acte de la rupture aux torts de l’employeur pourra &#234;tre 
											requalifi&eacute;e en licenciement abusif et doit maintenant &#234;tre jug&eacute;e dans le mois qui suit la saisine du conseil de prud’hommes.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingSix">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Menac&eacute; de licenciement &eacute;conomique ?
												</a>
											</h4>
										</div>
										<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
											<div class="panel-body" style="text-align: justify;">
											Votre poste est-il r&eacute;ellement supprim&eacute; et la soci&eacute;t&eacute; cherche-t-elle v&eacute;ritablement &#224; vous reclasser 
											dans l’entreprise ou au sein du groupe ? En cas contraire, vous serez fond&eacute; &#224; demander la requalification en licenciement sans 
											cause r&eacute;elle et s&eacute;rieuse.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingSeven">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Soumis au statut de cadre dirigeant ou cadre autonome au forfait jours ?
												</a>
											</h4>
										</div>
										<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
											<div class="panel-body" style="text-align: justify;">
											Les conditions permettant d’&eacute;chapper &#224; la l&eacute;gislation sur le temps de travail et au paiement des heures suppl&eacute;mentaires 
											sont strictes, avec de lourdes cons&eacute;quences financi&#232;res lorsqu’elles ne sont pas respect&eacute;es…
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingEight">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; B&eacute;n&eacute;ficiez d’un mandat de repr&eacute;sentant du personnel ? 
												</a>
											</h4>
										</div>
										<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
											<div class="panel-body" style="text-align: justify;">
											Rappelez-vous que l’autorisation de l’Inspection du travail est n&eacute;cessaire pour obtenir votre d&eacute;part et peut &#234;tre 
											contest&eacute;e devant le tribunal administratif. En cas de non-respect de votre statut protecteur dans ses autres dimensions, vos 
											indemnit&eacute;s de rupture devront &eacute;galement &#234;tre revues.
											</div>
										</div>
								</div>
								
								<div class="return">
									<p class="fontcent"><a class="btn btn-lg btn-primary btnspe" href="#yourstat">Retour</a></p>
								</div>
								
							</div>
						
						</div>
					
					</div>
					
					<div id="employeur">

						<h2 class="section-heading text-center" data-animation="fadeInUp">Vous &#234;tes <span style="color: #9d043c;">employeur et…</span></h2>

						<div class="about-row row">
						
							<div class="col-md-12" data-animation="fadeInUp">
								
								<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
										<div class="panel-heading" role="tab" id="heading1">
											<h4 class="panel-title salPartTitle">
												<a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; B&eacute;n&eacute;ficiez d’une croissance de vos effectifs ?
												</a>
											</h4>
										</div>
										<div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
											<div class="panel-body" style="text-align: justify;">
											Nous r&eacute;digeons vos contrats de travail pour les nouvelles embauches et vous proposons tout avenant utile aux contrats en cours afin de s’assurer de 
											la validit&eacute; de certaines clauses p&eacute;rilleuses, comme en mati&#232;re de dur&eacute;e du travail, de r&eacute;mun&eacute;ration variable, de 
											mobilit&eacute; ou de non-concurrence.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="heading2">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Devez organiser des &eacute;lections professionnelles ?
												</a>
											</h4>
										</div>
										<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
											<div class="panel-body" style="text-align: justify;">
											Nous vous assistons dans l’identification de vos obligations comme dans la conduite du processus &eacute;lectoral pour &eacute;viter les 
											contestations et pr&eacute;server la paix sociale dans l’entreprise.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="heading3">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Comptez parmi vos effectifs des cadres autonomes au forfait ?
												</a>
											</h4>
										</div>
										<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
											<div class="panel-body" style="text-align: justify;">
											Nous vous assistons dans la mise en place des nouvelles modalit&eacute;s conventionnelles de contr&#244;le du temps de travail pour vous 
											prot&eacute;ger au mieux d’&eacute;ventuelles demandes de rappel d’heures suppl&eacute;mentaires en cas de litige.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="heading4">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Envisagez de recruter un salari&eacute; pour une dur&eacute;e d&eacute;termin&eacute;e et/ou &#224; temps partiel ?
												</a>
											</h4>
										</div>
										<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
											<div class="panel-body" style="text-align: justify;">
											Nous r&eacute;digeons le contrat de travail avec la plus grande vigilance sur les cas de recours autoris&eacute;s et sur les mentions 
											obligatoires, afin d’&eacute;viter les mauvaises surprises en cas de demande de requalification.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="heading5">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Vous vous heurtez &#224; des difficult&eacute;s &eacute;conomiques ?
												</a>
											</h4>
										</div>
										<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
											<div class="panel-body" style="text-align: justify;">
											Un licenciement &eacute;conomique individuel ou collectif doit &#234;tre conduit dans le respect de conditions de fond et de forme 
											particuli&#232;rement strictes et ne s’improvise pas. Nous s&eacute;curisons vos proc&eacute;dures quel que soit l’effectif concern&eacute;, 
											notamment lorsqu’un Plan de sauvegarde de l’emploi doit &#234;tre mis en œuvre, pour que le risque judiciaire n’efface pas en d&eacute;finitive 
											la r&eacute;duction de vos co&ucirc;ts salariaux.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="heading6">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Vous souhaitez vous s&eacute;parer d’un collaborateur ?
												</a>
											</h4>
										</div>
										<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
											<div class="panel-body" style="text-align: justify;">
											Nous vous assistons en amont dans la constitution du dossier et dans la conduite de la proc&eacute;dure de licenciement ad&eacute;quate 
											pour minimiser le risque judiciaire.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="heading7">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; &Ecirc;tes attaqu&eacute; devant le conseil de prud’hommes par un salari&eacute; en poste ou r&eacute;cemment licenci&eacute; ?
												</a>
											</h4>
										</div>
										<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
											<div class="panel-body" style="text-align: justify;">
											Notre exp&eacute;rience du contentieux, de la repr&eacute;sentation en justice et de la plaidoirie vous permettront une d&eacute;fense 
											solide et efficace. 
											</div>
										</div>
								</div>
								
								<div class="return">
									<p class="fontcent"><a class="btn btn-lg btn-primary btnspe" href="#yourstat">Retour</a></p>
								</div>
								
							</div>
						
						</div>
					
					</div>
							
					<div id="representant">

						<h2 class="section-heading text-center" data-animation="fadeInUp">Vous &#234;tes <span style="color: #9d043c;">repr&eacute;sentant du personnel et…</span></h2>

						<div class="about-row row">
						
							<div class="col-md-12" data-animation="fadeInUp">
								
								<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
										<div class="panel-heading" role="tab" id="headingA">
											<h4 class="panel-title salPartTitle">
												<a data-toggle="collapse" href="#collapseA" aria-expanded="true" aria-controls="collapseA">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; Avez besoin de conseils juridiques ponctuels ou plus r&eacute;guliers ?
												</a>
											</h4>
										</div>
										<div id="collapseA" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingA">
											<div class="panel-body" style="text-align: justify;">
											Nous r&eacute;pondons &#224; vos interrogations sur toutes questions susceptibles d’&eacute;merger dans le cadre des proc&eacute;dures 
											d’information et de consultation, et vous aidons dans la r&eacute;daction des questions &#224; l’attention de la Direction.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingB">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseB" aria-expanded="false" aria-controls="collapseB">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; &Ecirc;tes confront&eacute; &#224; un projet de r&eacute;organisation et de licenciement &eacute;conomique collectif ? 
												</a>
											</h4>
										</div>
										<div id="collapseB" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingB">
											<div class="panel-body" style="text-align: justify;">
											Nous vous assistons &eacute;galement dans la n&eacute;gociation des indemnit&eacute;s et des conditions de d&eacute;part des salari&eacute;s 
											concern&eacute;s.
											</div>
										</div>
										<div class="panel-heading" role="tab" id="headingC">
											<h4 class="panel-title salPartTitle">
												<a class="collapsed" data-toggle="collapse" href="#collapseC" aria-expanded="false" aria-controls="collapseC">
												<i class="fa fa-chevron-circle-down"></i>&nbsp; &Ecirc;tes entrav&eacute; dans votre fonctionnement ?
												</a>
											</h4>
										</div>
										<div id="collapseC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingC">
											<div class="panel-body" style="text-align: justify;">
											Nous vous aidons &#224; r&eacute;tablir vos droits et engageons, en cas d’impasse, toutes vos actions devant les juridictions comp&eacute;tentes.
											</div>
										</div>
								</div>
											
								<div class="return">
									<p class="fontcent"><a class="btn btn-lg btn-primary btnspe" href="#yourstat">Retour</a></p>
								</div>
								
							</div>
						
						</div>
					
					</div>

				</div>

			</section>
			
			<!-- ASSOCIES
			================================= -->
			
			<section id="associes" class="about-section section-grey section section-padding-review" style="padding-top: 90px;">

				<div class="container">
					
					<h2 class="section-heading text-center">Notre <span style="color: #9d043c">&eacute;quipe </span></h2>

					<div class="about-row row">

						<!-- DESCRIPTION IMAGE -->
						<div class="about-text col-md-6">
						
							<img src="images/contents/cecile.jpg" alt="" class="image-descrpt"/>
						
							<h2 class="section-heading text-center">C&eacute;cile<span style="color: #9d043c"> AIACH (Associ&eacute;e)</span></h2>
							
							<p class="fontjusty">Prestation de serment en 1996.</p>

							<p class="fontjusty">Maitrise (Master 1) Carri&egrave;re Judiciaire de l&rsquo;Universit&eacute; Paris V (Ren&eacute; Descartes) et DESS (Master 2) de Droit de la Sant&eacute; de l&rsquo;Universit&eacute; Paris XI (Paris-Sud).</p>

							<p class="fontjusty">Titulaire du double certificat de sp&eacute;cialisation en droit du travail et en droit de la s&eacute;curit&eacute; sociale et de la protection sociale.</p>

							<p class="fontjusty">Cr&eacute;ation de son cabinet en 1999 pour se consacrer &agrave; la r&eacute;solution amiable et contentieuse des litiges en droit du travail.</p>

							<p class="fontjusty">Ma&icirc;tre d&rsquo;enseignement en pratique du Droit Social &agrave; l&rsquo;&Eacute;cole de Formation du Barreau de Paris (EFB).</p>

							<p class="fontjusty">Pratique courante de l&rsquo;anglais.</p>
							
							<p class="fontjusty" style="font-weight: bold;"><i class="fa fa-envelope-o"></i> c.aiach@67lannes.org</p>

						</div>

						<!-- DESCRIPTION TEXT -->
						<div class="about-text col-md-6">
						
							<img src="images/contents/simon.jpg" alt="" class="image-descrpt"/>
						
							<h2 id="correctifAssoPart" class="section-heading text-center">Simon<span style="color: #9d043c"> EDELMANN (Associ&eacute;)</span></h2>
							
							<p class="fontjusty">Prestation de serment en 2009</p>

							<p class="fontjusty">Master 1 Droit Public de l&rsquo;Universit&eacute; Paris II (Panth&eacute;on-Assas) et Master 2 de Droit Public des Affaires &agrave; Paris I (Panth&eacute;on-Sorbonne).</p>

							<p class="fontjusty">Ancien assistant de justice au tribunal administratif de Paris et au Conseil d&rsquo;Etat.</p>

							<p class="fontjusty">Double comp&eacute;tence recherch&eacute;e en droit priv&eacute; et public du travail permettant au cabinet d&rsquo;intervenir indistinctement devant les juridictions prud&#39;homales et les juridictions administratives (contentieux des salari&eacute;s prot&eacute;g&eacute;s, validit&eacute; d&rsquo;un Plan de Sauvegarde de l&rsquo;Emploi etc.</p>

							<p class="fontjusty">Ma&icirc;tre d&rsquo;enseignement en pratique du Droit Social et contentieux administratif &agrave; l&rsquo;&Eacute;cole de Formation du Barreau de Paris (EFB).</p>
							
							<p class="fontjusty">Pratique courante de l&rsquo;anglais.</p>
							
							<p class="fontjusty" style="font-weight: bold;"><i class="fa fa-envelope-o"></i> s.edelmann@67lannes.org</p>

						</div>
						
					</div>
					
					<div class="about-row row">
						
						<div class="about-text col-md-6 col-md-offset-3">
						
							<img src="images/contents/pauline.jpg" alt="" class="image-descrpt"/>
						
							<h2 id="correctifCollaPart" class="section-heading text-center">Pauline <span style="color: #9d043c">MEYRE (Collaboratrice)</span></h2>
						
							<!--p class="fontjusty">Pauline MEYRE est titulaire d’un Master 1 en droit social et Master 2 en droit des affaires-juriste 
							trilingue. Elle a pr&ecirc;t&eacute; serment en 2014. Elle pratique  couramment l’espagnol apr&egrave;s un cursus universitaire en Espagne</p-->
							
							<p class="fontjusty">Prestation de serment en 2014.</p>

							<p class="fontjusty">Master 1 en Droit Social et Master 2 en Droit des Affaires-juriste trilingue.</p>

							<p class="fontjusty">Pratique courante de l&rsquo;espagnol apr&egrave;s un cursus universitaire en Espagne.</p>

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
								lat : 48.864219, 
								lon : 2.269940,
								animation : google.maps.Animation.DROP,
								html : "Cabinet Aiach Edelmann Associés",
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
								zoom : 15,
								set_center : [ 48.864268, 2.265418 ], // adjust the "lon" attribute of your first location
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
						<div class="col-md-6">

							<div class="contact-maps-box" data-animation="fadeIn">

								<h2 class="section-heading" style="color: #fff;">Contactez-nous</h2>
								<div class="row">
									<address class="col-sm-12">
										<p class="contact-infos">
											Le cabinet est situ&eacute; 67 Boulevard Lannes &agrave; Paris (75016)<br><br>
											<i class="fa fa-phone-square"></i>&nbsp; 01 45 04 61 61<br>
											<i class="fa fa-fax"></i>&nbsp; 01 45 04 80 20<br>
											<i class="fa fa-envelope"></i>&nbsp; aiach-edelmann@67lannes.org<br>
										</p>											
										<div class="metroLine">
										<img src="images/transports/metro.png" alt="" width="30px" height="30px"/> <img src="images/transports/ligne9.png" alt="" width="30px" height="30px"/> Metro Ligne 9 (Rue de la Pompe)<br>
										<img src="images/transports/metro.png" alt="" width="30px" height="30px"/> <img src="images/transports/ligne2.png" alt="" width="30px" height="30px"/> Ligne 2 (Porte Dauphine)<br>
										<img src="images/transports/rer.png" alt="" width="30px" height="30px"/> <img src="images/transports/rerC.png" alt="" width="30px" height="30px"/> RER Ligne C (Avenue Henri Martin)<br>
										<img src="images/transports/bus.png" alt="" width="30px" height="30px"/> <img src="images/transports/busPC1.png" alt="" width="30px" height="30px"/> Bus PC1 (Place de Colombie)<br>
										<img src="images/transports/bus.png" alt="" width="30px" height="30px"/> <img src="images/transports/bus63.png" alt="" width="30px" height="30px"/> Ligne 63 (Porte de la Muette)<br><br>
										</div>
									</address>
								</div>

							</div>
							
						</div>
					</div>
				</div>

			</section>
			
			<footer>
				<section id="footer" class="footer-web">
					<div class="container">
						<div class="col-md-6 col-md-offset-6">
							<p class="footer-content">aiach-edelmann.com &#64;2015 All right reserved&reg; | <a href="http://www.dimsigner.com/" target="_blank">Credits</a></p>
						</div>
					</div>
				</section>
			</footer>
		
		</div>

		<!-- JAVASCRIPT
		================================= -->
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/picturefill.min.js"></script>
		<script src="js/jpreloader.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/jquery.nav.min.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/site.js"></script>
		<script src="js/maplace-0.1.3.min.js"></script>
	</body>

</html>
