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
  <link rel="icon" href="media/Komisi 2 news miko.png">
  <!--  -->
  <link rel="stylesheet" href="xphp.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");

    if (mysqli_num_rows($query) > 0) {
      $data = mysqli_fetch_array($query);
      $_SESSION['user'] = $data;
      echo '<script>alert("Selamat Datang, ' . $data['nama'] . '"); location.href="index.php"</script>';
    } else {

      echo '<script>alert("Username/Password tidak sesuai.");</script>';
    }
  }
  ?>

  <hr>
  <h2>LOGIN PAGE USER</h2>
  <form action="#" method="post">
    <table align="center">
      <tr>
        <td colspan="3" align="center">
          <u>LOGIN USER</u>
        </td>
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
        <td></td>
        <td>
          <button type="submit">login</button>
          <a href="register.php">Registrasi</a>
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