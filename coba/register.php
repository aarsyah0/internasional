<?php
require("koneksi.php");
if (isset($_POST['register'])){
    $userId = $_POST['txt_id'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    // Perbaiki struktur query
    $query = "INSERT INTO user_detail (id,user_email, user_password, user_fullname, id_level) VALUES ('$userId','$userMail', '$userPass', '$userName', 2)";
    $result = mysqli_query($koneksi, $query);
    
    if ($result) {
        header('Location: login.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="register.php" method="post">
    <p>Id: <input type="text" name="txt_id" required></p>
    <p>email: <input type="text" name="txt_email" required></p>
    <p>password:<input type="password" name="txt_pass" required></p>

    <p>nama: <input type="text" name="txt_nama" required></p>
    <button type="submit" name="register">Register</button>
    </form>
    <p><a href="login.php">Login</a></p>
</body>
</html>
