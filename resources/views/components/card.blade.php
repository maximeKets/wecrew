<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">

    <div class="w-full sm:max-w-2xl   overflow-hidden sm:rounded-t-lg ">
        <div>
            <div class="header_block bg-background rounded-2xl">
                {{$header}}
            </div>
        </div>
    </div>

    <div class="w-full sm:max-w-2xl mt-0 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-b-lg">
        {{ $slot }}
    </div>
</div>
