<?php
$characters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z", "x", "y", "j", "k", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "!", "?", "@", "*", "#", "=", "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "X", "Y", "J", "K"];
$password = [];

if (isset($_GET["psw"]) && $_GET["psw"] !== "") {
    $psw_length = $_GET["psw"];
    var_dump($psw_length);

    $random_index = [];
    while (count($random_index) < $psw_length) {
        $cur_index = rand(0, count($characters));
        $random_index[] = $cur_index;
    };
    var_dump($random_index);

    foreach ($random_index as $i) {
        $password[] = $characters[$i];
    };
    var_dump($password);
};
?>
