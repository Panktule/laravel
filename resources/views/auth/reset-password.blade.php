<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <title>Go Learn</title>
    <a href="{{url('/')}}">
        <div class="logo">
            <img src="{{url('/pics/learn 2.svg')}}" alt="Image" width="100%" height="100%" />
            </div>
            <div class="logo1">
            <img src="{{url('/pics/Go Learn.svg')}}" alt="Image" width="100%" height="100%"/>
            </div>

    </a>
    </header>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email" :value="old('email', $request->email)" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
              

                <x-text-input id="password" class="block mt-1 w-full" type="password" placeholder="Password" name="password" required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
            

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    placeholder="Confirm Password"
                                    name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button style="    color: #0F5888;
    position: absolute;
    width: 10px;
    height: 25px;
    left: 400px;
    top: 900px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 34px;

    position: absolute;
    width: 300px;
    height: 25px;
    left: 600px;
    top: 440px;

    background: #DDF1FF;
    border-radius: 22px;">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
