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
              <a href="#" data-toggle="modal" data-target="#add_modal-form" class="btn btn-sm btn-primary">Add new</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush table-hover">
            <thead class="thead-light">
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">
                            <img src="{{asset('frontend/img/blog/'.$blog->image)}}" style="width:80px" alt="">
                        </th>
                        <td class="multiline_td">{{$blog->title}}</td>
                        <td class="multiline_td">{{$blog->body}}</td>
                        <td>
                            <div class="row">
                                <button class="btn btn-sm btn-icon btn-3 btn-warning" type="button" data-toggle="modal" data-target="#modal-form{{$blog->id}}">
                                    <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                                    <span class="btn-inner--text">Edit</span>
                                </button>
                            </div>
                            <div class="row mt-1">
                                <form action="{{route('delete_blog' , ['id' => $blog->id])}}" method="get">
                                    <button class="btn btn-sm btn-icon btn-3 btn-danger" type="submit">
                                        <span class="btn-inner--icon"><i class="ni ni-fat-delete"></i></span>
                                        <span class="btn-inner--text">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    {{-- modal edit --}}
                    <div class="col-md-4 col-lg-8">
                        <div class="modal fade" id="modal-form{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card bg-secondary shadow border-0">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <form role="form" method="POST" action="{{route('edit_blog')}}">
                                    @csrf
                                    <input type="hidden" value="{{$blog->id}}" name="id">
                                        <div class="form-group mb-3">
                                        <label for="fname">Image</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" value="{{$blog->image}}" placeholder="First Name" type="text" name="image" id="fname">
                                        </div>
                                        </div>
                                        <div class="form-group mb-3">
                                        <label for="lname">Title</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" value="{{$blog->title}}" placeholder="Last Name" type="text" name="title" id="lname">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="description">Description</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                                            </div>
                                            <textarea class="form-control" placeholder="Enter your brief description" name="body" type="text" id="article-ckeditor" cols="30" rows="3">{{$blog->body}}</textarea>
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
                    <form role="form" method="POST" action="{{route('add_blog')}}">
                    @csrf
                        <div class="form-group mb-3">
                        <label for="fname">Image</label>
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control" placeholder="Image" type="text" name="image" id="fname">
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
      