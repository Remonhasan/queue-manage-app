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
          <li class="{{Request::is('admin/slider*') ? 'active': ''}}">
            <a class="nav-link" href="">
              <i class="material-icons">slideshow</i>
              <p>Queues</p>
            </a>
          </li>
           <li class="{{Request::is('admin/category*') ? 'active': ''}}">
            <a class="nav-link" href="">
              <i class="material-icons">content_paste</i>
              <p>Counter A</p>
            </a>
          </li>
          <li class="{{Request::is('admin/item*') ? 'active': ''}}">
            <a class="nav-link" href="">
              <i class="material-icons">library_books</i>
              <p>Counter B</p>
            </a>
          </li>
           <li class="{{Request::is('admin/reservation*') ? 'active': ''}}">
            <a class="nav-link" href="">
              <i class="material-icons">chrome_reader_mode</i>
              <p>Counter C</p>
            </a>
          </li>
          <li class="{{Request::is('admin/contact*') ? 'active': ''}}">
            <a class="nav-link" href="">
              <i class="material-icons">message</i>
              <p>Queue Requests</p>
            </a>
          </li>
          <li class="{{Request::is('admin/cupon*') ? 'active': ''}}">
            <a class="nav-link" href="">
              <i class="material-icons">library_books</i>
              <p>Services</p>
            </a>
          </li>
        </ul>
      </div>
    </div>