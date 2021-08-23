#!/usr/bin/php
<?php
    //Concatenar Variavel com STRING
    $number0 = "Zero";
    echo "{$number0}1";
    echo "\n";
?>

<?php
    ////Concatenar Variavel com Variaveis
    $number1 = '1';
    $number0 .= $number1;
    echo $number0;
    echo "\n";
?>

<?php
    //Like a BOSS mode

    $num = 'zero';
    $num .= "1"; // Agora $num contém "zero1"
    echo $num;
    echo "\n";
?>


<?php
    $fistName = "Kevin";
    $lastName = "Gullyt";
    echo $fistName . ' ' . $lastName;
    echo "\n";
?>

<?php
    $name0 = "Rudeos";
    $name1 = "Greirat";
    echo $name0, " ", $name1;
    echo "\n"; 
?>

<?php
    $thing0 = "Sword";
    $thing1 = "Shield";
    $thing0 .= " ". $thing1;
    echo $thing0;
    echo "\n";
?>