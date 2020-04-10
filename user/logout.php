<?php
  session_start();
  session_destroy();
?>
  <script>
    window.alert('Anda Sukses Keluar Dari Aplikasi');
    window.location='../loginsystem'
  </script>
<?php
  die();
?>
