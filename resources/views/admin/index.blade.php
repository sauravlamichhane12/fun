@extends('admin.layouts.master')
@section('content')
@php

$liveVideoCount=App\Models\Video::where('status',1)->count();
$allVideCount=App\Models\Video::count();
$allUserCount=App\Models\User::where('is_admin','c')->count();

@endphp
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-1 col-6">
        </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5>Live Videos</h5> 
                <h3>{{ $liveVideoCount }}</h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('videos.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5>Total Videos</h5>
                 <h3>{{ $allVideCount  }} </h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('videos.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

            <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h5>Total Users</h5>
                 <h3>{{ $allUserCount }}</h3>      
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('users.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
               
          <!-- ./col -->
        </div>
<div class="row">
  <div class="col-1">
  </div>
   <div class="col-9">
              
                 
            <div class="card">
            
           <div class="card-header">
            <h4>Contact Message</h4>
           </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>SN</th> 
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $i=1;
                  @endphp
                  @foreach(App\Models\Contact::all() as  $contact)

                  <tr>
                  <td>{{ $i++ }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }} </td>
                    <td>{{ $contact->subject }} </td>
                    <td>{{ $contact->message }}</td>
                      <td>
                      <a href="{{ route('contact.show',$contact->id) }}"><button type="submit" class="btn btn-primary">View</button></a></td>
                  </tr>
                  @endforeach
             
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>





</div>
</div>
</div>
        <!-- /.row -->
        <!-- Main row -->
      <!--  -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jscharting.com/latest/jscharting.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
 
</script>

<script>
$(document).ready(function(){
$("#carousel").owlCarousel({
  autoplay: true,
  rewind: true, /* use rewind if you don't want loop */
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 5
    },

    1024: {
      items: 4
    },

    1366: {
      items: 5
    }
  }
});
});
</script>

  @endsection
