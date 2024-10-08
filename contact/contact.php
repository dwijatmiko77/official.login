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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us Dewan Perwakilan Mahasiswa</title>
  <link rel="icon" href="../asset/logo DPM.png" />
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- ANIMASI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="contact.css" />

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
  <header>
    <nav class="navigation-bar">
      <div class="logo">
        <img src="../asset/logo uwhs.png" alt="img/">
        <img class="utama" src="../asset/logo DPM.png" alt="img">
        <h3>Dewan Perwakilan Mahasiswa</h3>
      </div>
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../visimisi/visimisi.php">VisiMisi</a></li>
        <li><a href="../about/about.php">About</a></li>
        <li><a class="active" href="../contact/contact.php">Contact</a></li>
        <li><a href="../logout.php">Logout</a></li>
      </ul>

      <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
  </header>
  <!-- nav end -->
  <!-- ========================================================================== -->
  <!-- CONTEN -->
  <div class="background">
    <section>
      <div class="content">
        <h2 class="heading animate__animated animate__fadeInDown">Contact Us</h2>
        <center>
          <h3 class="animate__animated animate__fadeInDown">
            Hubungi kami melalui beberapa kontak berikut :
          </h3>
        </center>
        <div class="container-contact animate__animated animate__fadeInUp">
          <div class="phone-1">
            <i class="fa-solid fa-phone-volume"></i>
            <p>+62 895-7070-07040 (Anisa)</p>
          </div>
          <div class="phone-2">
            <i class="fa-solid fa-phone-volume"></i>
            <p>+62 895-3671-90915 (Adinda)</p>
          </div>
          <div class="email">
            <a href="mailto:dewanperwakilanmahasiswauwhs@gmail.com">
              <i class="fa-solid fa-envelope"></i>
              <p>dewanperwakilanmahasiswauwhs@gmail.com
            </a></p>
          </div>
          <div class="social-links-dpm animate__animated animate__fadeInDownBig">
            <div>
              <a class="ig" href="https://www.instagram.com/dpm.uwhs/">
                <i class="fa-brands fa-instagram"></i></a>
            </div>
            <div>
              <a class="mail" href="mailto:dewanperwakilanmahasiswauwhs@gmail.com">
                <i class="fa-regular fa-envelope"></i></a>
            </div>
            <div>
              <a class="wa" href="https://wa.me/+6289570700704">
                <i class="fa-brands fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <!-- Messege Form -->
      <h6 class="messege animate__animated animate__backInUp">Messeges Form</h6>
      <div class="form-dpm">
        <div class="alert alert-success alert-dismissible fade show my-alert d-none" role="alert">
          <strong>Terima Kasih.</strong> Pesan Anda Sudah Berhasil Kami Terima.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="messege-form animate__animated animate__backInDown mb-3">
          <form name="submit-to-google-sheet">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control" name="nama" id="nama" required minlength="5"
              placeholder="Alexander">
            <label for="prodi" class="form-label">Prodi :</label>
            <input type="text" class="form-control" name="prodi" id="prodi" required placeholder="D3/S1 Example">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" name="email" id="email" required placeholder="nama@example.com">
            <label for="pesan" class="form-label">Pesan :</label>
            <textarea class="form-control" name="pesan" id="pesan" required placeholder="Isi Pesan" rows="3"></textarea>
            <button type="submit" class="btn btn-success btn-kirim">Kirim</button>
            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </div>
      </div>
  </div>
  <!-- Messege Form -->
  </section>
  <!-- CONTEN -->
  <!-- -------------------------------------------------------------------------------------- -->
  <!-- footer -->
  <footer class="footer">
    <center>
      <p><i class="fa-solid fa-laptop-code"></i> &copy;2024/8/22 copyright<br>
        Design & Development by <a class="port" target="_blank" href="https://dwijatmiko77.github.io/my.portfolio/">
          Klik Here</a>
      </p>
    </center>
  </footer>
  </div>
  <!-- footer end-->

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Java Script -->
  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbyNnkpR_V3M_P0EDXi_Zk2NJz_4bSp8KKWhOs-i2xBo6EDaAqupkkmxFZkKaP1TAB2y/exec'
    const form = document.forms['submit-to-google-sheet'];
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', e => {
      e.preventDefault();
      // Ketika tombol submit diKlik
      // Tampilkan tombol loading, hilangkan tombol loading
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => {
          // Tamilkan tombol kirim, hilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          // tampilkan alert
          myAlert.classList.toggle('d-none');
          // reset form
          form.reset();
          console.log('Success!', response);
        })
        .catch(error => console.error('Error!', error.message));
    });
  </script>
</body>

</html>