<?php
session_start();

$nama = $_POST['input1'];

if(empty($nama)) {
    header('Location:test_soal2.php?errnama= * Nama Harus di isi');
} 

if(isset($_POST['input1']) == "" ) {
    echo "Data Kosong";
} else {
    $nama = $_POST['input1'];
    $var = "/^[a-zA-Z]*$/";
    if(!preg_match($var,$nama)){
        echo "Sistem kami menolak untuk inputan berisi angka!";
        //validasi untuk alphabetnya
    }
    //kondisi ketika data yang diinput benar
    else echo "Hallo $nama selamat datang! <br> Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan hallo $nama selamat datang!";
}

?>