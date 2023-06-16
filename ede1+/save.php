<?php
require_once(__DIR__ . "db.php");

$input = $_POST['input'];

$saveUser = mysqli_query($conn, "SELECT * FROM users WHERE username='abcxyz''")->fetch_array();
// TÁCH THÀNH 1 ARRAY CÁCH NHAU BỞI DẤU PHẨY
$data_saveUser = explode(';', $saveUser['luutu']);

if (!isset($data_saveUser)) {
    mysqli_query($conn, "INSERT INTO users (luutu) VALUES ($input) WHERE username='abcxyz'");
    echo 'Dùng chức năng 1';
} else {
    $input2 = ';' . $input;
    mysqli_query($conn, "INSERT INTO users (luutu) VALUES ($input2) WHERE username='abcxyz'");
    echo 'Dùng chức năng 2';
}