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
    <title>Home Page Dewan Perwakilan Mahasiswa UWHS</title>
    <link rel="icon" href="asset/logo DPM.png" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    
    <!-- ANIMASI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css" />
    
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
      <img src="asset/logo uwhs.png" alt="img" />
      <img class="utama" src="asset/logo DPM.png" alt="img" />
      <h3>Dewan Perwakilan Mahasiswa</h3>
    </div>
    <ul>
      <li><a class="active" href="index.php">Home</a></li>
      <li><a href="visimisi/visimisi.php">VisiMisi</a></li>
      <li><a href="about/about.php">About</a></li>
      <li><a href="contact/contact.php">Contact</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>

    <div class="menu-toggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
  <!-- nav end -->

  <!-- CONTEN -------------------------------------------------------------->
  <div class="background">
    <center>
      <div class="section">
        <h1 class="animate__animated animate__fadeInUp">
          WELCOME TO OFFICIAL WEBSITE OF<br />
          <span>DEWAN PERWAKILAN MAHASISWA</span> <br />
          UNIVERSITAS WIDYA HUSADA SEMARANG
        </h1>
        <h5 class="text animate__animated animate__fadeInDown">
          Dewan Perwakilan Mahasiswa di Universitas Widya Husada Semarang
          mengurus sejumlah kegiatan penting untuk menjalin Organisasi mahasiswa
          yang luar biasa. Kami mendorong keberagaman dan kolaborasi, serta
          fokus pada pengembangan kemampuan mahasiswa.
        </h5>
        <br />
        <h5 class="text animate__animated animate__fadeInDown">
          Dalam lingkup Sekolah Tinggi/Universitas, Organisasi merupakan wadah atau tempat berkumpulnya Mahasiswa dengan
          3 sistematis yaitu terpimpin, terkendali/terencana, serta rasional dalam
          memanfaatkan segala sumber daya yang baik dengan metode, material &
          lingkungan.
          <br />
          <br />
          <h5 class="text animate__animated animate__fadeInDown">
            Bergabunglah dengan Dewan Perwakilan Mahasiswa untuk membantu
            menghadirkan perubahan positif untuk sesama mahasiswa dan
            universitas. Manfaatkan kesempatan ini untuk membangun koneksi,
            mengembangkan keterampilan, dan memberikan kontribusi pada
            peningkatan kualitas pendidikan yang kita semua nikmati.<br />
          </h5>
          <!-- <br />
        <button type="button" class="btn btn-success animate__animated animate__backInUp"><a
          href="https://forms.gle/3CFcoFK58krQhJD29">👉 Link Pendaftaran 👈 </a>
        </button>
        <br> -->
        </h5>
        <br>
        <h5 class="span animate__animated animate__backInUp">Activity</h5><br>
        <video controls loop autoplay>
          <source src="asset/Debat.mp4" type="video/mp4">
        </video>
        <!-- <div class="animate__animated animate__backInDown">
        <img class="feed" src="asset/Announcement - Peserta Lolos Seleksi Dewan Perwakilan Mahasiswa.png" alt="img">
      </div> -->
        <hr>
        <h5 class="span">Program Kerja Yang Sedang Berlangsung</h5>
        <br>
        <!-- Struktur Organisasi -->
        <!-- <div class="feed-1 animate__animated animate__backInDown">
        <img src="asset/3 FEED OPEN NEW GEN 2024 .png" alt="img">
      </div> -->
        <div class="proker animate__animated animate__backInDown">
          <img class="struktur-1" src="asset/FEED PEMIRA.png" alt="img">
          <img class="struktur" src="asset/TIMELINE.png" alt="img">
        </div>
        <hr>
        <!-- <span class="line animate__animated animate__backInUp"></span>
      <video controls loop autoplay>
        <source src="asset/Brosur Oprec Dewan Perwakilan Mahasiswa 2024.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video> -->
        <h5 class="span animate__animated animate__backInUp">STRUKTUR ORGANISASI</h5>
        <br>
        <div class="animate__animated animate__backInDown">
          <img class="struktur" src="asset/struktur.png" alt="img">
        </div>
        <!-- Struktur Organisasi -->
        <hr>
        <!-- Carousel-------------------------------------- -->
        <h5 class="span animate__animated animate__backInUp">Dokumentasi</h5>
        <br>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="asset/sosil.JPG" class="w-75" alt="IMG" />
              <div class="carousel-caption">
                <p>SOSIALISASI ANGGARAN DANA</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/ldo.jpg" class="d-block w-75" alt="IMG" />
              <div class="carousel-caption">
                <p>LATIHAN DASAR ORGANISASI</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/kelegis.jpg" class="d-block w-75" alt="IMG" />
              <div class="carousel-caption">
                <p>KELAS LEGISLATIF</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/dister.jpg" class="d-block w-75" alt="IMG" />
              <div class="carousel-caption">
                <p>DISKUSI TERBUKA</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/3x4 Brosur Oprec Dewan Perwakilan Mahasiswa 2024.png" class="d-block w-75" alt="IMG" />
              <div class="carousel-caption">
                <p>OPEN RECRUITMENT</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="asset/Pemira.JPG" class="d-block w-75" alt="IMG" />
              <di75 class="carousel-caption">
                <p>PEMILU RAYA</p>
              </di75 </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- -------------------------------------------------- -->

          <!-- END CAROUSEL -->
          <br />
          <hr>
          <br />
          <h5 class="span animate__animated animate__backInUp">Berikut adalah Program Kerja Kami :</h5>
          <br />

          <!-- CARD SECTION START -->
          <!-- CARD 1 -->
          <div class="card-group">
            <div class="card animate__animated animate__fadeInRight">
              <p style="margin-top: 1rem">Proker 1</p>
              <img src="asset/sosil.JPG" class="card-img-top" alt="FOTO" />
              <div class="card-body">
                <h4 class="card-title">SOSIALISASI ANGGARAN DANA</h4>
                <p class="card-text">
                  Sosialisasi Anggaran Dana adalah sebuah program kerja dari Dewan
                  Perwakilan Mahasiswa Universitas Widya Husada Semarang yang
                  dimaksudkan untuk menjadi narahubung kemahasiswaan dengan
                  organisasi mahasiswa Universitas Widya Husada Semarang.
                </p>
              </div>
            </div>
            <!-- CARD 2 -->
            <div class="card animate__animated animate__fadeInRight">
              <p style="margin-top: 1rem">Proker 2</p>
              <img src="asset/ldo.jpg" class="card-img-top" alt="FOTO" />
              <div class="card-body">
                <h4 class="card-title">LATIHAN DASAR ORGANISASI</h4>
                <p class="card-text">
                  Latihan Dasar Organisasi (LDO) merupakan program kerja eksternal
                  yang bertujuan untuk mendidik anggota organisasi tentang
                  keorganisasian, kepemimpinan, manajemen waktu dan pemecahan
                  masalah.
                </p>
              </div>
            </div>
          </div>
          <br>
          <!-- CARD 3 -->
          <div class="card-group">
            <div class="card animate__animated animate__fadeInDown">
              <p style="margin-top: 1rem">Proker 3</p>
              <img src="asset/kelegis.jpg" class="card-img-top" alt="FOTO" />
              <div class="card-body">
                <h4 class="card-title">KELAS LEGISLATIF</h4>
                <p class="card-text">
                  Kelas Legislatif adalah sebuah program kerja dari Dewan
                  Perwakilan Mahasiswa Universitas Widya Husada Semarang yang
                  dimaksudkan untuk memberikan pelatihan mengenai Siomas, Alur
                  Proposal, Proposal, Lpj Kegiatan, Lpj Keuangan dan Lpj tahunan.
                </p>
              </div>
            </div>
            <!-- CARD 4 -->
            <div class="card animate__animated animate__fadeInDown">
              <p style="margin-top: 1rem">Proker 4</p>
              <img src="asset/dister.jpg" class="card-img-top" alt="FOTO" />
              <div class="card-body">
                <h4 class="card-title">DIKUSI TERBUKA</h4>
                <p class="card-text">
                  Diskusi Terbuka 2023/2024 adalah sebuah program kerja dari Dewan
                  Perwakilan Mahasiswa Universitas Widya Husada Semarang yang
                  dimaksudkan untuk menyalurkan atau memberikan wadah dalam
                  peyampaian aspirasi, keluhan, masukan, atau kritikan kepada
                  seluruh mahasiswa Universita Widya Husada Semarang.Acara akan
                  dilakukan secara offline diruang kelas kampus.
                </p>
              </div>
            </div>
          </div>
          <!-- CARD 5 -->
          <div class="card-group">
            <div class="card animate__animated animate__fadeInLeft">
              <p style="margin-top: 1rem">Proker 5</p>
              <img src="asset/3x4 Brosur Oprec Dewan Perwakilan Mahasiswa 2024.png" class="card-img-top" alt="FOTO" />
              <div class="card-body">
                <h4 class="card-title">OPEN RECRUITMENT</h4>
                <p class="card-text">
                  Open Recruitment adalah program kerja untuk merekrut mahasiswa
                  Universitas Widya Husada dan menjadikannya sebagai penerus
                  Organisasi Dewan Perwakilan Mahasiswa.
                </p>
              </div>
            </div>
            <!-- CARD 6 -->
            <div class="card animate__animated animate__fadeInLeft">
              <p style="margin-top: 1rem">Proker 6</p>
              <img src="asset/Pemira.JPG" class="card-img-top" alt="FOTO" />
              <div class="card-body">
                <h4 class="card-title">PEMILU RAYA</h4>
                <p class="card-text">
                  Pemira adalah program kerja wajib sebagai penentuan ketua dan
                  wakil ketua kepengurusan DPM dan BEM yang dimulai dari DEBAT,
                  VOTING, PELANTIKAN, dan selanjutnya DOKUMENTASI.
                </p>
              </div>
            </div>
          </div>
        </div>
    </center>
    <!-- CARD SECTION END -->
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
          <input type="text" class="form-control" name="nama" id="nama" required minlength="5" placeholder="Alexander">
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