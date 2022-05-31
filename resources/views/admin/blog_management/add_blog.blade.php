@extends('admin.layouts.default')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 ">
            <h1>Add Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <a href="{{ route('blog_management')}}" class="btn btn-warning text-white"><i class="fa fa-arrow-left"></i> Back</a>

            </ol>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-body">

            <div class="container">
            <form action="{{ route('addBlog') }}" method="post" id="ckEditer-form" enctype="multipart/form-data">
                @csrf

             <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                   <label>Title</label>
                    <input type="text" name="title" id="title" class="form-control"/>
                  </div>
                </div>

                <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Heading</label>
                        <textarea  class="ckeditor required" name='heading' id="heading"></textarea>
                        <script type="text/javascript">
                          CKEDITOR.replace('heading')
                        </script>
                      </div>
                </div>
                <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Description</label>
                        <textarea  class="ckeditor required" name='description' id="description"></textarea>
                        <script type="text/javascript">
                          CKEDITOR.replace('description')
                        </script>
                      </div>
                </div>
              
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label>Blog Image</label>
                      <input type="file" name="image" id="photo" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-sm-6 image_preview" style="display: none;">
                    <img  height="250" width="450" id="img_add"/>
                  </div>
                
             </div>
                <div>
                  <button type="submit" class="btn btn-warning float-right">Submit</button>
                </div>
             </form>


            <!-- /.card -->
          </div>

            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
   
  </div>
  <!-- /.content-wrapper -->
<script>
    function read(input) {
    $('.image_preview').show();
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_add').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#photo").change(function(){
        read(this);
    });
</script>
@stop