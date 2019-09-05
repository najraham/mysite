@extends('backend.layouts.layout')

@section('content')
  <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">{{$title}}</h3>
            </div>
            <div class="col text-right">
              <a href="#" data-toggle="modal" data-target="#add_modal-form" class="btn btn-sm btn-primary"><span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span><span class="btn-inner--text">Add new</span></a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">
                            {{$blog->id}}
                        </th>
                        <td class="multiline_td">{{$blog->title}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{route('show_dashboard_single_blog_page', ['id' => $blog->id])}}">
                                <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                <span class="btn-inner--text">Show In Detail</span>
                            </a>
                        </td>
                    </tr>
    
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

{{-- modal add --}}
<div class="col-md-4 col-lg-8">
    <div class="modal fade" id="add_modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <form role="form" method="POST" action="{{route('add_blog')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group mb-3">
                        <label for="fname">Image</label>
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control" placeholder="Image" type="file" name="image" id="fname">
                        </div>
                        </div>
                        <div class="form-group mb-3">
                        <label for="lname">Title</label>
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control" placeholder="Title" type="text" name="title" id="lname">
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="description">Description</label>
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                            </div>
                            <textarea class="form-control" placeholder="Enter blog description" name="body" type="text" id="article-ckeditor" cols="30" rows="3"></textarea>
                        </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary my-4">Save</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
      