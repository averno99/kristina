<div class="content-wrapper">
    <section class="content">
        <?php foreach ($kecamatan as $kec) { ?>
            <form action="<?php echo base_url() . 'kecamatan/update'; ?>" method="post">



                <div class="from-group">
                    <label>Kode</label>
                    <?= $this->session->flashdata('message'); ?>
                    <input type="text" name="Kode" class="form-control" value="<?php echo $kec->Kode ?>">

                </div>
                <div class="from-group">
                    <label>Nama_Kecamatan</label>
                    <input type="text" name="Nama_Kecamatan" class="form-control" value="<?php echo $kec->Nama_Kecamatan ?>">

                </div>
                <div class="from-group">
                    <label>Geojson</label>
                    <input type="file" name="geojson" class="form-control" value="<?php echo $kec->geojson ?>">

                </div>
                <div class="from-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" value="<?php echo $kec->warna ?>">

                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        <?php } ?>

    </section>

</div>