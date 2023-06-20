<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);  
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE username='$password'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Daftar berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Terjadi kesahalahan!')</script>";
            }
        } else {
            echo "<script>alert('Akun sudah terdaftar!')</script>";
        }
         
    } else {
        echo "<script>alert('Password tidak sesuai!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
 
    <title>DAFTAR</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">DAFTAR</p>
            <div class="input-group">
            <p>Username<span>*</span></p>
                <input type="text" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
            <p>Password<span>*</span></p>
                <input type="password"= name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
            <p>Konfirmasi Password<span>*</span></p>
                <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <br>
            <div class="input-group">
                <button name="submit" class="btn">Daftar</button><br>
            </div>
            <center><p class="login-register-text">Anda sudah memiliki akun? <a href="login.php">Klik disini </a></p></center>
        </form>
    </div>
</body>
</html>