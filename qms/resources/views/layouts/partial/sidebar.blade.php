 <div class="sidebar" data-color="purple" data-background-color="white" src="{{ asset('backend/img/sidebar-1.jpg') }}">
     
      <div class="logo">
        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">
           Q M S
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('admin/dashboard*') ? 'active': ''}} ">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{Request::is('admin/queue*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('queue.index')}}">
              <i class="material-icons">accessible</i>
              <p>Queues</p>
            </a>
          </li>
           <li class="">
            <a class="nav-link" href="">
              <i class="material-icons">build</i>
              <p>Settings</p>
            </a>
          </li>
      </ul>
      </div>
    </div>