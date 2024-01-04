<!-- General JS Scripts -->

<!-- General JS Scripts -->
<script src="https://technext.github.io/stisla-1/assets/modules/jquery.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/popper.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/tooltip.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/moment.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="https://technext.github.io/stisla-1/assets/modules/jquery.sparkline.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/chart.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/summernote/summernote-bs4.js"></script>
<script src="https://technext.github.io/stisla-1/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="https://technext.github.io/stisla-1/assets/js/page/index.js"></script>

<!-- Template JS File -->
<script src="https://technext.github.io/stisla-1/assets/js/scripts.js"></script>
<script src="https://technext.github.io/stisla-1/assets/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="//cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

<script>
var konten = document.getElementById("konten");
CKEDITOR.replace(konten, {
    language: 'en-gb'
});
var konten2 = document.getElementById("konten2");
CKEDITOR.replace(konten2, {
    language: 'en-gb'
});
CKEDITOR.config.allowedContent = true;
</script>
<script>
$(document).ready(function() {
    $('#data_pendaftar').DataTable();
    $('#data_acc').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
    $('#belum_daful').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });
    $('#sudah_daful').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    });

    $('#data_sekolah').DataTable();


});
</script>

</body>

</html>