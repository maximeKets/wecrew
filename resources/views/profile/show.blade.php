<x-app-layout>
    <x-card>
        <x-slot name="header">
            <x-header-content title="your Profile" subtitle=""
                              extra=""/>
        </x-slot>
        <x-form>
            @if(session()->has('success'))
                <div class="text-ok flex justify-center m-10 " role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif

            <div class="grid sm:grid-cols-2 ">
                <div class="rounded-full grid-cols gap-4 flex items-center p-2 bg-ok">
                    <img class="rounded-full border-2 border-black aspect-square max-h-16  "
                         src="{{asset("user/user_".$user->id . ".jpg")}}" alt="profile">
                    <x-input-title class="flex justify-center" title="{{$user->username}}"/>
                </div>
            </div>
        </x-form>
        <x-form>
            <div class="grid grid-cols sm:grid-cols-3 gap-4 ">
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
                    <x-form-display>
                        {{$user->twitter}}
                    </x-form-display>
                    <x-form-display>
                        {{$user->discord}}
                    </x-form-display>
                </div>
            </div>
        </x-form>
        <x-form>
            <x-input-title title="experience"/>
        </x-form>
        <x-form>
            @if($user->projects->count() > 0)
                <div class="grid grid-cols gap-4">
                    @foreach($user->projects as $project)

                        <div class="flex flex-col justify-center items-center">
                            <img class="rounded-xl border-2 border-black aspect-video w-full"
                                 src="{{asset("project/user_".$user->id . "_project_". $project->id . ".jpg")}}">
                        </div>
                        <div class="flex items-start text-xl font-semibold">
                            {{$project->name}}
                        </div>

                        <x-card-text>
                            {{$project->description}}
                        </x-card-text>
                    @endforeach
                </div>
            @else
                <div class="flex justify-center">
                    <x-input-title class="flex justify-center" title="no experience"/>
                </div>
            @endif
        </x-form>

        <x-form >
            <div class="flex justify-center">
                <section >
                    <x-danger-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                    >Delete Account</x-danger-button>

                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900">Are you sure your want to delete your account?</h2>
                            <p class="mt-1 text-sm text-gray-600">Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>

                            <div class="mt-6">
                                <x-input-label for="password" value="Password" class="sr-only" />

                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="mt-1 block w-3/4"
                                    placeholder="Password"
                                />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancel') }}
                                </x-secondary-button>

                                <x-danger-button class="ml-3">
                                    {{ __('Delete Account') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </section>
            </div>

        </x-form>
    </x-card>
</x-app-layout>

