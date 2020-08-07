<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUST | Student Management System</title>

     <!--    Font Awesome Stylesheet-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/fonts/fa/css/all.min.css">
    <!--    Animate CSS-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/css/animate.css">
    <!--    Owl Carosel Stylesheets-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/plugins/owl-carosel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/plugins/owl-carosel/css/owl.theme.default.css">
    <!--    Magnetic Popup-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/plugins/magnific-popup/css/magnific-popup.css">
    <!--    Bootstrap-4.3 Stylesheet-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/css/sub-dropdown.css">
    <!--    Data Table CSS-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/plugins/data-table/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/plugins/data-table/css/fixedHeader.bootstrap4.min.css">
    <!--    Theme Stylesheet-->
    <link rel="stylesheet" href="{{ asset('/')}}/admin/assets/css/style.css">
    <!--    Favicon-->
    <link rel="shortcut icon" href="{{ asset('/')}}/admin/assets/images/favicon.png" type="image/x-icon">
    <!--    jQuery-->
    {{--<script src="{{ asset('/')}}/admin/assets/js/jquery-3.3.1.slim.min.js"></script> --}}
     <script src="{{ asset('/')}}/admin/assets/js/jquery-3.4.1.js"></script>

</head>
<body>
<!--Header Start-->
<section>
@if(@isset($header))
      <div class="col-sm-12 text-center header pb-1">
        <h2 class="font-weight-bold p-1 m-0">{{ $header->owner_name }}</h2>
        <h5 class="menu-bg p-2 pl-3 pr-3 mb-1">{{ $header->owner_subtitle }}</h5>
        <p class="font-weight-bold mb-0">{{ $header->address }}</p>
        <p class="font-weight-bold mb-0">Mobile: {{ $header->mobile }}</p>
      </div>
 @else
    <div class="col-sm-12 text-center header pb-1">
        <h2 class="font-weight-bold p-1 m-0">Web Site Title</h2>
        <h5 class="menu-bg p-2 pl-3 pr-3 mb-1">Web Sub Title</h5>
        <p class="font-weight-bold mb-0">305/306, Road:06, Block-CA, Mirpur-2, Dhaka-1216</p>
        <p class="font-weight-bold mb-0">Mobile: 880-1835429094</p>
    </div>
@endif

</section>
<!--Header End-->

<!--User Avatar Start-->
<img class="avatar" src="@if(Auth::user()->avatar){{asset('/').$user->avatar}}@else{{ asset('/')}}/admin/assets/images/avatar.png @endif" alt="Avatar">
<!--User Avatar Start-->

<!--Main Menu Start-->
<nav class="navbar navbar-expand-lg menu-bg " >
    <!--    <a class="navbar-brand" href="#">LOGO</a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="mobile-menu-icon fa fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}"><span class="fa fa-home"></span> Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::user()->role =='Admin')

             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('student-registration') }}">Registration</a></li>
                    <li><a class="dropdown-item" href="{{ route('student-list') }}">All Students</a></li>
                    <li><a class="dropdown-item" href="{{ route('dept-wise-student') }}">Semester Wise Students</a></li>
                    <li><a class="dropdown-item" href="{{ route('session-wise-student') }}">Session Wise Students</a></li>
                </ul>
            </li>
            @endif

            @if(Auth::user()->role =='Chairman')

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <li><a class="dropdown-item" href="{{ route('dept-wise-student-list',['userId'=>Auth::user()->id]) }}">All Students</a></li>
                    <li><a class="dropdown-item" href="{{ route('dept-wise-student') }}">Semester Wise Students</a></li>
                    <li><a class="dropdown-item" href="{{ route('session-wise-student') }}">Session Wise Students</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Course
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a href="{{ route('course-assign',['userId'=>Auth::user()->id]) }}" class="dropdown-item">Course Assign</a></li>
                    <li><a href="{{ route('course-assign-list',['userId'=>Auth::user()->id]) }}" class="dropdown-item">Course Assign list</a></li>

                    <li><a href="{{ route('course-list-by-chairman',['userId'=>Auth::user()->id])}}" class="dropdown-item">All Courses</a></li>
                    <li><a href="{{ route('teacher-wise-course-list',['userId'=>Auth::user()->id]) }}" class="dropdown-item">My Courses</a></li>
                </ul>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Routine
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a href="{{ route('add-routine') }}" class="dropdown-item">Add Routine</a></li>
                    <li><a href="{{ route('routine') }}" class="dropdown-item">Routine </a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Result
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a href="{{ route('add-marks') }}" class="dropdown-item">Course Mark</a></li>
                    <li><a href="{{ route('add-marks') }}" class="dropdown-item">Result </a></li>
                </ul>
            </li>
            @if(Auth::user()->role =='Teacher')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 My Courses
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a href="{{ route('teacher-wise-course-list',['userId'=>Auth::user()->id]) }}" class="dropdown-item">Course List</a></li>
                    <li><a href="{{ route('add-marks') }}" class="dropdown-item">Result </a></li>
                </ul>
            </li>
            @endif

            @if(Auth::user()->role =='Student')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Academic Info
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class=""><a class="dropdown-item" href="form.html">Summary</a></li>
                    <li class=""><a class="dropdown-item" href="table.html">Present Courses</a></li>
                    <li class=""><a class="dropdown-item" href="#">Previous Courses</a></li>
                    <li class=""><a class="dropdown-item" href="#">Feture Courses</a></li>
                    <li class=""><a class="dropdown-item" href="#">All Courses</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fees & Waiver
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class=""><a class="dropdown-item" href="form.html">Total Demeand</a></li>
                    <li class=""><a class="dropdown-item" href="table.html">Total Payment</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Apply
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class=""><a class="dropdown-item" href="form.html">Apply for Exam</a></li>
                    <li class=""><a class="dropdown-item" href="table.html">Apply for Improvement</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Library
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class=""><a class="dropdown-item" href="form.html">All Books</a></li>
                    <li class=""><a class="dropdown-item" href="table.html">Get Book</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Blood Search</a>
            </li>

            @endif

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SMS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class=""><a class="dropdown-item" href="form.html">Send Result</a></li>
                    <li class=""><a class="dropdown-item" href="table.html">Batch Wise SMS</a></li>
                    <li class=""><a class="dropdown-item" href="#">Class Wise SMS</a></li>
                    <li class=""><a class="dropdown-item" href="#">Single SMS</a></li>
                    <li class=""><a class="dropdown-item" href="#">Send Student ID</a></li>
                </ul>
            </li> --}}

            {{-- @if(Auth::user()->role !='Admin')

            <li class="nav-item">
                <a class="nav-link" href="{{ route('department-list') }}">Departments</a>
            </li>
            @endif --}}

            <li class="nav-item">
                <a class="nav-link" href="{{ route('photo-gallery') }}">Gallery</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Setting
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @if(Auth::user()->role=='Admin')
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Faculty</a>
                        <ul class="dropdown-menu">

                        <li><a href="{{ route('add-faculty') }}" class="dropdown-item">Add Faculty</a></li>

                        <li><a href="{{ route('faculty-list') }}" class="dropdown-item">Faculty List</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Department</a>
                        <ul class="dropdown-menu">

                        <li><a href="{{ route('add-department') }}" class="dropdown-item">Add Department</a></li>

                        <li><a href="{{ route('department-list') }}" class="dropdown-item">Department List</a></li>
                        </ul>
                    </li>

                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Session</a>
                        <ul class="dropdown-menu">

                            <li><a href="{{ route('add-session') }}" class="dropdown-item">Add Session</a></li>

                            <li><a href="{{ route('session-list') }}" class="dropdown-item">Session List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Level &Term</a>
                        <ul class="dropdown-menu">

                            <li><a href="{{ route('add-level-term') }}" class="dropdown-item">Add Level & Term</a></li>

                            <li><a href="{{ route('level-term-list') }}" class="dropdown-item">Level & Term List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Course</a>
                        <ul class="dropdown-menu">

                        <li><a href="{{ route('add-course') }}" class="dropdown-item">Add Course</a></li>

                        <li><a href="{{ route('course-list') }}" class="dropdown-item">Course List</a></li>
                        </ul>
                    </li>

                     <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Slider</a>
                        <ul class="dropdown-menu">
                        <li><a href="{{ route('add-slide') }}" class="dropdown-item">Add Slide</a></li>
                        <li><a href="{{ route('manage-slide') }}" class="dropdown-item">Manage Slide</a></li>
                        </ul>
                    </li>
                    @if(Auth::user()->role=='Admin')
                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Header & Footer</a>
                        <ul class="dropdown-menu">
                            @if(!isset($header))
                        <li><a href="{{ route('add-header-footer') }}" class="dropdown-item">Add Header & Footer</a></li>
                        @endif
                        @if(isset($header))
                            <li><a href="{{ route('manage-header-footer',['id'=>$header->id]) }}" class="dropdown-item">Manage Header & Footer</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif


                    <li class="dropdown-submenu">
                        <a class="dropdown-item dropdown-toggle" href="#">Users</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user-type') }}" class="dropdown-item">User Type</a></li>
                            <li><a href="{{ route('user-registration')}}" class="dropdown-item">Add User</a></li>
                            <li><a href="{{ route('user-list')}}" class="dropdown-item">User List</a></li>
                            @endif
                            <li><a href="{{ route('user-profile',['userId'=>Auth::user()->id])}}" class="dropdown-item">User profile</a></li>
                        </ul>
                    </li>

                </ul>
            </li>

        </ul>

        <a class="font-weight-bold my-2 my-sm-0 mr-2 logout" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
        </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
    </form>
    </div>
</nav>
<!--Main Menu End-->
