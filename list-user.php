<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar User</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
  <div id="app">
    <?php include 'template/sidebar.php'; ?>
    <div id="main">
      <?php include 'template/top-nav.php'; ?>

      <div class="main-content container-fluid">
        <div class="page-title d-flex">
          <i data-feather="user" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Users</h3>
           <p class="text-subtitle text-muted">List Users</p>
         </div>
       </div>

       <?php include 'template/daftar-user.php'; ?>

     </div>
   </div>
 </div>


</div>
</div>


</body>
</html>
<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>

<script src="assets/js/main.js"></script>
