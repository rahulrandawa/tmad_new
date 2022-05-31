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
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
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
                <h3 class="card-title">User details</h3>
                <div id="userExport" style="float:right">

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="user-table" class="table table-bordered table-hover ">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Company</th>
                    <th>Message</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @forelse ($users as $user)
                    <tr>
                    <td>{{ $i++}}</td>
                    <td>

                      @if(!empty($user->name))
                       {{ $user->name }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>

                      @if(!empty($user->email))
                      {{ $user->email }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>

                      @if(!empty($user->contactNumber))
                       {{ $user->contactNumber }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>
                       @if(!empty($user->company))
                       {{ $user->company }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>
                         @if(!empty($user->message))
                        {{ $user->message }}
                        @else
                        <span>N/A</span>
                        @endif
                    </td>
                    </tr>
                    @empty
                        <tr class="no-data-row">
                            <td colspan="9" rowspan="2" align="center">
                                <div class="message"><p>No user found!</p></div>

                            </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
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
@stop
