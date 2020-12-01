<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\Message;
class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
        

    }

   
    public function login(Request $request)

    {
            if(Auth::attempt(['username' => $request['username'], 'password' => $request['password']]))
            {

                   return redirect()->intended(route('admin.dashboard'));
            }
            else{

                return redirect()->back()->with('error','Login Credentials Donot Match');
            }

    }

    public function logout()
    {
        if(Auth::user())
        {
            Auth::logout();
            return redirect('/admin');

        }
        else
        {
        return redirect('/admin');

        }
    }



    public function contactForm()
    {
        $contact=Contact::latest()->first();
       
        return view('admin.contact',compact('contact'));
    }

    public function postContact(Request $request)
    {
        $contact=Contact::latest()->first();
        $contact->email=$request['email'];
        $contact->phone=$request['contactnumber'];
        $contact->address=$request['address'];
        $contact->update();
 
        return redirect()->back()->with('success','Contact Address Updated Sucessfully');

    }
    public function getMessages()
    {
        $messages=Message::all();
        return view('admin.messages',compact('messages'));
    }
    public function deleteMessage($id)
{

    $messageToDel=Message::findOrFail($id);
    $messageToDel->delete();
    return redirect()->back()->with('success','Message Deleted Sucessfully');
}
}
