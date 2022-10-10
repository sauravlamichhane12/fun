<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Construction;
use App;
use Artisan;
use DB;

class LocalizationController extends Controller
{

    public function lang_change(Request $request)
    {
       
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        session()->flash('success','Lanagugae change succesfully');
        return redirect()->back();
    }

     public function meeting(Request $request,$id){

     $meeting=Construction::findorFail($id);
     
     $meeting->meeting=$request->meeting;
     $meeting->save();
     session()->flash('success','Meeting updated succesfully');
     return redirect()->back();


     }
    public function site($id){
        $site=Construction::findorFail($id);
        
        if($site->site== 1){
            Artisan::call('down');
            $site->site = 0;
        }else{
            Artisan::call('up');
            $site->site =1;
        }
        session()->flash('success','Maintenace mode has been succesfully changed');
        $site->save();
        return redirect()->back();    
    }


    public function liveusers(Request $request){
        $site_users=Db::table('site_users')->get();
        return view('admin.site_users.index',compact('site_users'));

    }
    public function liveusers_destroy($id){
        $site_users=Db::table('site_users')->where('id',$id)->delete();
        session()->flash('error','Live users deleted succesfully');
        return redirect(url('admin/liveusers'));
    } 
    //
}
