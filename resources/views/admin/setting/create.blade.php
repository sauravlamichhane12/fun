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
                <h3 class="card-title">Add setting information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   method="post" action="{{ route('setting.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

              

                   <div class="form-group">
                    <label for="facebook_link">Facebook Link:</label>
                    <input type="text" name="facebook_link" class="form-control" id="icon" placeholder="Facebook link" value="">
                  </div>

                  <div class="form-group">
                    <label for="instagram_link">Instagram Link:</label>
                    <input type="text" name="instagram_link" class="form-control" id="" placeholder="Instagram link" value="">
                  </div>


             <div class="form-group">
                    <label for="twitter_link">Twitter Link:</label>
                    <input type="text" name="twitter_link" class="form-control" id="" placeholder="Twitter link" value="">
                  </div>

                    <div class="form-group">
                    <label for="youtube_link">Youtube Link:</label>
                    <input type="text" name="youtube_link" class="form-control" id="" placeholder="Twitter link" value="">
                  </div>

                  <div class="form-group">
                    <label for="header_logo">Header Logo:</label>
                    <input type="file" name="navbar_image" class="form-control" id="" placeholder="Header logo">
                  </div>



                  <div class="form-group">
                    <label for="youtube_link">Navbar Link:</label>
                    <input type="text" name="navbar_link" class="form-control" id="" placeholder="Navbar link" value="">
                  </div>

                  


               <div class="form-group">
                   <label>Description</label>
                     <textarea id="summernote" name="description">
                     {{ old('description') }}
                      Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                           </div>

   

              
              
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
  