<header>
<title>Go Learn</title>
    <a href="{{url('/')}}">
        <div class="logo">
            <img src="{{url('/pics/learn 2.svg')}}" alt="Image" width="100%" height="100%"/>
            </div>
            <div class="logo1">
            <img src="{{url('/pics/Go Learn.svg')}}" alt="Image" width="100%" height="100%"/>
            </div>

    </a>
    </header>
<x-guest-layout>
    <div class="body">
        <x-auth-card >
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
            <x-slot name="logo">
                <a href="/">
                    
                </a>
            </x-slot>
    
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('')" />
    
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email Address" :value="old('email')" required autofocus style="box-sizing: border-box;

position: absolute;
width: 639px;
height: 60px;
left: 147px;
top: 254px;

background: #FFFFFF;
border: 1px solid #B5B2B2;
border-radius: 22px;" />
    
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 310px;
    font-size:larger;"/>
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('')" />
    
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="current-password" style="
    box-sizing: border-box;

    position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 360px;

    background: #FFFFFF;
    border: 1px solid #B5B2B2;
    border-radius: 22px;
    "/>
    
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 500px;
    font-size:larger;"/>
                </div>
    
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember" style="   position: absolute;
    width: 20px;
    height: 29px;
    left: 160px;
    top: 450px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 29px;
    text-decoration:none;


    color: #B5B2B2;">
                        <span class="ml-2 text-sm text-gray-600" style="   position: absolute;
    width: 339px;
    height: 29px;
    left: 180px;
    top: 450px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 29px;
    text-decoration:none;


    color: #0F5888;">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="   position: absolute;
    width: 339px;
    height: 29px;
    left: 550px;
    top: 450px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 29px;
    text-decoration:none;


    color: #0F5888">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-primary-button class="ml-3" style="    color: #0F5888;
    position: absolute;
    width: 60px;
    height: 25px;
    left: 427px;
    top: 392px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;

    position: absolute;
    width: 160px;
    height: 44px;
    left: 401px;
    top: 520px;

    background: #DDF1FF;
    border-radius: 22px;">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <div class="image">
                <img src="{{url('/pics/img1.png')}}" alt="Image" width="100%" height="100%"/>
            </div>
        </x-auth-card>


    </div>

      <!--Footer-->
      <Section id="footer">
        <div class="foot_wrap">
            <div class="foot_row">
                <div class="wraps">
                    <h3>Go Learn</h3>
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+234 813 456 4678</p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i>go_learn@edu.ng</p>
                    <p><i class="fa fa-instagram" aria-hidden="true"></i>go_learn</p>
                </div>
                <div class="wraps">
                    <h3>Community</h3>
                    <p>About</p>
                    <p>Volunteer</p>
                    <p>Donate</p>
                </div>
                <div class="wraps">
                    <h3>Policy</h3>
                    <p>Terms of use</p>
                    <p>Press</p>
                    <p>Affliates</p>
                </div>
            </div>
        </div>
    </Section>

</x-guest-layout>
