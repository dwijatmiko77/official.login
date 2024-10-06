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
  <link rel="icon" href="asset/logo DPM.png">
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
    <!-- ANIMASI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

  <?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5(string: $_POST['password']);

    $query = mysqli_query(mysql: $koneksi, query: "SELECT*FROM user where username='$username' and password='$password'");

    if (mysqli_num_rows(result: $query) > 0) {
      $data = mysqli_fetch_array(result: $query);
      $_SESSION['user'] = $data;
      echo '<script>alert("Hallo...Selamat Datang ' . $data['nama']. ', Anda akan dialihkan ke Halaman Utama Dewan Perwakilan Mahasiswa UWHS..😍");
          location.href="index.php"</script>';
    } else {

      echo '<script>alert("Username/Password tidak sesuai.");</script>';
    }
  }
  ?>
    <main>
        <div class="card mb-2 animate__animated animate__fadeInDown">
          <div class="card-body animate__animated animate__fadeInDown">
              <h2 class="header animate__animated animate__fadeInDown ">LOGIN PAGE</h2>
                <section class="content animate__animated animate__fadeInUp">
                    <form method="post" class="form">
                    <label for="username" class="form-label">Username :</label>
                    <input type="text" name="username" required class="form-control">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" name="password" required class="form-control">
                    <div class="button">
                      <button type="submit" class="btn login btn-success animate__animated animate__fadeInRight">Login</button>
                      <a href="register.php" class="register animate__animated animate__fadeInLeft">Registrasi</a>
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