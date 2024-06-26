<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Certificate HARKAMTIB</title>
    <meta name="description" content="E-Certificate HARKAMTIB">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('harkamtib') }}/images/logo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/wave/waves.min.css">
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('harkamtib') }}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>E-Certificate HARKAMTIB</h2>
                            <p>Silahkan mencari sertifikatnya masing-masing, dan menekan tombol download,, jika nama tidak ada silahkan hubungi (Aslan Lasali: +62 822-9231-3475)</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No. Certificate</th>
                                        <th>Nama</th>
                                        <th>Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->nomor }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td><a href="{{asset('Sertifikat')}}/{{ $item->nomor }}.pdf" class="btn btn-primary">Download</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No. Certificate</th>
                                        <th>Nama</th>
                                        <th>Download</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2024 All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('harkamtib') }}/js/counterup/waypoints.min.js"></script>
    <script src="{{ asset('harkamtib') }}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('harkamtib') }}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/flot/jquery.flot.js"></script>
    <script src="{{ asset('harkamtib') }}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('harkamtib') }}/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/knob/jquery.knob.js"></script>
    <script src="{{ asset('harkamtib') }}/js/knob/jquery.appear.js"></script>
    <script src="{{ asset('harkamtib') }}/js/knob/knob-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/todo/jquery.todo.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/wave/waves.min.js"></script>
    <script src="{{ asset('harkamtib') }}/js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/data-table/jquery.dataTables.min.js"></script>
    <script src="{{ asset('harkamtib') }}/js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('harkamtib') }}/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
</body>

</html>
