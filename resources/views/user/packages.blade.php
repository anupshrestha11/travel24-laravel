@extends('user.layouts.mainlayout')

@section('content')

<!-- ! Start of content -->
<section class="package__container">
  <div class="sub__heading">
    <h2>{{$country->countryname}}</h2>
  </div>

  <div class="package__cards">
    @foreach ($packageDest as $dest)

    <div class="package__card">
      <a href="{{route('view.destination',$dest->id)}}">
        <img src="{{url('/countrydestimage'.'/'.$dest->imagename)}}" alt="" /></a>
      <div class="package__info">
        <div class="title">
          <a href="{{route('view.destination',$dest->id)}}">
            <h4>{{$dest->title}}</h4>
          </a>
        </div>
        <div class="content">
          <p><span class="material-icons">schedule</span>{{$dest->duration}}</p>
          <p><span class="price">RS.{{$dest->price}}</span></p>
        </div>
      </div>
    </div>
    @endforeach




  </div>

</section>
@endsection


<!-- ! end of Content -->