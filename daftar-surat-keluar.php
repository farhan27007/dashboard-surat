<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Surat keluar</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
</head>
<body>
  <div id="app">
    <?php include 'template/sidebar.php'; ?>
    <div id="main">
      <?php include 'template/top-nav.php'; ?>

      <div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="mail" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Surat keluar</h3>
           <p class="text-subtitle text-muted">Daftar surat keluar</p>
         </div>
       </div>


       <!-- daftar surat keluar -->
       <div class="col-lg-12">
        <?php include 'template/tabel-surat-keluar.php'; ?>
      </div>
       <!-- daftar surat keluar -->


    </div>
  </div>
  <?php include 'template/modal-delete.php'; ?>
</body>
</html>


<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>
<!-- Include Choices JavaScript -->
<script src="assets/vendors/choices.js/choices.min.js"></script>
<script src="assets/js/main.js"></script>
