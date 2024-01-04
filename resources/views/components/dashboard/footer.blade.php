    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
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

        function exportData(type, idtable) {
            const table = document.getElementById(idtable)
            const fileName = `PPDB-SMK-PGRI-TELAGASARI-${idtable}.xlsx`;
            const wb = XLSX.utils.table_to_book(table)
            XLSX.writeFile(wb, fileName)
        }
    </script>
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#hapus', function(e) {
                e.preventDefault();
                let data = $(this).attr("data-bs-id");
                let link = "http://127.0.0.1:8000/home/sekolah/jurusan/" + data + "/hapus_jurusan";
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showDenyButton: true,
                    confirmButtonText: 'Yes',
                    denyButtonText: 'No',
                    customClass: {
                        actions: 'my-actions',
                        cancelButton: 'order-1 right-gap',
                        confirmButton: 'order-2',
                        denyButton: 'order-3',
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire('Saved!', '', 'success')
                        window.location.href = link;
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                })
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let checkbox1 = document.querySelector('#opt1');
            let checkbox2 = document.querySelector('#opt2');

            checkbox1.addEventListener('change', function() {
                if (checkbox1.checked) {
                    // do this
                    console.log('Checked A');
                } else {
                    // do that
                    console.log('Not checked A');
                }
            });

            checkbox2.addEventListener('change', function() {
                if (checkbox2.checked) {
                    // do this
                    console.log('Checked B');
                } else {
                    // do that
                    console.log('Not checked B');
                }
            });
        });
    </script>
    </body>

    </html>
