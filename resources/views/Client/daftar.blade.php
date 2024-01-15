<!DOCTYPE html>
<html lang="en">
<x-client.head />

<body>
    <!-- Spinner Start -->
    <x-client.spinner />
    <!-- Spinner End -->

    <x-dcore.alert />
    <!-- Navbar Start -->
    <x-client.navbar />
    <!-- Navbar End -->

    <!-- Service Start -->
    <x-client.daftar :jurusan="$jurusan" :gelombang="$gelombang" :form="$form" :button="$button" />
    <!-- Service End -->

    <!-- Footer Start -->
    <x-client.footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <x-client.backtotop />

    <x-client.script />
</body>

</html>