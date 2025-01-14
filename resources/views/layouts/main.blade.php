<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="HAMA Group of Companies - Professional IT Services, Branding & More">
    <meta name="description" content="Connect with HAMA Group of Companies for professional IT services, stationery, branding, graphics, printing, packaging, and digital design solutions. Quality and innovation are our priorities. Contact us via email, phone, or social media.">
    <meta name="keywords" content="HAMA, Hama Group, IT Services, Branding, Stationery, Graphics, Printing, Packaging, Digital Designs, Business Solutions, Professional Branding, Contact HAMA">
    <meta name="author" content="HAMA Group of Companies">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="language" content="English">
    <meta name="distribution" content="global">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.hamageneralsupplies.co.tz/">
    <meta name="twitter:title" content="HAMA Group of Companies - Professional IT Services">
    <meta name="twitter:description" content="HAMA Group of Companies provides IT services, branding, printing, and design solutions. Reach us at +255 715281111 or info@hamageneralsupplies.co.tz.">
    <meta name="twitter:image" content="https://www.hamageneralsupplies.co.tz/images/twitter-preview.png">

    <!-- Additional Tags -->
    <link rel="canonical" href="https://www.hamageneralsupplies.co.tz/">
    <meta name="theme-color" content="#1A73E8">
    <meta name="apple-mobile-web-app-title" content="HAMA">
    <meta name="application-name" content="HAMA Group">
    <meta name="subject" content="HAMA Group provides IT services, branding, printing, packaging, and design solutions.">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <meta name="expires" content="never">

    <!-- Contact Information -->
    <meta name="contact:email" content="info@hamageneralsupplies.co.tz">
    <meta name="contact:email" content="hama.general50@yahoo.com">
    <meta name="contact:phone" content="+255715281111">
    <meta name="contact:phone" content="+255767567324">

    <!-- Social Media -->
    <meta property="social:twitter" content="https://x.com/hama_ltd80398">
    <meta property="social:linkedin" content="https://www.linkedin.com/in/hama-group-of-companies-ltd-94040b343">


    <title>{{ config('app.name', 'Hama Group') }} - @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/logo/favicon.png') }}"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- Additional Styles -->
    @stack('styles')
</head>
<body>
    <!-- Browser Upgrade Warning -->
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Navigation -->
    @include('partials.nav')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Additional Scripts -->
    @stack('scripts')
</body>
</html>
