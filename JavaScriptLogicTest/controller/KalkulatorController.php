<?php

header('Content-Type: application/json');


if (isset($_POST['inputPertama']) && isset($_POST['inputKedua']) && isset($_POST['option'])) {
    $input = $_POST['input'];

    $inputPertama = $_POST['inputPertama'];
    $inputKedua = $_POST['inputKedua'];
    $option = $_POST['option'];

    if ($option === '+') {
        $hasil = $inputPertama + $inputKedua;
    } elseif ($option === '-') {
        $hasil = $inputPertama - $inputKedua;
    } elseif ($option === '*') {
        $hasil = $inputPertama * $inputKedua;
    } elseif ($option === '/') {
        $hasil = $inputPertama / $inputKedua;
    }
    echo json_encode($hasil);
}
