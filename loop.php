#!/usr/bin/php
<?php
    for ($i = 1; $i <= 10; $i++){
        echo " for Contando $i";
        echo "\n";
    }
?>

<?php
    $i = 1;
    while ($i <= 10){
        echo "while Contando $i";
        echo "\n";
        $i++;
    }
?>

<?php
    $i = 1;
do {
    echo "do while Contando $i";
    echo "\n";
    $i++;
} while ($i < 10);
?>

