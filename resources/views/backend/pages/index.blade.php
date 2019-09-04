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
            {{-- <div class="col text-right">
              <a href="#!" class="btn btn-sm btn-primary">See all</a>
            </div> --}}
          </div>
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Slogan</th>
                <th scope="col">Introduction</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$index->first_name}}</th>
                <td>{{$index->last_name}}</td>
                <td>{{$index->slogan}}</td>
                <td class="multiline_td">{{$index->intro}}</td>
                <td class="multiline_td">{{$index->description}}</td>
                <td>
                  <img src="{{asset('storage/images/'.$index->image)}}" style="width:80px" alt=""></td>
                <td>
                  <button class="btn btn-sm btn-icon btn-3 btn-warning" type="button" data-toggle="modal" data-target="#modal-form">
                    <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                    <span class="btn-inner--text">Edit</span>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  {{-- modal --}}
  <div class="col-md-4 col-lg-8">
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <form role="form" method="POST" action="{{route('edit_index')}}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{$index->id}}" name="id">
                    <div class="form-group mb-3">
                      <label for="fname">First Name</label>
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" value="{{$index->first_name}}" placeholder="First Name" type="text" name="first_name" id="fname">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label for="lname">Last Name</label>
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" value="{{$index->last_name}}" placeholder="Last Name" type="text" name="last_name" id="lname">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label for="slogan">Slogan</label>
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-paper-diploma"></i></span>
                        </div>
                        <input class="form-control" value="{{$index->slogan}}" placeholder="Enter a slogan" type="text" name="slogan" id="slogan">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label for="image">Image</label>
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-image"></i></span>
                        </div>
                        <img src="{{asset('frontend/img/'.$index->image)}}" style="width:80px" alt=""></td>
                        <input class="form-control" placeholder="{{$index->image}}" type="file" name="image" id="image">
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label for="intro">Introduction</label>
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-glasses-2"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Enter your short introduction" type="text" name="introduction" cols="30" rows="2">{{$index->intro}}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                        </div>
                        <textarea class="form-control" placeholder="Enter your brief description" name="description" type="text"  cols="30" rows="3">{{$index->description}}</textarea>
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
      