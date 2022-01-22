<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Create your Account
            </h2>

        </div>
        <form wire:submit.prevent="register" class="mt-8 space-y-6" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <div class="mb-8">
                    <label for="email-address" class="md:font-medium ">Email address</label>
                    <input wire:model="email" id="email-address" name="email" type="email" autocomplete="email" required
                        class="@error('email') border-red-500 @enderror  appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300  text-gray-900 rounded-md focus:outline-none focus:border-red-500 focus:z-10 sm:text-sm">
                    @error('email')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
                </div>

                <div style="margin-bottom:2rem;">
                    <label for="password" class="md:font-medium ">Password</label>
                    <input wire:model.lazy="password" id="password" name="password" type="password"
                        autocomplete="current-password" required
                        class="@error('password') border-red-500 @enderror appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300   rounded-md focus:outline-none focus:border-red-500 focus:z-10 sm:text-sm">
                    @error('password')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="mt-8">
                    <label for="passwordConfirmation" class="md:font-medium ">Password Confirmation</label>
                    <input wire:model.lazy="passwordConfirmation" id="passwordConfirmation" name="passwordConfirmation"
                        type="password" autocomplete="current-passwordConfirmation" required
                        class="@error('passwordConfirmation') border-red-500 @enderror appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300  rounded-md focus:outline-none focus:border-red-500 focus:z-10 sm:text-sm">
                </div>
                @error('passwordConfirmation')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
            </div>


            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Register
                </button>
                <p class="mt-2 text-center text-sm text-gray-600">

                    <a href="{{route('login')}}" class="font-medium text-indigo-600 hover:text-indigo-900">
                        Already have an account?
                    </a>
                </p>
            </div>
        </form>

    </div>
</div>

{{-- <form wire:submit.prevent="register">
    {{$password}}

    <div>
        <label for="email">email</label>
        <input wire:model="email" type="text" id="email" >

        @error('email') <span class="error">{{ $message }}</span> @enderror
     </div>

    <div>
        <label for="password">password</label>
        <input wire:model.lazy="password" type="password" id="password">

        @error('password') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
        <label for="passwordConfirmation">passwordConfirmation</label>
        <input wire:model.lazy="passwordConfirmation" type="password" id="passwordConfirmation">

        @error('passwordConfirmation') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="">
        <input type="submit" value="Register">
    </div>

</form> --}}
