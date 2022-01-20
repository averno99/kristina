<div class="content-wrapper">
    <section class="content">
        <?php foreach ($pelayanan as $pl) { ?>
            <form action="<?php echo base_url() . 'pelayanan/update'; ?>" method="post">


                <div class="from-group">
                    <?= $this->session->flashdata('message'); ?>
                    <label>Kecamatan</label>
                    <input type="hidden" name="id_data" class="form-control" value="<?php echo $pl->id_data ?>">
                    <input type="text" name="id" class="form-control" value="<?php echo $pl->id ?>">

                </div>
                <div class="from-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $pl->tahun ?>">

                </div>
                <div class="from-group">
                    <label>Jumlah Pelayanan</label>
                    <input type="text" name="jumlah_pelayanan" class="form-control" value="<?php echo $pl->jumlah_pelayanan ?>">

                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>