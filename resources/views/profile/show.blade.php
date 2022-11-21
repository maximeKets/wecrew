<x-app-layout>
    <x-card>
        <x-slot name="header">
            <x-header-content title="Profile" subtitle=""
                              extra=""/>
        </x-slot>
        <x-form>
            <div class="px-10 my-4 mt-6 grid grid-cols-2 gap-4  ">
                <div class="rounded-full flex items-center p-2 bg-green-300">
                    <img class="rounded-full border-2 border-black aspect-square max-h-16 "
                         src="{{asset("user/user_".$user->id . ".jpg")}}" alt="">
                    <h3 class=" flex items-center text-3xl uppercase p-4">{{$user->nickname}}</h3>
                </div>
            </div>
        </x-form>
        <x-form>
            <div class="px-10 grid grid-cols-3 gap-2">
                @foreach($user->skills as $skill)
                    <div class=" p-4 flex justify-center rounded-full border-2">{{$skill->name}}</div>
                @endforeach
            </div>
        </x-form>
        <x-form>
            <x-card-text>
                {{$user->about}}
            </x-card-text>
        </x-form>
        <x-form>

        </x-form>



    </x-card>
</x-app-layout>

