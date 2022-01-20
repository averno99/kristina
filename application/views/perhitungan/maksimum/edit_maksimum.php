<div class="content-wrapper">
    <section class="content">
        <?php foreach ($maksimum as $maks) { ?>
            <form action="<?php echo base_url() . 'maksimum/update'; ?>" method="post">


                <div class="from-group">
                    <?= $this->session->flashdata('message'); ?>
                    <label>Kecamatan</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $maks->id ?>">
                    <input type="text" name="kecamatan" class="form-control" value="<?php echo $maks->kecamatan ?>">

                </div>

                <div class="from-group">
                    <label>Bobot Penduduk</label>
                    <input type="text" name="bobot_penduduk" class="form-control" value="<?php echo $maks->bobot_penduduk ?>">

                </div>


                <div class="from-group">
                    <label>Bobot Pus</label>
                    <input type="text" name="bobot_pus" class="form-control" value="<?php echo $maks->bobot_pus ?>">

                </div>


                <div class="from-group">
                    <label>Bobot Akseptor</label>
                    <input type="text" name="bobot_akseptor" class="form-control" value="<?php echo $maks->bobot_akseptor ?>">

                </div>


                <div class="from-group">
                    <label>Bobot Pelayanan</label>
                    <input type="text" name="bobot_pelayanan" class="form-control" value="<?php echo $maks->bobot_pelayanan ?>">

                </div>


                <div class="from-group">
                    <label>Bobot Kelahiran</label>
                    <input type="text" name="bobot_kelahiran" class="form-control" value="<?php echo $maks->bobot_kelahiran ?>">

                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>