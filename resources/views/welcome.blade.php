<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css'); }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>


    <title>Go Learn</title>
</head>
<body>
    <div class="hero-wrap">
        <div class="nav-bar-wrap">
            <a href="#"><img class="logo-img" src="{{url('/pics/learn 2.svg')}}" alt="logo"><h3>Go Learn</h3></a>
            <nav>
                <ul>
                    <li><a class="btn reg" href="{{ url('register') }}">Register</a></li>
                    <li><a class="btn reg" href="{{ url('login') }}" class="btn login">Login</a></li>
                </ul>
            </nav>
        </div>
        
        <div class="hero">
            <div class="hero_left">
                <h1>We are your online <br> study buddy!</h1>
                <p>...giving you a headstart <br>We provide every African child the access to the complete secondary school curriculum.</p>
                <a class="btn reg" href="{{ url('register') }}" class="btn login">Get Started</a>
            </div>

            <div class="hero_right">
                <img src="{{url('/pics/kiss.png')}}" alt="">
            </div>
        </div>
    </div>

    <!--How it works-->
    <Section id="works">
        <h4>Let's show you...</h4>
        <div class="works">
            
            <img src="{{url('/pics/img2.svg')}}" alt="People">
        
            <div class="works_text">
                <h2>How it works</h2>
                <p>Register with us and you’ll be granted full access to our limitless resources.
                    We have text books, past questions of both WAEC, NECO & NABTEB depending on your need.
                    We are a non profit site that is here to see that no child s left behind. 
                    We believe every child deserves the right to quality education.</p>
                <a  href="{{url('register')}}"><button class="btn reg">My Class</button></a> 
            </div>
        </div>
    </Section>

    <!--Pick a class-->
    <Section id="class">
        <div class="classes-sec">
                <div class="classes">
                <h2>Pick a Class <br>Start Now!</h2>
                    <div class="class_split">
                        <div class="jss">
                            <div class="class_row">
                                <a href="{{('jss1')}}">
                                    <div class="js_box">
                                        <h4>JSS1</h4>
                                        <hr>
                                        <p>Junior Ed</p>
                                    </div>
                                </a>
                                <a href="{{('sss1')}}">
                                    <div class="js_box">
                                        <h4>SSS1</h4>
                                        <hr>
                                        <p>Senior Ed</p>
                                    </div>
                                </a>
                            </div>
                            <div class="class_row">
                                <a href="{{('jss2')}}">
                                    <div class="js_box">
                                        <h4>JSS2</h4>
                                        <hr>
                                        <p>Junior Ed</p>
                                    </div>
                                </a>
                                <a href="{{('sss2')}}">
                                    <div class="js_box">
                                        <h4>SSS2</h4>
                                        <hr>
                                        <p>Senior Ed</p>
                                    </div>
                                </a>
                            </div>
                            <div class="class_row">
                                <a href="{{('jss3')}}">
                                    <div class="js_box">
                                        <h4>JSS3</h4>
                                        <hr>
                                        <p>Junior Ed</p>
                                    </div>
                                </a>
                                <a href="{{('sss3')}}">
                                    <div class="js_box">
                                        <h4>SSS3</h4>
                                        <hr>
                                        <p>Senior Ed</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <img src="{{url('/pics/transparent.png')}}" alt="">
                        
                    </div>
                </div>
        </div>
    </Section>

    <!--Subscribe-->
    <Section id="subscribe">
        <div class="sub_content">
            <h4>Subscribe to our Monthly Updates!</h4>
            <div class="subs">
            <form action=
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            >
                <input class="sub_box" type="email" name="" placeholder="Enter Your email" id="email" required>
                <a href="" type="submit"><button class="btn sub" >Subscribe</button></a> 
             </div>
            </form>
        </div>
    </Section>

    <!--Testimonials-->
    <Section id="testimonial">
        <div class="test_sect">
            <h3>Testimonials</h3>
            <p>Read for yourself, it’s not just hype...</p>
            <div class="container_swipe swiper">
                <div class="test_swipe swiper-wrapper">
                    <div class="test_row swiper-slide">
                        <div class="test_box">
                            <div class="test_boxs">
                                <img src="{{url('/pics/clipart.svg')}}" alt="pic">
                                <div class="box_txt">
                                    <h4>Japheth Kucheti</h4>
                                    <h5>F.G.C Jos</h5>
                                </div>
                            </div>
                            <p>I was struggling with my English classes
                                until i was iuntroduced to Go read. 
                                What a site!</p>
                        </div>
                        <div class="test_box">
                            <div class="test_boxs">
                                <img src="{{url('/pics/clipart.svg')}} "alt="pic">
                                <div class="box_txt">
                                    <h4>Rachael Japheth</h4>
                                    <h5>F.G.C Jos</h5>
                                </div>
                            </div>
                            <p>I was struggling with my English classes
                                until i was iuntroduced to Go read. 
                                What a site!</p>
                        </div>
                    </div>

                    <div class="test_row swiper-slide">
                        <div class="test_box">
                            <div class="test_boxs">
                                <img src="{{url('/pics/clipart.svg')}}" alt="pic">
                                <div class="box_txt">
                                    <h4>Japheth Kucheti</h4>
                                    <h5>F.G.C Jos</h5>
                                </div>
                            </div>
                            <p>I was struggling with my English classes
                                until i was iuntroduced to Go read. 
                                What a site!</p>
                        </div>
                        <div class="test_box">
                            <div class="test_boxs">
                                <img src="{{url('/pics/bgf.jpg')}}" alt="pic">
                                <div class="box_txt">
                                    <h4>Panktule Bi-Allah</h4>
                                    <h5>F.G.C Jos</h5>
                                </div>
                            </div>
                            <p>I was struggling with my English classes
                                until i was iuntroduced to Go read. 
                                What a site!</p>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </Section>

    <!--Contact-->
    <Section id="contact">
        <div class="contact_wrap">
            <h2>Contact Us</h2>
            <p>Let's hear from you</p>
            <form class="contact" action="https://formspree.io/f/xeqdrpaz" method="POST">
                <input type="text" name="name" placeholder="Full name" id="" required><br>
                <input type="email" name="email" placeholder="Email" id="" required><br>
                <input type="text" name="message" placeholder="Message" id="" required><br>
                <a  href="" type="submit"><button class="btn sub" >Send</button></a> 
            </form>
        </div>
    </Section>

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

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js'); }}"></script>

</body>
</html>