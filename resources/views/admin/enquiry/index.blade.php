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
            <h1>Enquiry</h1>
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
                <h3 class="card-title">Enquiry details</h3>
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
                    <th>Country</th>
                    <th>requirement</th>
                    <th>Docs File</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @forelse ($enquiries as $enquiry)
                    <tr>
                    <td>{{ $i++}}</td>
                    <td>

                      @if(!empty($enquiry->name))
                       {{ $enquiry->name }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>

                      @if(!empty($enquiry->email))
                      {{ $enquiry->email }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>

                      @if(!empty($enquiry->phone_no))
                       {{ $enquiry->phone_no }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>
                       @if(!empty($enquiry->country))
                       {{ $enquiry->country }}
                       @else
                       <span>N/A</span>
                       @endif
                    </td>
                    <td>
                        @if(!empty($enquiry->requirement))
                        {{ $enquiry->requirement }}
                        @else
                        <span>N/A</span>
                        @endif

                    </td>
                    <td>
                        @if(!empty($enquiry->file))
                        <img src="{{ url('') }}" width="50" height="50">
                        @else
                        <img src="{{ url('') }}" width="50" height="50">
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
