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
                <a href="{{route("home")}}" aria-current="page" class="w-nav-brand w--current"><img src="{{asset('storage/logo.svg')}}" loading="lazy" width="155" alt="" class="image-2"></a>
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

    <div class="footer wf-section">
        <div class="container w-container">
            <div class="div-block-4">
                <div class="div-block-10">
                    <div class="html-embed-3 w-embed"><svg width="600" height="auto" viewbox="0 0 825 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M43.9549 138.526H67.1671L98.4459 35.4561L130.877 138.526H153.925L196.563 2.80351H173.021L140.755 105.379L108.159 2.80351H88.733L56.9603 105.379L23.706 2.80351H0L43.9549 138.526Z" fill="#EFEEE9"></path>
                            <path d="M279.972 138.526H205.726V116.923H257.419V78.993H210.006V59.0386H257.419V24.2421H205.726V2.80351H279.972V138.526Z" fill="#EFEEE9"></path>
                            <path d="M360.786 141C397.498 141 427.954 112.47 430.917 78.0035H408.034C405.071 100.267 385.645 118.407 360.786 118.407C333.294 118.407 312.881 96.1439 312.881 70.5825C312.881 45.021 333.294 22.593 360.786 22.593C385.151 22.593 404.741 40.5684 408.034 62.5018H430.917C427.46 28.3649 397.333 0 360.786 0C321.112 0 290.327 32.8175 290.327 70.5825C290.327 108.347 321.112 141 360.786 141Z" fill="#EFEEE9"></path>
                            <path d="M535.629 138.526L512.91 97.6281C527.727 88.0632 534.312 71.7368 534.312 54.586C534.312 27.5403 518.672 2.63859 476.034 2.63859H446.073V138.691H468.626V106.533H478.833C483.936 106.533 488.546 106.039 492.826 105.379L508.63 138.526H535.629ZM468.626 84.6V24.7368H479.492C500.564 24.7368 512.252 36.1158 512.252 54.586C512.252 72.3965 500.893 84.6 479.492 84.6H468.626Z" fill="#EFEEE9"></path>
                            <path d="M549.928 138.526H624.174V116.923H572.482V78.993H619.894V59.0386H572.482V24.2421H624.174V2.80351H549.928V138.526Z" fill="#EFEEE9"></path>
                            <path d="M672.392 138.526H695.605L726.883 35.4561L759.315 138.526H782.362L825 2.80351H801.459L769.192 105.379L736.596 2.80351H717.17L685.398 105.379L652.143 2.80351H628.438L672.392 138.526Z" fill="#EFEEE9"></path>
                        </svg></div>
                </div>
                <div class="div-block-6">
                    <div class="footer-menu-block">
                        <a href="https://www.w3crew.com/about.html" class="footer-link w-inline-block">
                            <div class="text-block">About</div>
                        </a>
                        <a href="https://cosmic-crew.gitbook.io/cosmic-crew-whitepaper/" target="_blank" class="footer-link w-inline-block">
                            <div class="text-block">Whitepaper</div>
                        </a>
                        <a href="https://www.w3crew.com/roadmap.html" class="footer-link w-inline-block">
                            <div class="text-block">Roadmap</div>
                        </a>
                    </div>
                    <div class="footer-right-block">
                        <div class="text-block-3">W3CREW ⓒ 2022 all rights reserved</div>
                        <a href="https://twitter.com/W3CREWSOL" target="_blank" class="icon w-inline-block">
                            <div class="html-embed-2 w-embed"><svg width="35" height="35" viewbox="0 0 50 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.4238 37.8276C30.7443 37.8276 36.9388 28.2729 36.9388 20.0011C36.9388 19.7323 36.9388 19.4635 36.9268 19.1947C38.1273 18.315 39.1717 17.2031 40 15.9446C38.8956 16.4456 37.7071 16.7755 36.4586 16.9343C37.7311 16.1645 38.7035 14.9305 39.1717 13.4643C37.9832 14.1852 36.6627 14.6983 35.2581 14.9794C34.1297 13.7575 32.533 13 30.7683 13C27.3709 13 24.6098 15.8102 24.6098 19.268C24.6098 19.7567 24.6699 20.2332 24.7659 20.6975C19.6519 20.4409 15.114 17.9362 12.0768 14.1485C11.5486 15.0771 11.2485 16.1523 11.2485 17.3008C11.2485 19.4757 12.3409 21.394 13.9856 22.5181C12.9772 22.4814 12.0288 22.2004 11.2005 21.7361C11.2005 21.7605 11.2005 21.785 11.2005 21.8216C11.2005 24.8518 13.3253 27.3932 16.1345 27.9674C15.6182 28.114 15.078 28.1873 14.5138 28.1873C14.1176 28.1873 13.7335 28.1507 13.3613 28.0774C14.1417 30.5699 16.4226 32.3782 19.1116 32.4271C16.9988 34.1132 14.3457 35.1151 11.4646 35.1151C10.9724 35.1151 10.4802 35.0907 10 35.0296C12.7131 36.789 15.9544 37.8276 19.4238 37.8276Z" fill="currentcolor"></path>
                                </svg></div>
                        </a>
                        <a href="https://t.co/oLQn5AzdXw" target="_blank" class="icon w-inline-block">
                            <div class="html-embed w-embed"><svg width="35" height="35" viewbox="0 0 50 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M38.3188 12.4868C35.8102 11.3358 33.1201 10.4877 30.3075 10.002C30.2563 9.99268 30.2051 10.0161 30.1787 10.0629C29.8327 10.6783 29.4495 11.481 29.1812 12.112C26.156 11.6591 23.1463 11.6591 20.1831 12.112C19.9147 11.467 19.5176 10.6783 19.1701 10.0629C19.1437 10.0177 19.0925 9.99425 19.0413 10.002C16.2302 10.4862 13.5401 11.3342 11.03 12.4868C11.0082 12.4962 10.9896 12.5118 10.9773 12.5321C5.87473 20.1552 4.47694 27.5909 5.16265 34.9344C5.16575 34.9703 5.18592 35.0047 5.21385 35.0265C8.58035 37.4988 11.8414 38.9997 15.0418 39.9945C15.0931 40.0102 15.1473 39.9914 15.1799 39.9492C15.937 38.9154 16.6119 37.8253 17.1905 36.6789C17.2246 36.6117 17.1921 36.5321 17.1223 36.5055C16.0518 36.0995 15.0325 35.6044 14.0521 35.0422C13.9745 34.9969 13.9683 34.8859 14.0396 34.8328C14.246 34.6782 14.4524 34.5173 14.6494 34.3549C14.685 34.3253 14.7347 34.319 14.7766 34.3377C21.2179 37.2786 28.1914 37.2786 34.5567 34.3377C34.5986 34.3175 34.6483 34.3237 34.6854 34.3534C34.8825 34.5158 35.0888 34.6782 35.2967 34.8328C35.3681 34.8859 35.3634 34.9969 35.2859 35.0422C34.3054 35.6153 33.2861 36.0995 32.2141 36.504C32.1443 36.5305 32.1133 36.6117 32.1474 36.6789C32.7385 37.8236 33.4133 38.9138 34.1564 39.9477C34.1875 39.9914 34.2433 40.0102 34.2945 39.9945C37.5105 38.9997 40.7715 37.4988 44.138 35.0265C44.1675 35.0047 44.1861 34.9719 44.1892 34.9359C45.0099 26.446 42.8147 19.0713 38.37 12.5337C38.3591 12.5118 38.3405 12.4962 38.3188 12.4868ZM18.1524 30.463C16.2131 30.463 14.6152 28.6826 14.6152 26.496C14.6152 24.3095 16.1821 22.5291 18.1524 22.5291C20.1381 22.5291 21.7206 24.3252 21.6895 26.496C21.6895 28.6826 20.1226 30.463 18.1524 30.463ZM31.2305 30.463C29.2913 30.463 27.6934 28.6826 27.6934 26.496C27.6934 24.3095 29.2603 22.5291 31.2305 22.5291C33.2163 22.5291 34.7987 24.3252 34.7677 26.496C34.7677 28.6826 33.2163 30.463 31.2305 30.463Z" fill="currentcolor"></path>
                                </svg></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6352b3ee3bc91e36df9c3b4f" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/webflow.js') }}" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

    </body>
</html>
