<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail User</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
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

            <li class="list-group-item d-flex justify-content-between align-items-center no-border mb-2">
              ROLE
            </li>

            <div class="accordion pl-3 pr-3" id="accordionExample">

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

                    <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat chart data surat</span></p>

                    <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat daftar 10 top disposisi</span></p>

                    <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat daftar 10 top kotak masuk</span></p>
                    
                    <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat daftar status surat</span></p>

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

                   <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span> Dapat melihat daftar surat masuk</span></p>

                   <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat mengunduh file surat masuk</span></p>

                   <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat mencetak surat masuk</span></p>

                   <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat menghapus surat masuk</span></p>

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

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat daftar surat keluar</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat menambah surat keluar</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat mengedit surat keluar</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat menghapus surat keluar</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat mencetak surat keluar</span></p>

                  <p class="text-danger mb-3"><i data-feather="x"></i>&nbsp;<span>Dapat mengunduh file surat keluar</span></p>

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

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat daftar disposisi</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat mengunduh file surat yang ada pada halaman disposisi</span></p>

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

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat daftar user</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat melihat detail user</span></p>

                  <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat mengedit data user</span></p>

                   <p class="text-success mb-3"><i data-feather="check"></i>&nbsp;<span>Dapat menghapus data user</span></p>

                </div>
              </div>
            </div>
            <!-- card role untuk disposisi -->

          </div>

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
<script src="assets/js/main.js"></script>


<style>
.no-border {
  border: none !important;
}
</style>