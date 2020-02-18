<?php

/*
$firstname = "Sorin" ;
$lastname = "Eni" ;
$gender = "Muž" ;
$school ="ZŠ Komenského Nymburk" ;
$birthdate ="4.2.2003" ;
$email ="esorin@seznam.cz" ;
$tel ="776 685 572" ; 
$hobbies ="filmy, seriály, hraní her"
*/

$firstname = "Štěpán" ;
$lastname = "Kolarovský" ;
$gender = "Muž";
$school ="Základní škola Velký Osek" ;
$birthdate ="6.3.2004" ;
$email ="stepan.kolarovsky@student.ossp.cz" ;
$tel ="723 610 817" ; 
$hobbies ="Florbal a práce s počítačem"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
</head>
<body>
    
    <h1><?= $firstname;?> <?= $lastname?></h1>
   
    <ul>
    
        <li>Pohlaví: <?= $gender; ?></li>
        <li>Datum narození: <?= $birthdate; ?></li>
        <li>Škola: <?= $school; ?></li> 
        <li>Koníčky: <?= $hobbies; ?></li>
        <li>E-mail: <?= $email; ?></li>
        <li>Tel: <?= $tel; ?></li>
    
    </ul>


</body>
</html>