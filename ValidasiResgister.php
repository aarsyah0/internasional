<?php
$username = "user2";
$password = "password123";

if (strlen($username) < 6 || strlen($password) < 8) {
    echo "Username harus memiliki minimal 6 karakter dan password minimal 8 karakter.";
} else {
    echo "Registrasi berhasil!";
}
