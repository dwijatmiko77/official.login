<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="media/Komisi 2 news miko.png">
  <!--  -->
  <link rel="stylesheet" href="xphp.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- <nav>
    <button><a href="login.php">Login</a></button>
    <button><a href="register.php">Register</a></button>
  </nav> -->

  <hr>
  <h2 style="text-align:center">SIGN UP PAGE USER</h2>
  <?php
  if (isset($_POST["username"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $time = $_POST['time'];

    $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,password,time) values('$nama','$username','$password','$time')");
    if ($query) {
      echo '<script>alert("Selamat Registrasi Berhasil. Silahkan Login")</script>';
      header("location:index.php");
    } else {
      echo '<script>alert("Maaf Pendaftaran Gagal.")</script>';

    }
  }
  ?>
  <form action="#" method="post">
    <table align="center">
      <tr>
        <td colspan="3" align="center">
          SIGN UP USER
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>password</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td>Time</td>
        <td><input type="time-stamp" name="time"></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="submit">Sign Up</button>
          <i>Punya Akun? </i><a href="login.php">Login</a>
        </td>
      </tr>
    </table>

  </form>

  <?php include "layout/footer.html" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>