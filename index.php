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
        
        <form action="validate.php" method="post">
        Name            : <input type="text" name="naam"><br>
        Adres           : <input type="text" name="adres"><br>
        Postcode        : <input type="text" name="postcode"><br>
        Woonplaats      : <input type="text" name="woonplaats"><br>
        Geslacht        : <input type="radio" name="geslacht" value="man">Man
        <input type="radio" name="geslacht" value="vrouw">Vrouw<br><br>
                
        E-mail          : <input type="text" name="email"><br><br>
        Opmerking       : <textarea name="opmerking" rows="5" cols="30"></textarea><br><br>
        
        <input type="submit" name="Akkoord" value="Akkoord">
        </form> 
    <?php
    
    ?>
</body>
</html>
