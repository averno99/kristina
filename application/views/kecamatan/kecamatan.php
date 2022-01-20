<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

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
        </div>
        <table id="datata" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kecamatan</th>
                    <th>Geojson</th>
                    <th>Warna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($kecamatan as $kec) :
            ?>
                <tr>
                    <td> <?php echo $no++ ?></td>

                    <td><?= $kec['Kode']; ?></td>
                    <td><?= $kec['Nama_Kecamatan']; ?></td>
                    <td><?= $kec['geojson']; ?></td>
                    <td><?= $kec['warna']; ?></td>

                    <td>
                        <a onclick="javascript: return  confirm('Anda Yakin Hapus?')" <?php echo anchor('kecamatan/hapus_data/' . $kec['id'], '<div class=" btn btn-danger btn-sm"> <i class="fa fa-trash"> </i> </div>') ?></a>

                            <a href="<?php echo base_url('kecamatan/edit_data/' . $kec['id']) ?>" class=" btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

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
                        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Kecamatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php echo form_open_multipart('kecamatan/tambah_aksi'); ?>
                        <!-- <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'kecamatan/tambah_aksi' ?>"> -->

                        <div class="from-group">
                            <label>Kode</label>
                            <input type="text" name="Kode" class="form-control">
                        </div>

                        <div class="from-group">
                            <label>Nama Kecamatan</label>
                            <input type="text" name="Nama_Kecamatan" class="form-control">
                        </div>
                        <div class="from-group">
                            <label>Geojson</label>
                            <input type="file" name="geojson" class="form-control">
                        </div>
                        <div class="from-group">
                            <label>Warna</label>
                            <input type="text" name="warna" class="form-control">
                        </div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?php echo form_close(); ?>
                        <!-- </form> -->

                    </div>


                </div>

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