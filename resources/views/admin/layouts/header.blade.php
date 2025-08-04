<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="SEO_title" content="@yield('SEO_title')">
    
    <title>Admin | Unikwork</title>
    
    <link rel="stylesheet" href="{{ url('public/admin-assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ url('public/admin-assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('public/admin-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/admin-assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link href="{{url('public/images/favicon.png')}}" rel="icon">
    <link href="{{asset('vendor/bootstrap/css/font-awesome.min.css')}}" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="{{asset('vendor/googlefont.css')}}" rel="stylesheet">
{{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}

<link href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1/daterangepicker.css" />

  {{-- <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}"> --}}

</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ URL('/')}} "><img src="{{asset('images/logo-black.png')}}" class="ml-4" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ URL('/')}} "><img src="{{asset('images/unikwork-logo.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        {{-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button> --}}
       

        <h3 class="txt-dark"> @yield('pagename')</h3>
   
    
          {{-- <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-settings d-none d-lg-flex dropdown">
              <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" class="mb-0">
                @csrf
                <button type="submit" class="dropdown-item"><i class="ti-power-off text-primary"></i>Logout</button>
              </form>
            </li>
          </ul> --}}

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-settings d-none d-lg-flex dropdown">
          <div class="dropdown navbar-nav navbar-nav-right">
            <img src="{{asset('images/user_logo.svg')}}" alt="Profile Icon" class="profile-icon" width="40px"/>
            <div class="dropdown-options">
              <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" class="mb-0">
                @csrf
                <button id="logout-button" type="submit" class="dropdown-item"><i class="ti-power-off text-primary"></i>Logout</button>
              </form>
            </div>
          </div>
            </li>
          </ul>


        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="h-divider"></div>
        <ul class="nav">
          <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <span class="nav-icon"></span>
                <span class="menu-title side_ico">Dashboard</span>
            </a>
        </li>
        
      {{--       
        @if(in_array(Auth::user()->role, [1,2,3]))
        <li class="nav-item {{ Request::is('/add-requirements') || Request::is('/view-career') || Request::is('/career-view') ? 'active' : '' }}">
          <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
            <i class="icon-columns mdi mdi-face"></i>
            <span class="menu-title">Career</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="{{ route('add-requirements') }}">Add Career</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('view-career') }}">View Career</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('career-view') }}">Career Form Data</a></li>
            </ul>
          </div>
        </li>
        @endif --}}

       
          @if(in_array(Auth::user()->role, [1,2,3]))
            <li class="nav-item {{ Request::is('/view-career') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('view-career') }}">
                <span class="nav-icon-career"></span>
                <span class="menu-title side_ico">View Career</span>
              </a>
            </li>
          @endif

          {{-- @if ($currentRoute === 'requirements')
          @if(in_array(Auth::user()->role, [1,2,3]))
          <li class="nav-item {{ Request::is('/requirements') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('requirements') }}">
              <span class="nav-icon-career"></span>
              <span class="menu-title side_ico">View Career</span>
            </a>
          </li>
        @endif
        @endif --}}
      
          @if(in_array(Auth::user()->role, [1,2,3]))
            <li class="nav-item {{ Request::is('/career-view') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('career-view') }}">
                <span class="nav-icon-resume"></span>
                <span class="menu-title side_ico">Resumes</span>
              </a>
            </li>
          @endif
      
          @if(in_array(Auth::user()->role, [1,2]))
            <li class="nav-item {{ Request::is('/contact-view') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('contact-view') }}">
                <span class="nav-icon-contact"></span>
                <span class="menu-title side_ico">Contact Form</span>
              </a>
            </li>
          @endif
      
          @if(in_array(Auth::user()->role, [1,3]))
            <li class="nav-item">
              {{-- <a class="nav-link" href="{{ URL::to('admin/blog') }}">
                <span class="nav-icon-blog"></span>
                <span class="menu-title side_ico">Blog</span>
              </a> --}}
              <a class="nav-link" href="{{ URL::to('admin/bloglist') }}">
                <span class="nav-icon-blog"></span>
                <span class="menu-title side_ico">Blog</span>
              </a>
            </li>
          @endif
      
          {{-- @if(in_array(Auth::user()->role, [1,2,3]))
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('https://hiring.unikwork.com/') }}" target="_blank">
                <img src="{{ asset('images/aptitude_ico.svg') }}" alt="Aptitude Test Icon">
                <span class="menu-title side_ico">Aptitude test</span>
              </a>
            </li>
          @endif --}}
      
          @if(in_array(Auth::user()->role, [1,2]))
            <li class="nav-item {{ Request::is('/users') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('users') }}">
                {{-- <img src="{{ asset('images/user_ico.svg') }}" alt="Users Icon" class="{{ Request::is('/users') ? 'active-icon' : '' }}"> --}}
                <span class="nav-icon-user"></span>
                <span class="menu-title side_ico">Users</span>
              </a>
            </li>
          @endif

          @if(in_array(Auth::user()->role, [1,2]))
            <li class="nav-item {{ Request::is('/seo_details') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('seo_details') }}">
                {{-- <img src="{{ asset('images/user_ico.svg') }}" alt="seo_details Icon" class="{{ Request::is('/seo_details') ? 'active-icon' : '' }}"> --}}
                <span class="nav-icon-seo"></span>
                <span class="menu-title side_ico">SEO Page Details</span>
              </a>
            </li>
          @endif
        </ul>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('logout-button').addEventListener('click', function (e) {
      e.preventDefault();
    // Show SweetAlert confirmation
    Swal.fire({
      title: 'Are you sure?',
      text: "Do you want to log out?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, logout!',
      cancelButtonText: 'Cancel',
      reverseButtons: true,
      customClass: {
        confirmButton: 'btn btn-primary',  // Change confirm button to orange (Bootstrap class 'btn-warning')
        cancelButton: 'btn btn-secondary'  // Optional: Change cancel button to gray (Bootstrap class 'btn-secondary')
      }
    }).then((result) => {
      if (result.isConfirmed) {
        // If the user confirms, submit the logout form
        document.getElementById('logout-form').submit();
      }
    });
  });

document.addEventListener('DOMContentLoaded', function() {
    const profileContainer = document.querySelector('.profile-container');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Show the dropdown menu on mouseover
    profileContainer.addEventListener('mouseover', function() {
        dropdownMenu.style.display = 'block';
    });

    // Hide the dropdown menu on mouseout
    profileContainer.addEventListener('mouseout', function() {
        dropdownMenu.style.display = 'none';
    });
});


</script>