<?php
    //$host = "localhost"; // ganti dengan host database Anda
    //$username = "root"; // ganti dengan username database Anda
    //$password = ""; // ganti dengan password database Anda
    //$dbname = "nama_database"; // ganti dengan nama database Anda
   
    // Membuat koneksi
    //$conn = new mysqli($host, $username, $password, $dbname);
    // Memeriksa koneksi
    //if ($conn->connect_error) {
    //   die("Koneksi gagal: " . $conn->connect_error);
    //}

    $dbHost = 'localhost';
    $dbName = 'db_webproject'; //ubah dengan nama database Anda
    $dbUsername = 'root';
    $dbPassword = '';

    //$dbPort = port;
    $mysqli = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

?>