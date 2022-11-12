


<div class="main">




<div class="logos">
    <div class="logo">
        <img src="{{url('/pics/learn 2.svg')}}" alt="Image" width="100%" height="100%" />
    </div>
    <div class="logo1">
        <img src="{{url('/pics/Go Learn.svg')}}" alt="Image" width="100%" height="100%" />
    </div>
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
    <!-- Settings Dropdown -->
    <div class="hidden sm:flex sm:items-center sm:ml-6" style="padding-left: 1300px; padding-top:30px; font-size:larger">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button style="color: #0F5888;font-size:larger; font-weight:200;" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div>{{ Auth::user()->name }}</div>
    
                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
    
            <x-slot name="content">
                <!-- Authentication -->
                <form  method="POST" action="{{ route('logout') }}">
                    @csrf
    
                    <x-dropdown-link :href="route('logout')" style="color: white; background-color: #539fd5; border-radius:5px; font-size:larger; font-weight: medium;" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            
            </x-slot>
        </x-dropdown>
    </div>
    
    </div>

    <header>Our Resources</header>
            <div class="body">
        
                <div class="section">
        
                    <div class="books">
                        <div class="book">
                           <a download="/pdf/jss1.pdf" href=""><img class="book1" src="{{url('/pics/book1.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                            <!-- <button class="download"><a href=""><img src="{{url('/pics/download.svg')}}" alt="image" width="5%" height="5%"></a></button> -->
                            <a download="/pdf/jss1.pdf" href=""><img class="book2" src="{{url('/pics/book2.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                            <a download="/pdf/jss1.pdf" href=""><img class="book3" src="{{url('/pics/book3.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
            
                    <div class="books">
                        <div class="bookone">
                        <a download="/pdf/jss1.pdf" href=""><img class="book4" src="{{url('/pics/book4.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book5" src="{{url('/pics/book5.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book6" src="{{url('/pics/book6.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
            
                    <div class="books">
                        <div class="booktwo">
                        <a download="/pdf/jss1.pdf" href=""><img class="book7" src="{{url('/pics/book7.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book8" src="{{url('/pics/book8.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book9" src="{{url('/pics/book9.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
            
                    <div class="books">
                        <div class="bookthree">
                        <a download="/pdf/jss1.pdf" href=""><img class="book10" src="{{url('/pics/book10.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book11" src="{{url('/pics/book11.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book12" src="{{url('/pics/book12.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
            
                    <div class="books">
                        <div class="bookfour">
                        <a download="/pdf/jss1.pdf" href=""><img class="book13" src="{{url('/pics/book13.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book14" src="{{url('/pics/book14.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book15" src="{{url('/pics/book15.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
            
                    <div class="books">
                        <div class="bookfive">
                        <a download="/pdf/jss1.pdf" href=""><img class="book16" src="{{url('/pics/book16.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book17" src="{{url('/pics/book17.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book18" src="{{url('/pics/book18.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
            
                    <div class="books">
                        <div class="booksix">
                        <a download="/pdf/jss1.pdf" href=""><img class="book19" src="{{url('/pics/book19.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book20" src="{{url('/pics/book20.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        <a download="/pdf/jss1.pdf" href=""><img class="book21" src="{{url('/pics/book21.svg')}}" alt="Image" width="100%" height="100%"/></a> 
                        </div>
            
                    </div>
                </div>
        
                <div class="classes">
                    <a href="{{url('jss1')}}"><button>JSS1</button></a> <br> <br> <br>
                    <a href="{{url('jss2')}}"><button>JSS2</button></a><br> <br> <br>
                    <a href="{{url('jss3')}}"><button>JSS3</button></a> <br> <br> <br>
                    <a href="{{url('sss1')}}"><button>SSS1</button></a> <br> <br> <br>
                    <a href="{{url('sss2')}}"><button>SSS2</button></a> <br> <br> <br>
                    <a href="{{url('sss3')}}"><button>SSS3</button></a> <br> <br> <br>
                    <a href="{{url('audio')}}"><button>Audio</button></a>
        
                </div>
        
        
            </div>
        
        

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
<title>Go Learn</title>


<!-- Hamburger -->
<div class="-mr-2 flex items-center sm:hidden">
    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
</div>
</div>

<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
        <div class="px-4">
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>

        <div class="mt-3 space-y-1">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
          
        </div>
    </div>
</div>
</nav>
