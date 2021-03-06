<div id="layoutSidenav_content">
            <div class="container-fluid">
                <h1 class="mt-4">Tabel-Pengguna</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= base_url('login')?>">Home</a></li>
                    <li class="breadcrumb-item active">Tabel-Pengguna</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Data
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama </th>
                                        <th>email</th>
                                        <th>No.HP</th>
                                        <th>Tingkatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($pengguna as $row) { 
                                        if ($row->email == "gg@gmail.com") {
                                            continue;
                                        }
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td><?= $row->nama; ?></td>
                                        <td><?= $row->email; ?></td>
                                        <td><?= $row->hp; ?></td>
                                        <td><?= $row->tingkatan; ?></td>
                                        <td>
                                            <a href="<?= base_url('Home/profil/').$row->id;?>" class="btn btn-info">Show</a>
                                            <a href="<?= base_url('Pengguna/delete/').$row->id;?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>