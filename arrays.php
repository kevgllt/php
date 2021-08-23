#!/usr/bin/php
<?php
    // Coloquei o comando quebra de linha dentro da variavel "$s"
    // Mas não estou usando
    $s = "\n";
?>

<?php
    $array = [
        "Fist" => "My fist array", 
        "Second" => "My second array",
        "Linux" => "Fedora 33 Workstation",
        "Microsoft" => "Windows 10"
];
?>

<?php
    echo $array["Linux"];
    echo "\n";
    echo $array["Microsoft"];
    echo "\n";
?>


<?php
    $fruit = [
        "Banana",
        "Maçã",
        "Melão",
        "Uva"
    ];

    echo $fruit[0];
    echo "\n";
    echo $fruit[1];
    echo "\n";
    echo $fruit[2];
    echo "\n";
    echo $fruit[3];
    echo "\n";
?>


<?php
    $fruits = [
        "Potássio" => "Banana",
        "Fósforo" => "Maçã",
        "Cálcio" => "Melão",
        "Ferro" => "Uva"
    ];
    echo $fruits["Cálcio"];
    echo "\n";
?>

<?php
    $fruitz = [
        "Tropical" => array(
            $fruit[0],
            "Açai"
        ),
        "Fósforo" => "Maçã",
        "Cálcio" => "Melão",
        "Ferro" => "Uva"
    ];
    echo $fruitz["Tropical"][0];
    echo "\n";
?>