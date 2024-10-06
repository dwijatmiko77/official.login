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
  <link rel="icon" href="asset/logo DPM.png">
  <!--  -->
  <link rel="stylesheet" href="xlogin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- ANIMASI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
  <!-- ============PHP SCRIPT============== -->
  <?php
  if (isset($_POST["username"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5(string: $_POST['password']);
    $time = $_POST['time'];

    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO user(nama,username,email,password,time) values('$nama','$username','$email','$password','$time')");
    if ($query) {
      echo '<script>alert("Registrasi Berhasil. Silahkan Login")</script>';
      header(header: "location:index.php");
    } else {
      echo '<script>alert("Maaf Pendaftaran Gagal.")</script>';

    }
  }
  ?>
  <!-- ============PHP SCRIPT============== -->
    <main>
        <div class="card mb-2">
          <div class="card-body animate__animated animate__fadeInDown">
            <h2 class="header animate__animated animate__fadeInDown">SIGN UP PAGE</h2>
            <section class="content animate__animated animate__fadeInUp">
              <form method="post">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" name="nama" required class="form-control">
                <label for="username" class="form-label">Username :</label>
                <input type="text" name="username" required class="form-control">
                <label for="email" class="form-label">Email :</label>
                <input type="text" name="email" required class="form-control">
                <label for="password" class="form-label">Password :</label>
                <input type="password" name="password" required class="form-control">
                <label for="time" class="form-label time">Created At :</label>
                <input type="datetime-local" name="time" required class="form-control time">
                <div class="button">
                  <button type="submit" class="btn login btn-success animate__animated animate__fadeInRight">Sign
                    Up</button>
                  <i>Punya Akun? </i><a href="login.php" class="i animate__animated animate__fadeInLeft">Login</a>
                </div>
              </form>
            </section>
          </div>
        </div>
    </main>

  <?php include "layout/footer.html" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>