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
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
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
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
      