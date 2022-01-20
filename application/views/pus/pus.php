<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-10 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3">
        <div class="row g-0">
            <section class="content col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <?= $this->session->flashdata('message'); ?>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                        <form action="" method="GET">
                            <div class="col-sm-4 mb-2 ml-auto">
                                <div class="input-group mt-2">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4 mx-auto">
                    <form action="" method="GET">
                        <div class="col-sm-12 ml-auto">
                            <div class="input-group mt-2">
                                <select class="custom-select" name="cari" id="cari">
                                    <option selected disabled>--Pilih Tahun--</option>
                                    <?php for ($y = date('Y'); $y >= 2015; $y--) : ?>
                                        <?php if ($y == $this->input->get('cari')) : ?>
                                            <option value="<?= $y; ?>" selected><?= $y; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $y; ?>"><?= $y; ?></option>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Pilih</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>

    <table id="datata" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Tahun</th>
                <th>Jumlah PUS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pus as $ps) :
            ?>
                <tr>
                    <td> <?php echo $no++ ?></td>

                    <td><?= $ps['nmakec']; ?></td>
                    <td><?= $ps['tahun']; ?></td>
                    <td><?= $ps['jumlah_pus']; ?></td>

                    <td>
                        <a onclick="javascript: return  confirm('Anda Yakin Hapus?')" <?php echo anchor('pus/hapus_data/' . $ps['id_data'], '<div class=" btn btn-danger btn-sm"> <i class="fa fa-trash"> </i> </div>') ?></a>


                            <a href="<?php echo base_url('pus/edit_data/' . $ps['id_data']) ?>" class=" btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    </section>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Form Input Jumlah PUS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url() . 'pus/tambah_aksi' ?>">

                        <div class="from-group">

                            <select name="id" id="kecamatanselect">
                                <?php foreach ($kecamatan as $kec) :

                                    if ($kec['id']) {
                                        $sel = "select";
                                    } else {
                                        $sel = "";
                                    }
                                ?>
                                    <option value="<?= $kec['id']; ?>"><?= $kec['Nama_Kecamatan']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>



                        <div class="from-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control">
                        </div>
                        <div class="from-group">
                            <label>Jumlah PUS</label>
                            <input type="text" name="jumlah_pus" class="form-control">
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