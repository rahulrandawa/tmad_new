@extends('admin.layouts.default')
@section('content')

<style>
  .btn-danger1{
  background: #ff4444;
    border: none;

    color:#fff;
}
.btn-danger1:hover, .btn-info1:hover{
  color:#fff;
}
.btn-info1{
  border: none;
    background: #7c7c7c;
    color:#fff;
    margin-right: 10px;

}
.error{
  color: red;
}

.file-upload-image {
    margin-left: auto;
    display: block;

    border-style: none;
    width: 200px;
    margin-right: auto;
    border-radius: 50%;
    height: 200px;

}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

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
            <div class="card table-responsive">
              <div class="card-header">
                <h3 class="card-title">Admin Profile Update</h3>
               </div>
              <!-- /.card-header -->
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="tile">
                                <form class="row" action="{{ route('profileUpdate') }}"  method="POST" enctype="multipart/form-data" id="admin-profile-form">
                                  @csrf
                                 <div class="col-lg-6">
                                    <div class="row" >
                                       <div class="form-group col-md-12 col-sm-12">
                                          <label>Name</label>
                                          <input class="form-control" type="text" placeholder="Enter Name" value="{{ $admin->name }}" name="name">
                                          @if ($errors->has('name'))
                                            <span class="error">{{ $errors->first('name') }}</span>
                                          @endif
                                       </div>
                                       <div class="form-group col-md-12 col-sm-12">
                                          <label>Email Id</label>
                                          <input class="form-control" type="text" placeholder="Enter Email Id" value="{{ $admin->email }}" name="email" disabled>

                                       </div>
                                       <div class="form-group col-md-12 col-sm-12">
                                          <label>Mobile Number</label>
                                          <input class="form-control phoneno" type="text" placeholder="Mobile Number" value="{{ $admin->phoneNumber }}" name="phoneNumber"  >
                                          @if ($errors->has('phoneNumber'))
                                            <span class="error">{{ $errors->first('phoneNumber') }}</span>
                                          @endif


                                       </div>


                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="row" >
                                      <div class="form-group col-md-8 col-sm-12 m-auto ">
                                          <div class="profile_img_run">
                                             <div class="file-upload">
                                                 <div class="image-upload-wrap">

                                                     <input class="file-upload-input form-control" id="image" type='file' onchange="readURL(this);" accept="image/*" aria-describedby="fileHelp" name="image" style="display: none;" />
                                                      <div class="drag-text p-2">
                                                         @if(empty($admin->profile))
                                                         <img id="admin_img" name="image" class="mb-3 file-upload-image" src="{{ url('public/storage/images/admin4.png') }}" alt="your image"  />
                                                         @else
                                                         <img id="admin_img" name="image" class="mb-3 file-upload-image" src="{{ url('public/storage/'.$admin->profile) }}" alt="your image"  />
                                                        @endif

                                                      </div>
                                                  </div>
                                                  <div class="file-upload-content" style="display: none;">
                                                      <img class="file-upload-image" src="#" alt="your image" />
                                                  </div>
                                                  <button class="btn btn-primary w-75 text-light d-block m-auto" type="button" onclick="$('.file-upload-input').trigger( 'click' )">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                         <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                                      </svg>
                                                      Choose a file&hellip;
                                                  </button>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                 </div>

                             <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit" >Update Profile</button>
                            </div>
                        </form>
                     </div>
                    </div>
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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
               </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="row">
                    <div class="col-md-12">
                        <div class="tile">
                            <form class="row" action="{{ route('changePassword') }}"  method="post" id="change-password-form">
                               @csrf

                               <!-- @foreach ($errors->all() as $error)
                                  <p class="text-danger">{{ $error }}</p>
                               @endforeach  -->
                             <div class="col-lg-6">
                                <div class="row" >
                                   <div class="form-group col-md-12 col-sm-12">
                                      <label>Current Password</label>
                                      <input class="form-control" type="password" placeholder="Enter Old Password"  name="currentpassword">
                                      @if ($errors->has('currentpassword'))
                                        <span class="error">{{ $errors->first('currentpassword') }}</span>
                                      @endif
                                   </div>
                                   <div class="form-group col-md-12 col-sm-12">
                                      <label>New Password</label>
                                      <input class="form-control" type="password" placeholder="Enter New Password"  name="newpassword">
                                       @if ($errors->has('newpassword'))
                                        <span class="error">{{ $errors->first('newpassword') }}</span>
                                      @endif
                                   </div>
                                   <div class="form-group col-md-12 col-sm-12">
                                      <label>Confirm Password</label>
                                      <input class="form-control" type="password" placeholder="Enter Confirm Password"  name="confirmpassword">
                                       @if ($errors->has('confirmpassword'))
                                        <span class="error">{{ $errors->first('confirmpassword') }}</span>
                                      @endif
                                  </div>


                                </div>
                             </div>
                         <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit" >Change Password</button>
                        </div>
                    </form>
                 </div>
              </div>
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
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">


  function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
       $('#admin_img').attr('src', e.target.result);
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
  $("#imgInp").change(function(){
    readURL(this);
});
}

// function removeUpload() {
//   $('.file-upload-input').replaceWith($('.file-upload-input').clone());
//   $('.file-upload-content').hide();
//   $('.image-upload-wrap').show();
// }
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
</script>

@stop
