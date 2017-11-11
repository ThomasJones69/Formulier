<html>
    <head>
        <meta charset="UTF-8">
        <title>Registratie</title>

    </head>
    <body>
        <h1>Welkom bij de mijn registratie formulier"</h1>
        <br>
        <br>

        <!--        Hier worden de gegevens van de bezoeker vastgelegt-->

        <form method="post">
            Naam            : <input type="text" name="naam" placeholder="Uw Naam"/><br>
            Adres           : <input type="text" name="adres" placeholder="Uw Adres"/><br>
            Postcode        : <input type="text" name="postcode" placeholder="Uw Postcode/"><br>
            Woonplaats      : <input type="text" name="woonplaats" placeholder="Uw Woonplaats"/><br>
            Geslacht        : <input type="radio" name="geslacht" value="man"/>Man
            <input type="radio" name="geslacht" value="vrouw">Vrouw<br><br>

            E-mail          : <input type="text" name="email" placeholder="Wat is uw E-mail adres"/><br><br>
            Opmerking       : <textarea name="opmerking" rows="5" cols="30" placeholder="Eventueel opmerkingen"/></textarea><br><br>
            <br>
            <input type="submit" name="Akkoord" value="Akkoord" <?php $id_a = 1 ?>>
        </form> 
        <?php
        
        // Function die ervoor zorgt dat de ingevoerde gegevens worden weg geschreven naar bestand
        
            function submitToFile(){
                $naamForm = $_POST["naam"];
                $naamForm = fopen($naamForm."."."txt", "a+") or die("Unable to open file!");
                $f_naam = $_POST["naam"];
                fwrite($naamForm, $f_naam);
                $f_adres = $_POST["adres"];
                fwrite($naamForm, $f_adres);
                $f_postcode = $_POST["postcode"];
                fwrite($naamForm, $f_postcode);
                $f_woonplaats = $_POST["woonplaats"];
                fwrite($naamForm, $f_woonplaats);
                $f_email = $_POST["email"];
                fwrite($naamForm, $f_email);
                $f_geslacht = $_POST["geslacht"];
                fwrite($naamForm, $f_geslacht);
                $f_opmerking = $_POST["opmerking"];
                fwrite($naamForm, $f_opmerking);
                fclose($naamForm);
            }
            
        // Als op de submit knop is geklikt kan de invoerder controleren of de gegevens kloppen
        if ($id_a == 1) {
            echo "Uw naam is: " . "<b>" . $_POST["naam"] . "</b>" . "<br>";
            echo "U woont op de: " . "<b>" . $_POST["adres"] . "</b>" . "<br>";
            echo "Uw postcode is: " . "<b>" . $_POST["postcode"] . "</b>" . "<br>";
            echo "Uw woonplaats is: " . "<b>" . $_POST["woonplaats"] . "</b>" . "<br>";
            echo "Uw email adres is: " . "<b>" . $_POST["email"] . "</b>" . "<br>";
            echo "U bent een: " . "<b>" . $_POST["geslacht"] . "</b>" . "<br>";
            echo "Uw opmerkingen zijn: " . "<b>" . $_POST["opmerking"] . "</b>" . "<br>";
            echo "<br>" . "<br>";
            echo "Zijn bovenstaande gegevens juist en verzenden?";
        }
        ?>
    <html>
        <input type="submit" name="Verzenden" value="Verzend" <?php $id_b = 2 ?>>
    </html>

    <?php
    
        // Als de invoerder vind dat zijn/haar gegevens kloppen en op Akkoord klikt,
        //  function call naar submitToFile wordt afgetrapt om de gegevens op te slaan.
        if ($id_b == 2){
            submitToFile();
            
        }
        echo "Gegevens zijn weggeschreven naar bestand";

        
   
    ?>
</body>
</html>
