<!-- end page title end breadcrumb -->

<div class="col-12">
    <div class="card m-b-30">
        <div class="card-body mt-5">

            <div class="dropdown-divider mb-3"></div>
            <div class="mx-auto mb-3">
                <form action="<?= base_url('beranda/chart') ?>" method="POST">
                    <div class="col-md-4">
                        <label for="kecamatan_id">Pilih Kecamatan</label>
                        <div class="input-group mt-2">
                            <select class="custom-select" name="kecamatan_id" id="kecamatan_id">
                                <option></option>
                                <?php foreach ($kecamatan as $kec) : ?>
                                    <option value="<?= $kec['id']; ?>"><?= $kec['Nama_Kecamatan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group-append mt-2">
                            <button class="btn btn-success" type="submit" name="pilihChart">Pilih</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="map" style="height: 500px;"></div>
        </div>
    </div>
</div>