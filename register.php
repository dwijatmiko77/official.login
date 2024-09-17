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
  <link rel="icon" href="../data_pengunjung/media/logo DPM.png">
  <!--  -->
  <link rel="stylesheet" href="xlogin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- ============PHP SCRIPT============== -->
  <?php
  if (isset($_POST["username"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $query = mysqli_query($koneksi, "INSERT INTO user(nama,username,email,password) values('$nama','$username','$email','$password')");
    if ($query) {
      echo '<script>alert("Registrasi Berhasil. Silahkan Login")</script>';
      header("location:index.php");
    } else {
      echo '<script>alert("Maaf Pendaftaran Gagal.")</script>';

    }
  }
  ?>
  <!-- ============PHP SCRIPT============== -->
   <!-- ========== HTML START ============= -->
   <section class="content">
    <h2>SIGN UP PAGE</h2>
    <form action="#" method="post" class="area">
      <div>
        <div class="body-form">
          <label for="nama" type="text" class="form-label">Nama :</label>
          <input type="text" name="nama" id="nama" required minlength="5" class="form-control">
        </div>
        <div class="body-form">
          <label for="username" type="text" class="form-label">Username :</label>
          <input type="username" name="username" id="username" required class="form-control">
        </div>
        <div class="body-form">
          <label for="email" type="text" class="form-label">email :</label>
          <input type="email" name="email" id="email" required class="form-control">
        </div>
        <div class="body-form">
          <label for="password" type="password" class="form-label">Password :</label>
          <input type="password" name="password" id="password" required class="form-control">
        </div>
        <div class="button">
          <button type="submit" class="btn sign-up btn-success">Sign Up</button>
          <i>Punya Akun? </i><a href="login.php" class="reg">Login</a>
        </div>
      </div>
    </form>
  </section>

  <?php include "layout/footer.html" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>