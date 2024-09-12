<?php
session_start();

if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Website Of Dwi Jatmiko</title>
  <link rel="icon" href="media/Profil miko.png" />
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
  <!-- nav start -->
  <nav class="justify-content-around fixed-top">
    <div class="logo">
      <img src="media/Profil miko.png" alt="This Photo Cannot Be Loaded" />
      <h3>Dwi Jatmiko</h3>
    </div>
    <ul>
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="https://dewanperwakilanmahasiswauwhs.github.io/official.dpm.uwhs/">My Develop</a></li>
      <li><a href="login.php">login</a></li>
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
  <h2 class="user animate__animated animate__backInLeft">Selamat Datang <?php echo $_SESSION['user']['nama'] ?></h2>
  <section class="home animate__animated animate__backInDown">
    <div class="home-img animate__animated animate__backInDown">
      <img src="media/profile.JPG" alt="IMG PROFIL">
    </div>
    <div class="home-content">
      <h1 class="animate__animated animate__backInRight">Hi, It's <span> Miko</span></h1>
      <h3 class="typing-text animate__animated animate__backInLeft">I'm a <span></span></h3>
      <p class="animate__animated animate__backInDown">“Hai, saya Dwi Jatmiko, seorang Web Developer dengan keahlian
        bahasa Pemrograman <span>HTML, CSS, JavaScript, PHP,</span> tapi bukan php dalam kasus percintaan ya,
        serta framework
        seperti <span>bootstrap.</span> Saya memiliki pengalaman dalam membangun situs web responsif dan aplikasi web
        yang
        user-friendly. Saya sangat tertarik untuk berkontribusi pada proyek-proyek yang menantang dan inovatif.”</p>
      <div class="social-icons">
        <a href="https://www.instagram.com/ya_hiiko/"><i
            class="ig animate__animated animate__backInRight fa-brands fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@xyz_presett?is_from_webapp=1&sender_device=pc"><i
            class="tiktok animate__animated animate__backInRight fa-brands fab fa-tiktok"></i></a>
        <a href="https://web.facebook.com/dwiek.jadmicko/"><i
            class="fb animate__animated animate__backInRight fa-brands fa-brands fa-square-facebook"></i></a>
        <a href="https://www.linkedin.com/in/dwi-jatmiko-aa86932ab/"><i
            class="linkd animate__animated animate__backInRight fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/dwijatmiko77"><i
            class="git animate__animated animate__backInRight fa-brands fa-github"></i></a>
      </div>
      <a href="https://wa.me/+6285155454717" class="btn animate__animated animate__backInUp">Here me</a>
    </div>
  </section>
  <!-- SECTION END -->
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