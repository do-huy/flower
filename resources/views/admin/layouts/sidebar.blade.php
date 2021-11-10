<div class="sidebar" data-color="orange" data-background-color="white" data-image="../admin/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
        DO HUY
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="material-icons">dashboard</i>
              <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
            <i><img style="width:25px" src="../admin/img/laravel.svg"></i>
            <p>Mục mục tài khoản
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse show" id="laravelExample">
            <ul class="nav">
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="sidebar-mini"> UP </span>
                  <span class="sidebar-normal">{{ __('User profile') }} </span>
                </a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                  <span class="sidebar-mini"> TK </span>
                  <span class="sidebar-normal"> Danh sách tài khoản </span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="material-icons">content_paste</i>
              <p>Danh mục</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">library_books</i>
              <p>{{ __('Typography') }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">
            <i class="material-icons">bubble_chart</i>
            <p>Sản phẩm</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">location_ons</i>
              <p>{{ __('Maps') }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">notifications</i>
            <p>{{ __('Notifications') }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="material-icons">language</i>
            <p>{{ __('RTL Support') }}</p>
          </a>
        </li>
        <li class="nav-item active-pro">
          <a class="nav-link text-white bg-danger" href="#">
            <i class="material-icons text-white">unarchive</i>
            <p>{{ __('Upgrade to PRO') }}</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
