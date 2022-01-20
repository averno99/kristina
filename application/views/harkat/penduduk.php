<div>
    <form action="" method="GET">
        <select name="kecamatan" id="kecamatanselect">
            <?php foreach ($kecamatan as $kec) : ?>
                <option value="<?= $kec['id']; ?>"><?= $kec['Nama_Kecamatan']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<div>
    <select name="tahun" id="tahunselect">
        <?php foreach ($tahun as $thn) : ?>
            <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div>
    <input type="text" id="harkat" placeholder="Angka Harkat">
</div>

<div>
    <select name="pelayanan" id="pelayananselect">
        <?php foreach ($pelayanan as $thn) : ?>
            <option value="<?= $thn['tahun']; ?>" data-tahun="<?= $thn['tahun']; ?>"><?= $thn['tahun']; ?></option>
        <?php endforeach; ?>
    </select>
</div>
<div>
    <input type="text" id="harkatpelayanan" placeholder="Angka Harkat">
</div>