  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
            <i data-feather="edit" class="menu-sub-icon"></i>
            <div class="d-block">
             <h3>Edit User</h3>
             <p class="text-subtitle text-muted">Edit User </p>
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

                      <div class="form-group">
                        <label>Role :</label>

                        <div class="accordion" id="accordionExample">

                          <!-- card role untuk dashboard -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingone">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
                                  <span>Dashboard</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapseone" class="collapse show" aria-labelledby="headingone" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat chart data surat</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar 10 top disposisi</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar 10 top kotak masuk</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar status surat</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk dashboard -->

                          <!-- card role untuk surat masuk -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingtwo">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
                                  <span>Surat masuk</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar surat masuk</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengunduh file surat masuk</label> 
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mencetak surat masuk</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menghapus surat masuk</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk surat masuk -->

                          <!-- card role untuk surat keluar --> 
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingthree">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
                                  <span>Surat keluar</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menambah surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengedit surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menghapus surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mencetak surat keluar</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengunduh file surat keluar</label>
                                </div>


                              </div>
                            </div>
                          </div>
                          <!-- card role untuk surat keluar -->

                          <!-- card role untuk disposisi -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingfour">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
                                  <span>Disposisi</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar disposisi</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengunduh file surat yang ada pada halaman disposisi</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk disposisi -->

                          <!-- card role untuk user -->
                          <div class="card card-role-user mb-4">
                            <div class="card-header" id="headingfive">
                              <p class="mb-0">
                                <a class="w-100 dropdown-role-user" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                  <span>User</span>
                                  <i data-feather="chevron-down" class="float-right mt-1"></i>
                                </a>
                              </p>
                            </div>

                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                              <div class="card-body pt-1">

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat daftar user</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat melihat detail user</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat mengedit data user</label>
                                </div>

                                <div class="form-check">
                                  <input type="checkbox" class="form-check-input form-check-success form-check-glow">
                                  <label class="form-check-label mt-0 label-role-user">Dapat menghapus data user</label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- card role untuk disposisi -->

                        </div>
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
  </body>
  </html>

  <script src="assets/js/feather-icons/feather.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/main.js"></script>