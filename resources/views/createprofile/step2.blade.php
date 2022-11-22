<x-app-layout>
    <x-card>
        <x-slot name="header">
            <div class="pt-2 sm:px-2 sm:pt-4 -mb-10 sm:-mb-10 m-2">
                <div class="grid grid-cols-4 bg-blue rounded-full">
                    <div class="flex justify-center bg-ok rounded-l-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-blue">Login</p>
                    </div>
                    <div class="flex justify-center bg-ok  py-2 items-center">
                        <p class=" text-xs sm:text-lg text-blue"> Details </p>
                    </div>
                    <div class="flex justify-center bg-ok rounded-r-full py-2 items-center">
                        <p class=" text-xs sm:text-lg text-blue"> Skills </p>
                    </div>
                    <div class="flex justify-center rounded-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-ok"> Experience </p>
                    </div>
                </div>
            </div>

            <x-header-content title="got skills " subtitle="Show what you're awesome at!"
                              extra=""/>
        </x-slot>

        <form action="{{route("createprofile.step2")}}" method="POST" name="form" id="form">
            @csrf
            <x-form>
                <x-input-title title="Your Category"/>

                <x-card-text>
                    pick your area of expertise
                </x-card-text>
            </x-form>

            <x-form>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 ">
                    @foreach($categories as $category)
                        <div>
                            <x-text-input name="category_id" type="radio" value="{{$category->id}}"
                                          id="{{$category->name}}"
                                          class="peer/radio hidden"/>
                            <x-input-label for="{{$category->name}}"
                                           class="rounded-full border p-2  peer-checked/radio:border-ok">
                                {{$category->name}}
                            </x-input-label>
                        </div>

                    @endforeach
                </div>
            </x-form>

            <x-form>
                <x-input-title title="Skills"/>

                <x-card-text>
                    We've pre selected some skills linked to your category.
                </x-card-text>
            </x-form>

            <xform>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4" id="skills">

                </div>
            </xform>

            <x-form>
                <div class="flex justify-center">
                    <x-primary-button class="flex justify-center">
                        Next
                    </x-primary-button>
                </div>

            </x-form>
        </form>


    </x-card>
</x-app-layout>
