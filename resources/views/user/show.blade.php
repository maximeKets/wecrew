<x-guest-layout>
    <x-card >
        <x-slot name="header">
            <x-header-content title="Profile" subtitle=""
                              extra=""/>
        </x-slot>
        <x-form>
            @if(session()->has('success'))
                <div class="text-ok flex justify-center m-10 " role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="flex sm:grid-cols ">
                <div class="rounded-full grid-cols gap-4 flex items-center p-2 bg-ok pr-4 ">
                    <img class="rounded-full border-2 border-black aspect-square max-h-16"
                         src="{{asset("user/user_".$user->id . ".jpg")}}" alt="profile">
                    <x-input-title class="flex justify-center" title="{{$user->username}}"/>
                </div>
            </div>
        </x-form>
        <x-form>
            <div class="grid grid-cols sm:grid-cols-2 gap-4 ">
                @foreach($user->skills as $skill)
                    <div class=" item-center justify-center flex text-black w-full italic border-2
                         rounded-full border-ok py-2 sm:py-4">
                        {{$skill->name}}
                    </div>
                @endforeach
            </div>
        </x-form>
        <x-form>
            <x-card-text>
                {{$user->about}}
            </x-card-text>
        </x-form>
        <x-form>
            <div class="grid grid-cols sm:grid-cols-2">
                <div>
                    <x-form-display >
                        <a href="https://twitter.com/{{$user->twitter}}" class="inline-flex items-center ">
                            <x-icons>
                                {{asset('storage/icons/Twitter.svg')}}
                            </x-icons>
                            <span class="pl-2">
                                {{$user->twitter}}
                            </span>
                        </a>
                    </x-form-display>
                    <x-form-display>
                        <a href="https://discord.com" class="inline-flex items-center ">
                            <x-icons >
                                {{asset('storage/icons/Discord.svg')}}
                            </x-icons>
                            <span class="pl-2">
                              {{$user->discord}}
                            </span>
                        </a>

                    </x-form-display>
                </div>
            </div>
        </x-form>

        <x-form>
            @if($user->projects->count() > 0)

                <x-input-title title="experience"/>
                <div class="grid grid-cols gap-4">
                    @foreach($user->projects as $project)

                        <div class="flex flex-col justify-center items-center">

                            @if($project->picture)
                                <img class="rounded-xl border-2 border-black object-cover aspect-video w-full"
                                     src="{{asset("project/user_".$user->id . "_project_". $project->id . ".jpg")}}">
                            @endif
                        </div>
                        <div class="grid grid-cols">
                            <div class="flex items-start text-xl font-semibold">
                                {{$project->name}}
                            </div>
                        </div>
                        <x-card-text>
                            {{$project->description}}
                        </x-card-text>
                    @endforeach
                    @foreach($project->links as $link)
                        <div class="flex pb-10">
                            <a  class="item-center justify-center flex text-black italic px-6 border-2
                         rounded-full border-ok py-2 " href="{{$link->url}}">
                                {{$link->name}}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </x-form>
    </x-card>
</x-guest-layout>

