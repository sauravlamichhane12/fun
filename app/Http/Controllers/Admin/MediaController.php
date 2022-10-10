<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Image;

class MediaController extends Controller
{

   // function __construct()
   //   {
   //       $this->middleware('permission:media-index|media-create|media-edit|media-delete', ['only' => ['index','show']]);
   //       $this->middleware('permission:media-create', ['only' => ['create','store']]);
   //       $this->middleware('permission:media-edit', ['only' => ['edit','update']]);
   //       $this->middleware('permission:media-delete', ['only' => ['destroy']]);
   //   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('admin.media.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
         return view('admin.media.create');
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
     
 
      $profileImage="";
     
  if( $request->hasFile('image')){ 
            $image = $request->file('image');
            $destinationPath = 'public/storage/posts/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
  }
                   Media::create([
                  "gallery_type" => $request->gallery_type,
                   "image" =>$profileImage,
                   "name" => $request->image_name,
                   "image_link" => $request->image_link,
                  "gallerycategory_id" => $request->gallerycategory_id,
                    "caption"=> $request->caption,
                    "weight" => $request->weight,
                    "meta_description"=> $request->meta_description,
                    "meta_title" => $request->meta_title,
                    "meta_keyword"=> $request->meta_keyword,
                    "status" => $request->status,
                    "slug" =>  Str::slug($request->image_name,'-')
                  ]); 

     
     
       
   session()->flash('success','Media Sucesfully Added');
      return redirect( route('media.index') );
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
      $media=Media::find($id);
     return view('admin.media.show',compact('media'));
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
      $media=Media::find($id);
     return view('admin.media.edit',compact('media'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $media=Media::find($id);
     $data=$request->only(['name','gallery_type','video_url','caption','weight','image_link','meta_description','meta_title','meta_keyword','status','slug']);

          $video_url=$request->video_url;
               $media_type=$request->gallery_type;
              $galleryid=$request->gallerycategory_id;

        if($request->hasfile('image')){    
          if($request->gallery_type=="select media type"){
              
             $image = $request->file('image');
            $destinationPath = 'public/storage/posts/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            
              $data['gallery_type'] =$request->gallery_type;
                $data['image'] =$profileImage;
                $data['gallerycategory_id']=null;

          }
          if($request->gallery_type=="slider"){
              
            $image = $request->file('image');
           $destinationPath = 'public/storage/posts/';
           $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image->move($destinationPath, $profileImage);
           
             $data['gallery_type'] =$request->gallery_type;
               $data['image'] =$profileImage;
               $data['gallerycategory_id']=null;

         }

         if($request->gallery_type=="gallery"){
              
          $image = $request->file('image');
         $destinationPath = 'public/storage/posts/';
         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
         $image->move($destinationPath, $profileImage);
         
           $data['gallery_type'] =$request->gallery_type;
             $data['image'] =$profileImage;
             $data['gallerycategory_id']=null;

       }

        }
    $media->update($data);
        session()->flash('success','Media Sucesfully Updated');
        return redirect( route('media.index') );
        //
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
      $media=Media::find($id);
        $media->delete();
        session()->flash('error','Media deleted successfully.');
      return redirect( route('media.index'));


        //
    }
     public function status($id){

      
           $media=Media::find($id);  
        if($media->status== 1){
            $media->status = 0;
        }else{
            $media->status =1;
        }
        session()->flash('success','status has been succesfully updated');
        $media->save();
            return redirect(route('media.index'));
      }
      
}
