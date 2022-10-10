@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Main content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add media information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   method="post" action="{{ route('media.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

              <div class="form-group">
                  <label>Media type</label>
                  <select class="form-control select2bs4" name="gallery_type" style="width: 100%;" id="gallery_type">
                    <option  value="select media type" @if (old('gallery_type') == 'select media type') selected="selected" @endif }} >Select media type</option>
                      <option value="slider" @if (old('gallery_type') == 'slider') selected="selected" @endif>Slider</option>
                      <option value="gallery" @if (old('gallery_type') == 'gallery') selected="selected" @endif>Gallery</option>
                     

                    </select>
                </div>

                 


                <div class="form-group" id="image">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="" name="image">
                   
                      </div>
                    
                    </div>
                    
                  </div>

                  <div class="form-group" id="image_name">
                    <label for="name">Name</label>
                    <input type="text" name="image_name" class="form-control" id="name" placeholder="Select page name" value="{{ old('name')}} ">
                  </div>

                   
                  <div class="form-group" id="image_link">
                    <label for="">Image Link</label>
                    <input type="text" name="image_link" class="form-control" id="image_link" placeholder="Image link" value="{{ old('image_link') }}">
                  </div>






<div class="form-group" id="">
  <label>Caption</label>
<textarea id="summernote" name="caption" rows="50" cols="50">
  {{ old('caption') }}
             
              </textarea>
</div>

   
           
         

              
            
            <div class="form-group" id="weight">
                    <label for="weight">Weight</label>
                    <input type="number" value="{{ old('weight') }}" name="weight" class="form-control" min="1">
                  </div>


                

                  <div class="form-group" id="meta_title">
                    <label for="meta_title">Button Name</label>
                    <input type="text" name="meta_title" class="form-control"  placeholder="Enter the button name" value="{{ old('meta_title') }}">
              
</div>
                  
                   
                   <div class="form-group">
                  <label>Publish Status</label>
                  <select class="form-control select2bs4" name="status" style="width: 100%;" id="blog_type">
           
                    <option value="1" @if (old('status') == '1') selected="selected" @endif >Active</option>
                    <option value="0" @if (old('status') == '0') selected="selected" @endif>DeActive</option>
                    </select>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
      
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){ 

$gallery=$("#gallery_type").val();


$("#gallery_type").change(function(){
 $gallery=$(this).val();

if($gallery=="shipping"){
$("#icon").hide();
$("#image").show();
$("#image_name").show();
$("#caption").hide();
$("#video_url").hide();
$("#meta_description").hide();
$("#meta_title").hide();
$("#weight").show();
$("#meta_keyword").hide();
$("#album").hide();
("#image_link").hide();

}else if($gallery=="image"){
$("#icon").hide();
$("#image").show();
$("#image_name").show();
$("#caption").show();
  $("#video_url").hide();
  $("#meta_description").show();
$("#album").show();
$("#meta_title").show();
("#image_link").show();

$("#weight").show();
$("#meta_keyword").show();

 }else if($gallery=="slider"){
$("#icon").hide();
  $("#image").show();
$("#image_name").show();
$("#caption").show();
$("#video_url").hide();
$("#meta_description").show();
$("#meta_title").show();
$("#weight").show();
$("#meta_keyword").show();
$("#album").hide();
("#image_link").show();


 }else if($gallery=="brand"){
 $("#image").show();
$("#video_url").hide();
$("#image_name").hide();
$("#caption").hide();
$("#image_name").show();
$("#meta_description").hide();
$("#meta_title").hide();
$("#meta_keyword").hide();


 }else if($gallery=="video"){
$("#icon").hide();
$("#video_url").show();
$("#image").hide();
$("#image_name").hide();
$("#image_link").hide();
$("#caption").hide();
$("#meta_description").hide();
$("#meta_title").hide();
$("#meta_keyword").hide();
$("#album").hide();

 }else{
$("#video_url").show();
$("#image").show();
$("#image_name").show();
$("#caption").show();
$("#meta_description").show();
$("#meta_title").show();
$("#meta_keyword").show();
$("#image_link").show();
$("#album").show();
$("#icon").show();
("#image_link").show();
 }
});

if($gallery=="shipping"){
$("#icon").hide();
$("#image").show();
$("#image_name").show();
$("#caption").hide();
$("#video_url").hide();
$("#meta_description").show();
$("#meta_title").show();
$("#weight").show();
$("#meta_keyword").hide();
$("#album").hide();
("#image_link").hide();

}else if($gallery=="image"){


$("#icon").hide();
 $("#image").show();
 $("#image_name").show();
 $("#caption").show();
   $("#video_url").hide();
   $("#meta_description").show();

 $("#meta_title").show();
$("#album").show();
 $("#weight").show();
 $("#meta_keyword").show();

  }else if($gallery=="slider"){

   $("#image").show();
 $("#image_name").show();
 $("#caption").show();
 $("#video_url").hide();
 $("#meta_description").show();
 $("#meta_title").show();
$("#album").hide();
 $("#weight").show();
 $("#meta_keyword").show();
$("#icon").hide();
("#image_link").show();
  }else if($gallery=="brand"){
  $("#image").show();
 $("#video_url").hide();
 $("#image_name").hide();
 $("#caption").hide();
 $("#image_name").show();
 $("#meta_description").hide();
 $("#meta_title").hide();
 $("#meta_keyword").hide();


  }else if($gallery=="video"){

 $("#video_url").show();
 $("#image").hide();
 $("#image_name").hide();
 $("#image_link").hide();
 $("#caption").hide();
 $("#meta_description").hide();
 $("#meta_title").hide();
 $("#meta_keyword").hide();
$("#album").hide();
$("#icon").hide();
  }else{
 $("#video_url").show();
 $("#image").show();
 $("#image_name").show();
 $("#caption").show();
 $("#meta_description").show();
 $("#meta_title").show();
 $("#meta_keyword").show();
 $("#image_link").show();
 $("#album").show();
 $("#icon").hide();
 ("#image_link").show();
  }


});
</script>

  @endsection
  