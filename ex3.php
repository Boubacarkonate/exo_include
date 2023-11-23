<?php
    include("head.php");
    include("header.php");
?>
    
   
        <h1>TROISIEME EXEMPLE</h1>
        <form action="ex3.php" method="get">
            <label for="multiplication"> Hauteur de la pyramide</label>
            <br>
            <input type="number" name="nombre" id="" >
            <br>
            <br>
            <input type="submit" value="valider">
        </form>
<!------------------------------------------------------------------------------------------------->

        <?php
$etoile = $_GET["nombre"];
var_dump($etoile);

echo" <br><br><br> METHODE 1 <br>";

if (isset($etoile)) {
  
   for ($i=1; $i <= $etoile; $i++) {
    
    for ($j=1; $j < $i; $j++) { 
        echo "*";
    }
   echo "<br>";
}
for ($k=$etoile; $k >= 1; $k--) { 
   for ($l=0; $l <$k ; $l++) { 
    echo "*";
   }
   echo "<br>";
}

} 

echo" <br><br><br> METHODE 2 <br>";

/***********************************************
                méthode 2 
 ***********************************************/

if (isset($etoile)) {
    $txt = "";
    for ($i=0; $i < $etoile ; $i++) { 
       $txt .="*";
       echo $txt."<br>";
}
for ($i=0; $i < $etoile ; $i++) { 
    $txt = substr($txt,0,strlen($txt)-1);
    echo $txt."<br>";
}
}


echo" <br><br><br> METHODE 3 <br>";

for ($i=1; $i <= $etoile; $i++) { 
    echo str_repeat(" ", $etoile - $i);

    echo str_repeat("*  ",$i);

    echo "<br>";
}

?>

<?php
    include("footer.php");
?>