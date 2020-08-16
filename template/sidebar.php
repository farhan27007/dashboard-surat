       <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active" id="style-1">
            <div class="sidebar-header">
                <img src="assets/images/avatar/avatar-user.svg" alt="" srcset="">
                <div class="backup-user-info">
                    <p class="name-user">User</p>
                    <div class="user-status">
                        <span class="circle"></span>&nbsp;
                        <span class="user-level">Administrator</span>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">

                    <li class='sidebar-title'>Main Menu</li>

                    <li class="sidebar-item">
                        <a href="admin.php" class='sidebar-link'>
                            <i data-feather="home" width="20"></i> 
                            <span>Dashboard</span>
                        </a>

                    </li>


                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="mail" width="20"></i> 
                            <span>Surat masuk</span>
                        </a>
                        <ul class="submenu ">

                            <li>
                                <a href="daftar-surat-masuk.php">Daftar surat masuk</a>
                            </li>
                            <li>
                                <a href="input-surat-masuk.php">Tambah surat masuk</a>
                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="inbox" width="20"></i> 
                            <span>Surat keluar</span>
                        </a>
                        <ul class="submenu ">

                            <li>
                                <a href="daftar-surat-keluar.php">Daftar surat keluar</a>
                            </li>
                            <li>
                                <a href="input-surat-keluar.php">Tambah surat keluar</a>
                            </li>

                        </ul>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="users" width="20"></i> 
                            <span>Pengaturan User</span>
                        </a>
                        <ul class="submenu ">

                            <li>
                                <a href="list-user.php">Daftar User</a>
                            </li>
                            <li>
                                <a href="input-new-user.php">Tambah User</a>
                            </li>

                        </ul>
                    </li>
                    
                    <li class="sidebar-item">
                        <a href="profile-saya.php" class='sidebar-link'>
                            <i data-feather="user" width="20"></i> 
                            <span>Profile Saya</span>
                        </a>

                    </li>

                    <li class="sidebar-item">
                        <a href="" data-toggle="modal" data-target="#border-less-logout" class='sidebar-link'>
                            <i data-feather="log-out" width="20"></i> 
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>

            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>


    <!-- modal untuk logout -->

    <div class="modal fade text-left modal-borderless" id="border-less-logout" tabindex="-1" role="dialog"
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
                    <img src="assets/images/avatar/logout-ilustration.svg" class="img-fluid img-delete" alt="">
                </p>
                <p class="text-center sure-txt">Apakah anda yakin ingin keluar ?</p>
                <p class="text-center">
                    <a href="" class="btn btn-primary">Ya, Yakin</a>&nbsp;
                    <a href="" class="btn btn-danger" data-dismiss="modal">Batal</a>
                </p>
            </div>
        </div>
    </div>
</div>

    <!-- modal untuk logout -->