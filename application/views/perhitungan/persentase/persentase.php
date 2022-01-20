<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3">
        <div class="row g-0">
            <section class="content col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
        </div>
        <table id="datata" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>Total</th>
                    <th>Rata-Rata</th>
                    <th>Harkat Maksimum</th>
                    <th>Hasil</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($persentase as $pers) :
                    $maks = 30;
                    $bbtpend = 2;
                    $bbtpus = 2;
                    $bbtaks = 3;
                    $bbtpel = 1;
                    $bbtkel = 2;
                    $hasilpend = $pers['harkat_penduduk'] * $bbtpend;
                    $hasilpus = $pers['harkat_pus'] * $bbtpus;
                    $hasilaks = $pers['harkat_akseptor'] * $bbtaks;
                    $hasilpel = $pers['harkat_pelayanan'] * $bbtpel;
                    $hasilkel = $pers['harkat_kelahiran'] * $bbtkel;
                    $hasilttl = $hasilpend + $hasilpus + $hasilaks + $hasilpel + $hasilkel;
                    $rata = $pers['total_semua'] / $pers['pembagi'];
                    $hasil = ($rata / $maks) * 100;

                ?>

                    <tr>
                        <td> <?php echo $no++ ?></td>
                        <td><?= $pers['nmakec']; ?></td>
                        <td><?= $pers['total_semua'] ?></td>
                        <td><?= $rata; ?></td>

                        <td><?= $maks; ?></td>
                        <td><?= number_format($hasil, 2); ?> %</td>
                        </td>
                        <td onclick="javascript: return  confirm('Anda Yakin Hapus?') "><?php echo anchor('persentase/hapus_data/' . $pers['id'], '<div class=" btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>

                        </td>

                    </tr>

                <?php endforeach ?>
            </tbody>

        </table>
        </section>

        <!-- Button trigger modal -->

    </div>
</div>

</div>