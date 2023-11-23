<?php
include("head.php");
include("header.php");


?>


<h1>SEPTIEME EXEMPLE</h1>
<form action="ex7.php" method="get">
    <label for=""></label>
    <input type="number" name="nb" min=1>
    <input type="submit" value="MOYENNE">
</form>
<br>
<br>

<?php
if (isset($_GET['nb'])) {
    $notes = $_GET['nb'];
    // var_dump($notes);
    for ($i = 0; $i < $notes; $i++) {
        // var_dump($notes);
        echo "<form action=\"#\" methode=\"post\">";
        for ($i = 1; $i <= $notes; $i++) {
            echo "Note " . $i . " = ";
            echo "<input type=\"number\" name=\"note" . $i . "\" required><br>";
        }
        echo "<input type=\"submit\" value=\"Calculer\">" . $i . "<br>";
        echo "</form>";
        if (isset($_POST["note1"])) {
            $somme = 0;
            for ($i = 0; $i < $notes; $i++) {
                $somme += $_POST["note" . $i];
            }
            echo "la moyenne est : " . $somme / $notes;
        }
    }
}
?>

<?php
include("footer.php");
?>