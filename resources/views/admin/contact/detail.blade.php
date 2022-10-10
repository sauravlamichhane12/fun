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
                <h3 class="card-title">Contact Messages</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
 

                <div class="card-body">
                  <p>{{ $contact->created_at->translatedFormat('l j F Y') }}</p>
                <h5><label>Full Name: {{ $contact->name }} </label></h5>
                <h5><label>Email Adress: {{ $contact->email }} </label></h5>
                <h5><label>Subject: {{ $contact->subject }} </label></h5>
                <h5><label>Message:</label></h5><br>
                <p>{{ $contact->message }} </p>
                 <hr>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
              <a href="{{ route('contact.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
                  
              
                  <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modal-default" onclick="handleDelete({{ $contact->id  }})">
                   Delete
                </button>
              

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
   form.action='/admin/contact/' + id
   console.log('deleted.',form);
   $("#deleteModal").modal('show');
 }
 </script>  

  @endsection
  