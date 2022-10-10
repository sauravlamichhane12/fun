@extends('admin.layouts.master')
@section('content')


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
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create new users</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">


                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter the role name" value="{{ old('name')}} ">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Enter the email" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter the password" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                  <label for="name">Confirm password:</label>
                  <input type="password" name="confirm-password" class="form-control" id="name" placeholder="Enter the role name" value="{{ old('confirm-password') }}">
                </div>

                <div class="form-group">
                  <label for="name">Country:</label>
                  <div class="input__item">
                    <input id="country_selector" type="text" class="form-control" name="country">
                  </div>
                </div>

                <div class="form-group">
                  <label for="name">Country code:</label> <br>
                  <input type="text" id="phone" name="phone_code" class="form-control">
                </div>

                <!-- <div class="form-group">
                  <label>Role:</label>
                  <select class="form-control select2bs4"  style="width: 100%;"   name="roles[]">
                      @foreach($roles as $role)
                      <option value="{{ $role->id }}">{{ $role->name }}</option>
                      @endforeach
                    </select>    
                </div>-->
                <div class="form-group">
                  <label>Role:</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="is_admin">
                    <option value="c">User</option>
                  </select>
                </div>




                <!-- <div class="form-group">
                  <label> Status</label>
                  <select class="form-control select2bs4" name="status" style="width: 100%;" id="blog_type">
           
                    <option value="1" @if (old('status') == '1') selected="selected" @endif >Active</option>
                    <option value="0" @if (old('status') == '0') selected="selected" @endif>DeActive</option>
                    </select>
                </div>-->

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
    geoIpLookup: function(success, failure) {
      $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        var countryCode = (resp && resp.country) ? resp.country : "us";
        success(countryCode);
      });
    },
  });
</script>
@endsection