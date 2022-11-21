<x-app-layout>
    @if(session()->has('message'))
        <div class="justify-center flex rounded-full bg-green-900 text-white m-10">
            {{ session()->get('message') }}
        </div>
    @endif
</x-app-layout>
