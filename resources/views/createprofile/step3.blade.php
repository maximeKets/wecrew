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
                    <div class="flex justify-center bg-ok py-2 items-center">
                        <p class=" text-xs sm:text-lg text-blue"> Skills </p>
                    </div>
                    <div class="flex justify-center bg-ok rounded-r-full py-2 items-center">
                        <p class="text-xs sm:text-lg text-blue"> Experience </p>
                    </div>
                </div>
            </div>

            <x-header-content title="expert!" subtitle="Show us that you've worked on this stuff before."
                              extra="Describe what you did and prove it with some links."/>
        </x-slot>

        <form action="{{route("createprofile.step3")}}" method="POST" autocomplete="on" enctype="multipart/form-data">
            @csrf
            <x-form>
                <x-input-title title="experience"/>

                <x-card-text>
                    to keep things simple, talk tu us about your best Web3 project so far. The more links
                    and explanations you put, the better chances to get hired you'll have.
                </x-card-text>
            </x-form>

            <x-form>
                <x-text-input id="project-name"
                              type="text"
                              name="project-name"
                              :value="old('project-name')"
                              placeholder="project name"
                              />
                <x-input-error :messages="$errors->get('project-name')"/>
            </x-form>
            <x-form>
                <textarea class="rounded-2xl italic block mt-2 w-full italic focus:ring-ok shadow-sm"
                              name="project-description"
                              maxlength="600"
                              placeholder="think of the project hiring you, they need to know what you did, how you did it and what success uou had. be specific.">{{old('project-description')}}</textarea>
                <x-input-error :messages="$errors->get('project-description')"/>
            </x-form>
            <x-form>
                <x-text-input id="project-url"
                              type="url"
                              name="project-url"
                              :value="old('project-url')"
                              placeholder="project links (put many if needed)"
                              />
                <x-input-error :messages="$errors->get('project-url')"/>
            </x-form>

            <x-form>
                <div class="flex gap-4 grid sm:grid-cols-2 items-center">
                    <div class="flex flex-col items-center ">
                        <x-card-text>
                            upload project visual 16:9
                        </x-card-text>
                        <x-card-text>
                            minimum 960x600px
                        </x-card-text>


                    </div>
                    <div id="form-picture-2">
                        <x-input-label for="project-picture" class="border p-5 justify-center flex-col rounded-2xl items-center flex border-black animate-pulse" >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.0" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2.5" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75"/>
                            </svg>
                        </x-input-label>


                        <x-text-input id="project-picture"
                                      accept="image/png, image/jpeg"
                                      type="file"
                                      class="hidden"
                                      name="project-picture"
                                      :value="old('project-picture')"
                        />


                    </div>
                </div>

            </x-form>

            <x-form>
                <div class="flex justify-center">
                    <x-primary-button class="flex justify-center">
                        save profile
                    </x-primary-button>
                </div>

            </x-form>
        </form>
    </x-card>
</x-app-layout>
