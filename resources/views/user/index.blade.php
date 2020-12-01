
@extends('user.layouts.mainlayout')
@section('content')
    
 

    <section class="landing__view" id="landing__view">
      <h1 class="heading">Travel 24</h1>
      <p class="tagline">
    Travel 24 Line Here
      </p>
      <button class="booknow__btn">Book Now</button>
    </section>

    <section class="intro__section">
      <div class="sub__heading">
        <h2>Welcome to Travel 24</h2>
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
          <iframe
            width="100%"
            height="100%"
            src="https://www.youtube.com/embed/89s6vHB6_Gw"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </section>

    <section class="dist__section">
      <div class="sub__heading">
        <h3>Destinations</h3>
      </div>
      <div class="dist">
        @foreach ($frontDest as $dest)
            
        <div class="dist__card">
          <img src="{{url('/countrydestimage'.'/'.$dest->imagename)}}" alt="" class="dist__img" />
          <div class="dist__content">
            <div class="dist__name">
              <strong>{{$dest->title}}</strong>
            </div>
            <div class="dist__text">
             {{$dest->tripintroduction}}
            </div>
            <a href="#" class="dist__btn">Read More</a>
          </div>
        </div>
        @endforeach
      
       
      </div>
    </section>

    <section class="dist__section">
      <div class="sub__heading">
        <h3>Top Destinations</h3>
      </div>
      <div class="dist">
      
       
      @foreach ($topDest as $dest)
          
        <div class="dist__card">
          <a href="{{route('view.destination',$dest->id)}}"
            ><img src="{{url('/countrydestimage'.'/'.$dest->imagename)}}" alt="" class="dist__img" />
            <span class="material-icons rating"
              >star star star star star_half</span
            >
          </a>
          <div class="dist__content">
            <div class="dist__name">
              <a href="destination.html"
                ><strong>{{$dest->title}}</strong></a
              >
            </div>
            <div class="dist__detail">
              <p><strong>Duration: </strong> {{$dest->duration}}</p>
              <p><strong>Difficulty: </strong> {{$dest->difficulty}}</p>
              <p><strong>Price: </strong><span class="price"> {{$dest->price}}</span></p>
            </div>
          </div>
        <a href="{{route('view.destination',$dest->id)}}" class="dist__booknow">Book now</a>
        </div>
      @endforeach
       
      </div>
    </section>

    <section class="testimomial__section">
      <div class="sub__heading">
        <h3>What Our Client Say</h3>
      </div>
      <div class="testimonial__wrapper">
        <div class="testimonial__card">
          <img src="./static/images/person.jpg" alt="" />
          <div class="testiment__content">
            <div class="testiment__name">
              <strong>John Doe</strong>
            </div>
            <div class="testiment__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              pariatur illum quod consequatur dolores dicta totam obcaecati,
              expedita velit explicabo.
            </div>
          </div>
        </div>
        <div class="testimonial__card">
          <img src="./static/images/person.jpg" alt="" />
          <div class="testiment__content">
            <div class="testiment__name">
              <strong>John Doe</strong>
            </div>
            <div class="testiment__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              pariatur illum quod consequatur dolores dicta totam obcaecati,
              lorem100
            </div>
          </div>
        </div>
        <div class="testimonial__card">
          <img src="./static/images/person.jpg" alt="" />
          <div class="testiment__content">
            <div class="testiment__name">
              <strong>John Doe</strong>
            </div>
            <div class="testiment__text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
              pariatur illum quod consequatur dolores dicta totam obcaecati,
              expedita velit explicabo.
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
