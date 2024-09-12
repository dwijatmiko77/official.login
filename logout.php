<?php 
session_start();
session_destroy();
// header('location:login.php');
?>
<script type="text/javascript">
  alert('Selamat Anda Berhasil Logout');
  location.href = "login.php";
</script>