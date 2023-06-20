<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
 
    <title>LOGIN</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">LOGIN</p>
            <div class="input-group">
                <p>Username<span>*</span></p>
                <input type="text" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
            <p>Password<span>*</span></p>
                <input type="password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <br>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
                <br>
            </div>
            <center><p class="login-register-text">Anda belum memiliki akun? <a href="register.php">Klik disini</a></p></center>
        </form>
    </div>
</body>
</html>