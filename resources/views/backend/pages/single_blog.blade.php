@extends('backend.layouts.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h3 class="mb-0">{{$blog->title}}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('storage/images/'.$blog->image)}}" style="height:200px">
                            </div>
                            <div class="col-md-8">
                                <p>
                                    {!!$blog->body!!}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 offset-md-10">
                                <button class="btn btn-sm btn-icon btn-3 btn-primary" type="button" data-toggle="modal" data-target="#modal-form{{$blog->id}}">
                                    <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                    <span class="btn-inner--text">Edit</span>
                                </button>
                            </div>
                            <div class="col-md-1">
                                <form action="{{route('delete_blog' , ['id' => $blog->id])}}" method="get">
                                    <button class="btn btn-sm btn-icon btn-3 btn-danger" type="submit">
                                        <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                        <span class="btn-inner--text">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    <div class="col-md-4 col-lg-8">
        <div class="modal fade" id="modal-form{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <form role="form" method="POST" action="{{route('edit_blog')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$blog->id}}" name="id">
                    <input type="hidden" value="{{$blog->image}}" name="preimage">
                        <div class="form-group mb-3">
                        <label for="fname">Image</label>
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <img src="{{asset('storage/images/'.$blog->image)}}" style="width:80px" alt="">
                            <input class="form-control" value="{{$blog->image}}" placeholder="First Name" type="file" name="image" id="fname">
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
                            <textarea class="form-control" placeholder="Enter your brief description" name="body" type="text" cols="30" rows="3">{{$blog->body}}</textarea>
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
      