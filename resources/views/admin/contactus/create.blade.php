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
                <h3 class="card-title">Add contactus information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   method="post" action="{{ route('contactus.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">



                  <div class="form-group">
                    <label for="name">Company name:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter the company name" value="{{ old('name')}} ">
                  </div>

                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="select the location" value="{{ old('address')}} ">
                  </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email')}} ">
                  </div>

                  <div class="form-group">
                    <label for="">Alternative Email:</label>
                    <input type="text" name="description" class="form-control" id="email" placeholder="Email" value="{{ old('description')}} ">
                  </div>


            <div class="form-group">
                    <label for="number">Phone number:</label>
                    <input type="text" name="number" class="form-control" id="number" placeholder="Phone number" value="{{ old('number')}} ">
                  </div>

               


                  <div class="form-group">
                    <label for="tel_nbr">Alternative number:</label>
                    <input type="text" name="telephone_number" class="form-control" id="telephone_number" placeholder="Alternative number" value="{{ old('tel_number')}} ">
                  </div>


                  
            
            <div class="form-group">
                    <label for="google_map">Google  map</label>
                    <input type="google_map" value="{{ old('google_map') }}" name="google_map" class="form-control">
                  </div>

              
                  <div class="form-group">
                   <label>Description</label>
                     <textarea id="summernote" name="description">
                     {{ old('description') }}
                    
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
  