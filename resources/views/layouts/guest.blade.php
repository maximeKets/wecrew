<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="W3CREW is an awesome utility for building teams. Finding a crew for your project has never been easier! W3CREW connects project owners and freelancers in a trusted user friendly platform. No more DMs. No more time wasted. Phase 1 of W3CREW is calling all freelancers working in web3 to set up their profiles." name="description">
        <meta content="W3CREW - W3&#x27;RE IN BETA - JOIN THE CREW" property="og:title">
        <meta content="W3CREW is an awesome utility for building teams. Finding a crew for your project has never been easier! W3CREW connects project owners and freelancers in a trusted user friendly platform. No more DMs. No more time wasted. Phase 1 of W3CREW is calling all freelancers working in web3 to set up their profiles." property="og:description">
        <meta content="https://uploads-ssl.webflow.com/6352b3ee3bc91e36df9c3b4f/6374f05dfd7e607038214714_W3CREW%20webclip.png" property="og:image">
        <meta content="W3CREW - W3&#x27;RE IN BETA - JOIN THE CREW" property="twitter:title">
        <meta content="W3CREW is an awesome utility for building teams. Finding a crew for your project has never been easier! W3CREW connects project owners and freelancers in a trusted user friendly platform. No more DMs. No more time wasted. Phase 1 of W3CREW is calling all freelancers working in web3 to set up their profiles." property="twitter:description">
        <meta content="https://uploads-ssl.webflow.com/6352b3ee3bc91e36df9c3b4f/6374f05dfd7e607038214714_W3CREW%20webclip.png" property="twitter:image">
        <meta property="og:type" content="website">
        <meta content="summary_large_image" name="twitter:card">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link  href="{{ asset('/css/normalize.css') }}" rel="stylesheet" type="text/css">
        <link  href="{{ asset('/css/webflow.css') }}" rel="stylesheet" type="text/css">
        <link  href="{{ asset('/css/w3crew.webflow.css') }}" rel="stylesheet" type="text/css">
        <link  href="{{ asset('/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
        <link  href="{{ asset('/images/webclip.png') }}" rel="apple-touch-icon">
        <title>{{ config('app.name', 'W3CREW') }}</title>

        <!-- Fonts -->
        <script src="https://use.typekit.net/bez5hou.js" type="text/javascript"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

        <!-- Scripts -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <header>
        <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
            <div class="container-2 w-container">
                <w3m-core-button></w3m-core-button>
                <a href="{{route("home")}}" aria-current="page" class="w-nav-brand w--current"><img
                        src="{{asset('images/logo.svg')}}" loading="lazy" width="155" alt="" class="image-2"></a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="https://www.w3crew.com/about.html" class="nav-link-simple w-nav-link">About</a>
                    <a href="{{route('login')}}" class="nav-link-simple w-nav-link">Sign in</a>
                    <a href="{{route('register')}}" class="nav-link w-nav-link">Join the crew</a>
                </nav>
                <div class="menu-button w-nav-button">
                    <div class="icon-2 w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
    </header>
        <div class="min-h-screen m-5" >
            {{ $slot }}
        </div>
    Ï@include('navigation.footer')
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6352b3ee3bc91e36df9c3b4f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/webflow.js') }}" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

    </body>
</html>
