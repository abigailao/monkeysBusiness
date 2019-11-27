<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <style>
        * {
            text-align: center;
        }

        h1 {
            font-family: Arial, Serif;
            color: #000;
        }

        a:link{
            text-decoration: none;
        }

        a {
            color: #ff8400;
        }

        .aap-soorten{
            font-family: 'Bangers', cursive;
            font-size: 22px;
        }

    </style>
</head>
<body>
<!--2 afbeeldingen-->
<img src="img/monkey-business.jpg">

<h1>Select your monkey!</h1>

<img src="img/monkey_swings.png">
<!--namen van verschillende aap-soorten. Elke naam is gelinkt aan een google resultaat van het genoemde soort.-->
<!--In de zoekresultaten worden afbeeldingen van het aapsoort weergeven.-->
<div class="aap-soorten">
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Baviaan&tbm=isch">Baviaan</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Guereza&tbm=isch">Guereza</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Langoer&tbm=isch">Langoer</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Neusaap&tbm=isch">Neusaap</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Tamarin&tbm=isch">Tamarin</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Brulaap&tbm=isch">Brulaap</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Halfaap&tbm=isch">Halfaap</a>-->
<!--    <a class="aap-soorten" href="https://www.google.nl/search?q=Mandril&tbm=isch">Mandril</a>-->


<?php

$apen[0] = "Baviaan";
$apen[1] = "Guereza";
$apen[2] = "Langoer";
$apen[3] = "Tamarin";
$apen[4] = "Neusaap";
$apen[5] = "Halfaap";
$apen[6] = "Mandril";
$apen[7] = "Oeakari";
$apen[8] = "Faunaap";
$apen[9] = "Hoelman";
$apen[10] = "Meerkat";
$apen[11] = "Oormaki";
$apen[12] = "Gorilla";
$apen[13] = "Kuifaap";
$apen[14] = "Mensaap";
$apen[15] = "Spinaap";

// write the the 2nd part of the image link, in this cause the PART that comes AFTER 'img/'
//$monkeys = array("Baviaan", "Guereza", "Langoer", "Tamarin", "Neusaap", "Halfaap", "Mandril", "Oeakari", "Faunaap",
//    "Hoelman", "Meerkat", "Oormaki", "Gorilla", "Kuifaap", "Mensaap", "Spinaap");
// write the beginning of the image link, in this case 'img/'

foreach($apen as $space => $aap) {
    echo "<br>"."<a href=https://www.google.nl/search?q=".$aap."&tbm=isch>".$aap."</a>";
}

?>

</div>
</body>
</html>
