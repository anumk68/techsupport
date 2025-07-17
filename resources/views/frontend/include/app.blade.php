<!DOCTYPE php>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>Techsupport 24/7</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('public/frontassets/img/favicon.png') }}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/icons.css') }}">
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!--  animate css plugins -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/animate.css') }}">
    <meta name="robots" content="noindex, nofollow">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

    <!--  slick css plugins -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/slick.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/magnific-popup.css') }}">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/metismenu.css') }}">
    <!-- select2 css file -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/nice-select2.css') }}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/bootstrap.min.css') }}">
    <!--  main style css file -->
    <link rel="stylesheet" href="{{ asset('public/frontassets/css/style.css') }}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{ asset('public/style.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="body-wrapper">


    @include('frontend.include.header')
    @yield('content')
    @include('frontend.include.footer')





    <script src="{{ asset('public/frontassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/imageload.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/slick.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/metismenu.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/nice-select2.js') }}"></script>
    <script src="{{ asset('public/frontassets/js/active.js') }}"></script>
    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <script>
        let selectedBrandId = null;
        let selectedIssueId = null;

        $(document).on('click', '[data-brand-id]', function() {
            selectedBrandId = $(this).data('brand-id');
        });

        $(document).on('click', '[data-issue-id]', function() {
            selectedIssueId = $(this).data('issue-id');

            // Set hidden inputs
            $('#formBrandId').val(selectedBrandId);
            $('#formIssueId').val(selectedIssueId);

            // ✅ Set selected value in the dropdown
            $('#brand_select').val(selectedBrandId);
        });
    </script>

<script>
    const contactBtn = document.getElementById('contactBtn');
    const contactForm = document.getElementById('contactForm');

    contactBtn.addEventListener('mouseenter', () => {
      contactForm.classList.add('active');
    });

    contactForm.addEventListener('mouseleave', () => {
      contactForm.classList.remove('active');
    });
  </script>
    @if (session('form_success'))
    <script>
        window.addEventListener('load', function() {
            var successModal = new bootstrap.Modal(document.getElementById('staticBackdropssubmit'));
            successModal.show();
        });
    </script>
    @endif

</body>

</html>