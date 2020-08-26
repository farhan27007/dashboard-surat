<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Disposisi</title>
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
          <i data-feather="archive" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Disposisi</h3>
           <p class="text-subtitle text-muted">Daftar disposisi</p>
         </div>
       </div>


       <!-- daftar disposisi -->
       <div class="col-lg-12">

        <section class="section">
          <div class="card">
            <div class="card-body">

              <table class='table table-striped mt-2' id="table1">
                <thead>
                  <tr>
                    <th>Scan surat</th>
                    <th>Tujuan surat</th>
                    <th>Deskripsi disposisi</th>
                    <th>Status surat</th>
                  </tr>
                </thead>
                <tbody>

                  <!-- looping -->

                  <tr>
                    <td><a href="#">EKD Permohonan Data PNS</a></td>                     
                    <td>User 1</td>
                    <td>Lorem ipsum dolor sit amet..</td>     
                    <td><div class="alert alert-primary">Terkirim</div></td>  
                  </tr>                     

                  <!-- looping -->

                  <!-- looping -->

                  <tr>
                    <td><a href="#">EKD Permohonan Data PNS</a></td>                     
                    <td>User 1</td>
                    <td>Lorem ipsum dolor sit amet..</td>     
                    <td><div class="alert alert-success">Dibaca</div></td>  
                  </tr>                     

                  <!-- looping -->

                </tbody>
              </table>
            </div>
          </div>
        </section>
        
      </div>
      <!-- daftar disposisi -->
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
