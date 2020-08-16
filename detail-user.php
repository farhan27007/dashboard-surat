<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail User</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
  <link rel="stylesheet" href="assets/vendors/datepicker/datepicker.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
  <div id="app">
    <?php include 'template/sidebar.php'; ?>
    <div id="main">
      <?php include 'template/top-nav.php'; ?>

      <div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="eye" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Detail User</h3>
           <p class="text-subtitle text-muted">Detail User </p>
         </div>
       </div>

       <section class="section">
        <div class="card">

         <div class="card-header">
          <a href="list-user.php" class="btn btn-secondary float-right">
            <i  data-feather="arrow-left"></i>&nbsp;Back
          </a>
        </div>

        <div class="card-body">

          <div class="col-lg-12">
            <ul class="list-group list-group-flush">

              <li class="list-group-item d-flex justify-content-between align-items-center">
               NIP
               <span>123</span>
             </li>

             <li class="list-group-item d-flex justify-content-between align-items-center">
              NAMA
              <span>Adm</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              JABATAN
              <span>Admin</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              GOLONGAN
              <span>g1</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
              USERNAME
              <span>@admin</span>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>
</div>
</div>


</body>
</html>

<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/vendors/datepicker/jquery.min.js"></script>
<script src="assets/vendors/datepicker/datepicker.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
  $('.input-group.date').datepicker({format: "dd.mm.yyyy"}); 
</script>