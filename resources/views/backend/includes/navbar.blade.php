<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
      <!-- Brand -->
      <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{route('show_dashboard_main_page')}}">Dashboard</a>
      <!-- Form -->
      {{-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
        <div class="form-group mb-0">
          <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-search"></i></span>
            </div>
            <input class="form-control" placeholder="Search" type="text">
          </div>
        </div>
      </form> --}}
      <!-- User -->
      <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0 notification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <div class="media-body ml-2 d-none d-lg-block">
                    <i class="far fa-envelope"></i>
                    @if (count($messages)>0)
                      <span class="badge badge-danger">{{count($messages)}}</span>                          
                    @endif
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" style="width:400px">
            <div class=" dropdown-header noti-title">
              <h4 class="text-overflow m-0">Messages</h4>
            </div>
            <div class="dropdown-divider"></div>
            <div class="container">
              @if (count($messages)>0)
                @foreach ($messages as $message)

                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-form{{$message->id}}">
                      <h5 class="text-primary">From : {{$message->name}}</h5>
                      <h6>Subject : {{$message->subject}}</h6>
                      <h6 class="text-green">{{$message->created_at->diffForHumans()}}</h6>
                    </a>
                  <div class="dropdown-divider"></div>
                @endforeach                
              @else              
                <h5>You have no messages</h5>
              @endif
              </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">{{Auth::user()->name}}</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </div>
        </li>
      </ul>
    </div>
  </nav>



  {{-- modal --}}
@foreach ($messages as $message)  
    <div class="modal fade" id="modal-form{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div>From : {{$message->name}} ( {{$message->email}} )</div>
                <div>Subject : {{$message->subject}}</div>
                <div>Message : {{$message->message}}</div>
                <div class="text-right">
                    <button class="btn btn-primary my-4" onclick="exit_modal('{{$message->id}}')">OK</button>
                    <script>
                      function exit_modal(id) {
                          $('#modal-form'+id).modal('hide');
                          window.location.href="/messageStatus/id=" + id;
                      }
                    </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach