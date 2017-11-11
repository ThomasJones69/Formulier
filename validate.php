<html>
<body>

Welkom <?php echo $_POST["naam"]; ?><br>
Onderstaande gegevens hebben wij ontvangen. Controleer svp op juistheid: <br><br>

<?php 
echo "Uw naam is: "."<b>".$_POST["naam"]."</b>"."<br>";
echo "U woont op de: "."<b>".$_POST["adres"]."</b>"."<br>";
echo "Uw postcode is: "."<b>".$_POST["postcode"]."</b>"."<br>";
echo "Uw woonplaats is: "."<b>".$_POST["woonplaats"]."</b>"."<br>";
echo "Uw email adres is: "."<b>".$_POST["email"]."</b>"."<br>";
echo "U bent een: "."<b>".$_POST["geslacht"]."</b>"."<br>";
echo "Uw opmerkingen zijn: "."<b>".$_POST["opmerking"]."</b>"."<br>";
echo "<br>"."<br>";
echo "Bovenstaande gegevens juisten verzenden?";
?>

<html>
<input type="submit" name="Verzenden" value="Verzenden">
</html>



</body>
</html>

