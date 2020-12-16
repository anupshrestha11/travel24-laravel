<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel 24</title>

    <!-- ! bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- ! font Nunito -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- ! material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">



    <link rel="stylesheet" href="{{asset('/css/user/main.css')}}" />


</head>

<body>
    <header class="main__header
    
   @if(!Request::is('/'))
    scrolled remove-fixed top-sticky shadow-none
    @endif
    " id="main__header" style="z-index: 100000">
        <div class="logo__wrapper">
            <a href="/" class="logo__btn">
                <img class="logo"><img src="{{ asset('logo.png') }}" style=" height: 95px; object-fit: contain; margin: -50px -10px; transform: scale(1.1);" alt="travel 24 logo ">
            </a>
        </div>
        <div class="burger" id="burger__menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav>




            <ul class="nav__items">
                <li class="nav__link"><a href="/#intro">About</a></li>
                <li class="nav__link dropdown">
                    <div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Destinations
                        <ul class="dropdown-menu dropdown-menu-right bg-transparent " style="background-color: white !important; color: black !important;">
                            @foreach($countries as $country)
                            <li>
                                <a class="dropdown-item dropdown-toggle" href="{{route('view.package',$country->slug)}}">
                                    {{$country->countryname}}</a>
                                @if (count($country->countrydestinations()->get())>0)
                                <ul class="submenu submenu-left dropdown-menu bg-transparent" style="left:100%; top: -10px;">
                                    @foreach ($country->countrydestinations()->get()->take(5) as $package)
                                    <li>
                                        <a class="dropdown-item" href="{{route('view.destination',$package->slug)}}">{{$package->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                    </div>



                </li>
                <li class="nav__link">
                    <div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Activities

                        <ul class="dropdown-menu dropdown-menu-right bg-transparent " style="background-color: white !important; color: black !important;">
                            @foreach($activities->take(6) as $activity)
                            <li>
                                <a class="dropdown-item" href="{{ route('view.activity', ['slug'=>$activity->slug])}}">

                                    {{$activity->title}}</a>
                            </li>
                            @endforeach
                            @if(count($activities) > 6)
                            <hr>
                            <li>
                                <a href="{{route("view.activities")}}" class="dropdown-item">
                                    view More Activities
                                </a>
                            </li>
                            @endif


                        </ul>
                    </div>
                </li>


                <li class="nav__link"><a href="{{route('view.gallery')}}">Gallery</a></li>

                <li class="nav__link"><a href="#">Testimonials</a></li>

                <li class="nav__link"><a href="{{route('view.contactus')}}">Contact</a> </li>

            </ul>
        </nav>
    </header>
    <div class="sidebar" id="sidebar">
        <ul class="nav__items">
            <li class="nav__link flex-column">
                <a href="/" class="nav-link collapsed d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#destinations">Destinations <i class="fas fa-chevron-down rotate"></i></a>
                <ul id="destinations" class="collapse p-0">
                    @foreach($countries as $country)
                    <li class="nav-item list-unstyled">
                        <a href="{{route('view.package',$country->id)}}" class="nav-link">{{$country->countryname}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav__link"><a href="#">About us</a></li>
            <li class="nav__link"><a href="{{route('view.contactus')}}">Contact us</a></li>
            <li class="nav__link"><a href="#">Our Gallery</a></li>
        </ul>
    </div>
    <div class="backdrop" id="backdrop"></div>

    @yield('content')

    <footer class="main__footer">
        <div class="contacts">
            <div class="sub__heading">
                <h5>Contact Address</h5>
            </div>
            <div class="contact__item d-flex justify-content-between align-items-center">
                <div class="title align-items-center d-flex">
                    <span class="material-icons">account_circle</span>
                </div>
                <div class="content ">
                    {{$contact->name}}
                </div>
            </div>
            <div class="contact__item d-flex justify-content-between align-items-center">
                <div class="title align-items-center d-flex">
                    <span class="material-icons">location_on</span>
                </div>
                <div class="content ">
                    {{$contact->address}}
                </div>
            </div>

            <div class="contact__item d-flex justify-content-between align-items-center">
                <div class="title align-items-center d-flex">
                    <span class="material-icons">call</span>

                </div>
                <div class="content ">
                    {{$contact->phone}}
                </div>
            </div>
            <div class="contact__item d-flex justify-content-between align-items-center">
                <div class="title align-items-center d-flex">
                    <span class="material-icons">email</span>
                </div>
                <div class="content ">
                    {{$contact->email}}
                </div>
            </div>
        </div>

        <div class="contacts">
            <div class="sub__heading">
                <h5>Quick Links</h5>

            </div>

        </div>

        <div class="map">
            <div class="sub__heading">
                <h5>Location:</h5>
            </div>

            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28262.13079913638!2d85.31053821466584!3d27.693615498500222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18e2c38d87eb%3A0x8646b46ca5ab0660!2sTravel%2024%20Nepal!5e0!3m2!1sen!2snp!4v1598167470319!5m2!1sen!2snp" width="100%" height="100%" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
        <div class="social">
            <div class="sub__heading">
                <h5>Follow us on</h5>

            </div>

            <ul>
                <li><a href="">
                        <svg viewBox="0 0 36 36" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4" fill="url(#jsc_s_2)" height="24" width="24">
                            <defs>
                                <linearGradient x1="50%" x2="50%" y1="97.0782153%" y2="0%" id="jsc_s_2">
                                    <stop offset="0%" stop-color="#0062E0"></stop>
                                    <stop offset="100%" stop-color="#19AFFF"></stop>
                                </linearGradient>
                            </defs>
                            <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path>
                            <path class="p361ku9c" fill="#fff" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path>
                        </svg>

                    </a></li>
                <li><a href="">
                        <svg class="gUZ lZJ U9O kVc" height="24" width="24" viewBox="0 0 24 24" aria-hidden="true" aria-label="" role="img">
                            <path fill="red" d="M0 12c0 5.123 3.211 9.497 7.73 11.218-.11-.937-.227-2.482.025-3.566.217-.932 1.401-5.938 1.401-5.938s-.357-.715-.357-1.774c0-1.66.962-2.9 2.161-2.9 1.02 0 1.512.765 1.512 1.682 0 1.025-.653 2.557-.99 3.978-.281 1.189.597 2.159 1.769 2.159 2.123 0 3.756-2.239 3.756-5.471 0-2.861-2.056-4.86-4.991-4.86-3.398 0-5.393 2.549-5.393 5.184 0 1.027.395 2.127.889 2.726a.36.36 0 0 1 .083.343c-.091.378-.293 1.189-.332 1.355-.053.218-.173.265-.4.159-1.492-.694-2.424-2.875-2.424-4.627 0-3.769 2.737-7.229 7.892-7.229 4.144 0 7.365 2.953 7.365 6.899 0 4.117-2.595 7.431-6.199 7.431-1.211 0-2.348-.63-2.738-1.373 0 0-.599 2.282-.744 2.84-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12"></path>
                        </svg></a></li>

                <li>
                    <a href="">

                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/200px-Gmail_icon_%282020%29.svg.png" width="24px" alt="">


                    </a>
                </li>
                <li><a href="">
                        <img src="https://instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico" width="24px" alt="">

                    </a></li>



            </ul>
        </div>

    </footer>
    <div class="powered__by">
        <div>
            Copyright &copy; Travel24.com.np
        </div>
        <div>
            powered by : <a href="https://diggimarknepal.com/" class="btn text-white shadow-none" style="cursor: pointer !important">Diggimark Nepal</a>


        </div>
    </div>

    <!-- ! Bootstrap js  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>


    <script src="{{asset('/js/user/script.js')}}"></script>
    <script>
        responsiveNav();
        scrollNav();

    </script>


</body>

</html>
