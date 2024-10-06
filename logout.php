<?php 
session_start();
session_destroy();
// header('location:login.php');
?>
<script type="text/javascript">
  alert('Yaaah...Kamu Udah Logout Nih, Lain Waktu Mampir Lagi Ya... Semoga Harimu Menyenangkan...😘');
  location.href = "login.php";
</script>