<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nørrebro Fighters</title>
        <style>
            .error{color: #FF5959;}
        </style>
    </head>
    <body>
    <center>

    <H1><font color="#798E89">Tilmelding</font></H1>


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

    /*
    //When the user clicks submit, we retrieve the information by using the request method POST
    $firstname     = $_POST['firstname'];
    $lastname      = $_POST['lastname'];
    $day           = $_POST['day'];
    $month         = $_POST['month'];
    $year          = $_POST['year'];
    $address       = $_POST['address'];
    $postalcode    = $_POST['postalcode'];
    $city          = $_POST['city'];
    $mtlp          = $_POST['mtlp'];
    $memail        = $_POST['memail'];
    $cemail        = $_POST['cemail'];
    $pass          = $_POST['pass'];
    $contactname   = $_POST['contactname'];
    $contactphone  = $_POST['contactphone'];
    $contactemail  = $_POST['contactemail'];
    $textbox       = $_POST['textbox'];
    */



    //When users click the submit button, we have to check if they filled out the whole registration correctly
    if(isset($_POST['Submit'])) {
        if(!empty($firstname) && !empty($lastname)  && !empty($year) && !empty($address) && !empty($postalcode) && !empty($city) && !empty($mtlp) && !empty($memail) && !empty($cemail) && !empty($pass) && !empty($contactname) && !empty($contactphone) && !empty($contactemail)) {
            if (empty($firstnameErr) && empty($lastnameErr) && empty($yearErr) && empty($addressErr) && empty($postalcodeErr) && empty($cityErr) && empty($mtlpErr) && empty($memailErr) && empty($cemailErr) && empty($passErr) && empty($contactnameErr) && empty($contactphoneErr) && empty($contactemailErr)) {

                echo $firstname;
                echo $lastname;
                echo $day;
                echo $month;
                echo $year;
                echo $address;
                echo $postalcode;
                echo $city;
                echo $mtlp;
                echo $memail;
                echo $cemail;
                echo $pass;
                echo $contactname;
                echo $contactphone;
                echo $contactemail;
                echo $textbox;



                //If correct, we connect to the database  (Right now, it's connecting to the wrong database)
                try {
                    $dbh = new PDO($dbServer, $dbLogin, $dbPass);
                }
                catch (PDOException $e) {
                    print "Error!: " . $e->getMessage() . "<br/>";
                die();
                }

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

                    echo $query1;
                    echo $query2;
                    echo $query3;
                    echo $query4;
                    echo $query5;

                    $prepQ1->execute(array($firstname,$lastname,$memail,$mtlp));
                    $prepQ2->execute(array($memail,$pass));
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">   <!-- If testInput-->

    <table cellpadding="10" cellspacing="2">



        <tr>
            <td>   Navn   </td>
            <td colspan="3"><input type="text" name="firstname" value="<?php echo $firstname; ?>">
            <span class="error"> <?php echo $firstnameErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Efternavn   </td>
            <td><input type="text" name="lastname" value="<?php echo $lastname; ?>">
            <span class="error"> <?php echo $lastnameErr;?></span>
            </td>
        </tr>

        <!-- Drop down list for the date of birth -->
        <tr>
            <td>   Fødselsdato   </td>
            <td colspan="4">
            <select name='day'>
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
            </select>   Dag

            <select name='month'>
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
            </select>   Måned

            <input type="text" maxlength="4" name="year" value="<?php echo $year; ?>" size="2">
                   År   <span class="error"> <?php echo $yearErr;?></span></td>
        </tr>


        <tr>
            <td>   Adresse   </td>
            <td><input type="text" name="address" value="<?php echo $address; ?>">
            <span class="error"> <?php echo $addressErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Postnummer   </td>
            <td><input type="text" maxlength="4" name="postalcode" value="<?php echo $postalcode; ?>">
            <span class="error"> <?php echo $postalcodeErr;?></span>
            </td>

            <td>   By   </td>
            <td colspan="2"><input type="text" name="city" value="<?php echo $city; ?>">
            <span class="error"> <?php echo $cityErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Medlems tlf.   </td>
            <td><input type="text" maxlength="8" name="mtlp" value="<?php echo $mtlp; ?>">
            <span class="error"> <?php echo $mtlpErr;?></span>
            </td>
        </tr>

        <tr>
            <td><br><br>   Medlems email   </td>
            <td><br><br><input type="text" name="memail" value="<?php echo $memail; ?>">
            <span class="error"> <?php echo $memailErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Bekræft email   </td>
            <td><input type="text" name="cemail" value="<?php echo $cemail; ?>">
            <span class="error"> <?php echo $cemailErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Password   </td>
            <td><input type="password" name="pass">
            <span class="error"> <?php echo $passErr;?></span>
            </td>
        </tr>

        <tr>
            <td><br><br>   Navn på kontaktperson/værge   </td>
            <td><br><br><input type="text" name="contactname" value="<?php echo $contactname; ?>">
            <span class="error"> <?php echo $contactnameErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Kontaktpersons/værges Tlf.   </td>
            <td><input type="text" name="contactphone" value="<?php echo $contactphone; ?>">
            <span class="error"> <?php echo $contactphoneErr;?></span>
            </td>
        </tr>

        <tr>
            <td>   Kontaktpersons/værges email   </td>
            <td><input type="text" name="contactemail" value="<?php echo $contactemail; ?>">
            <span class="error"> <?php echo $contactemailErr;?></span>
            </td>
        </tr>


        <tr>
            <td colspan="4"><center>  <br><br><br>
                    Har du yderligere oplysninger, som vi bør være opmærksomme på, <br>
                    f.eks. astma, dårligt knæ eller lignende, skriv venligst her:
            </center></td>
        </tr>

        <tr>
            <td colspan="4"><center><textarea rows="5" cols="50" maxlength="300"name="textbox" value="<?php echo $textbox; ?>"></textarea></center></td>
        </tr>


            <td colspan="4">
            <button type="Submit" name="Submit" value="Submit" style="float: right;">    Fortsæt    </button>
            </td>
        </form>
    </table>
    <br><br>

    <!-- But this should only be for when they are printing the registration form out -->
    <center>
    _________________________<br>
    Underskrift
    <h5>(Hvis medlem er under 18 år underskrift fra kontaktperson/værge)<h5>
    </center>

    </center>
    </body>
</html>
