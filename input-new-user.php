<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User Baru</title>
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
          <i data-feather="plus" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Tambah User</h3>
           <p class="text-subtitle text-muted">Tambah User </p>
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
            <form class="form form-vertical">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">

                    <div class="form-group">
                      <label>NIP</label>
                      <input type="number" class="form-control" placeholder="NIP..">
                    </div>

                    <div class="form-group">
                      <label>Nama :</label>
                      <input type="text" class="form-control" placeholder="Nama..">
                    </div>

                    <div class="form-group">
                      <label>Jabatan :</label>
                      <input type="text" class="form-control" placeholder="Jabatan..">
                    </div>

                    <div class="form-group">
                      <label>Golongan :</label>
                      <input type="text" class="form-control" placeholder="Golongan..">
                    </div>

                    <div class="form-group">
                      <label>Username :</label>
                      <input type="text" class="form-control" placeholder="Username..">
                    </div>

                  </div>

                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-save mr-1 mb-1">
                      <i data-feather="save"></i>&nbsp;<span>SIMPAN</span>
                    </button>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

</body>
</html>

<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/main.js"></script>
