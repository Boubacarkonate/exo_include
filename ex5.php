<?php
    include("head.php");
    include("header.php");
    session_start();
    // $session =$_SESSION["nbre_en_session"];
   if (!isset($_SESSION["nbre_en_session"])) {
    echo $_SESSION["nbre_en_session"]= rand(1,50);
    var_dump($_SESSION["nbre_en_session"]);
   } 

//    if (!isset($_SESSION["b"])) {
//     echo $_SESSION["b"] = "bonjour";
//    var_dump($_SESSION["b"]);
//    }
  
   
?>
    
   
        <h1>CINQUIEME EXEMPLE</h1>
        <form action="ex5.php" method="post">
            <label for=""> Trouver le nombre</label>
            <br>
            <input type="number" name="nbre" id="" >
            <br>
            <br>
            <input type="submit" value="valider">
        </form>

        <br>
        <br>
        
        <?php
        $nbre = $_POST["nbre"];
                $chiffre_session = $_SESSION["nbre_en_session"];
          echo  "<strong>".$nbre. "</strong><br>";
          var_dump($nbre. "nombre choisi");
          var_dump($chiffre_session." nombre à deviner");
            
            if ($nbre == $chiffre_session) {
               echo "gagné, le nombre à deviner était le <mark>".$chiffre_session."</mark>";
            } elseif($nbre < $chiffre_session) {
                echo "le nombre à deviner est plus grand";
            } else {
                echo "le nombre à deviner est plus petit";
            }
        ?>

 <?php
    include("footer.php");
?>S