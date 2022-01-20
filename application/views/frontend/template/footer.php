<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="#" class="logo d-flex align-items-center">
                        <img src="<?= base_url() ?>assets/frontend/img/logobkkbn.jpg" alt="">
                        <span>SIGMPKB-Sambas</span>
                    </a>
                    <p>Sistem Informasi Geografis Pemetaan Perkembangan Program Keluarga Berencana merupakan sebuah sistem untuk melakukan pemetaan program keluarga berencana yang ada dikabupaten sambas yang disajikan dalam bentuk visualisasi peta digital </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
                        <a href="#" class="whatsapp"><i class="bi bi-whatsapp bx bxl-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Link</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Informasi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Pemetaan</a></li>

                    </ul>
                </div>


                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        Jl. Pembangunan, Dalam Kaum, <br>
                        Sambas, Kabupaten Sambas, <br>
                        Kalimantan Barat 79462 <br><br>
                        <strong>Telepon:</strong> (0562) 392680<br>
                        <strong>Email:</strong> bkkbn_sambas@example.com<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            Copyright &copy;2021 <strong><span>Kristina</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/purecounter/purecounter.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/fontawesome/js/all.min.js"></script>
<!-- Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<!-- <script src="<?= base_url() ?>assets/frontend/vendor/leaflet/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script> -->
<script src="<?= base_url() ?>assets/frontend/vendor/leaflet/leaflet.ajax.js"></script>
<!-- Chart JS  -->
<script src="<?= base_url() ?>assets/frontend/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/chartjs/chartjs-plugin-datalabels.min.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/frontend/js/main.js"></script>

<!-- Leaflet -->
<?php if ($this->uri->segment(2) == 'peta') : ?>
    <?php include 'pemetaan/peta.php'; ?>

<?php endif; ?>
<!-- End Leaflet -->

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
            html += `<td>Harkat Total </td>`;
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
</script>

</body>


</html>