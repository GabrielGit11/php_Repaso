<?php

    $name = "Gabriel";

    $isDev=true;

    $age=21;

    $newAge=21+ "1";
$output = "hola";    
$outputAge = match ($age) {
    0, 1, 2 => "Sos un bebe",
    3, 4, 5, 6, 7, 8, 9, 10 => "Sos un niño",
    11, 12, 13, 14, 15, 16, 17, 18 => "Sos un adolescente",
    19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, => "Sos un joven adulto",
    Default => "Sos un joven adulto",
};



define('LOGO_URL','https://imgur.com/Fx6pK6T.png');

const NOMBRE = "Gabriel";

$bestLanguage = ["PHP", "Java", "Python", "C++", "JavaScript"];
$bestLanguage[] = "Inglés";
?>
<h2><?= $outputAge; ?></h2>

<img src="<?= LOGO_URL; ?>" ALT="PHP Logo" width="200">

<h3>
    el mejor lenguaje es <?= $bestLanguage[5] ; ?>
</h3>

<h1>

<?= "Hola ". $name; ?>

</h1>


<style>

:root {
color-scheme: light dark;
}


body {
display: grid;

place-content: center;

}

</style>