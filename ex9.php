<?php
include("head.php");
include("header.php");

// homme = true
$p1=["nom" => "Ganesh", "age"=> 53, "sexe" =>"homme", "expérience" => 23];
$p2=["nom" =>"Sarah", "age"=>25,"sexe" =>"femme","expérience" => 5];
$p3=["nom" => "Mohammed", "age"=>56,"sexe" => "homme","expérience"=>28];
$p4=["nom" => "Pascal","age"=> 54, "homme", "expérience"=>20];
?>


<h1>NEUVIEME EXEMPLE</h1>

<form action="" method="post">
    <label for="personnage">personnage</label>
    <br>
    <select name="personnage" onchange="submit()">
        <option value="vide">Choisir un personnage</option>
        <option value="p1" <?php if (isset($perso) && $perso === "p1")   ?> >Ganesh</option>
        <option value="p2"<?php if (isset($perso) && $perso === "p2")   ?> >Sarah</option>
        <option value="p3" <?php if (isset($perso) && $perso === "p3")   ?>>Mohammed</option>
        <option value="p4" <?php if (isset($perso) && $perso === "p4")   ?>>Pascal</option> 
    </select>
        <br>
        <br>
    <!-- <input type="submit" value="Valider"> -->
</form>
<br>
<br>
<h2>G2R FORMATION</h2>


<?php
$perso = @$_POST["personnage"];                 //@ permet d'éffacer l'erreur
var_dump($perso);
if (!isset($perso) OR $perso === "p1") {
  echo "<table><tr><td>";
  echo '<img src = "images/a.PNG"> ';
  echo "</td><td>";
   afficher($p1);
  echo "</td></tr></table>";
  
} elseif (!isset($perso) OR $perso === "p2") {
    echo "<table><tr><td>";
    echo '<img src = "images/b.PNG"> ';
    echo "</td><td>";
     afficher($p2);
    echo "</td></tr></table>";
} elseif (!isset($perso) OR $perso === "p3") {
    echo "<table><tr><td>";
    echo '<img src = "images/a.PNG"> ';
    echo "</td><td>";
     afficher($p3);
    echo "</td></tr></table>";
} elseif (!isset($perso) OR $perso === "p4") {
    echo "<table><tr><td>";
    echo '<img src = "images/c.PNG"> ';
    echo "</td><td>";
    afficher($p4);
    echo "</td></tr></table>";
}

function afficher($personnage){
    foreach ($personnage as $key => $value) {
        echo $key. "  :  " .$value. "<br>";
    }
}



?>


<?php
include("footer.php");
?>