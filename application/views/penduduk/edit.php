<div class="content-wrapper">
    <section class="content">
        <?php foreach ($penduduk as $pnd) { ?>
            <form action="<?php echo base_url() . 'penduduk/update'; ?>" method="post">


                <div class="from-group">
                    <?= $this->session->flashdata('message'); ?>
                    <label>Kecamatan</label>
                    <input type="hidden" name="id_data" class="form-control" value="<?php echo $pnd->id_data ?>">
                    <input type="text" name="id" class="form-control" value="<?php echo $pnd->id ?>">

                </div>
                <div class="from-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $pnd->tahun ?>">

                </div>
                <div class="from-group">
                    <label>Jumlah Penduduk</label>
                    <input type="text" name="jumlah_penduduk" class="form-control" value="<?php echo $pnd->jumlah_penduduk ?>">

                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>