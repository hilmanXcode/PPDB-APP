    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/sheet.js') }}"></script>
    <script src="{{ asset('js/jspdf.umd.min.js') }}"></script>
    <script src="{{ asset('js/jspdf.plugin.autotable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
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

        $(document).ready( function () {

            $('#data_pendaftar').DataTable({
                "bLengthChange": false,
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'btn btn-success',
                        init: function(api, node, config) {
                            $(node).removeClass('dt-button')
                        }
                    }
                ],
                "pageLength": 5
            });
            $('#data_acc').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'btn btn-success',
                        init: function(api, node, config) {
                            $(node).removeClass('dt-button')
                        }
                    }
                ],
                "pageLength": 5
            });
            $('#belum_daful').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'btn btn-success',
                        init: function(api, node, config) {
                            $(node).removeClass('dt-button')
                        }
                    }
                ],
                "pageLength": 5
            });
            $('#sudah_daful').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'excel',
                        className: 'btn btn-success',
                        init: function(api, node, config) {
                            $(node).removeClass('dt-button')
                        }
                    }
                ],
                "pageLength": 5
            });
            $('#data_kategori').DataTable({
                "bLengthChange": false,
                "pageLength": 5
            });

            @if ($page === "kontak_admin")
                $('#data_sekolah').DataTable({
                    "bLengthChange": false,
                    "pageLength": 5
                });
            @endif

        });
    </script>
    <script type="text/javascript">
        $(function() {
            @if ($page === "jurusan")
                @foreach ($data as $info)
                    $(document).on('click', '#hapus_jurusan{{ $info->id ?? '' }}', function(e) {
                    e.preventDefault();
                    let form = $('#hapus_jurusan{{ $info->id ?? '' }}').closest("form");
                    Swal.fire({
                        title: 'Apa kamu yakin ingin menghapus jurusan ini?',
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
                                form.submit();
                            }
                        })
                    });
                @endforeach
            @endif

            @if ($page === "informasi_sekolah")
                @foreach ($data as $info)
                    $(document).on('click', '#hapus_informasi{{ $info->id ?? '' }}', function(e) {
                    e.preventDefault();
                    let form = $('#hapus_informasi{{ $info->id ?? '' }}').closest("form");
                    Swal.fire({
                        title: 'Apa kamu yakin ingin menghapus informasi ini?',
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
                                form.submit();
                            }
                        })
                    });
                @endforeach
            @endif

            @if ($page === "category_manager")
                @foreach ($data as $info)
                    $(document).on('click', '#hapus_kategori{{ $info->id ?? '' }}', function(e) {
                    e.preventDefault();
                    let form = $('#hapus_kategori{{ $info->id ?? '' }}').closest("form");
                    Swal.fire({
                        title: 'Apa kamu yakin ingin menghapus kategori ini?',
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
                                form.submit();
                            }
                        })
                    });
                @endforeach
            @endif

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
