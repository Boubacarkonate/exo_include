<?php
include("head.php");
include("header.php");
?>


<h1>HUITIEME EXEMPLE</h1>
<form action="ex8.php" method="post">
    <label for="personnage">personnage</label>
    <br>
    <select name="personnage">
        <option value="vide">Choisir un personnage</option>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
        <br>
        <br>
    <input type="submit" value="choisir">
</form>
<br>
<br>

<?php
$perso = $_POST['personnage'];
var_dump($perso);

if (isset($perso)) {
   if ($perso == "homme") {
   echo '<img src= "images/a.PNG ">';
   } else {
    echo '<img src= "images/b.PNG ">';
   }
}



?>


<?php
include("footer.php");
?>