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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                        <form action="" method="GET">
                            <div class="col-sm-4 mb-2 ml-auto">
                                <div class="input-group mt-2">
                                    <select class="custom-select" name="tahun" id="tahun">
                                        <option selected disabled>--Pilih Tahun--</option>
                                        <?php for ($y = date('Y'); $y >= 2000; $y--) : ?>
                                            <?php if ($y == $this->input->get('tahun')) : ?>
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
                    <th>Tahun</th>
                    <th>Kecamatan</th>
                    <th>Harkat penduduk</th>
                    <th>Bobot Penduduk</th>
                    <th>Hasil Penduduk</th>
                    <th>Harkat Pus</th>
                    <th>Bobot Pus</th>
                    <th>Hasil Pus</th>
                    <th>Harkat Akseptor</th>
                    <th>Bobot Akseptor</th>
                    <th>Hasil Akseptor</th>
                    <th>Harkat Pelayanan</th>
                    <th>Bobot Pelayanan</th>
                    <th>Hasil Akseptor</th>
                    <th>Harkat Kelahiran</th>
                    <th>Bobot Kelahiran</th>
                    <th>Hasil Kelahiran</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($total as $tl) :
                    $bbtpend = 2;
                    $bbtpus = 2;
                    $bbtaks = 3;
                    $bbtpel = 1;
                    $bbtkel = 2;
                    $hasilpend = $tl['harkat_penduduk'] * $bbtpend;
                    $hasilpus = $tl['harkat_pus'] * $bbtpus;
                    $hasilaks = $tl['harkat_akseptor'] * $bbtaks;
                    $hasilpel = $tl['harkat_pelayanan'] * $bbtpel;
                    $hasilkel = $tl['harkat_kelahiran'] * $bbtkel;
                    $hasilttl = $hasilpend + $hasilpus + $hasilaks + $hasilpel + $hasilkel;

                ?>
                    <tr>
                        <td> <?php echo $no++ ?></td>
                        <td><?= $tl['tahun']; ?></td>
                        <td><?= $tl['nmakec']; ?></td>
                        <td><?= $tl['harkat_penduduk']; ?></td>
                        <td><?= $bbtpend; ?></td>
                        <td><?= $hasilpend; ?></td>
                        <td><?= $tl['harkat_pus']; ?></td>
                        <td><?= $bbtpus; ?></td>
                        <td><?= $hasilpus; ?></td>
                        <td><?= $tl['harkat_akseptor']; ?></td>
                        <td><?= $bbtaks ?></td>
                        <td><?= $hasilaks; ?></td>
                        <td><?= $tl['harkat_pelayanan']; ?></td>
                        <td><?= $bbtpel ?></td>
                        <td><?= $hasilpel; ?></td>
                        <td><?= $tl['harkat_kelahiran']; ?></td>
                        <td><?= $bbtkel ?></td>
                        <td><?= $hasilkel; ?></td>
                        <td><?= $hasilttl; ?></td>


                        </td>
                        <td onclick="javascript: return  confirm('Anda Yakin Hapus?') "><?php echo anchor('total/hapus_data/' . $tl['id'], '<div class=" btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>

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
                        <h4 class="modal-title" id="tambahModalLabel">Form Input Perhitungan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="" method="GET">
                            <select name="kecamatansel" id="kecamatanselect">
                                <?php foreach ($kecamatan as $kec) : ?>
                                    <option value="<?= $kec['id']; ?>"><?= $kec['Nama_Kecamatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <form method="post" action="<?php echo base_url('total/tambah_aksi'); ?>">

                            <?php $keca = $this->input->get('kecamatansel'); ?>
                            <input type="hidden" name="keca_id" value="<?= $keca; ?>">
                            <div>
                                <select name="tahun" id="tahunselect">
                                    <?php foreach ($tahun as $thn) : ?>
                                        <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label><b>Harkat Penduduk</b></label>
                                <input type="text" id="harkat" name="harkat_penduduk" placeholder="Angka Harkat Penduduk">
                            </div>

                            <div>
                                <select name="pelayanan" id="pelayananselect">
                                    <?php foreach ($pelayanan as $thn) : ?>
                                        <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label><b>Harkat Pelayanan</b></label>
                                <input type="text" id="harkatpelayanan" name="harkat_pelayanan" placeholder="Angka Harkat Pelayanan">
                            </div>

                            <div>
                                <select name="pus" id="pusselect">
                                    <?php foreach ($pus as $thn) : ?>
                                        <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label><b>Harkat Pus</b></label>
                                <input type="text" id="harkatpus" name="harkat_pus" placeholder="Angka Harkat Pus">
                            </div>

                            <div>
                                <select name="akseptor" id="akseptorselect">
                                    <?php foreach ($akseptor as $thn) : ?>
                                        <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label><b>Harkat Akseptor</b></label>
                                <input type="text" id="harkatakseptor" name="harkat_akseptor" placeholder="Angka Harkat Akseptor">
                            </div>

                            <div>
                                <select name="kelahiran" id="kelahiranselect">
                                    <?php foreach ($kelahiran as $thn) : ?>
                                        <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label><b>Harkat Kelahiran</b></label>
                                <input type="text" id="harkatkelahiran" name="harkat_kelahiran" placeholder="Angka Harkat Kelahiran">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

</div>