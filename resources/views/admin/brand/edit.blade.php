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
                <h3 class="card-title">Edit Brand</h3>
              </div>

      
              <!-- /.card-header -->
              <!-- form start -->
              <form   method="post" action="{{ route('brand.update',$brand->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-body">
  
                  <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ $brand->name }} ">
                  </div>

                

                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="" name="image" value="">    
                    </div>
                    </div>
                    </div>
                    @if($brand->image==null)No images
                     @else 
                    <div class="form-group">
                    <img src="{{ url('/') }}/public/storage/posts/{{ $brand->image }}" height="50px" width="50px">
                    </div>
                         @endif

                    <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" value="{{ $brand->weight }}" name="weight" class="form-control" min="1">
                  </div>
            
      
                

                      <div class="form-group">
                    <label for="meta_title">Meta title</label>
                    <input type="text" name="meta_title" class="form-control"  placeholder="Enter the meta title" value="{{ $brand->meta_title }}">
              
</div>

    
                 
                <div class="form-group">
                  <label>Meta description</label>
 <textarea  name="meta_description" value="{{ old('meta_description') }}" rows="3" style="width:100%"> {{ $brand->meta_description }}</textarea>

                </div>

                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control"  placeholder="slug" value="{{ $brand->slug }}">
              
</div>


                <div class="form-group">
                  <label>Publish Status</label>
                  <select class="form-control select2bs4" name="status" style="width: 100%;" id="status">
                 
                    <option value="1" @if ($brand->status == '1') selected="selected" @endif>Active</option>
                    <option value="0" @if ($brand->status == '0') selected="selected" @endif>DeActive</option>  
                    </select>
                </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
  