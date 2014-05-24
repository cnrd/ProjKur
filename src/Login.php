<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <!-- Title -->
    <title> Nørrebro Fighters </title>
    <style>
        .errors{color: #FF5959;} 
    </style>
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" media="all" href="http://xn--nrrebrofighters-5tb.dk/wp-content/themes/fighter/style.css" />

    <!-- Pre-loaded Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://xn--nrrebrofighters-5tb.dk/wp-content/themes/fighter/scripts/custom.modernizr.js"></script>

	
    <!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.25 - http://yoast.com/wordpress/seo/ -->
    <title>Nørrebro Fighters | Gratis prøvetime | Bliv medlem | Priser</title>
    <meta name="description" content="Gratis prøvetime! Her finder du priserne for vores kickboksning- og selvforsvar-hold."/>
    <link rel="canonical" href="http://xn--nrrebrofighters-5tb.dk/bliv-medlem/" />
    <meta property="og:locale" content="da_DK" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Nørrebro Fighters | Gratis prøvetime | Bliv medlem | Priser" />
    <meta property="og:description" content="Gratis prøvetime! Her finder du priserne for vores kickboksning- og selvforsvar-hold." />
    <meta property="og:url" content="http://xn--nrrebrofighters-5tb.dk/bliv-medlem/" />
    <meta property="og:site_name" content="Nørrebro Fighters" />
    <meta property="article:publisher" content="https://www.facebook.com/pages/N%C3%B8rrebro-Fighters-officelle-side/120315838043161" />
    <meta property="article:published_time" content="2013-09-23T12:17:00+00:00" />
    <meta property="article:modified_time" content="2014-03-03T19:58:50+00:00" />
    <!-- / Yoast WordPress SEO plugin. -->

    <link rel='stylesheet' id='contact-form-7-css'  href='http://xn--nrrebrofighters-5tb.dk/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.7.2' type='text/css' media='all' />
    <script type='text/javascript' src='http://xn--nrrebrofighters-5tb.dk/wp-includes/js/jquery/jquery.js?ver=1.10.2'></script>
    <script type='text/javascript' src='http://xn--nrrebrofighters-5tb.dk/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
    <meta name="generator" content="WordPress 3.8.1" />
</head>






<body>
        <nav>
		<div class="row">
			<div class="column large-12">
				<ul id="menu-main-navigation" class="list list-horizontal list-centered">
<li id="list-item-170" class="list-item is-active"><a href="http://xn--nrrebrofighters-5tb.dk/">Forside</a></li>
<li id="list-item-123" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/hold/">Hold</a></li>
<li id="list-item-172" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/traenere/">Trænere</a></li>
<li id="list-item-124" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/kontakt/">Kontakt</a></li>
<li id="list-item-125" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/bliv-medlem/">Bliv medlem</a></li>
<li id="list-item-171" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/samarbejde/">Samarbejde</a></li>
</ul>			</div>
		</div>
	</nav>

	<header>
		<div class="row">
			<div class="column large-12">
				
			</div>
		</div>
	</header>
<div class="content-wrapper">
	<div class="row">
		<div class="column large-9 large-push-3">
			<div class="content row">
				<div class="column large-12">

					<div class="list-post">
												    <div class="list-item">
    
                                                    
                                                                                                        
 <!----------------------------------------- The code for checking the email and password input ---------------------------------------------->
  <?php

  include("config.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["user"] && $_POST["pwd"]){
      $logInEmail = $_POST["user"];
      $pwd = $_POST["pwd"];
      
      //Connect to the database
      try {
          $dbh = new PDO($dbServer, $dbLogin, $dbPass);
      }
      catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
      die();
      
      
      }
      
      $userString = 'SELECT password ';
      $userString.= 'FROM LogInDatabase ';
      $userString.= 'WHERE logInEmail = :logInEmail';
      
      $sth = $dbh->prepare($userString);
      //Bind the email that the users write into the loginpage into the variable :loginEmail
      $sth->bindParam(':logInEmail', $logInEmail);
      $sth->execute();
      $email = $sth->fetch(PDO::FETCH_OBJ);
      
      //Check if the password is correct
      if ( crypt($pwd, $email->password) === $email->password ) {
        echo 'Du er blevet logget ind'; //Send them to the next page
      }
      else{
          echo "Forkert email eller password";
      }
    }
  }
  ?>

    <center>
      <h1>Login</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="user" placeholder="Brugernavn" style="width: 300px;">
        <input type="password" name="pwd" placeholder="Password" style="width: 300px;">        
        <button type="submit" value="Submit">Log på</button><br>
      </form>
    </center>
    <a href="GlemtPassword.php"><font size="2">Har du glemt dit password?</font></a>
  
  
  
  
  
  
  
   
<!------------------------------------------------  The bar at the left side of their homepage -------------------------------------------->
    <div class="list comments">
	<span class="comments-link"></span></div>

							</div>

											</div>
				</div>
			</div><!-- .content -->
		</div>
		<div class="column large-3 large-pull-9">
			<aside>
	<div class="row">
		<div class="column large-12">

			
<!-- If theme widget empty, show widget below -->
		<div id="search-2" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="http://xn--nrrebrofighters-5tb.dk/">
				<div>
					<label class="screen-reader-text" for="s">Søg efter:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Søg" />
				</div>
			</form></div>		<div id="recent-posts-2" class="widget widget_recent_entries">		<h3 class="widget-title"><a href="http://xn--nrrebrofighters-5tb.dk/nyheder">Nyheder</a></h3>		<ul>
					<li>
				<a href="http://xn--nrrebrofighters-5tb.dk/2014/05/aabent-hus/">Åbent hus d. 11. maj</a>
						</li>
					<li>
				<a href="http://xn--nrrebrofighters-5tb.dk/2014/04/indkaldelse-til-aarlig-generalforsamling-hos-noerrebro-fighters/">Indkaldelse til årlig generalforsamling hos Nørrebro Fighters</a>
						</li>
					<li>
				<a href="http://xn--nrrebrofighters-5tb.dk/2014/02/traenere-soeges/">Trænere søges</a>
						</li>
					<li>
				<a href="http://xn--nrrebrofighters-5tb.dk/2014/02/frivillige-soeges-mediegrafiker-og-pr-og-markedsfoeringsansvarlig/">Frivillige søges: Mediegrafiker og PR- og markedsføringsansvarlig</a>
						</li>
					<li>
				<a href="http://xn--nrrebrofighters-5tb.dk/2014/01/saesonstart-2014-nye-lokaler-og-kontingent/">Sæsonstart 2014 &#8211; nye lokaler og kontingent</a>
						</li>
				</ul>
		</div><div id="text-2" class="widget widget_text"><h3 class="widget-title">Om Nørrebro Fighters</h3>			<div class="textwidget">
<p>Vi er små, men vi er kvikke! </p>
<p>Vores mål er at skabe sociale fællesskaber og gode oplevelser med særligt fokus på børn og unge. </p>
<p>Derfor arbejder vi på at vedligeholde en stærk og sund frivillig- og medlemskultur.</p>
<p>Vi holder til på Tagensvej 85D, 2200 København N. Tjek vores holdoversigt – du finder helt sikkert noget for dig!</p> </div>
		</div>
		</div><!-- .column.large-12 -->
	</div><!-- .row -->
</aside>		</div>
	</div><!-- .row -->
</div><!-- .content-wrapper -->




<!--------------------------------------------- The address bar at the bottom of the homepage ------------------------------------------>
	<footer>
		<!--<div class="row">
			<div class="column large-12">
				&nbsp;
			</div>
		</div>-->
		<div class="row">
			<div class="column large-6">
				          <div id="textblockswidget-3" class="widget widget_textblockswidget no-margin">              				<div class="text-block find-vej-kontakt"><div class="map is-flexible" id="map-address">&nbsp;</div>
<dl class="address">
  <dt>Nørrebro Fighters</dt>
    <dd>RessourceCenter Ydre Nørrebro</dd>
    <dd>Tagensvej 85D</dd>
    <dd>2200 København N</dd>
  <dt>Kontakt</dt>
    <dd>Christina Relsted (formand)</dd>
    <dd>Mail: kontakt@norrebrofighters.dk</dd>
</dl>
  
  </body>
</html>