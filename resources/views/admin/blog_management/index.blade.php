@extends('admin.layouts.default')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blogs</h1>
          </div>
          <div class="col-sm-6">
          <a href="{{ route('addBlogPageShow') }}" class="btn btn-warning float-right" >Add Blog</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 ">
            <div class="card">
            <div class="card-body">

              <!-- /.card-header -->

                <table id="blogs-table" class="table table-bordered table-hover table-responsive">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Blog Image</th>
                    <th>Title</th>
                    <th>Heding</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  @php
                    $i = 1;
                    @endphp
                    @forelse ($blogs as $blog)
                    <tr>
                    <td>{{ $i++}}</td>
                    <td ><img src="{{ asset('public/storage/'.$blog->image) }}" height="100" width="100"></td>
                    <td class="demo-1">{{ $blog->title }}</td>
                    <td class="demo-1">{{ strip_tags(html_entity_decode($blog->heading)) }}</td>
                    <td class="demo-1">{{ strip_tags(html_entity_decode($blog->description)) }}</td>
                   <td>
                      @if($blog->status == 0)
                      <a href="{{route('statusChange',  $blog->id)}}" class="btn btn-success" >Active</a>
                      @else
                      <a href="{{route('statusChange',  $blog->id)}}" class="btn btn-danger" >Deactive</a>
                      @endif
                    </td>
                    <td>
                    <div class="d-flex">
                    <a href="{{ route('editBlog',  $blog->id)}}" class="btn btn-success1 btn-flat float-left" style="border-radius:5px !important;"><i class="fa fa-edit"></i></a>
                    <form action="{{ route('deleteBlog',$blog->id) }}" method="POST">
                           @csrf
                          <button type="submit" class="btn btn-danger1 ml-2"  onclick="return myFunction()"><i class="fa fa-trash"></i></button>
                         </form>
                    </div>
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

@stop