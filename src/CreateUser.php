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
    <center>
    <h1>Tilmelding</h1>                                                                                                    
    </center>
    <br>
    
    <?php
    include("config.php");
    
    //Connect to the database
    try {
        $dbh = new PDO($dbServer, $dbLogin, $dbPass);  
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();     
    }
    
    //I define the error variables and set them to an empty value
    $firstnameErr = $lastnameErr = $addressErr = $postalcodeErr = $cityErr = $mtlpErr = $memailErr = $cemailErr = $contactnameErr = $contactphoneErr = $contactemailErr = ""; //$passErr =

    //The function testInput removes all white space after the input, and slashes that appear if there are special characters, such as " or '.
    function testInput($theInput) {
        $theInput = trim($theInput);
        $theInput = stripslashes($theInput);
        $theInput = htmlspecialchars($theInput);
        return $theInput;
    }


    //Checking if input is valid
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstname = testInput($_POST["firstname"]);
        if (empty($_POST["firstname"])) {
            $firstnameErr = "* Indtast fornavn";
        }
        else {
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$firstname)) {
                $firstnameErr = "* Det er kun tilladt at bruge bogstaver";
                $firstname = "";
            }
        }
        
        $lastname = testInput($_POST["lastname"]);
        if (empty($_POST["lastname"])) {
            $lastnameErr = "* Indtast efternavn";
        }
        else {    
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$lastname)) {
                $lastnameErr = "* Det er kun tilladt at bruge bogstaver";
                $lastname = "";
            }
        }
        $year = testInput($_POST["year"]);
        
        $address = testInput($_POST["address"]);
        if (empty($_POST["address"])) {
            $addressErr = "* Indtast adresse";
        }
        else {
            if (!preg_match("/^[0-9a-zæøåA-ZÆØÅ., ]*$/",$address)) {
                $addressErr = "* Det er kun tilladt at bruge bogstaver,tal, komma og punktum";
                $address = "";
            }
        }
        
        $postalcode = testInput($_POST["postalcode"]);
        if (empty($_POST["postalcode"])) {
            $postalcodeErr = "* Indtast postnummer";
        }
        else {
            if (!preg_match("/^[0-9]*$/",$postalcode)) {
                $postalcodeErr = "* Det er kun tilladt at bruge bogstaver og tal";
                $postalcode = "";
            }
        }
        
        $city = testInput($_POST["city"]);
        if (empty($_POST["city"])) {
            $cityErr = "* Indtast by";
        }
        else {
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$city)) {
                $cityErr = "* Det er kun tilladt at bruge bogstaver";
                $city = "";
            }
        }
        $mtlp = testInput($_POST["mtlp"]);
        if (empty($_POST["mtlp"])) {
            $mtlpErr = "* Indtast medlems tlf.";
        }
        else {
            if (!preg_match("/^[0-9]*$/",$mtlp)) {
                $mtlpErr = "* Det er kun tilladt at bruge tal";
                $mtlp = "";
            }
        }
        $memail = testInput($_POST["memail"]);
        if (empty($_POST["memail"])) {
            $memailErr = "* Indtast email-adresse";
        }
        else {
            if (!preg_match("/([\wæøå\-]+\@[\wæøå\-]+\.[\w\-]+)/",$memail)) {
                $memailErr = "* Ugyldig email-adresse";
                $memail = "";
            }
            
            $isAvailable = "SELECT medlemsemail FROM medlemsdatabase WHERE medlemsemail = '$memail'";
            foreach ($dbh->query($isAvailable) as $test) {
            }
            
            if (!empty($test[0])) {
                $memailErr = "* Email er allerede i brug";
                $memail = "";
            }
        }
        
        $cemail = testInput($_POST["cemail"]);
        if (empty($_POST["cemail"])) {
            $cemailErr = "* Bekræft email-adresse";
        }
        else {
            if (strcasecmp($memail,$cemail )!=0 and $memail!="") {
                $cemailErr = "* Email-adresserne matcher ikke";
                $cemail = "";
            }
        }
        
        //$pass = testInput($_POST["pass"]);
        //if (empty($_POST["pass"])) {
        //    $passErr = "* Indtast password";
        //}
        //else {
        //    if (!preg_match("/^[0-9a-zæøåA-ZÆØÅ]*$/",$pass)) {
        //        $passErr = "* Dit password må kun indeholde bogstaver og tal";
        //        $pass = "";
        //    }
        //}
        
        $contactname = testInput($_POST["contactname"]);
        if (empty($_POST["contactname"])) {
            $contactnameErr = "* Indtast fulde navn";
        }
        else {
            
            if (!preg_match("/^[a-zæøåA-ZÆØÅ ]*$/",$contactname)) {
                $contactnameErr = "* Der må kun være bogstaver og mellemrum";
                $contactname = "";
            }
        }
        $contactphone = testInput($_POST["contactphone"]);
        if (empty($_POST["contactphone"])) {
            $contactphoneErr = "* Indtast telefonnummer";
        }
        else {
            if (!preg_match("/^[0-9]*$/",$contactphone)) {
                $contactphoneErr = "* Telefonnummeret må kun indeholde tal";
                $contactphone = "";
            }
        }
        $contactemail = testInput($_POST["contactemail"]);
        if (empty($_POST["contactemail"])) {
            $contactemailErr = "* Indtast kontaktpersonens email";
        }
        else {
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
        if(!empty($firstname) && !empty($lastname)  && !empty($address) && !empty($postalcode) && !empty($city) && !empty($mtlp) && !empty($memail) && !empty($cemail) && !empty($contactname) && !empty($contactphone) && !empty($contactemail)) {
            if (empty($firstnameErr) && empty($lastnameErr) && empty($addressErr) && empty($postalcodeErr) && empty($cityErr) && empty($mtlpErr) && empty($memailErr) && empty($cemailErr) && empty($contactnameErr) && empty($contactphoneErr) && empty($contactemailErr)) {
                
                //The password is now hashed, so it can be stored securely
                // A higher "cost" is more secure but consumes more processing power
                //$cost = 10;

                // Create a random salt
                //$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

                // Prefix information about the hash so PHP knows how to verify it later.
                // "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
                //$salt = sprintf("$2a$%02d$", $cost) . $salt;

                // Hash the password with the salt
                //$hash = crypt($pass, $salt);
                
                
                //And then the information is inserted into the database by queries.
                try {
                    $dbh->beginTransaction();

                    $query1 = "INSERT INTO MedlemsDatabase(fornavn,efternavn,medlemsemail,telefon) ";
                    $query1.= "VALUES (?, ?, ?, ?)";
                    $prepQ1 = $dbh->prepare($query1);

                    $query2 = "INSERT INTO LogInDatabase(loginEmail,'') ";
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
                    $prepQ2->execute(array($memail,''));//$hash
                    $prepQ3->execute(array($memail, $year.'-'.$month.'-'.$day, $address, $postalcode, $city, $textbox));
                    $prepQ4->execute(array($contactname, $contactphone, $contactemail, $memail));
                    $prepQ5->execute(array($memail));
                    $dbh->commit();

                } catch (Exception $e) {
                    echo $e->getMessage();
                    $dbh->rollback();
                }

                echo "<h4>Tilmeldingen er blevet registreret.<br> Vi har sendt en PDF-fil til din email som du skal printe ud og aflevere i klubben</h4><br><br><br><br><br><br><br>";   //Consider redirecting them to a new page
                
                 
                //We are going to use the member's email as the name for the generated pdf
                function clean($string) {
                    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                }                
                $pdfname = clean($memail);

                
                //The php class FPDF is used to create the PDF file:
                require("fpdf17/fpdf.php");
                
                //We are redeclaring the Header method, so the Nørrebro Fighters logo is added to the PDF:
                class myPDF extends FPDF {
                    //Page header method
                    function Header() {
                        $this->SetFont('Arial','B',15);
                        // Logo
                        $this->Image('logo.png',160,10,30);
                        // Line break
                        $this->Ln(20);
                    }
                }
                
                //The pdf is made:
                $pdf = new myPDF( );
                $pdf->AddPage();
                
                
                //Title:
                $pdf->SetFont('Arial','B',18);
                $pdf->Cell(10,0,'        Tilmeldingsseddel',0,1);
                $pdf->Cell(10,3,'        _______________________________________________',0,1);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'               (Denne side skal udskrives og afleveres til din træner / kontaktperson i foreningen)'),0,1); 
                
                //Name:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,'',0,1);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Navn: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'               '.$firstname .' '. $lastname),0,1);
                
                //Birthdate:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Fødselsdato: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                            '.$day.'/'.$month.'/'.$year),0,1); 
                
                //Adress:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Adresse: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                     '. $address),0,1);
                
                //Postalcode/city:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Postnummer/by: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                                  '. $postalcode.', '. $city),0,1);
                
                //Member's telephone:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Medlems tlf.: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                           '.$mtlp),0,1);
                
                //Member's email:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Medlems email: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                                 '. $memail),0,1);
                
                //Contactperson's name
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Navn på kontaktperson/værge: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                                                           '. $contactname),0,1);
                
                //Contactperson's telephone
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Kontaktpersons/værges tlf.: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                                                     '.$contactphone),0,1);
                
                //Contactperson's email
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Email: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                '.$contactemail),0,1);
                
                //Other information:
                $pdf->SetFont('Arial','B',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'            Yderligere oplysninger: '),0,0);
                $pdf->SetFont('Arial','',12);
                $pdf->Cell(10,10,iconv("UTF-8", "ISO-8859-1",'                                               '. $textbox),0,1);
                

                //Signature number 1:
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(10,10,'',0,1);
                $pdf->Cell(10,10,'',0,1);
                $pdf->Cell(10,10,'',0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'                                                                      ______________________________'),0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'                                                                                           Underskrift'),0,1);
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'                                                        (Hvis medlem er under 18 år underskrift fra kontaktperson/værge)'),0,1);
                
                //Text about permission:
                $pdf->Cell(10,10,'',0,1);
                $pdf->Cell(10,10,'',0,1);
                $pdf->SetFont('Arial','',10);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'              Du giver hermed tilladelse til, at der må blive taget billeder/video af dig i forbindelse med aktiviter, som'),0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'              kan bruges som dokumentation i evalueringsrapporter og som en del af Nørrebro Fighters informationsmate-'    ),0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'              riale og hjemmeside. Vi oplyser dig omkring dette hver gang, vi tager billeder og anvender ikke billederne,' ),0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'              hvis du på forhånd giver besked, at du ikke vil med i billederne:'                                            ),0,1);
                
                
                //Signature number 2:            
                $pdf->SetFont('Arial','B',10);
                $pdf->Cell(10,10,'',0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'                                                                      ______________________________'),0,1);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'                                                                                           Underskrift'),0,1);
                $pdf->SetFont('Arial','',9);
                $pdf->Cell(10,4,iconv("UTF-8", "ISO-8859-1",'                                                        (Hvis medlem er under 18 år underskrift fra kontaktperson/værge)'),0,1);
                
                
                $pdf->Output(getcwd().'/'.$pdfname.'.pdf','F');
                
                
                
                
                
                //I think we need a SMTP server (check out http://www.iredmail.org/)
                //Time to send the email...
                
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
            <td>  <input type="text" name="firstname" value="<?php echo $firstname; ?>" style="width: 170px;">  </td>
            <td colspan="3">  <span class="errors"> <?php echo $firstnameErr;?></span></td>
        </tr>

        <tr>
            <td>   Efternavn   </td>
            <td>  <input type="text" name="lastname" value="<?php echo $lastname; ?>" style="width: 170px;">    </td>
            <td colspan="3">  <span class="errors"> <?php echo $lastnameErr;?></span></td>
        </tr>

        <!-- Drop down list for the date of birth -->
        <tr>
            <td>   Fødselsdato(dd/mm/åååå)   </td>
            <td colspan="4">
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
            </select>
            
            <select name='year' style='width: 70px;'>
            <?php
            $year = date("Y");
            $yearUpTo = 1950;
            while ($year >= $yearUpTo) {
                
                    echo "<option value=\"$year\">$year</option>";
                   $year--;
            }
            ?>
            </select>           
            
                
                
            </td>
           
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
        
        <!--
        <tr>
            <td>   Password   </td>
            <td><input type="password" name="pass"></td>
            <td colspan="3"><span class="errors"> <?php echo $passErr;?></span></td>
        </tr>
        -->
        
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