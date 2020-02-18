<?php
$name = "Sorin Eni" ;
$gender = "Muž" ;
$school ="ZŠ Komenského Nymburk" ;
$birthdate ="4.2.2003" ;
$email ="esorin@seznam.cz" ;
$tel ="776 685 572" ; 
$hobbies ="filmy, seriály, hrani her"
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
    
    <h1><?php echo $name; ?></h1>
    <ul>
        <li>Datum narozeni:</li>
        <?php echo $birthdate; ?>
        <li>Škola:</li>
        <?php echo $school; ?>
        <li>Koníčky:</li>
        <?php echo $hobbies; ?>
        <li>E-mail:</li>
        <?php echo $email; ?>
        <li>Tel:</li>
        <?php echo $tel; ?>
    </ul>


</body>
</html>