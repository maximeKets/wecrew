<x-app-layout>
    <x-card>
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
                        <a href="https://twitter.com/{{$user->twitter}}" class="inline-flex items-center">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.4238 29.8276C22.7443 29.8276 28.9388 20.2729 28.9388 12.0011C28.9388 11.7323 28.9388 11.4635 28.9268 11.1947C30.1273 10.315 31.1717 9.2031 32 7.94461C30.8956 8.44556 29.7071 8.77546 28.4586 8.93429C29.7311 8.16454 30.7035 6.93049 31.1717 5.46429C29.9832 6.18517 28.6627 6.69834 27.2581 6.97936C26.1297 5.75753 24.533 5 22.7683 5C19.3709 5 16.6098 7.81021 16.6098 11.268C16.6098 11.7567 16.6699 12.2332 16.7659 12.6975C11.6519 12.4409 7.11405 9.93619 4.07683 6.14852C3.54862 7.07711 3.2485 8.15232 3.2485 9.30084C3.2485 11.4757 4.34094 13.394 5.98559 14.5181C4.97719 14.4814 4.02881 14.2004 3.20048 13.7361C3.20048 13.7605 3.20048 13.785 3.20048 13.8216C3.20048 16.8518 5.32533 19.3932 8.13445 19.9674C7.61825 20.114 7.07803 20.1873 6.51381 20.1873C6.11765 20.1873 5.73349 20.1507 5.36134 20.0774C6.14166 22.5699 8.42257 24.3782 11.1116 24.4271C8.9988 26.1132 6.34574 27.1151 3.46459 27.1151C2.97239 27.1151 2.48019 27.0907 2 27.0296C4.71309 28.789 7.95438 29.8276 11.4238 29.8276Z" fill="black"/>
                            </svg> {{$user->twitter}}
                        </a>
                    </x-form-display>
                    <x-form-display>
                        <a href="https://discord.com" class="inline-flex items-center">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.3963 7.89552C25.4842 7.01816 23.4337 6.37177 21.2899 6.00155C21.2508 5.99441 21.2118 6.01226 21.1917 6.04798C20.928 6.517 20.6359 7.12887 20.4314 7.6098C18.1255 7.26459 15.8315 7.26459 13.5729 7.6098C13.3683 7.11818 13.0656 6.517 12.8007 6.04798C12.7806 6.01346 12.7416 5.9956 12.7026 6.00155C10.5599 6.37059 8.50945 7.01698 6.59617 7.89552C6.57961 7.90266 6.56541 7.91457 6.55599 7.93004C2.66674 13.7405 1.60131 19.4081 2.12398 25.0055C2.12634 25.0329 2.14171 25.0591 2.163 25.0757C4.72901 26.9601 7.21463 28.1042 9.6541 28.8624C9.69314 28.8743 9.73451 28.8601 9.75935 28.8279C10.3364 28.0399 10.8508 27.209 11.2918 26.3352C11.3179 26.284 11.293 26.2233 11.2398 26.203C10.4239 25.8935 9.647 25.5162 8.89966 25.0876C8.84055 25.0531 8.83582 24.9686 8.8902 24.9281C9.04747 24.8102 9.20477 24.6876 9.35494 24.5638C9.38211 24.5412 9.41997 24.5364 9.45192 24.5507C14.3616 26.7923 19.6769 26.7923 24.5287 24.5507C24.5606 24.5353 24.5985 24.54 24.6268 24.5626C24.7771 24.6864 24.9343 24.8102 25.0928 24.9281C25.1472 24.9686 25.1436 25.0531 25.0845 25.0876C24.3372 25.5245 23.5602 25.8935 22.7431 26.2019C22.6899 26.2221 22.6663 26.284 22.6923 26.3352C23.1428 27.2077 23.6572 28.0387 24.2236 28.8267C24.2473 28.8601 24.2898 28.8743 24.3289 28.8624C26.7802 28.1042 29.2658 26.9601 31.8318 25.0757C31.8543 25.0591 31.8685 25.0341 31.8708 25.0067C32.4964 18.5355 30.8231 12.9143 27.4353 7.93122C27.427 7.91457 27.4128 7.90266 27.3963 7.89552ZM12.025 21.5973C10.5469 21.5973 9.32892 20.2402 9.32892 18.5736C9.32892 16.907 10.5233 15.55 12.025 15.55C13.5386 15.55 14.7448 16.9189 14.7211 18.5736C14.7211 20.2402 13.5268 21.5973 12.025 21.5973ZM21.9934 21.5973C20.5153 21.5973 19.2974 20.2402 19.2974 18.5736C19.2974 16.907 20.4917 15.55 21.9934 15.55C23.507 15.55 24.7132 16.9189 24.6895 18.5736C24.6895 20.2402 23.507 21.5973 21.9934 21.5973Z" fill="black"/>
                            </svg>  {{$user->discord}}
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
                <div class="flex ">
                    <a  class="item-center justify-center flex text-black italic px-6 border-2
 rounded-full border-ok py-2 " href="{{$link->url}}">
{{$link->name}}
                    </a>
                </div>
                          @endforeach
                </div>
            @else
                <div class="grid grid-cols-2">
                    <x-input-title title=" No experience"/>
                    <a class="flex justify-center items-center" href="{{route("createprofile.step3")}}">
                        <span class="rounded-full bg-ok p-2 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        Add project
                        </span>
                    </a>
                </div>
            @endif
        </x-form>

        <x-form>
            <div class="flex justify-center mt-20">
                <section>
                    <x-danger-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                    >Delete profile
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mx-2 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </x-danger-button>

                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900">Are you sure your want to delete your
                                account?</h2>
                            <p class="mt-1 text-sm text-gray-600">Once your account is deleted, all of its resources and
                                data will be permanently deleted. Please enter your password to confirm you would like
                                to permanently delete your account.</p>

                            <div class="mt-6">
                                <x-input-label for="password" value="Password" class="sr-only"/>

                                <x-text-input
                                    id="password"
                                    name="password"
                                    type="password"
                                    class="mt-1 block w-3/4"
                                    placeholder="Password"
                                />

                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2"/>
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

