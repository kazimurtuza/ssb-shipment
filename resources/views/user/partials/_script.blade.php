<!-- Bootstrap bundle JS -->
<script src=" {{asset('assets/')}}/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src=" {{asset('assets/')}}/js/jquery.min.js"></script>
<script src=" {{asset('assets/')}}/plugins/simplebar/js/simplebar.min.js"></script>
<script src=" {{asset('assets/')}}/plugins/metismenu/js/metisMenu.min.js"></script>
<script src=" {{asset('assets/')}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src=" {{asset('assets/')}}/js/pace.min.js"></script>
<script src=" {{asset('assets/')}}/plugins/chartjs/js/Chart.min.js"></script>
<script src=" {{asset('assets/')}}/plugins/chartjs/js/Chart.extension.js"></script>
<script src=" {{asset('assets/')}}/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!-- Vector map JavaScript -->
<script src=" {{asset('assets/')}}/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src=" {{asset('assets/')}}/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!--app-->
<script src=" {{asset('assets/')}}/js/app.js"></script>
<script src=" {{asset('assets/')}}/js/index.js"></script>
<script>
    new PerfectScrollbar(".review-list")
    new PerfectScrollbar(".chat-talk")
</script>

@yield('script')