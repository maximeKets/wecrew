<x-app-layout>
    <x-card>
        <x-slot name="header">
            <x-header-content title="your Profile" subtitle=""
                              extra=""/>
        </x-slot>
        <x-form>
            <div class="grid sm:grid-cols-2 ">
                <div class="rounded-full grid-cols gap-4 flex items-center p-2 bg-ok">
                    <img class="rounded-full border-2 border-black aspect-square max-h-16  "
                         src="{{asset("user/user_".$user->id . ".jpg")}}" alt="profile">
                    <x-input-title class="flex justify-center" title="{{$user->username}}"/>
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

