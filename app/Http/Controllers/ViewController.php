<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CountryDestination;
use App\Contact;
use App\Country;
use App\Booking;
use App\Message;
class ViewController extends Controller
{
    //

    public function index()
    {
        $topDest=CountryDestination::where('topdest',1)->get();
        $frontDest=CountryDestination::where('frontdest',1)->get();
        return view('user.index',compact('topDest','frontDest'));
    }
public function contactUs()
{
    return view('user.contact');
}
public function package($id)
{
$country=Country::findOrFail($id);
$packageDest=$country->countrydestinations()->get();
return view('user.packages',compact('packageDest','country'));
}

public function destination($id)
{
    $destination=CountryDestination::findOrFail($id);
   return view('user.destination',compact('destination'));
}

public function booking($id,Request $request)
{
        $destination=CountryDestination::findOrFail($id);
        $newBooking=new Booking;
        $newBooking->bookeddate=$request['date'];
        $newBooking->nop=$request['people'];
        $newBooking->bookedname=$request['fullname'];
        $newBooking->bookedemail=$request['email'];
        $newBooking->bookedphone=$request['contactNumber'];
        $newBooking->message=$request['message'];
        $newBooking->bookedcountry=$request['country'];
        $destination->bookings()->save($newBooking);
        return redirect()->back()->with('success','Your Booking is Placed !! We will Contact You Soon !! Thanku For Choosing Travel24');
}
public function postMessage(Request $request)
{
    Message::create(

[
    'name'=>$request['fullname'],
    'address'=>$request['address'],
    'email'=>$request['email'],
    'phone'=>$request['contactnumber'],
    'message'=>$request['message'],

]

    );
    return redirect()->back()->with('success','Thank You For Your Message!! We will Consider It Soon!! :)');

}

}
