@extends('backend.layouts.layout')

@section('content')
<div class="row">
  <div class="container col-lg-6">
    <div class="row mt-5">
      <div class="col">
        <div class="card bg-default shadow">
          <div class=" row card-header bg-transparent border-0">
            <div class="col">
              <h3 class="text-white mb-0">{{$title}}</h3>
            </div>
            <div class="col text-right">
              <a href="#" data-toggle="modal" data-target="#add_project" class="btn btn-sm btn-success">Add new</a>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-dark table-flush table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Link</th>
                  <th scope="col">Operations</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $project)
                  <tr>
                    <th scope="row">
                      <img src="{{asset('frontend/img/'.$project->image)}}" style="width:60px" alt="">
                    </th>
                    <td class="multiline_td">{{$project->title}}</td>
                    <td class="multiline_td">{{$project->link}}</td>
                    <td>
                      <button class="btn btn-sm btn-icon btn-3 btn-warning" type="button" data-toggle="modal" data-target="#modal-form{{$project->id}}">
                        <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                        <span class="btn-inner--text">Edit</span>
                      </button>
                    </td>
                  </tr>

                  {{-- modal edit projects--}}
                  <div class="col-md-4 col-lg-8">
                    <div class="modal fade" id="modal-form{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                      <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                            <div class="card bg-secondary shadow border-0">
                              <div class="card-body px-lg-5 py-lg-5">
                                <form role="form" method="POST" action="{{route('edit_project')}}">
                                  @csrf
                                  <input type="hidden" value="{{$project->id}}" name="id">
                                    <div class="form-group mb-3">
                                      <label for="fname">Image</label>
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" value="{{$project->image}}" placeholder="First Name" type="text" name="image" id="fname">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <label for="fname1">Title</label>
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" value="{{$project->title}}" placeholder="First Name" type="text" name="title" id="fname1">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="desc">Link</label>
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                                        </div>
                                        <input class="form-control" value="{{$project->link}}" placeholder="First Name" type="text" name="link" id="desc"> 
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
  </div>
      
  <div class="container col-lg-6">
    <div class="row mt-5">
      <div class="col">
        <div class="card bg-default shadow">
          <div class="row card-header bg-transparent border-0">
            <div class="col">
              <h3 class="text-white mb-0">{{$title1}}</h3>
            </div>
            <div class="col text-right">
              <a href="#" data-toggle="modal" data-target="#add_skill" class="btn btn-sm btn-success">Add new</a>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-dark table-flush table-hover">
                <thead class="thead-dark">
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Percentage</th>
                      <th scope="col">Operations</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($skills as $skill)
                      <tr>
                        <th scope="row">{{$skill->name}}</th>
                        <td>
                          <div class="d-flex align-items-center">
                            <span class="mr-2">{{$skill->percentage}}%   </span>
                            <div>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->percentage}}%;"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <button class="btn btn-sm btn-icon btn-3 btn-warning" type="button" data-toggle="modal" data-target="#modal-form1{{$skill->id}}">
                            <span class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></span>
                            <span class="btn-inner--text">Edit</span>
                          </button>
                        </td>
                      </tr> 

                           {{-- modal edit skills--}}
                          <div class="col-md-4 col-lg-8">
                            <div class="modal fade" id="modal-form1{{$skill->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                              <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-body p-0">
                                    <div class="card bg-secondary shadow border-0">
                                      <div class="card-body px-lg-5 py-lg-5">
                                        <form role="form" method="POST" action="{{route('edit_skill')}}">
                                          @csrf
                                          <input type="hidden" value="{{$skill->id}}" name="id">
                                            <div class="form-group mb-3">
                                              <label for="fname">Name</label>
                                              <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                </div>
                                                <input class="form-control" value="{{$skill->name}}" placeholder="First Name" type="text" name="name" id="fname">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                              <label for="desc">Percentage</label>
                                              <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                                                </div>
                                                <input class="form-control" value="{{$skill->percentage}}" placeholder="First Name" type="text" name="percentage" id="fname">
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
  </div>

</div>

{{-- add project modal --}}
<div class="col-md-4 col-lg-8">
  <div class="modal fade" id="add_project" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="POST" action="{{route('add_project')}}">
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
                    <label for="fname1">Title</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input class="form-control" placeholder="Title" type="text" name="title" id="fname1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="desc">Link</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                      </div>
                      <input class="form-control" placeholder="Link" type="text" name="link" id="desc"> 
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

{{-- add skill modal --}}
<div class="col-md-4 col-lg-8">
  <div class="modal fade" id="add_skill" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="POST" action="{{route('add_skill')}}">
                @csrf
                  <div class="form-group mb-3">
                    <label for="fname">Name</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input class="form-control" placeholder="Name" type="text" name="name" id="fname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="desc">Percentage</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                      </div>
                      <input class="form-control" placeholder="Percentage" type="text" name="percentage" id="fname">
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
      