<!DOCTYPE html>
<html lang="en">
    <x-client.head />
  <body>
    <!-- Spinner Start -->
   <x-client.spinner />
    <!-- Spinner End -->

    <!-- Topbar Start -->
     <x-client.topbar />
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <x-client.navbar />
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <x-client.carousel :slide="$slide"/>
    <!-- Carousel End -->

    <!-- About Start -->
    <x-client.about />
    <!-- About End -->

    <!-- Facts Start -->
    <x-client.facts  :tentang="$tentang" :jp="$jp" :jt="$jt" :jj="$jj"/>
    <!-- Facts End -->

    <!-- Features Start -->
   <x-client.features />
    <!-- Features End -->

    <!-- Service Start -->
   <x-client.service :info="$info"/>
    <!-- Service End -->

    <!-- Appointment Start -->
   <x-client.appointment/>
    <!-- Appointment End -->

    <!-- Team Start -->
    
    <!-- Team End -->

    <!-- Testimonial Start -->
    <x-client.testimonial />
    <!-- Testimonial End -->

    <!-- Footer Start -->
   <x-client.footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <x-client.backtotop />

    <x-client.script />
  </body>
</html>
