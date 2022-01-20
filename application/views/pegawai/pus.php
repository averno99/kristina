<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-10 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3">
        <div class="row g-0">
            <section class="content col-sm-12">
                <div class="row">

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

    <table id="datata" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Tahun</th>
                <th>Jumlah PUS</th>
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

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    </section>

    <!-- Button trigger modal -->

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->