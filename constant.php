#!/usr/bin/php
<?php
    define("MY_CONSTANT", "This is the value of the constant");
    echo MY_CONSTANT;
    echo "\n";
?>

<?php
    define("EXEMPLE", "Something that i want to put as a value of this constant");
    echo EXEMPLE;
    define("EXEMPLE", "New value");
    echo EXEMPLE;
    echo "\n";
?>