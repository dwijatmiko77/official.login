<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../data_pengunjung/media/logo DPM.png">
  <!--  -->
  <link rel="stylesheet" href="xlogin.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Lemon&family=Moo+Lah+Lah&family=Salsa&family=Satisfy&display=swap"
    rel="stylesheet" />

</head>

<body>
  <!-- ================ PHP SCRIPT ================ -->
  <!-- <?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='
        $password'");

    if (mysqli_num_rows($query) > 0) {
      $data = mysqli_fetch_array($query);
      $_SESSION['user'] = $data;
      echo '<script>alert("Selamat Datang, ' . $data['nama'] . '");
          location.href="index.php"</script>';
    } else {

      echo '<script>alert("Username/Password tidak sesuai.");</script>';
    }
  }
  ?> -->
  <!-- ================ PHP SCRIPT ================ -->

  <section class="content">
    <h2>LOGIN PAGE</h2>
    <form method="post" class="area">
      <div class="body-form">
        <label class="form-label">Username :</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="body-form">
        <label class="form-label">Password :</label>
        <input type="password" name="password" class="form-control">
      </div>
      <div class="button">
        <button type="submit" class="btn login btn-success">Login</button>
        <a href="register.php" class="reg">Registrasi</a>
      </div>
    </form>
  </section>

  <?php include "layout/footer.html" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>