<?php
    include("head.php");
    include("header.php");
?>
    
   
        <h1>QUATRIEME EXEMPLE</h1>
        <form action="ex4.php" method="get">
            <label for="multiplication"> Calculer périmètre d'un cercle</label>
            <br>
            <input type="number" name="rayon" id="" >
            <br>
            <br>
            <input type="submit" value="valider">
        </form>
        
<!------------------------------------------------------------------------------------------------->
<!-- Surface du cercle = (diamètre ÷2) x (diamètre ÷2) x π -->
<!-- périmètre d'un cercle = 2 * rayon * PI  -->
        <?php
$rayon = $_GET["rayon"];
define("PI", 3.14);
// var_dump($rayon);
?>


                                                                                <!-- round()=>arrondi  (variable, nbre décimal) -->
<?php
$perimetre = 2 * $rayon * PI;               //2 * $rayon * M_PI;            $p = round($perimetre, 3);
echo "rayon = ".$rayon. "<br>";
echo "Le périmètre du cercle est de ".$perimetre;
?>

<div class="cercle" style="
    background: red;
    width: 200px;
    height: 200px;
    border-radius: 200px;
    color: white;
"><?php echo $rayon ?>
</div>


<?php
    include("footer.php");
?>