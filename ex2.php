<?php
    include("head.php");
    include("header.php");
?>
    
    
        <h1>DEUXIEME EXEMPLE</h1>

        <form action="" method="get">
            <label for="multiplication"> Choisis ton nombre à multiplier</label>
            <br>
            <input type="number" name="nombre" id="" >
            <br>
            <br>
            <input type="submit" value="valider">
        </form>

        <?php
    
        $nombre = $_GET["nombre"];

        echo "<strong>" .$nombre. "</strong>";

        if (isset($nombre) && !empty($nombre)) {
             for ($i=0; $i <=12; $i++) { 
            echo "<br>".$i. " x <strong>" .$nombre. "</strong> =" .$i*$nombre."<br>";
        }
      
        } else {
            echo "choisis un numéro !";
        }

        

        ?>
    
<?php
    include("footer.php");
?>