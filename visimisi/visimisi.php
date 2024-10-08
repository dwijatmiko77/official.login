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
  <title>Visi-Misi Dewan Perwakilan Mahasiswa</title>
  <link rel="icon" href="../asset/logo DPM.png" />
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- ANIMASI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="visimisi.css" />

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
      <li><a class="active" href="../visimisi/visimisi.php">VisiMisi</a></li>
      <li><a href="../about/about.php">About</a></li>
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
  <main>
    <h1 class="animate__animated animate__fadeInUp">
      <span>VISI & MISI</span> <br />
      DEWAN PERWAKILAN MAHASISWA <br />
      <span>UNIVERSITAS WIDYA HUSADA SEMARANG</span>
    </h1>
    <br />
    <h4 class="animate__animated animate__fadeInDown">Apa itu DPM?</h4>
    <p class="animate__animated animate__fadeInDown">
      DPM singkatan dari Dewan Perwakilan Mahasiswa DPM
      adalah Organisasi Mahasiswa di bidang legislatif tertinggi di
      Universitas Wisya Husada Semarang. DPM tertulis didalam buku pedoman
      organisasi kemahasiswaan UWHS, BAB II tentang Organisasi Kemahasiswaan.
    </p>
    <br />
    <h4 class="animate__animated animate__fadeInDown">VISI :</h4>
    <p class="animate__animated animate__fadeInDown">
      Menjadikan DPM Universitas Widya Husada Semarang Sebagai Organisasi
      Legeslatif Profesional Dengan Landasan Kekeluargaan.
    </p>
    <br />
    <h4 class="animate__animated animate__fadeInDown">MISI :</h4>
    <ol class="misi animate__animated animate__fadeInDown">
      <li>Mengoptimalkan peran DPM sebagai perantara dalam menyampaikan aspirasi
        Mahasiswa.</li>
      <li>Memaksimalkan kualitas pelayanan dalam controlling, budgeting,
        dan legislating tingkat fakultas.</li>
      <li>Menjalin kerja sama, hubungan yang
        harmonis, antar sesama Ormawa.</li>
    </ol>
  </main>
  <!-- CONTEN END -->
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