<?php
ob_start(); //start output buffering, to handle headers properly
include "libs/load.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php load_template("_sih_head"); ?>

<body class="bg-dark text-white">
  <?php load_template("_DarkLightMode"); ?>
  <main>
    <?php load_template("_sih_main"); ?>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
<?php ob_end_flush(); //flushes output buffer, handles headers properly
?>