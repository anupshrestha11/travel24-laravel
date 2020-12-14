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
                <li class="nav__link"><a href="/#intro">About us</a></li>
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
                            {{-- @foreach($countries as $country)
                            <li>
                                <a class="dropdown-item dropdown-toggle" href="{{route('view.package',$country->slug)}}">
                            {{$country->countryname}}</a>
                </li>
                @endforeach --}}

                <li>
                    <a class="dropdown-item" href="#">
                        Trekking and Tour
                    </a>
                </li>
            </ul>
            </div>
            </li>


            <li class="nav__link"><a href="{{route('view.gallery')}}">Gallery</a></li>

            <li class="nav__link"><a href="#">Testimonials</a></li>

            <li class="nav__link"><a href="{{route('view.contactus')}}">Contact us</a> </li>

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

    <section class="my-4 py-4">
        <h3 class="text-center my-4 font-weight-bolder">Our Affilates</h3>
        <ul class="list-unstyled d-flex justify-content-around">
            <li class="d-block">Affilates 1</li>
            <li class="d-block">Affilates 1</li>
            <li class="d-block">Affilates 1</li>
            <li class="d-block">Affilates 1</li>
            <li class="d-block">Affilates 1</li>
            <li class="d-block">Affilates 1</li>
        </ul>
    </section>

    <footer class="main__footer">
        <div class="contacts">
            <h5>Contact Us</h5>
            <div class="contact__detail">
                <p>{{$contact->email}}</p>
                <p>{{$contact->phone}}</p>
                <p>{{$contact->address}}</p>
            </div>
        </div>

    </footer>

    <script src="{{asset('/js/user/script.js')}}"></script>
    <script>
        responsiveNav();
        scrollNav();

    </script>
    <!-- ! Bootstrap js  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
