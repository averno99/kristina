<script>
    <?php
    foreach ($total as $tl) {
        $bbtpend = 2;
        $bbtpus = 2;
        $bbtaks = 3;
        $bbtpel = 1;
        $bbtkel = 2;
        $hasilpend = $tl['harkat_penduduk'] * $bbtpend;
        $hasilpus = $tl['harkat_pus'] * $bbtpus;
        $hasilaks = $tl['harkat_akseptor'] * $bbtaks;
        $hasilpel = $tl['harkat_pelayanan'] * $bbtpel;
        $hasilkel = $tl['harkat_kelahiran'] * $bbtkel;
        $hasilttl = $hasilpend + $hasilpus + $hasilaks + $hasilpel + $hasilkel;

        $data[$tl['Nama_Kecamatan']] = number_format($hasilttl);
    }
    ?>
    var PERHITUNGAN = <?= json_encode($data) ?>;

    <?php
    foreach ($persentase as $pers) {
        $maks = 30;
        $rata = $pers['total_semua'] / $pers['pembagi'];
        $hasil = ($rata / $maks) * 100;

        $dataa[$pers['nmakec']] = number_format($hasil, 2);
    }
    ?>
    var PERSEN = <?= json_encode($dataa) ?>;

    var mymap = L.map('map').setView([1.3523149, 109.2868825], 10);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);



    // Menampilkan informasi pada peta
    var info = L.control();

    info.onAdd = function(mymap) {
        this._div = L.DomUtil.create('div', 'info');
        this.update();
        return this._div;
    };

    info.update = function(props) {
        this._div.innerHTML = '<h4>Perhitungan</h4>' + (props ?
            '<b>' + props.KECAMATAN + '</b><br /> Total' + PERHITUNGAN[props.KECAMATAN] :
            'Arahkan kursor untuk melihat');
    };

    info.addTo(mymap);


    <?php foreach ($kecamatan as $kec) : ?>
        var myStyle<?= $kec['id'] ?> = {
            "color": "<?= $kec['warna'] ?>",
            "weight": 1,
            "opacity": 0.5
        };
    <?php endforeach; ?>




    function popUp(f, l) {
        var html = '';
        if (f.properties) {
            html += `<table>`;
            html += `<tr>`;
            html += `</tr>`;
            html += `<tr>`;
            html += `<td>Kecamatan</td>`;
            html += `<td>:</td>`;
            html += `<td>` + f.properties['KECAMATAN'] + `</td>`;
            html += `</tr>`;
            html += `<td>Total</td>`;
            html += `<td>:</td>`;
            html += `<td>` + PERHITUNGAN[f.properties.KECAMATAN] + `</td>`;
            html += `</tr>`;
            html += `</tr>`;
            html += `<td>Persentase</td>`;
            html += `<td>:</td>`;
            html += `<td>` + PERSEN[f.properties.KECAMATAN] + `% </td>`;
            html += `</tr>`;
            html += `</table>`;
            l.bindPopup(html);

        }
    }

    <?php foreach ($kecamatan as $kec) : ?>
        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/GeoJson/<?= $kec['geojson'] ?>"], {
            onEachFeature: popUp,
            style: myStyle<?= $kec['id'] ?>
        }).addTo(mymap);


    <?php endforeach; ?>



    // var dataKec = document.getElementById('dataKecamatan');
    // dataKec.on('click', function() {
    //     console.log('ok');
    // });
</script>