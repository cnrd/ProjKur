<!DOCTYPE html>
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
<li id="list-item-170" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/">Forside</a></li>
<li id="list-item-123" class="list-item "><a href="http://xn--nrrebrofighters-5tb.dk/hold/">Hold</a></li>
<li id="list-item-172" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/traenere/">Trænere</a></li>
<li id="list-item-124" class="list-item"><a href="http://xn--nrrebrofighters-5tb.dk/kontakt/">Kontakt</a></li>
<li id="list-item-125" class="list-item is-active"><a href="http://xn--nrrebrofighters-5tb.dk/bliv-medlem/">Bliv medlem</a></li>
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
    
                                                                                                        
                                                                                                        
    <!---------------------------------------------------------   Our code ------------------------------------------------------------------>
    <h1>Tilmelding</h1>                                                                                                    

    <?php
    include("config.php");
    //I define the error variables and set them to an empty value
    $firstnameErr = $lastnameErr = $yearErr = $addressErr = $postalcodeErr = $cityErr = $mtlpErr = $memailErr = $cemailErr = $passErr = $contactnameErr = $contactphoneErr = $contactemailErr = "";

    //The function testInput removes all white space after the input, and slashes that appear if there are special characters, such as " or '.
    function testInput($theInput) {
        $theInput = trim($theInput);
        $theInput = stripslashes($theInput);
        $theInput = htmlspecialchars($theInput);
        return $theInput;
    }


    //Checking if input is valid
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstname"])) {
            $firstnameErr = "* Indtast fornavn";
        }
        else {
            $firstname = testInput($_POST["firstname"]);
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$firstname)) {
                $firstnameErr = "* Det er kun tilladt at bruge bogstaver";
                $firstname = "";
            }
        }
        if (empty($_POST["lastname"])) {
            $lastnameErr = "* Indtast efternavn";
        }
        else {
            $lastname = testInput($_POST["lastname"]);
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$lastname)) {
                $lastnameErr = "* Det er kun tilladt at bruge bogstaver";
                $lastname = "";
            }
        }
        if (empty($_POST["year"])) {
            $yearErr = "* Indtast årstal";
        }
        else {
            $year = testInput($_POST["year"]);
            if (!preg_match("/^[0-9]*$/",$year)) {
                $yearErr = "* Det er kun tilladt at bruge tal";
                $year = "";
            }
        }
        if (empty($_POST["address"])) {
            $addressErr = "* Indtast adresse";
        }
        else {
            $address = testInput($_POST["address"]);
            if (!preg_match("/^[0-9a-zæøåA-ZÆØÅ., ]*$/",$address)) {
                $addressErr = "* Det er kun tilladt at bruge bogstaver,tal, komma og punktum";
                $address = "";
            }
        }
        if (empty($_POST["postalcode"])) {
            $postalcodeErr = "* Indtast postnummer";
        }
        else {
            $postalcode = testInput($_POST["postalcode"]);
            if (!preg_match("/^[0-9]*$/",$postalcode)) {
                $postalcodeErr = "* Det er kun tilladt at bruge bogstaver og tal";
                $postalcode = "";
            }
        }
        if (empty($_POST["city"])) {
            $cityErr = "* Indtast by";
        }
        else {
            $city = testInput($_POST["city"]);
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$city)) {
                $cityErr = "* Det er kun tilladt at bruge bogstaver";
                $city = "";
            }
        }
        if (empty($_POST["mtlp"])) {
            $mtlpErr = "* Indtast medlems tlf.";
        }
        else {
            $mtlp = testInput($_POST["mtlp"]);
            if (!preg_match("/^[0-9]*$/",$mtlp)) {
                $mtlpErr = "* Det er kun tilladt at bruge tal";
                $mtlp = "";
            }
        }
        if (empty($_POST["memail"])) {
            $memailErr = "* Indtast email-adresse";
        }
        else {
            $memail = testInput($_POST["memail"]);
            if (!preg_match("/([\wæøå\-]+\@[\wæøå\-]+\.[\w\-]+)/",$memail)) {
                $memailErr = "* Ugyldig email-adresse";
                $memail = "";
            }
        }
        if (empty($_POST["cemail"])) {
            $cemailErr = "* Bekræft email-adresse";
        }
        else {
            $cemail = testInput($_POST["cemail"]);
            if (strcasecmp($memail,$cemail )!=0) {
                $cemailErr = "* Email-adresserne matcher ikke";
                $cemail = "";
            }
        }
        if (empty($_POST["pass"])) {
            $passErr = "* Indtast password";
        }
        else {
            $pass = testInput($_POST["pass"]);
            if (!preg_match("/^[0-9a-zæøåA-ZÆØÅ]*$/",$pass)) {
                $passErr = "* Dit password må kun indeholde bogstaver og tal";
                $pass = "";
            }
        }
        if (empty($_POST["contactname"])) {
            $contactnameErr = "* Indtast fulde navn";
        }
        else {
            $contactname = testInput($_POST["contactname"]);
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$contactname)) {
                $contactnameErr = "* Der må kun være bogstaver og mellemrum";
                $contactname = "";
            }
        }
        if (empty($_POST["contactphone"])) {
            $contactphoneErr = "* Indtast telefonnummer";
        }
        else {
            $contactphone = testInput($_POST["contactphone"]);
            if (!preg_match("/^[0-9]*$/",$contactphone)) {
                $contactphoneErr = "* Telefonnummeret må kun indeholde tal";
                $contactphone = "";
            }
        }
        if (empty($_POST["contactname"])) {
            $contactnameErr = "* Indtast kontaktpersonens navn";
        }
        else {
            $contactemail = testInput($_POST["contactemail"]);
            if (!preg_match("/([\wæøå\-]+\@[\wæøå\-]+\.[\w\-]+)/",$contactemail)) {
                $contactemailErr = "* Ugyldig email-adresse";
                $contactemail = "";
            }
        }
        $day = $_POST["day"];
        $month = $_POST["month"];
        $textbox = $_POST["textbox"];
    }

    //When users click the submit button, we have to check if they filled out the whole registration correctly
    if(isset($_POST['Submit'])) {
        if(!empty($firstname) && !empty($lastname)  && !empty($year) && !empty($address) && !empty($postalcode) && !empty($city) && !empty($mtlp) && !empty($memail) && !empty($cemail) && !empty($pass) && !empty($contactname) && !empty($contactphone) && !empty($contactemail)) {
            if (empty($firstnameErr) && empty($lastnameErr) && empty($yearErr) && empty($addressErr) && empty($postalcodeErr) && empty($cityErr) && empty($mtlpErr) && empty($memailErr) && empty($cemailErr) && empty($passErr) && empty($contactnameErr) && empty($contactphoneErr) && empty($contactemailErr)) {

                //If correct, we connect to the database  (Right now, it's connecting to the wrong database)
                try {
                    $dbh = new PDO($dbServer, $dbLogin, $dbPass);
                }
                catch (PDOException $e) {
                    print "Error!: " . $e->getMessage() . "<br/>";
                die();
                }
                
                //The password is now hashed, so it can be stored securely
                // A higher "cost" is more secure but consumes more processing power
                $cost = 10;

                // Create a random salt
                $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

                // Prefix information about the hash so PHP knows how to verify it later.
                // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
                $salt = sprintf("$2a$%02d$", $cost) . $salt;

                // Hash the password with the salt
                $hash = crypt($pass, $salt);
                
                
                //And then the information is inserted into the database by queries.
                try {
                    $dbh->beginTransaction();

                    $query1 = "INSERT INTO MedlemsDatabase(fornavn,efternavn,medlemsemail,telefon) ";
                    $query1.= "VALUES (?, ?, ?, ?)";
                    $prepQ1 = $dbh->prepare($query1);

                    $query2 = "INSERT INTO LogInDatabase(loginEmail,password) ";  //We are going to find a method for storing passwords securely
                    $query2.= "VALUES (?, ?)";
                    $prepQ2 = $dbh->prepare($query2);

                    $query3 = "INSERT INTO MereInfo(infoEmail, foedselsdato, adresse, postnummer, byen, yderligereInfo) ";
                    $query3.= "VALUES (?, ?, ?, ?, ?, ?)";
                    $prepQ3 = $dbh->prepare($query3);

                    $query4 = "INSERT INTO KontaktPersonen(konNavn,konTelefon,konEmail,konForEmail) ";
                    $query4.= "VALUES (?, ?, ?, ?)";
                    $prepQ4 = $dbh->prepare($query4);

                    $query5 = "INSERT INTO Betaling(betalingsemail) ";
                    $query5.= "VALUES (?)";
                    $prepQ5 = $dbh->prepare($query5);

                    $prepQ1->execute(array($firstname,$lastname,$memail,$mtlp));
                    $prepQ2->execute(array($memail,$hash));
                    $prepQ3->execute(array($memail, $year.'-'.$month.'-'.$day, $address, $postalcode, $city, $textbox));
                    $prepQ4->execute(array($contactname, $contactphone, $contactemail, $memail));
                    $prepQ5->execute(array($memail));
                    $dbh->commit();

                } catch (Exception $e) {
                    echo $e->getMessage();
                    $dbh->rollback();
                }

                echo "Du er nu blevet tilmeldt, yay";   //Consider redirecting them to a new page
            }
        }
    }

    //Making sure fields are not populated by errors..
    if(!isset($_POST['Submit'])){
      $firstname     = "";
      $lastname      = "";
      $day           = "";
      $month         = "";
      $year          = "";
      $address       = "";
      $postalcode    = "";
      $city          = "";
      $mtlp          = "";
      $memail        = "";
      $cemail        = "";
      $pass          = "";
      $contactname   = "";
      $contactphone  = "";
      $contactemail  = "";
      $textbox       = "";
    }

    ?>

    <!-- The registration form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

        <table class="prices">   <!-- change the class -->

        <tr>
            <td>   Navn   </td>
            <td>  <input type="text" name="firstname" value="<?php echo $firstname; ?>" style="width: 150px;">  </td>
            <td colspan="3">  <span class="errors"> <?php echo $firstnameErr;?></span></td>
        </tr>

        <tr>
            <td>   Efternavn   </td>
            <td>  <input type="text" name="lastname" value="<?php echo $lastname; ?>" style="width: 150px;">    </td>
            <td colspan="3">  <span class="errors"> <?php echo $lastnameErr;?></span></td>
        </tr>

        <!-- Drop down list for the date of birth -->
        <tr>
            <td>   Fødselsdato(dd/mm/åååå)   </td>
            <td colspan="3">
            <select name='day' style="width: 50px;">
            <?php
            $day = 1;
            while ($day <= 31) {
                if ($day <= 9) {
                    echo "<option value=\"0$day\">0$day</option>";
                    $day++;
                 }
                else {
                    echo "<option value=\"$day\">$day</option>";
                    $day++;
                }
            }
            ?>
            </select>  
            <select name='month'style="width: 50px;">
            <?php
            $month = 1;
            while ($month <= 12) {
                if ($month <= 9) {
                    echo "<option value=\"0$month\">0$month</option>";
                   $month++;
                }
                else {
                    echo "<option value=\"$month\">$month</option>";
                    $month++;
                }
            }
            ?>
            </select></td> 
            <td><input type="text" maxlength="4" name="year" value="<?php echo $year; ?>" style="width: 80px;"> </td>
            <td colspan="2"><span class="errors"> <?php echo $yearErr;?></span></td>
        </tr>


        <tr>
            <td>   Adresse   </td>
            <td>   <input type="text" name="address" value="<?php echo $address; ?>">  </td>
            <td colspan="3">   <span class="errors"> <?php echo $addressErr;?></span>              </td>
        </tr>

        <tr>
            <td>   Postnummer   </td>
            <td>   <input type="text" maxlength="4" name="postalcode" value="<?php echo $postalcode; ?>"> </td>
            <td colspan="2">   <span class="errors"> <?php echo $postalcodeErr;?></span>                  </td>

            <td>   By   </td>
            <td><input type="text" name="city" value="<?php echo $city; ?>" style="width: 150px;">     </td>
            <td><span class="errors"> <?php echo $cityErr;?></span>  </td>
        </tr>

        <tr>
            <td>   Medlems tlf.   </td>
            <td><input type="text" maxlength="8" name="mtlp" value="<?php echo $mtlp; ?>"></td>
            <td colspan="3"><span class="errors"> <?php echo $mtlpErr;?></span></td>
        </tr>

        <tr>
            <td><br><br>   Medlems email   </td>
            <td><br><br><input type="text" name="memail" value="<?php echo $memail; ?>"></td>
            <td colspan="3"><span class="errors"> <?php echo $memailErr;?></span></td>
        </tr>

        <tr>
            <td>   Bekræft email   </td>
            <td><input type="text" name="cemail" value="<?php echo $cemail; ?>"></td>
            <td colspan="3"><span class="errors"> <?php echo $cemailErr;?></span></td>
        </tr>

        <tr>
            <td>   Password   </td>
            <td><input type="password" name="pass"></td>
            <td colspan="3"><span class="errors"> <?php echo $passErr;?></span></td>
        </tr>

        <tr>
            <td><br><br>   Navn på kontaktperson/værge   </td>
            <td><br><br><input type="text" name="contactname" value="<?php echo $contactname; ?>"></td>
            <td colspan="3"><span class="errors"> <?php echo $contactnameErr;?></span></td>
        </tr>

        <tr>
            <td>   Kontaktpersons/værges Tlf.   </td>
            <td><input type="text" maxlength="8" name="contactphone" value="<?php echo $contactphone; ?>"></td>
            <td colspan="3"><span class="errors"> <?php echo $contactphoneErr;?></span></td>
        </tr>

        <tr>
            <td>   Kontaktpersons/værges email   </td>
            <td><input type="text" name="contactemail" value="<?php echo $contactemail; ?>"></td>
            <td colspan="3"><span class="errors"> <?php echo $contactemailErr;?></span></td>
        </tr>


        <tr>
            <td colspan="4"><center>  <br><br><br>
                    Har du yderligere oplysninger, som vi bør være opmærksomme på, <br>
                    f.eks. astma, dårligt knæ eller lignende, skriv venligst her:
            </center></td>
        </tr>

        <tr>
            <td colspan="4"><textarea rows="6" cols="50" maxlength="300"name="textbox" value="<?php echo $textbox; ?>"></textarea></td>
        </tr>


            <td colspan="4">
            <button type="Submit" name="Submit" value="Submit" style="float: right;">    Fortsæt    </button>
            </td>
        </form>
    </table>
    <br><br>

    
    
<!-- This should only be for when they are printing the registration form out
    _________________________<br>
    Underskrift
    <h5>(Hvis medlem er under 18 år underskrift fra kontaktperson/værge)<h5>
-->
    
    
    
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