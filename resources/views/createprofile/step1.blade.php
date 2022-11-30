<x-app-layout>
    <x-card>
        <x-slot name="header">
            <div class="pt-2 sm:pt-4 -mb-2 m-2">
                <div class="grid grid-cols-4 bg-blue rounded-full">
                    <div class="flex justify-center bg-ok rounded-l-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-blue">Login</p>
                    </div>
                    <div class="flex justify-center bg-ok rounded-r-full py-2 items-center">
                        <p class=" text-xs sm:text-lg text-blue"> Details </p>
                    </div>
                    <div class="flex justify-center rounded-full py-2 items-center">
                        <p class=" text-xs sm:text-lg text-ok"> Skills </p>
                    </div>
                    <div class="flex justify-center rounded-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-ok"> Experience </p>
                    </div>
                </div>
            </div>

            <x-header-content title="younique " subtitle="Non Fungible You! just like an NFT"
                              extra="there's only one of you {{$user->username}} "/>
        </x-slot>

        <form action="{{route("createprofile.step1")}}" method="POST" autocomplete="on" enctype="multipart/form-data">
            @csrf
            <x-form>
                <x-input-title title="Your web3 Presence"/>

            </x-form>

            <x-form>
                <div class="grid grid-cols-2">
                    <div>
                        <x-input-title title="PFP"/>
                        <x-card-text>
                            Pick your avatar
                        </x-card-text>
                        <x-card-text>
                            and show us what you've got!
                        </x-card-text>
                        <x-input-error :messages="$errors->get('profil_picture')"/>
                    </div>
                    <div id="form-picture" class="flex justify-end ">
                        <label for="profil_picture"
                               class="border-dashed border-2 border-black  ring-black rounded-full  aspect-square flex flex-col items-center justify-center animate-pulse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"/>
                            </svg>
                        </label>
                        <input type="file" name="profil_picture"
                               id="profil_picture"
                               accept="image/*" hidden>
                    </div>
                </div>
            </x-form>

            <x-form>
                <x-input-title title="about you"/>
                <textarea class="rounded-2xl italic focus:border-ok h-36 pl-7
                                focus:ring-ok block mt-2 w-full italic "
                          name="about"
                          value="{{ old('about') }}"
                          maxlength="500"
                          required
                          placeholder="talk about who you are and what you like, your passions and what gets you excited! Why are you working in web3? anything that you add can help you get hired.">{{ old('about') }}</textarea>
            </x-form>
            <x-form>
                <x-input-title title="Your socials"/>


                    <div class="inline-flex border  border-black w-full hover:border-ok rounded-full items-center focus:ring-ok p-1 mt-4 ">
                   <x-icons>
                       {{asset('storage/icons/Twitter.svg')}}
                   </x-icons>
                        <input id="twitter"
                                      type="text"
                                      class="border-transparent focus:border-transparent focus:ring-0"
                                      name="twitter"
                                      value="{{ old('twitter') }}"
                                      placeholder="@TwitterHandle"
                                      minlength="2"
                                      required
                                        />
                    </div>
    <x-input-error :messages="$errors->get('twitter')"/>


                <div class="inline-flex border  border-black w-full hover:border-ok rounded-full items-center focus:ring-ok p-1 mt-4 ">
                    <x-icons>
                        {{asset('storage/icons/Discord.svg')}}
                    </x-icons>
                    <input id="discord"
                           type="text"
                           class="border-transparent focus:border-transparent focus:ring-0"
                           name="discord"
                           value="{{ old('discord') }}"
                           placeholder="Discord ID"
                           minlength="2"
                           required
                    />
                </div>
                <x-input-error :messages="$errors->get('discord')"/>
            </x-form>

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
