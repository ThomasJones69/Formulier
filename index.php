<html>
    <head>
        <meta charset="UTF-8">
        <title>Registratie</title>

    </head>
    <body>
        <h1>Welkom bij de mijn registratie formulier"</h1>
        <br>
        <br>

        <!--        Hier worden de gegevens van de bezoeker vastgelegt en doorgegeven aan validate.php-->

        <form method="post">
            Name            : <input type="text" name="naam"><br>
            Adres           : <input type="text" name="adres"><br>
            Postcode        : <input type="text" name="postcode"><br>
            Woonplaats      : <input type="text" name="woonplaats"><br>
            Geslacht        : <input type="radio" name="geslacht" value="man">Man
            <input type="radio" name="geslacht" value="vrouw">Vrouw<br><br>

            E-mail          : <input type="text" name="email"><br><br>
            Opmerking       : <textarea name="opmerking" rows="5" cols="30"></textarea><br><br>
            <br>
            <input type="submit" name="Akkoord" value="Akkoord" <?php $id_a = 1 ?>>
        </form> 
        <?php
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
        if ($id_b == 2){
            submitToFile();
            
        }
        echo "Gegevens zijn weggeschreven naar bestand";

        
   
    ?>
</body>
</html>
