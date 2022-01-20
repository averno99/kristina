<script>
    $('#tahunselect').on('change', function() {
        const brg = $('#tahunselect').find(":selected").data('tahun');
        $.ajax({
            type: "GET",
            url: "<?= base_url('total/getPerbandinganPenduduk/') ?>" + brg,
            cache: false,
            dataType: 'json',
            success: function(b) {
                $('#harkat').val(b);
            }
        });
    });

    $('#pelayananselect').on('change', function() {
        const brg = $('#pelayananselect').find(":selected").data('tahun');
        $.ajax({
            type: "GET",
            url: "<?= base_url('total/getPerbandinganPelayanan/') ?>" + brg,
            cache: false,
            dataType: 'json',
            success: function(b) {
                $('#harkatpelayanan').val(b);
            }
        });
    });

    $('#kelahiranselect').on('change', function() {
        const brg = $('#kelahiranselect').find(":selected").data('tahun');
        $.ajax({
            type: "GET",
            url: "<?= base_url('total/getPerbandinganKelahiran/') ?>" + brg,
            cache: false,
            dataType: 'json',
            success: function(b) {
                $('#harkatkelahiran').val(b);
            }
        });
    });

    $('#pusselect').on('change', function() {
        const brg = $('#pusselect').find(":selected").data('tahun');
        $.ajax({
            type: "GET",
            url: "<?= base_url('total/getPerbandinganPus/') ?>" + brg,
            cache: false,
            dataType: 'json',
            success: function(b) {
                $('#harkatpus').val(b);
            }
        });
    });

    $('#akseptorselect').on('change', function() {
        const brg = $('#akseptorselect').find(":selected").data('tahun');
        $.ajax({
            type: "GET",
            url: "<?= base_url('total/getPerbandinganAkseptor/') ?>" + brg,
            cache: false,
            dataType: 'json',
            success: function(b) {
                $('#harkatakseptor').val(b);
            }
        });
    });
</script>