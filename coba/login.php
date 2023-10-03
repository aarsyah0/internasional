<?php
require("koneksi.php");
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail ";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $userVal = $row['user_email'];
            $passVal = $row['user_password'];
            $userName = $row['user_fullname'];
            $level = $row['id_level'];

            if($userVal==$email && $passVal==$pass){
                header("Location: home.php");
                exit(); // Make sure to exit after header redirection
            } else {
                $error = 'User atau password salah';
                header("Location: login.php?error=$error");
                exit(); // Exit after header redirection
            }
        }

        // If the loop completes without redirection, it means the user was not found
        $error = 'User tidak ditemukan!!';
        header("Location: login.php?error=$error");
        exit();
    
    } else {
        $error = 'Data tidak boleh kosong';
        echo $error;
    }
}
?>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form action="" method="post">
        <p>Email: <input type="text" name="txt_email"></p>
        <p>Password: <input type="password" name="txt_pass"></p>
        <button type="submit" name="submit">Sign In</button>
    </form>
    <p><a href="register.php">Register</a></p>
</body>
</html>
