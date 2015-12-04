<!DOCTYPE html>
<html lang="fr">
	<head>

		<title>Gestion de Crise</title>
		<meta charset="utf-8" />

		<!-- Added Responsive Design to Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Stylesheet -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		            
            

	</head>

	<body>
		


					<!-- Top NAVBAR -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
						<!-- Titre de la page -->
					<a href="#" class="navbar-brand">Gestion de crise</a>
						
						<!-- Bouton de remplacement du menu  -->
						<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
							<span class="icon-bar">Compte officiel Twitter</span>
							<span class="icon-bar">Lanceur d'alerte</span>
							<span class="icon-bar">En cas d'urgence</span>
						</button>

						<!-- Items du menu -->
					<div class="collapse navbar-collapse navHeaderCollapse ">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" >Home</a></li>
							<li><a href="#">Compte officiel Twitter</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lanceur d'alertes<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class="souligne"><a href="#ali">En cas d'urgence</a></li>
									<li><a href="#ali">Contacter un proche</a></li>
									<li><a href="#floyd">Dire que je vais bien</a></li>
									<li><a href="#mike">Declarer une Urgence</a></li>
								</ul>
							</li>
							<li><a href="#">Identification</a></li>
							<li><a href="#contact" data-toggle="modal">Contact</a></li>

						</ul>
					</div>
				</div>
			</nav>

					<!-- Bot NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-bottom">
				<div class="container">
					<p class="navbar-text pull-left">Site crée par la dream team de la nuit de l'info</p>
					<a href="https://twitter.com/1835Eugene" target="_blank" class="navbar-btn btn-info btn pull-right">Subscribe on Twitter</a>
				</div>
			</nav>

						<!-- Contenu sur les boxeurs -->
			<div class="container">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-header">
								<h3 id="lanceurs" >Les lanceurs d'alertes</h3>
							</div>
 
							<div class="col-md-4 modifpadding">
								<div class="centrage">
									<img id="elisee" src="img/elisee.jpeg" alt="Elisee" class="img-circle regulated-size">
								</div>
								<h4>Twitter Elisee</h4>
								<p><a class="twitter-timeline"  href="https://twitter.com/Elysee" data-widget-id="672546592591884288">Tweets de @Elysee</a>
            </p>
								<div class="adroite">
									<a href="https://twitter.com/elysee" target="_blank" class="btn btn-default">Direct Access</a>
								</div>
							</div>		
							<div class="col-md-4 modifpadding">
								<div class="centrage">
									<img id="police" src="img/police.jpeg" alt="Police" class="img-circle regulated-size">
								</div>
								<h4>Twitter Police nationale</h4>
								<p><a class="twitter-timeline" href="https://twitter.com/PNationale" data-widget-id="672552696310800384">Tweets de @PNationale</a> </p></p>
								<div class="adroite">
									<a href="https://twitter.com/pnationale" target="_blank" class="btn btn-default">Read more</a>
								</div>
							</div>		
							<div class="col-md-4 modifpadding">
								<div class="centrage">
									<img id="mike" src="img/alerte.jpeg" alt="Titre" class="img-circle regulated-size">
								</div>
								<h4>Twitter #Centre d'alerte</h4>
								<p>Tweets</p>
								<div class="adroite">
									<a href="Lien" target="_blank" class="btn btn-default">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

						<!-- Contenu sur les Equipements -->
			<div class="container ">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="panel-header">
								<h3 id="equipement" >Fils d'actualité important : </h3>
							</div>

							<div class="col-md-3 bleuclair modifpadding">
								<div class="centrage">
									<a class="twitter-timeline"  href="https://twitter.com/1835Eugene" data-widget-id="672546592591884288">Tweets de @1835Eugene</a>
								</div>
						
							</div>		
							<div class="col-md-9 bleuclair modifpadding">
								
								<div class="chat">


									<div class="centre">

										<h2><i>Chat :</i></h2>
									</div>
												<?php
												$date = date("d-m-Y");
												$heure = date("H:i");
												Print("Nous sommes le $date et il est $heure");
												?><br>
											<?php
										    mysql_connect('localhost','root','root');
										    mysql_select_db('nuitinfo');
										    $reponse = mysql_query("SELECT * FROM commentaire ORDER BY commentaireid ASC ");

											while ($donnees = mysql_fetch_array($reponse))
												{
												    ?><br><?php
												    ?><u><b><?php echo $donnees['username'];?></u></b><?php
												    echo ' ( le ';echo $donnees['date']; echo ' à ';echo $donnees['heure'];
												    echo' ) : ';
												    echo $donnees['message'];
												    ?><br><?php
												}

											?>








								</div>



							</div>

						</div>
					</div>
				</div>
			</div>




							<!-- Modal du bouton contact  -->
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<h4>Contacter le centre de gestion d'alerte</h4> 
					</div>

					<div class="modal-body">
						<form class="form-horizontal" method="post" action="xxx.php">
							
							<div class="form-group">
								<label for="pseudo" class="col-sm-2 control-label">Pseudo</label>
								<div class="col-sm-10">
									<input name="pseudo" class="form-control" id="pseudo" maxlength="25" size="25" placeholder="Mike Tyson"/>
								</div>
							</div>

							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="email" id="email" placeholder="mike.tyson@gmail.com"/>
								</div>
							</div>

							<div class="form-group">
								<label for="message" class="col-sm-2 control-label">Message</label>
								<div class="col-sm-10">
									<textarea name="message" id="message" class="form-control" rows="5" placeholder="Salut, merci pour ton super site et bonne continuation !!!"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</div>
  							</div>

						</form>
					</div>
					<div class="modal-footer">
						<p class="btn btn-danger" data-dismiss="modal">Fermer</p>
					</div>
				</div>
			</div>
		</div>


		<!-- Querry needed by bootstrap -->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
		<!-- Script twitter -->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
	</body>
</html>