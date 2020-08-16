<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit surat masuk</title>
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
          <i data-feather="plus" class="menu-sub-icon"></i>
          <div class="d-block">
           <h3>Tambah surat masuk</h3>
           <p class="text-subtitle text-muted">Tambah surat masuk</p>
         </div>
       </div>

       <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="daftar-surat-masuk.php" class="btn btn-secondary float-right">
              <i  data-feather="arrow-left"></i>&nbsp;Back
            </a>
          </div>
          <div class="card-body">
            <form class="form form-vertical">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                    <div class="form-group">
                      <label>Nomor agenda :</label>
                      <input type="number" class="form-control" placeholder="Nomor agenda..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Jenis surat :</label>
                      <input type="text" class="form-control" placeholder="Jenis surat..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Tahun :</label>
                      <input type="number" class="form-control" placeholder="Tahun..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Nomor surat :</label>
                      <input type="text" class="form-control" placeholder="Nomor surat..">
                    </div>
                  </div>

                  <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label>Tanggal surat</label>
                      <div class="input-group date" data-date-format="dd.mm.yyyy">
                        <input  type="text" class="form-control mb-0" placeholder="Tanggal surat...">
                        <div class="input-group-addon">
                          <p class="date-icon">></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label>Perihal :</label>
                      <input type="text" class="form-control" placeholder="Perihal...">
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Surat dari :</label>
                      <input type="text" class="form-control" placeholder="Surat dari...">
                    </div>
                  </div>


                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Isi disposisi :</label>
                      <input type="text" class="form-control" placeholder="Isi disposisi...">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Diteruskan kepada :</label>
                      <input type="text" class="form-control" placeholder="Diteruskan kepada..">
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Unggah berkas scan surat:</label><br>
                      <input type="file" class="form-control-file loking" placeholder="Unggah scan surat..">
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
<script src="assets/vendors/datepicker/jquery.min.js"></script>
<script src="assets/vendors/datepicker/datepicker.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
  $('.input-group.date').datepicker({format: "dd-mm-yyyy"}); 
</script>
