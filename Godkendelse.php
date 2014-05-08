<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <title>Nørrebro Fighters</title>
    </head>

    <body> 
    <center><H1><font color="#798E89">Medlemsliste</font></H1></center>
    <br>
    <?php
    try { 
    // Erstat det her sted med databasen fra Nørrebro Fighters
    $dbh = new PDO('oci:dbname=//localhost:1521/dbwc', 'sqd917', 'dbx2014'); 
    } catch (PDOException $e) { 
    print "Error!: " . $e->getMessage() . "<br/>"; 
    die(); 
    }
    ?>
    
    <center>
    <!-- Table 1 -->
    <h3><font color="#798E89">Liste over medlemmer</font></h3>
    <table border=1>
    <tr> 
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    (checkbox)     </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Navn           </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Brugernavn     </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Hold           </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Fødselsdato    </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Email-adresse  </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    (vis mere)     </font></th>
    </tr>
    <form>
    <td colspan="7">
    <center>
        <button type="Submit" value="Submit"></button>
    </center>
    </td>
    </form>    
    </table>
    <br><br>
    
    
    <!-- Table 2 -->
    <h3><font color="#798E89">Brugere som endnu ikke er godkendt</font></h3>
    <!-- The table -->   
    <table border=1>
    <tr> 
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    (checkbox)     </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Navn           </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Brugernavn     </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Hold           </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Fødselsdato    </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    Email-adresse  </font></th>
        <th BGCOLOR="#CCD8D5"><font color="#798E89">    (vis mere)     </font></th>
    </tr>    
    <form>
    
    <!-- Some PHP+SQL code that receives the people that aren't accepted yet 
    <tr><td>
       ...
    </td></tr>
    -->
    
    <!-- Buttons  (check type+value) -->
    <td colspan="7">
    <center>
        <button type="Submit" value="Submit">    Godkend    </button>
        <button type="Submit" value="Submit">    Fjern      </button>
    </center>
    </td>
    </form>
    </table>
    </center>
    <br><br>
    
    <!-- Where should this button refer back to? -->
    <button type="Submit" value="Submit">    Tilbage    </button>
    </body>
</html>

