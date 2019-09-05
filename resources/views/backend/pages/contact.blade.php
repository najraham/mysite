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
                </div>
                </div>
                <div class="table-responsive">
                    <!-- Contacts table -->
                    <table class="table align-items-center table-flush table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Id</th>
                                <td>{{$contact->id}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Phone Number</th>
                                <td>{{$contact->phone}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Address</th>
                                <td class="multiline_td">{{$contact->address}}</td>
                        </tr>
                        <tr>
                            <th scope="col">E-mail</th>
                            <td>{{$contact->email}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Website</th>
                            <td>{{$contact->website}}</td>
                        </tr>
                        <tr>
                            <th scope="col">Operations</th>
                            <td>
                                <a class="btn btn-sm btn-warning" href="#" data-toggle="modal" data-target="#add_modal-form">
                                    <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                    <span class="btn-inner--text">Update</span>
                                </a>
                            </td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- update modal --}}
    <div class="col-md-4 col-lg-8">
        <div class="modal fade" id="add_modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" method="POST" action="{{route('update_contact')}}">
                        @csrf
                            <input type="hidden" name="id" value="{{$contact->id}}">
                            <div class="form-group mb-3">
                                <label for="fname">Address</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" value="{{$contact->address}}" placeholder="Image" type="text" name="address" id="fname">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="lname">Phone Number</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" value="{{$contact->phone}}" placeholder="Title" type="text" name="phone" id="lname">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="lname">E-mail</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Title" type="text" value="{{$contact->email}}" name="email" id="lname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Website</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-diamond"></i></span>
                                    </div>
                                    <input class="form-control" value="{{$contact->website}}" placeholder="Enter blog description" name="website" type="text">
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