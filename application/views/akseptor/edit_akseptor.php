<div class="content-wrapper">
    <section class="content">
        <?php foreach ($akseptor as $as) { ?>
            <form action="<?php echo base_url() . 'akseptor/update'; ?>" method="post">


                <div class="from-group">
                    <?= $this->session->flashdata('message'); ?>
                    <label>Kecamatan</label>
                    <input type="hidden" name="id_data" class="form-control" value="<?php echo $as->id_data ?>">
                    <input type="text" name="id" class="form-control" value="<?php echo $as->id ?>">

                </div>
                <div class="from-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $as->tahun ?>">

                </div>
                <div class="from-group">
                    <label>Jumlah Akseptor</label>
                    <input type="text" name="jumlah_akseptor" class="form-control" value="<?php echo $as->jumlah_akseptor ?>">
                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>