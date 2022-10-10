@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->

  
   <link rel="stylesheet" href="{{ asset('front_assets/assets/css/countrySelect.css') }}">
    <link rel="stylesheet" href="{{ asset('front_assets/assets/css/intTelInput.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" />
  <!-- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
  <style>
  .input__item .country-select,
  .iti  {
    width: 100%;
  }
</style>
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
                <h3 class="card-title">My Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
       <form method="post" action="{{ url('admin/profile/update',$user->id) }}">

                @csrf
                @method('PUT')
                <div class="card-body">


                  <div class="form-group">
                    <label for=""> Name:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter the name" value="{{ $user->name  }}">
                  </div>
                  <div class="form-group">
                    <label for="company_name"> Company Name:</label>
                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter the company name" value="{{ $user->company_name  }}">
                  </div>
                   <div class="form-group">
                    <label for="name">Country:</label><br>
                               <div class="input__item">
                          <input id="country_selector" type="text" class="form-control" name="country" value="{{ $user->country }}">
                            </div>
                          </div>

                   <div class="form-group">
                    <label for="name">Country code:</label><br>
                <input type="text" id="phone"  value="{{ $user->phone_code }}" name="phone_code" class="form-control" style="width:100%">
                   </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" id="email"  value="{{ $user->email }}">
                </div>
             

                <div class="card-footer">
                   <a href="{{ route('profile.view') }}"><button type="button" class="btn btn-primary">Back</button></a>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>

                </div>
                <!-- /.card-body -->

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
