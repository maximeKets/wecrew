<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">

    <div class="w-full sm:max-w-4xl  overflow-hidden sm:rounded-t-lg ">
        <div class="bg-form-bg bg-cover ">
            <div>
                {{$header}}
            </div>
        </div>
    </div>

    <div class="w-full sm:max-w-4xl mt-0 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-b-lg">
        {{ $slot }}
    </div>
</div>
