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
                <h3 class="card-title">User Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
 

                <div class="card-body">
                <h5><label>Full Name: {{ $user->name }}</label></h5>
                <h5><label>Email Adress: {{ $user->email }} </label></h5>
                <h5><label>Country: {{ $user->country }}</label></h5>
                <h5><label>Phone Number: {{ $user->phone_code }} </label></h5>
                <h5><label>User Type: 
                @if($user->is_admin=="c") User  @endif </label></h5>
                 <hr>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a href="{{ route('users.edit',$user->id) }}"><button type="submit" class="btn btn-primary">Edit</button></a>

                     <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-default" onclick="handleDelete({{ $user->id  }})">
                    Delete
                </button>
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
  
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure want to delete ?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form method="post" action="" id="deleteCategoryForm">
   @method('DELETE')
   @csrf
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" style="color:white;padding:5px;width:10%">No</button>
        <button type="submit" class="btn btn-danger" id="deleteBtn">Yes</button>
      </div>
   
</form>
        

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <script>
 function handleDelete(id){
   console.log('deleted.',id);
   var form=document.getElementById('deleteCategoryForm')
   form.action='/admin/users/' + id
   console.log('deleted.',form);
   $("#deleteModal").modal('show');
 }
 </script>  


  @endsection
  