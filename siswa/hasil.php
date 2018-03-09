<?php
    $user = $_GET['user'];
    $pass = $_GET['pass'];
    if (($user=="user")&&($pass=="user"))
        printf ("Selamat $user, Anda Berhasil Masuk.");
    else
        printf ("Username atau Password Anda Salah.");
?>