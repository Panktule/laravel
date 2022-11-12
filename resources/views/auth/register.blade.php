<body>
<title>Go Learn</title>
    <header>
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
        <x-auth-card>
            <link rel="stylesheet" href="{{ asset('css/main.css') }}">
            <x-slot name="logo">
            </x-slot>
   
            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                <!-- Name -->
                <div>
                    <!-- <x-input-label for="name" :value="__('Name')" /> -->
    
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="FullName" :value="old('name')" required autofocus style="  box-sizing: border-box;

    position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 162px;

    background: #FFFFFF;
    border: 1px solid #B5B2B2;
    border-radius: 22px;"/>
    
                    <x-input-error  :messages="$errors->get('name')" class="mt-2" style="position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 220px;
    font-size:larger;"/>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <!-- <x-input-label for="email" :value="__('Email')" /> -->
    
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"  placeholder="Email Address" :value="old('email')" required style="box-sizing: border-box;

    position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 254px;

    background: #FFFFFF;
    border: 1px solid #B5B2B2;
    border-radius: 22px;"/>
    
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 310px;
    font-size:larger;" />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->
    
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="new-password" style="                    
box-sizing: border-box;

    position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 340px;

    background: #FFFFFF;
    border: 1px solid #B5B2B2;
    border-radius: 22px;
    " />
    
                    <x-input-error :messages="$errors->get('password')" class="mt-2" style="position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 400px;
    font-size:larger;"/>
                </div>
    
                <!-- Confirm Password -->
                <div class="mt-4">
                    <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->
    
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    placeholder="Confirm Password"
                                    name="password_confirmation" required style="   box-sizing: border-box;

    position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 420px;


    background: #FFFFFF;
    border: 1px solid #B5B2B2;
    border-radius: 22px;"/>
    
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="position: absolute;
    width: 639px;
    height: 60px;
    left: 147px;
    top: 600px;
    font-size:larger;"/>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="   position: absolute;
    width: 339px;
    height: 29px;
    left: 447px;
    top: 480px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 29px;
    text-decoration:none;


    color: #0F5888;">
                        {{ __('Already a member? Login here') }}
                     </a> <br> <br>
    
                    <x-primary-button class="ml-4" style="    color: #0F5888;
    position: absolute;
    width: 77px;
    height: 25px;
    left: 427px;
    top: 392px;

    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;

    position: absolute;
    width: 191px;
    height: 44px;
    left: 401px;
    top: 570px;

    background: #DDF1FF;
    border-radius: 22px;">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
            <div class="image">
            <img src="{{url('/pics/img1.png')}}" alt="Image" width="100%" height="100%"/>
        </div>

            
        </x-auth-card>
    </x-guest-layout> <br> <br>
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
    
</body>
