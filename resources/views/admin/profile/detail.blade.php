@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
   
   <link rel="stylesheet" href="{{ asset('front_assets/assets/css/countrySelect.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/assets/css/intTelInput.css') }}">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
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
                <h3 class="card-title">Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
 

                <div class="card-body">
                <h5><label>Full Name: {{ $user->name }} </label></h5>
                <h5><label>Email Adress: {{ $user->email }} </label></h5>
                <h5><label>Country: {{ $user->country }} </label></h5>
                <h5><label>Phone Number: {{ $user->phone_code }} </label></h5>
                <h5><label>User Type: {{ $user->is_admin }}</label></h5>
                 <hr>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="{{ url('/admin/profilechange') }}"><button type="submit" class="btn btn-primary">Edit</button></a>
                 <a href="{{ route('change.password') }}"><button type="submit" class="btn btn-primary">Change Password</button></a>
                </div>

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
       <script src="{{ asset('front_assets/assets/js/countrySelect.js') }}"></script>
    <script src="{{ asset('front_assets/assets/js/intlTelInput.js') }}"></script>
     <script>
        $("#country_selector").countrySelect({
            defaultCountry: "us"
        });
    </script>
      <script>
    var input = document.querySelector("#phone");
    intlTelInput(input, {
      initialCountry: "auto",
      geoIpLookup: function (success, failure) {
        $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
          var countryCode = (resp && resp.country) ? resp.country : "us";
          success(countryCode);
        });
      },
    });
  </script>
  

  @endsection
  