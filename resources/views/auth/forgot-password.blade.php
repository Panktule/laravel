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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600" style="font-size: 20px;">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email Address" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button style="    color: #0F5888;
    position: absolute;
    width: 60px;
    height: 25px;
    left: 600px;
    top: 392px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 34px;

    position: absolute;
    width: 400px;
    height: 25px;
    left: 560px;
    top: 430px;

    background: #DDF1FF;
    border-radius: 22px;">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>

        
      <!--Footer-->
      <!-- <Section id="footer">
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
    </Section> -->
    </x-auth-card>
</x-guest-layout>
