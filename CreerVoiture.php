<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $immatriculation = $_POST["immatriculation"];
    $marque = $_POST["marque"];
    $couleur = $_POST["couleur"];
    $nbSieges = $_POST["nb_sieges"];

    echo "Immatriculation : " . $immatriculation . "<br>";
    echo "Marque : " . $marque . "<br>";
    echo "Couleur : " . $couleur . "<br>";
    echo "Nombre de sièges : " . $nbSieges . "<br>";
} else {
    echo "Le formulaire n'a pas été soumis via la méthode POST";
}
?>
</body>
</html>
<!-- Ce fichier s'affiche sous forme de html sur le naviagteur , j'ai preferer tout supprimer. -->