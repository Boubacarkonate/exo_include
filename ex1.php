<?php
    include("head.php");
    include("header.php");
?>
    
        <h1>PREMIER EXEMPLE</h1>
        <h2>Table de multiplication</h2>

        <?php
            define("TABLE", 16);
            echo "<h3> La table de " .TABLE. "</h3>";
            for ($i=0; $i <=12; $i++) { 
                echo "<br>".$i. "x" .TABLE. "=" .$i*TABLE."<br>";
            } 
        ?>

    
<?php
    include("footer.php");
?>