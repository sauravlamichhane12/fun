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
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Video</h3>
              </div>

      
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('videos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                  
                  <div class="form-group">
                    <label for="heading">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="" value="{{ old('title')}} ">
                  </div>

                  <div class="form-group">
                  <label>Video Category</label>
                  <select class="form-control select2bs4" name="category" style="width: 100%;" id="">
                    <option value="soccer">Soccer</option>
                     <option value="basketball">Basketball</option>
                     <option value="cricket">Cricket</option>
                     <option value="swimming">Swimming</option>
                     <option value="hockey">Hockey</option>
                     <option value="pingpong">Ping Pong</option>
                    </select>
                </div>


                       <div class="form-group">
                    <label for="exampleInputFile">Video Thumbnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="" name="thumbnail">     
                    </div>   
                  </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Video Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="" name="video">     
                    </div>   
                  </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
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
  
  

  @endsection
  