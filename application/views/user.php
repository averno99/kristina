<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <section class="content">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No_hp</th>
                        <th>Level_user</th>
                        <th>Gambar</th>
                        <th colspan="3">Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    foreach ($data_user as $us) :
                    ?>
                        <tr>
                            <td> <?php echo $no++ ?></td>
                            <td><?= $us['username']; ?></td>
                            <td><?= $us['password']; ?></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['alamat']; ?></td>
                            <td><?= $us['no_Hp']; ?></td>
                            <td><?= $us['level_user']; ?></td>
                            <td><?= $us['gambar']; ?></td>

                            <td>
                                <a href="" class="btn btn-success btn-sm fa fa-eye"></a>
                                <a href="" class="btn btn-danger btn-sm fa fa-trash"></a>
                                <a href="" class="btn btn-primary btn-sm fa fa-edit"></a>


                            </td>


                        </tr>
                    <?php endforeach ?>
                </table>


            </section>

            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Form Input Data User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo base_url() . 'data_user/tambah_aksi' ?>">

                                <div class="from-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>

                                <div class="from-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                                <div class="from-group">
                                    <label>No_Hp</label>
                                    <input type="text" name="no_Hp" class="form-control">
                                </div>
                                <div class="from-group">
                                    <label>Level User</label>
                                    <input type="text" name="level_user" class="form-control">
                                </div>
                                <div class="from-group">
                                    <label>Gambar</label>
                                    <input type="file" name="no_Hp" class="form-control">
                                </div>
                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->