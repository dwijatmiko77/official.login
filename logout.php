<?php 
session_start();
session_destroy();
// header('location:login.php');
?>
<script type="text/javascript">
  alert('Anda Berhasil Logout');
  location.href = "login.php";
</script>