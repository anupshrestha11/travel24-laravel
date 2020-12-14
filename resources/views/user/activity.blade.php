@extends('user.layouts.mainlayout')
@section('content')

<!-- ! Start of content -->
<section class="destination__wrapper" style="padding-bottom:50px; ">
    <div class="dest__banner">
        <img src="{{url('/activityimage'.'/'.$activity->image_name)}}" class="banner__img" alt="" />
        <h1 class="heading">{{$activity->title}}</h1>
    </div>
    <div class="destination__detail">
        <div class="trip">
            {{-- <div class="sub__heading">
                <h3>Trip Overview</h3>
            </div> --}}
            <div class="trip__overview mt-3 mx-2">
                <div class="trip__intro " id="introduction">
                    <h4>About Activity</h4>
                    <div class="intro__content">
                        <p>
                            {!! $activity->content !!}
                        </p>

                    </div>
                </div>

            </div>
        </div>
        {{-- <div class="booking__wrapper">
            <h3>Book You Trip Now</h3>
            @include('message.message')
            <p>Price Start From <span class="price">{{$activity->price}}</span> per person</p>
        {{-- <div class="booking__form">
                <form action="{{route('view.booking',$activity->id)}}" method="post">
        @csrf
        <div class="input__box">
            <input type="date" name="date" id="date" required />
        </div>
        <div class="input__box disabled">
            <input type="text" name="duration" id="duration" disabled value="{{$destination->duration}}" required />
        </div>
        <div class="input__box">
            <input type="number" min="1" name="people" id="people" placeholder="No. of Traveller" required />
        </div>
        <div class="input__box">
            <input type="text" name="fullname" id="fullname" placeholder="Full Name" required />
        </div>
        <div class="input__box">
            <input type="email" min="1" name="email" id="email" placeholder="Email" required />
        </div>

        <div class="input__box">
            <input type="number" min="1" name="contactNumber" id="contactNumber" placeholder="Contact Number" required />
        </div>
        <div class="input__box"><input type="text" name="country" placeholder="Your Country Name" required /></div>
        <div class="input__box">
            <textarea name="message" id="message" placeholder="Your Message" wrap="hard"></textarea>
        </div>
        <div class="input__box">
            <input type="submit" value="Book Now" />
        </div>
        </form>
    </div> --}}
    </div> --}}
    </div>
</section>

<!-- ! end of Content -->
@endsection
