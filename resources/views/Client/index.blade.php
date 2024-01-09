<!DOCTYPE html>
<html lang="en">
<x-client.head />

<body>

    <!-- Navbar Start -->
    <x-client.navbar />
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <x-client.carousel :slide="$slide" />
    <!-- Carousel End -->

    <!-- Facts Start -->
    <x-client.facts :tentang="$tentang" :jp="$jp" :jt="$jt" :jj="$jj" />
    <!-- Facts End -->

    <!-- Features Start -->
    <x-client.features />
    <!-- Features End -->

    <!-- Features Start -->
    <x-client.service />
    <!-- Features End -->

    <!-- Ayo Daftar -->
    <x-client.ayodaftar />
    <!-- Ayo Daftar -->

    <!-- FAQ -->
    <x-client.faq />
    <!-- FAQ End -->

    <!-- Testimonial Start -->
    <x-client.testimonial />
    <!-- Testimonial End -->

    <!-- Appointment Start -->
    <x-client.contactus />
    <!-- Appointment End -->

    <!-- Footer Start -->
    <x-client.footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <x-client.backtotop />

    <x-client.script />
</body>

</html>