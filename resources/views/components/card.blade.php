<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6  ">

    <div class="w-full sm:max-w-2xl overflow-hidden rounded-t-2xl ">
        <div>
            <div class="header_block bg-background rounded-2xl">
                {{$header}}
            </div>
        </div>
    </div>
    <div class="w-full sm:max-w-2xl mt-0 px-6 py-4 bg-white rounded-b-2xl overflow-hidden">
        {{ $slot }}
    </div>
</div>
