    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/sheet.js') }}"></script>
    <script src="{{ asset('js/jspdf.umd.min.js') }}"></script>
    <script src="{{ asset('js/jspdf.plugin.autotable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.jsPDF = window.jspdf.jsPDF;
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });


        @if (session()->has('success') || session()->has('error'))
            Toast.fire({
                icon: "{{ session()->has('success') ? 'success' : 'error' }}",
                title: "{{ session()->has('success') ? session('success') : session('error') }}"
            });    
        @endif

        function exportData(type, idtable){
            const table = document.getElementById(idtable)
            const fileName = `PPDB-SMK-PGRI-TELAGASARI-${idtable}.xlsx`;
            const wb = XLSX.utils.table_to_book(table)
            XLSX.writeFile(wb, fileName)
        }
    </script>
</body>

</html>