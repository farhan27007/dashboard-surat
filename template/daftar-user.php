<section class="section">
    <div class="card">
        <div class="card-header">
            <a href="input-new-user.php" class="btn btn-success float-right">
                <i  data-feather="user-plus"></i>&nbsp;Tambah user
            </a>
        </div>
        <div class="card-body">
            <table class='table table-striped' id="table1">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>JABATAN</th>
                        <th>GOLONGAN</th>
                        <th>USERNAME</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i < 1 ; $i++) { ?>
                        <tr>
                            <td>123</td>
                            <td>adm</td>
                            <td>admin</td>
                            <td>g1</td>
                            <td>@admin</td>
                            <td>
                                <a href="detail-user.php" class="btn btn-secondary  cs-btn">
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="edit-user.php" class="btn btn-primary cs-btn">
                                    <i data-feather="edit-3"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#border-less" class="btn btn-danger cs-btn">
                                    <i data-feather="trash-2"></i>
                                </a>
                            </td>    
                        </tr>                     

                        <!-- superadmin -->
                        <tr>
                            <td>123</td>
                            <td>adm</td>
                            <td>admin</td>
                            <td>g1</td>
                            <td>super admin</td>
                            <td>
                                <a href="detail-user.php" class="btn btn-secondary cs-btn">
                                    <i data-feather="eye"></i>
                                </a>
                                <a href="edit-user.php" class="btn btn-primary cs-btn">
                                    <i data-feather="edit-3"></i>
                                </a>
                            </td>    
                        </tr>       
                        <!-- superadmin -->
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- modal untuk delete data -->

<div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title"></h5>
            <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <div class="modal-body">
            <p class="text-center">
                <img src="assets/images/avatar/delete-ilustration.svg" class="img-fluid img-delete" alt="">
            </p>
            <p class="text-center sure-txt">Apakah anda yakin ingin menghapus data ini ?</p>
            <p class="text-center">
                <a href="" class="btn btn-primary">Hapus</a>&nbsp;
                <a href="" class="btn btn-danger" data-dismiss="modal">Batalkan</a>
            </p>
        </div>
    </div>
</div>

<!-- modal untuk delete data -->