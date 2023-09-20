<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0,  user-scalable=no" name="viewport">
    <meta property="og:title" title="">
    <meta name="title" property="og:title" content="">
    <meta name="image" property="og:image" content="">
    <meta name="description" property="og:description" content="">
    <meta property="og:url" content="https://prarang.in">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Prarang">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-5/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('css')
</head>

<body>
    <!-- header -->
    <div class="header1 text-center d-none d-sm-none d-md-none d-lg-block">
        <div class="row header2">
            <div class="col-4 text-start">
                <a href="https://prarang.in/"><b><span id="logo-titles"><img class="imgx"
                                src="{{ asset('assets/image/logo.png') }}" alt="Prarang">
                        </span>
                    </b></a>
            </div>
            <div class="col-sm-5 text-center">
                <img src="https://www.prarang.in/img/cnsignature.png" alt="">
            </div>
            <div class="col-sm-3 text-start">
                <p class="sub-logo-title">Knowledge Webs <br>
                    <span>for</span> <br>Smarter
                    Citizenship
                </p>
            </div>
        </div>
    </div>
    <!-- NavBar -->
    <header class="d-block d-sm-block d-md-block d-lg-none">

        <div class="text-left" id="logo-titlex"><a href="https://prarang.in/"><img class="imgx"
                    src="{{ asset('assets/image/logo.png') }}" alt="Prarang"></a>

        </div>
        <p class="text-left ps-2 pt-1"><b>Knowledge Webs for Smarter Citizenship</b>
        </p>

    </header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"
                    style="display: flex; justify-content: space-between; width: 100%;">
                    <li class="nav-item nab-menu">
                        <a class="nav-link active" aria-current="page" target="_blank"
                            href="https://prarang.in/languages.php">Languages</a>
                    </li>
                    <li class="nav-item nab-menu">
                        <a class="nav-link active" aria-current="page" target="_blank"
                            href="https://prarang.in/cities.php">Cities</a>
                    </li>

                    <li class="nav-item dropdown nab-menu ">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" target="_blank"
                                    href="https://prarang.in/glocal-for-hyperlocal.php">Content: Glocal For
                                    Hyperlocal</a></li>
                            <li><a class="dropdown-item" target="_blank"
                                    href="https://prarang.in/analytics-geographic-intelligence.php">Analytics:
                                    Geographic Intelligence</a>
                            </li>
                            <li><a class="dropdown-item" target="_blank"
                                    href="https://prarang.in/art-connecting-geographies.php">Art: Connecting
                                    Geographies</a>
                            </li>
                            <li><a class="dropdown-item" target="_blank"
                                    href="https://prarang.in/city-partnership-semiotic-web.php">City Partnerships:
                                    Semiotic Web</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item nab-menu">
                        <a class="nav-link active" aria-current="page" target="_blank"
                            href="https://prarang.in/knowledge.php">Knowledge
                        </a>
                    </li>
                    <li class="nav-item nab-menu">
                        <a class="nav-link active" aria-current="page" target="_blank"
                            href="https://prarang.in/about.php">About Us</a>
                    </li>
                    <li class="nav-item nab-menu">
                        <a class="nav-link active" aria-current="page" target="_blank"
                            href="https://prarang.in/blogs.php">Blogs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    {{ $slot }}
    <br><br>
    <footer>
        <div class="container-fluid footer-font snipcss-pDVZE style-5iXfi snipcss-9mOF5" id="style-5iXfi">
        </div>
        <div class="container-fluid snipcss0-0-0-1 snipcss-5fAU4 style-VVnjU snipcss-mzBPZ" id="style-VVnjU">
            <div class="container snipcss0-1-1-2 style-PW4AR" id="style-PW4AR">

                <div class="footer-design snipcss0-2-2-3 row text-left">
                    <div class="col-sm-3">
                        <a target="_blank" href="https://prarang.in/privacy.php" class="snipcss0-5-33-34 text-white">
                            Privacy Policy
                        </a><br>
                        <a target="_blank" href="https://prarang.in/about.php" class="snipcss0-5-33-34 text-white">
                            About Us
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a target="_blank" href="https://prarang.in/t-and-c.php" class="snipcss0-5-35-36 text-white">
                            Terms &amp; Conditions
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="https://prarang.in/refund-cancellations.php" class="snipcss0-5-35-36 text-white">
                            Cancellations and Refund
                        </a>
                    </div>

                    <div class="col-md-3 col-xs-6 footer-text-color snipcss0-3-3-39">
                        <h4 class="snipcss0-4-39-40">
                            Connect -
                        </h4>
                        <p class="snipcss0-4-39-41">
                            Follow Us On
                        </p>
                        <a href="https://www.facebook.com/prarang.in/" class="snipcss0-4-39-42">
                            <img src="https://prarang.in/fb.png" class="snipcss0-5-42-43">
                        </a>
                        <a href="https://www.instagram.com/prarang_in/?hl=en" class="snipcss0-4-39-44">
                            <img src="https://prarang.in/insta.png" class="snipcss0-5-44-45">
                        </a>
                        <a href="https://twitter.com/prarang_in?lang=en" class="snipcss0-4-39-46">
                            <img src="https://prarang.in/twitter.png" class="snipcss0-5-46-47">
                        </a>

                    </div>
                </div>
            </div>
            <div class="container-fluid snipcss0-1-1-51 style-El2si" id="style-El2si">

            </div>
            <p class="text-white container"><br>
                <b>Please read this disclaimer carefully before using our website. By accessing and using our website,
                    you
                    agree to the terms and conditions stated in this disclaimer. </b> <br>

                1. Copyright and Intellectual Property: <br> a) The content, design, graphics, and data presented on
                this
                website are protected by copyright and intellectual property laws. <br> b) Unauthorized use,
                reproduction, or
                distribution of any material from this website, whether free or paid, is strictly prohibited. <br>
                2. Changes to Disclaimer: <br> a) We reserve the right to modify or update this disclaimer at any
                time
                without
                prior notice. <br> b) Any changes will be effective immediately upon posting on the website.
                By using our website, you acknowledge that you have read, understood, and agree to this
                disclaimer
                in
                its entirety. If you do not agree with any part of this disclaimer, please refrain from using
                our
                website. For
                any questions or clarifications, please contact us at query@prararag.in
            </p>
            <p id="demo" class="snipcss0-1-1-54">
            </p>
            <br>
        </div>
        <!-- modal   -->
        <div id="mySizeChartModal" class="ebcf_modal">

            <div class="ebcf_modal-content">
                <span class="ebcf_close">&times;</span>
                <p class="p-2">
                <h4></a></h4>
                </p>
            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        let popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>


    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
