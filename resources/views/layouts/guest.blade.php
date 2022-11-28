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

        <title>{{ config('app.name', 'Laravel') }}</title>

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
    <body class="bg-background">
    <header>

        <nav class="px-2 sm:px-4 py-2.5 rounded ">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="{{ route('home') }}"><img src="{{asset('storage/logo.svg')}}" alt="logo"></a>
                <button data-collapse-toggle="navbar-default" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-ok focus:bg-ok "
                        aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul class="flex flex-col p-4 mt-4  rounded-lg text-xl md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">
                            <li class="flex items-center justify-center">
                                <a href="{{route('login')}}"
                                   class="italic block py-2 pl-3 pr-4 text-lg text-gray-700 rounded  md:border-0  md:p-0">sign
                                    in</a>
                            </li>
                            <li class="flex items-center justify-center">
                                <a href="{{ route('register') }}"
                                   class="italic block py-2 pl-3 pr-4 bg-ok text-lg text-gray-700 rounded-full border-2  border-black  md:p-3 md:px-6">Join
                                    the crew</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
        <div class="antialiased m-5" >
            {{ $slot }}
        </div>
    </body>
</html>
