<?php

namespace App\Http\Controllers\Front;
use App\Mail\ReplyMail;
use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use App\Models\Contact;
use App\Models\Video;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;
use Session;



class IndexController extends Controller{

    public function index(Request  $request){
    return view('front.home.index');
    }
    public function watchLive(){
      return view('front.pages.watchLive');
    }
    public function video(){
      return view('front.pages.video');
    }
    public function news(){
      return view('front.pages.news');
    }
    public function contact(){
      return view('front.pages.contact');
    }
    public function dashboard(){
      if(Auth::check()){
      return view('front.user.user_dashboard');
      }else{
          session()->flash('success','Please Login At First');
          return redirect()->back();
      }
    }
    public function changePasswordPage(){
      if(Auth::check()){
       return view('front.user.changePassword');
      }else{
        session()->flash('success','Sorry You cannot Access These Url');
        return redirect()->back();
      }
    }
    public function userProfile($id){
      if(Auth::check()){
       return view('front.user.changeProfile',compact('id'));
      }else{
        session()->flash('success','Sorry You cannot Access These Url');
        return redirect()->back();
      }
    }
    public function changeUserProfile(Request $request){
      $id=$request->id;
      User::find($id)->update([ 'name'=>$request->name,
                                'email' => $request->email,
                                'country' =>$request->country,
                                'phone_code' =>$request->phone_code
                              ]);
        session()->flash('success','User Information Sucesfully Updated');     
       return redirect()->back();      
    }
    public function changePassword(Request $request){
      $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => ['required'],
        'new_confirm_password' => ['same:new_password'],
      ]);
    User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
    session()->flash('success','Password change succesfully');
    return redirect()->back();
    }
    public function store(Request $request){
        Contact::create([
       "name" =>$request->name,
       "email" =>$request->email,
       "number"=>$request->number,
       "subject"=>$request->subject,
       "message"=>$request->message,
      ]);
        session()->flash('success','Message sucesfully sent');
        return redirect()->back();
    }
    public function videoDetail($id){
      $video=Video::findorfail($id);
      return view('front.pages.videoDetail',compact('video'));
    }
    //
}

