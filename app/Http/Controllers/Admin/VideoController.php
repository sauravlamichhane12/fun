<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.videos.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $validate=$this->validate(request(),[    
                "title" => "required",
                "category" => "required",
                "thumbnail" => "required",
                "video" => "required"
             ]); 
        
        if($request->hasFile('thumbnail')){
             $image = $request->file('thumbnail');
            $destinationPath = 'public/storage/posts/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }
          if($request->hasFile('video')){
             $image1 = $request->file('video');
            $destinationPath1 = 'public/storage/posts/';
            $profileImage1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath1, $profileImage1);
        }
    
        Video::create([
        "title" => $request->title,
        "category" => $request->category,
        "thumbnail" => $profileImage,
        "video" => $profileImage1,
        "status" =>1
        ]);
        
        session()->flash('success','Video Upload Succesfully');
        return redirect( route('videos.index') );

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $video =Video::find($id);
        return view('admin.videos.detail',compact('video'));
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $video =Video::find($id);
        return view('admin.videos.edit',compact('video'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          
        $video=Video::findorfail($id);
        $data=$request->only(['title','category','status']);

       if($request->hasFile('thumbnail')){
             $image = $request->file('thumbnail');
            $destinationPath = 'public/storage/posts/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            Storage::delete($video->thumbnail);
            $data['thumbnail'] =  $profileImage;
         }

       if($request->hasFile('video')){
            $image1 = $request->file('video');
            $destinationPath1 = 'public/storage/posts/';
            $profileImage1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath1, $profileImage1);
            Storage::delete($video->video);
           $data['video'] =  $profileImage1;
         }

        $video->update($data);
        session()->flash('success','Video  Sucesfully Updated');
        return redirect( route('videos.index') );
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Video::find($id)->delete();
        session()->flash('success','Video Deleted Succesfully');
        return redirect( route('videos.index') );

        //
    }
      public function status($id){
           $video=Video::find($id);
        if($video->status== 1){
            $video->status = 0;
        }else{
            $video->status =1;
        }
         $video->save();
        session()->flash('success','status has been succesfully updated');
        return redirect(route('videos.index'));
      }
}
