<?php
// Inisisalisai SESSION
session_start();

// Pengecekan apakah ada user yang login, jika Tidak arahkan ke login.php
if (!isset($_SESSION['user'])) {
  header(header: 'location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Dewan Perwakilan Mahasiswa</title>
  <link rel="icon" href="../asset/logo DPM.png" />
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- ANIMASI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="about.css" />

  <!-- ICON -->
  <script src="https://kit.fontawesome.com/863fb503f2.js" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Lemon&family=Moo+Lah+Lah&family=Salsa&family=Satisfy&display=swap"
    rel="stylesheet" />

  <!-- icon -->
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <nav class="navigation-bar">
    <div class="logo">
      <img src="../asset/logo uwhs.png" alt="img" />
      <img class="utama" src="../asset/logo DPM.png" alt="img" />
      <h3>Dewan Perwakilan Mahasiswa</h3>
    </div>
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../visimisi/visimisi.php">VisiMisi</a></li>
      <li><a class="active" href="../about/about.php">About</a></li>
      <li><a href="../contact/contact.php">Contact</a></li>
      <li><a href="../logout.php">Logout</a></li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
  <!-- nav end -->
  <!-- CONTEN -->
  <div class="background">
    <div class="section">
      <h1 class="animate__animated animate__fadeInDown" style="padding-top: 50px">
        <span>WELCOME TO ABOUT PAGE OF</span> <br />
        DEWAN PERWAKILAN MAHASISWA <br />
        <span>UNIVERSITAS WIDYA HUSADA SEMARANG</span>
      </h1>
      <h5 class="animate__animated animate__fadeInUp">Tak kenal maka kenalan dulu yuk dengan kami.</h5>
    </div>
    <div class="container-group animate__animated animate__fadeInUp">
      <img src="../asset/ppt1.png" alt="img" width="100%" />
      <img src="../asset/ppt2.png" alt="img" width="100%" />
      <img src="../asset/ppt3.png" alt="img" width="100%" />
      <img src="../asset/ppt4.png" alt="img" width="100%" />
      <img src="../asset/ppt5.png" alt="img" width="100%" />
      <img src="../asset/ppt6.png" alt="img" width="100%" />
      <img src="../asset/ppt7.png" alt="img" width="100%" />
      <img src="../asset/ppt8.png" alt="img" width="100%" />
      <img src="../asset/ppt9.png" alt="img" width="100%" />
      <img src="../asset/ppt10.png" alt="img" width="100%" />
      <img src="../asset/ppt11.png" alt="img" width="100%" />
      <img src="../asset/ppt12.png" alt="img" width="100%" />
      <img src="../asset/ppt13.png" alt="img" width="100%" />
      <img src="../asset/ppt14.png" alt="img" width="100%" />
      <img src="../asset/ppt15.png" alt="img" width="100%" />
      <img src="../asset/ppt16.png" alt="img" width="100%" />
      <img src="../asset/ppt17.png" alt="img" width="100%" />
      <img src="../asset/ppt18.png" alt="img" width="100%" />
      <br />
      <!-- <span class="border"></span> -->
    </div>
  </div>
  <!-- CONTEN  END -->

  <!-- footer -->
  <!-- -------------------------------------------------------------------------------------- -->
  <footer class="footer">
    <center>
      <p><i class="fa-solid fa-laptop-code"></i> &copy;2024/8/22 copyright<br>
        Design & Development by <a class="port" target="_blank" href="https://dwijatmiko77.github.io/my.portfolio/">
          Klik Here</a>
      </p>
    </center>
  </footer>
  <!-- footer end-->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Java Script -->
  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>