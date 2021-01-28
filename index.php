<?php

    $students = [
        [
            "nom" => "Portier",
            "prenom" => "Brian",
            "age" => 12,
            "ville" => "Charlerois",
            "passion" => ["foot", "karting"]
        ],
        [
            "nom" => "Bidul",
            "prenom" => "Thomas",
            "age" => 21,
            "ville" => "Chimay",
            "passion" => ["film", "livre", "chanson"]
        ],
        [
            "nom" => "Luthier",
            "prenom" => "Héloise",
            "age" => 19,
            "ville" => "Baileux",
            "passion" => ["danse", "chanson", "guitare"]
        ],
        [
            "nom" => "Boulot",
            "prenom" => "Romain",
            "age" => 25,
            "ville" => "Sivry",
            "passion" => ["manga", "musique"]
        ],
        [
            "nom" => "Robert",
            "prenom" => "Robert",
            "age" => 45,
            "ville" => "Seloigne",
            "passion" => ["camion", "c'est tout"]
        ],
        [
            "nom" => "Doe",
            "prenom" => "John",
            "age" => 36,
            "ville" => "Berlin",
            "passion" => ["programmation", "metal", "billard"]
        ],
        [
            "nom" => "Senpié",
            "prenom" => "Jessui",
            "age" => 58,
            "ville" => "Macon",
            "passion" => ["jogging", "vélo"]
        ],
        [
            "nom" => "Fifou",
            "prenom" => "Emilie",
            "age" => 17,
            "ville" => "Verdun",
            "passion" => ["équitation", "jeux vidéo", "manga", "shopping"]
        ],
        [
            "nom" => "titi",
            "prenom" => "toto",
            "age" => 74,
            "ville" => "Paris",
            "passion" => ["basket", "théatre"]
        ],
        [
            "nom" => "Boquet",
            "prenom" => "Bil",
            "age" => 34,
            "ville" => "Namur",
            "passion" => ["jardin", "animaux"]
        ],
    ];

    $i = 0;
    foreach ($students as $student){
        echo $i." => ".$student["nom"]." ".$student["prenom"];
        echo " - <a href='student.php?index=".$i."'>Précision</a><br><br><br><br>";
        $i++;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des élèves</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>
