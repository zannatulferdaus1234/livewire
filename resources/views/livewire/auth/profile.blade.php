<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">


        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-3">
                    <div class="">
                        <h3 class="text-lg font-bold leading-6 text-gray-900">Profile for {{ auth()->user()->email }}
                        </h3>

                        <div>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <img class=" rounded-full h-full w-full text-gray-300"
                                        src="{{ auth()->user()->avatarUrl() }}" alt="Profile Photo">
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                    <form wire:submit.prevent="save">

                        <div class="">
                            @if ($saved)
                                <div style="color:green">Profile Saved!
                                    <button wire:click="$set('saved',false)" type="button">close</button>
                                </div>

                            @endif
                        </div>


                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">

                                        <div class="">
                                            <x-input.group label="UserName" for="username"
                                                :error="$errors->first('username')">
                                                <x-input.text wire:model="username" id="username" name="username"
                                                    type="text" placeholder="example.com" leading-add-on="surge.com/" />
                                            </x-input.group>
                                        </div>

                                    </div>
                                </div>

                                <div class="">
                                    <x-input.group label="Birthday" for="birthday" :error="$errors->first('birthday')">
                                        <x-input.date wire:model.lazy="birthday" id="birthday" name="birthday"
                                            placeholder="MM//DD//YYYY" />

                                    </x-input.group>
                                </div>

                                <div>
                                    <x-input.group label="About" for="about" :error="$errors->first('about')"
                                        help-text="Write something about yourself">
                                        <x-input.rich-text wire:model.lazy="about" id="about" :initial-value=$about
                                            placeholder="Write something about yourself" />
                                    </x-input.group>
                                </div>


                                <div class="">
                                    <x-input.group label="Count" for="count">
                                        <div wire:model.debounce="count">

                                            <button type="button" x-data="{ count: 0 }"
                                                @click="count++; $dispatch('input',count)" x-text="count">0</button>
                                        </div>

                                        {{-- <div wire:ignore>
                                           Count:: <button type="button" onclick="this.innerText = Number(this.innerText)+1">0</button>
                                       </div> --}}
                                    </x-input.group>
                                    Livewire count: {{ $count }}
                                </div>


                                <div class="">
                                    <x-input.group label="Photo" for="avatar" :error="$errors->first('avatar')">
                                        <x-input.photo wire:model="avatars" id="avatar" name="avatar" />

                                    </x-input.group>
                                </div>


                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Cover photo
                                    </label>
                                    <div
                                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload"
                                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                        class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cancel
                                </button>

                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!--content end-->

    </div>
    <!-- /End replace -->
</div>
