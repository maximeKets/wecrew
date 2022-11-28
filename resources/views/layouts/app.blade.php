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
        <title>{{ config('app.name', 'W3CREW') }}</title>

        <!-- Fonts -->
        <script src="https://use.typekit.net/bez5hou.js" type="text/javascript"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
        <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" bg-background antialiased">
        <div class="min-h-screen m-5 ">
            @include('layouts.navigation')


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
