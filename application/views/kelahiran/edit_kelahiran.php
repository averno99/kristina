<div class="content-wrapper">
    <section class="content">
        <?php foreach ($kelahiran as $kel) { ?>

            <form action="<?php echo base_url() . 'kelahiran/update'; ?>" method="post">


                <div class="from-group">
                    <?= $this->session->flashdata('message'); ?>
                    <label>Kecamatan</label>
                    <input type="hidden" name="id_data" class="form-control" value="<?php echo $kel->id_data ?>">
                    <input type="text" name="id" class="form-control" value="<?php echo $kel->id ?>">

                </div>
                <div class="from-group">
                    <label>Tahun</label>
                    <input type="text" name="tahun" class="form-control" value="<?php echo $kel->tahun ?>">

                </div>
                <div class="from-group">
                    <label>Jumlah Kelahiaran</label>
                    <input type="text" name="jumlah_kelahiran" class="form-control" value="<?php echo $kel->jumlah_kelahiran ?>">

                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>