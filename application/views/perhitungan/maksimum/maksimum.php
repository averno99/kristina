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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <table id="datata" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Harkat Maksimum penduduk</th>
                <th>Bobot Penduduk</th>
                <th>Hasil Penduduk</th>
                <th>Harkat Maksimum Pus</th>
                <th>Bobot Pus</th>
                <th>Hasil Pus</th>
                <th>Harkat Maksimum Akseptor</th>
                <th>Bobot Akseptor</th>
                <th>Hasil Akseptor</th>
                <th>Harkat Maksimum Pelayanan</th>
                <th>Bobot Pelayanan</th>
                <th>Hasil Akseptor</th>
                <th>Harkat Maksimum Kelahiran</th>
                <th>Bobot Kelahiran</th>
                <th>Hasil Kelahiran</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($maksimum as $maks) :
                $maks1 = 3;
                $hasilpend = $maks1 * $maks['bobot_penduduk'];
                $hasilpus = $maks1 * $maks['bobot_pus'];
                $hasilaks = $maks1 * $maks['bobot_akseptor'];
                $hasilpel = $maks1 * $maks['bobot_pelayanan'];
                $hasilkel = $maks1 * $maks['bobot_kelahiran'];
                $hasilttl = $hasilpend + $hasilpus + $hasilaks + $hasilpel + $hasilkel;



            ?>
                <tr>
                    <td> <?php echo $no++ ?></td>
                    <td><?= $maks['kecamatan']; ?></td>
                    <td><?= $maks1; ?></td>
                    <td><?= $maks['bobot_penduduk']; ?></td>
                    <td><?= $hasilpend; ?></td>
                    <td><?= $maks1; ?></td>
                    <td><?= $maks['bobot_pus']; ?></td>
                    <td><?= $hasilpus; ?></td>
                    <td><?= $maks1; ?></td>
                    <td><?= $maks['bobot_akseptor']; ?></td>
                    <td><?= $hasilaks; ?></td>
                    <td><?= $maks1; ?></td>
                    <td><?= $maks['bobot_pelayanan']; ?></td>
                    <td><?= $hasilpel; ?></td>
                    <td><?= $maks1; ?></td>
                    <td><?= $maks['bobot_kelahiran']; ?></td>
                    <td><?= $hasilkel; ?></td>
                    <td><?= $hasilttl; ?></td>


                    </td>
                    <td>



                        <a onclick="javascript: return  confirm('Anda Yakin Hapus?')" <?php echo anchor('maksimum/hapus_data/' . $maks['id'], '<div class=" btn btn-danger btn-sm"> <i class="fa fa-trash"> </i> </div>') ?></a>


                            <a href="<?php echo base_url('maksimum/edit_data/' . $maks['id']) ?>" class=" btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

                    </td>
                </tr>

            <?php endforeach ?>
        </tbody>

    </table>


    </section>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="tambahModalLabel">Form Input Perhitungan Maksimum</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo base_url('maksimum/tambah_aksi'); ?>">
                        <div class="from-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control">
                        </div>

                        <div class="from-group">
                            <label>Bobot Penduduk</label>
                            <input type="text" name="bobot_penduduk" class="form-control">
                        </div>


                        <div class="from-group">
                            <label>Bobot Pus</label>
                            <input type="text" name="bobot_pus" class="form-control">
                        </div>


                        <div class="from-group">
                            <label>Bobot Akseptor</label>
                            <input type="text" name="bobot_akseptor" class="form-control">
                        </div>


                        <div class="from-group">
                            <label>Bobot Pelayanan</label>
                            <input type="text" name="bobot_pelayanan" class="form-control">
                        </div>


                        <div class="from-group">
                            <label>Bobot Kelahiran</label>
                            <input type="text" name="bobot_kelahiran" class="form-control">
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