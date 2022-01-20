 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">

     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>

 <!-- End of Page Wrapper -->
 <div class="copyright text-center my-auto">
     <span>Copyright &copy; Kristina <?= date('Y'); ?></span>
 </div>
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>

             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>


 <script src="<?= base_url(); ?>/assets/leaflet/leaflet.js"></script>
 <script src="http://code.highcharts.com/highcharts.js"></script>
 <script src="<?= base_url(); ?>/assets/leaflet/leaflet.ajax.js"></script>

 <!-- Required datatable js -->
 <script src="<?= base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap4.min.js"></script>
 <!-- Responsive examples -->
 <script src="<?= base_url() ?>assets/datatables/dataTables.responsive.min.js"></script>
 <script src="<?= base_url() ?>assets/datatables/responsive.bootstrap4.min.js"></script>

 <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>




 <!-- Datatables -->
 <script>
     $(document).ready(function() {
         $('#datata').DataTable({
             responsive: false,
             autoWidth: false,
             "language": {
                 "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
                 "sProcessing": "Sedang memproses...",
                 "sLengthMenu": "Tampilkan _MENU_ data",
                 "sZeroRecords": "Tidak ditemukan data yang sesuai",
                 "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                 "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                 "sInfoFiltered": "(disaring dari _MAX_ data keseluruhan)",
                 "sInfoPostFix": "",
                 "sSearchPlaceholder": "Cari...",
                 "sSearch": "Cari:",
                 "sUrl": "",
                 "oPaginate": {
                     "sFirst": "Pertama",
                     "sPrevious": "Sebelumnya",
                     "sNext": "Selanjutnya",
                     "sLast": "Terakhir"
                 }
             }
         });
     });
 </script>
 <!-- End Datables -->

 <?php include 'map.php'; ?>
 <script type="text/javascript">
     $(function() {
         $('#tess').highcharts({
             chart: {
                 plotBackgroundColor: null,
                 plotBorderWidth: null,
                 plotShadow: false
             },
             title: {
                 text: 'Jumlah Penduduk'
             },
             tooltip: {
                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
             },
             plotOptions: {
                 pie: {
                     allowPointSelect: true,
                     cursor: 'pointer',
                     dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                         style: {
                             color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                         }
                     }
                 }
             },
             series: [{
                 type: 'pie',
                 name: 'Jumlah Penduduk',
                 data: [
                     <?php

                        if (count($graph) > 0) {
                            foreach ($graph as $kec) {
                                echo "['" . $kec['tahun'] . "'," . $kec['jpen'] . "],\n";
                            }
                        }
                        ?>
                 ]
             }]
         });
     });
 </script>


 <script type="text/javascript">
     $(function() {
         $('#tess').highcharts({
             chart: {
                 plotBackgroundColor: null,
                 plotBorderWidth: null,
                 plotShadow: false
             },
             title: {
                 text: 'Jumlah Pasangan Usia Subur'
             },
             tooltip: {
                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
             },
             plotOptions: {
                 pie: {
                     allowPointSelect: true,
                     cursor: 'pointer',
                     dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                         style: {
                             color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                         }
                     }
                 }
             },
             series: [{
                 type: 'pie',
                 name: 'Jumlah Pasangan Usia Subur',
                 data: [
                     <?php

                        if (count($graph) > 0) {
                            foreach ($graph as $gp) {
                                echo "['" . $gp['tahun'] . "'," . $gp['ju'] . "],\n";
                            }
                        }
                        ?>
                 ]
             }]
         });
     });
 </script>

 <script type="text/javascript">
     $(function() {
         $('#tess').highcharts({
             chart: {
                 plotBackgroundColor: null,
                 plotBorderWidth: null,
                 plotShadow: false
             },
             title: {
                 text: 'Jumlah Akseptor'
             },
             tooltip: {
                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
             },
             plotOptions: {
                 pie: {
                     allowPointSelect: true,
                     cursor: 'pointer',
                     dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                         style: {
                             color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                         }
                     }
                 }
             },
             series: [{
                 type: 'pie',
                 name: 'Jumlah Akseptor',
                 data: [
                     <?php

                        if (count($graph) > 0) {
                            foreach ($graph as $gp) {
                                echo "['" . $gp['tahun'] . "'," . $gp['ja'] . "],\n";
                            }
                        }
                        ?>
                 ]
             }]
         });
     });
 </script>

 <script type="text/javascript">
     $(function() {
         $('#tess').highcharts({
             chart: {
                 plotBackgroundColor: null,
                 plotBorderWidth: null,
                 plotShadow: false
             },
             title: {
                 text: 'Jumlah Pelayanan KB'
             },
             tooltip: {
                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
             },
             plotOptions: {
                 pie: {
                     allowPointSelect: true,
                     cursor: 'pointer',
                     dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                         style: {
                             color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                         }
                     }
                 }
             },
             series: [{
                 type: 'pie',
                 name: 'Jumlah Pelayanan KB',
                 data: [
                     <?php

                        if (count($graph) > 0) {
                            foreach ($graph as $gp) {
                                echo "['" . $gp['tahun'] . "'," . $gp['jp'] . "],\n";
                            }
                        }
                        ?>
                 ]
             }]
         });
     });
 </script>
 <script type="text/javascript">
     $(function() {
         $('#tess').highcharts({
             chart: {
                 plotBackgroundColor: null,
                 plotBorderWidth: null,
                 plotShadow: false
             },
             title: {
                 text: 'Jumlah Kelahiran'
             },
             tooltip: {
                 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
             },
             plotOptions: {
                 pie: {
                     allowPointSelect: true,
                     cursor: 'pointer',
                     dataLabels: {
                         enabled: true,
                         format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                         style: {
                             color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                         }
                     }
                 }
             },
             series: [{
                 type: 'pie',
                 name: 'Jumlah Kelahiran',
                 data: [
                     <?php

                        if (count($graph) > 0) {
                            foreach ($graph as $gp) {
                                echo "['" . $gp['tahun'] . "'," . $gp['jk'] . "],\n";
                            }
                        }
                        ?>
                 ]
             }]
         });
     });
 </script>
 </body>

 </html>