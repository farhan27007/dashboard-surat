<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/apexcharts/apexcharts.css">
  <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="assets/css/ingrid.css">
  <link rel="stylesheet" href="assets/vendors/choices.js/choices.min.css" />
</head>
<body>
  <div id="app">
    <?php 
    include 'template/sidebar.php';?>
    <div id="main">
      <?php include 'template/top-nav.php'; ?>

      <div class="main-content container-fluid">

        <div class="page-title">
         <h3>Hallo, User</h3>
         <p class="text-subtitle text-muted">Selamat datang di halaman Admin</p>
       </div>

       <div class="row bc-order-card">

        <!-- top-card -->
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card  order-card">
            <div class="card-block">
              <p class="backup-top-data-admin">
                <i data-feather="inbox" class="admin-icon"></i>
                <span class="num-dash float-right">10</span>
              </p>
              <br>
              <p class="m-b-0 jum-num-dash">
               <span class="sub-num-dash">10</span>&nbsp;
               <span>Surat Masuk</span>
             </p>
           </div>
         </div>
       </div>
       <!-- top-card -->

       <!-- top-card -->
       <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card  order-card">
          <div class="card-block">
            <p class="backup-top-data-admin">
              <i data-feather="send" class="admin-icon bg-2"></i>
              <span class="num-dash float-right">12</span>
            </p>
            <br>
            <p class="m-b-0 jum-num-dash">
             <span class="sub-num-dash">12</span>&nbsp;
             <span>Surat Keluar</span>
           </p>
         </div>
       </div>
     </div>
     <!-- top-card -->



     <!-- top-card -->
     <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card  order-card">
        <div class="card-block">
          <p class="backup-top-data-admin">
            <i data-feather="user" class="admin-icon bg-4"></i>
            <span class="num-dash float-right">10</span>
          </p>
          <br>
          <p class="m-b-0 jum-num-dash">
           <span class="sub-num-dash">10</span>&nbsp;
           <span>Jumlah user</span>
         </p>
       </div>
     </div>
   </div>
   <!-- top-card -->

   <!-- chart top user -->
   <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>
          <i data-feather="bar-chart-2"></i>&nbsp;<span>Data surat setiap bulan
            <span class="dif-color ml-1">Januari</span></span>
        </h4>
      </div>
      <div class="card-body">
        <div id="bar"></div>
      </div>
    </div>
  </div>
  <!-- chart top user -->


  <!-- top 10 disposisi dan surat masuk -->
  <div class="row pr-0">

    <!-- top 10 disposisi -->
    <div class="col-lg-6 pr-0">
      <?php include 'template/top-10-disposisi.php'; ?>
    </div>
    <!-- top 10 disposisi -->

    <!-- top 10 surat masuk -->
    <div class="col-lg-6 pr-0">
      <?php include 'template/top-10-surat-masuk.php'; ?>
    </div>
    <!-- top 10 surat masuk -->

  </div>
  <!-- top 10 disposisi dan surat masuk -->

  <!-- tabel status surat -->
  <div class="col-12">
    <?php include 'template/tabel-status-surat.php'; ?>
  </div>
  <!-- tabel status surat -->

</div>
</body>
</html>

<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>
<script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/ui-apexchart.js"></script>
<!-- Include Choices JavaScript -->
<script src="assets/vendors/choices.js/choices.min.js"></script>
<script src="assets/js/main.js"></script>