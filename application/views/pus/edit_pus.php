<div class="content-wrapper">
    <section class="content">
        <?php foreach ($pus as $ps) { ?>
            <form action="<?php echo base_url() . 'pus/update'; ?>" method="post">


                <div class="from-group">
                    <?= $this->session->flashdata('message'); ?>
                    <label>Kecamatan</label>
                    <input type="hidden" name="id_data" class="form-control" value="<?php echo $ps->id_data ?>">
                    <input type="text" name="id" class="form-control" value="<?php echo $ps->id ?>">

                </div>
                <div class="from-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $ps->tahun ?>">

                </div>
                <div class="from-group">
                    <label>Jumlah PUS</label>
                    <input type="text" name="jumlah_pus" class="form-control" value="<?php echo $ps->jumlah_pus ?>">

                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>