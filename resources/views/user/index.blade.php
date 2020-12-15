@extends('user.layouts.mainlayout')
@section('content')



<section class="landing__view" id="landing__view">
    <h1 class="heading">Travel 24</h1>
    <p class="tagline">
        Travel 24 Line Here
    </p>
    <button onclick="location.href = '#top_destinations'" class="booknow__btn" style="font-size: 1.3rem; ">Book Now</button>
</section>

<section class="intro__section" id="intro">
    <div class="sub__heading m-0  mt-4 " style="width: 100%">
        <h2 style="margin: 10px 30px; margin-right: auto">Welcome to Travel 24</h2>
    </div>
    <div class="intro">
        <div class="intro__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad esse
            possimus odit voluptates minima deserunt laudantium? Commodi
            voluptatibus perferendis corrupti magni dolore quae est suscipit
            quibusdam voluptas temporibus. Quas, mollitia animi. Natus, facilis
            incidunt modi quae sunt a tempore at totam pariatur, enim iusto.
            Veritatis at cupiditate sunt exercitationem, quibusdam id. Natus minus
            aperiam, eum, laborum, ipsa reprehenderit repellendus aut autem
            praesentium officia dolor! Magni, quam molestiae dolorum saepe Lorem
            ipsum dolor sit amet consectetur adipisicing elit. Ducimus eligendi
            minima dolorum repellat maiores in, et Lorem ipsum dolor sit.
        </div>
        <div class="intro__video">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/89s6vHB6_Gw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section class="dist__section">
    <div class="sub__heading">
        <h3 class="mb-1">Destinations</h3>
    </div>
    <style>
        .dist.tabview {
            max-width: unset;
        }

        @media (max-width:1570px) {
            .dist.tabview {
                max-width: 800px;
            }


        }

    </style>
    <div class="dist tabview" style="justify-content: center;">
        @foreach ($countries as $country)

        <div class="dist__card" style="min-height: unset; height: 200px; position: relative; border-radius: unset; margin: 20px;">
            <a href="{{route('view.package',$country->slug)}}" style="height: 100%"><img src="{{url('/countryimage'.'/'.$country->imagename)}}" alt="" class="dist__img" style="height: 100%; min-height: unset; object-fit: cover" />
            </a>
            <div class="dist__content " style="position: absolute; bottom: 0; left: 0; right:0; background: #00000050;">
                <div class="dist__name">
                    <a href="{{route('view.package',$country->slug)}}"><strong class="text-white">{{$country->countryname}}</strong></a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</section>

<section class="dist__section" id="top_destinations">
    <div class="sub__heading">
        <h3 class="mb-1">Top Destinations</h3>
    </div>
    <div class="dist">


        @foreach ($topDest as $dest)

        <div class="dist__card">
            <a href="{{route('view.destination',$dest->slug)}}"><img src="{{url('/countrydestimage'.'/'.$dest->imagename)}}" alt="" class="dist__img" />
                <span class="material-icons rating">star star star star star_half</span>
            </a>
            <div class="dist__content">
                <div class="dist__name">
                    <a href="{{route('view.destination',$dest->slug)}}"><strong>{{$dest->title}}</strong></a>
                </div>
                <div class="dist__detail">
                    <p><strong>Duration: </strong> {{$dest->duration}}</p>
                    <p><strong>Difficulty: </strong> {{$dest->difficulty}}</p>
                    <p><strong>Price: </strong><span class="price"> {{$dest->price}}</span></p>
                </div>
            </div>
            <a href="{{route('view.destination',$dest->slug)}}" class="dist__booknow">Book now</a>
        </div>
        @endforeach

    </div>
</section>

<section class="dist__section">
    <div class="sub__heading ">
        <h3 class="mb-1">Our Activities</h3>
    </div>
    <div class="dist" style="justify-content: center">
        @foreach ($activities->take(6) as $activity)

        <div class="dist__card" style="min-height: unset; height: 200px; position: relative; border-radius: unset; margin: 20px;">

            <a href="{{ route('view.activity', ['slug'=>$activity->slug])}}" style="height: 100%"><img src="{{url('/activityimage'.'/'.$activity->image_name)}}" alt="" class="dist__img" style="height: 100%; min-height: unset; object-fit: cover" />
            </a>
            <div class="dist__content " style="position: absolute; bottom: 0; left: 0; right:0; background: #00000050;">
                <div class="dist__name">
                    <a href="{{ route('view.activity', ['slug'=>$activity->slug])}}"><strong class="text-white">{{$activity->title}}</strong></a>

                </div>
            </div>
        </div>
        @endforeach
        @if(count($activities) > 6)

        <a class="btn btn-secondary" style=" padding: 10px;" href="{{route('view.activities')}}"> View More Activites</a>

        @endif
    </div>
</section>

<section class="testimomial__section">
    <div class="sub__heading">
        <h3>What Our Client Say</h3>
    </div>
    <div class="testimonial__wrapper" id="testimonials">
        @foreach ($testimonials as $testiment)

        <div class="testimonial__card">
            <div class="testiment__content">
                <div class="testiment__name">
                    <strong>{{$testiment->name}}</strong> <small>{{$testiment->country}}</small>
                </div>

                <div class="d-flex justify-content-between mr-1">
                    <span class="material-icons rating" style="color: #F3B431">
                        @for ($i = 0; $i < $testiment->rating; $i++)
                            star
                            @endfor
                    </span>
                    <div>
                        <p class="p-0 m-0">{{$testiment->created_at->diffForHumans()}}</p>
                    </div>

                </div>


                <div class="testiment__text">
                    <p>
                        {!!$testiment->testiment!!}

                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if(count($testimonials) > 0)
    <ul class="controls" id="customize-controls">
        <li class="prev">
            <span class="material-icons">
                arrow_back_ios
            </span>

        </li>
        <li class="next">
            <span class="material-icons">
                arrow_forward_ios
            </span>

        </li>
    </ul>


    @endif

</section>



<section class="dist__sections">
    <div class="sub__heading ">
        <h3 class="mb-1">Recommended By</h3>
    </div>

    <ul class="list-unstyled d-flex justify-content-around recommend">
        <li class="d-block">
            <img src="{{ url('recommend/nepal_goverment.png') }}" alt="" class="image-fluid" />
        </li>
        <li class="d-block">
            <img src="{{ url('recommend/visitnepal.jpg') }}" alt="" class="image-fluid" />
        </li>
        <li class="d-block">
            <img src="{{ url('recommend/ntb.png') }}" alt="" class="image-fluid" />
        </li>
        <li class="d-block">
            <img src="{{ url('recommend/taan.png') }}" alt="" class="image-fluid" />
        </li>

    </ul>
</section>




@endsection
