<?php
// Inisisalisai SESSION
session_start();

// Pengecekan apakah ada user yang login, jika Tidak arahkan ke login.php
if (!isset($_SESSION['user'])) {
  header(header: 'location:login.php');
}

$query = "SELECT * FROM user ORDER BY id;";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <title>Home Page Dewan Perwakilan Mahasiswa</title>
  <link rel="icon" href="asset/logo DPM.png" />
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- ANIMASI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="akun.css" />

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
  <!-- Nav Start ===============================================-->
  <nav class="navigation-bar">
    <div class="logo">
      <img src="asset/logo uwhs.png" alt="img" />
      <img class="utama" src="asset/logo DPM.png" alt="img" />
      <h3>Dewan Perwakilan Mahasiswa</h3>
    </div>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="visimisi/visimisi.php">VisiMisi</a></li>
      <li><a href="about/about.php">About</a></li>
      <li><a href="contact/contact.php">Contact</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false">
          Akun
        </a>
        <ul class="dropdown-menu ">
          <li><a class="dropdown-item" href="#">Profil</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">logout</a></li>
        </ul>
      </li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="pop-up">

    </div>
  </nav>
  <!-- Nav End ==================================================-->
  <main>
      <div class="card text-bg-dark mb-3" style="max-width: 30rem;">
        <div class="card-header"><?php echo $data['nama'] ?></div>
        <div class="card-body">
          <h5 class="card-title">Dark card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
  </main>

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