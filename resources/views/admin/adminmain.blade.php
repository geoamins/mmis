
@php $locale = session()->get('locale'); @endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Madrasa System </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('../../asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{asset('../../asset/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- NProgress -->

    <link rel="stylesheet" href="{{asset('../../asset/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- FullCalendar -->

    <link rel="stylesheet" href="{{asset('../../asset/vendors/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" media="print">
    {{-- <link rel="stylesheet" href="{{asset('../../asset/vendors/fullcalendar/dist/fullcalendar.min.css')}}"> --}}
    {{-- <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print"> --}}

    <!-- Custom styling plus plugins -->
    {{-- <link href="../build/css/custom.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('../../asset/build/css/custom.min.css')}}">
  </head>
  {{--  dir="{{ ($locale='ur'?'rtl':'ltr') }}"   --}}
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MMIS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                @auth
              <div class="profile_pic">
                {{-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> --}}
                <img class="img-circle profile_img" src="{{ asset('images/' . Auth::user()->image)}}" />
                {{-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> --}}
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> {{ Auth::user()->name }}</h2>
              </div>
              @endauth
            </div>
            {{-- <img class="img-circle" src="{{ asset('images/' . Auth::user()->image)}}" /> {{ Auth::user()->name }} --}}


            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                @canany(['user-list', 'role-list', 'permission-list'])
                  <li class="{{ isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : '' }}"><a><i class="fa fa-home"></i> {{ __('sidebar.User Configuration') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('user-list')
                        <li><a href="{{ route('users.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('users.User')}}</a></li>
                      @endcan
                      @can('role-list')
                        <li ><a href="{{ route('roles.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'roleslist' ? 'active' : '') : '' }}">{{__('users.Roles')}}</a></li>
                      @endcan
                      @can('permission-list')
                        <li><a href="{{ route('permissions.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'permissionlist' ? 'active' : '') : '' }}">{{__('sidebar.Permissions')}}</a></li>
                      @endcan
                    </ul>
                    @endcan
                  </li>
                  @canany(['basic-list'])
                  <li class="{{ isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : '' }}"><a><i class="fa fa-cog"></i> {{ __('sidebar.Basic Setting') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('country-list')
                        <li><a href="{{ route('country.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Country Setup')}}</a></li>
                      @endcan
                    @can('province-list')
                        <li><a href="{{ route('province.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Province Setup')}}</a></li>
                    @endcan
                    @can('district-list')
                        <li><a href="{{ route('district.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.District Setup')}}</a></li>
                    @endcan
                    @can('department-list')
                        <li><a href="{{ route('department.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Department Setup')}}</a></li>
                    @endcan
                    @can('session-list')
                        <li><a href="{{ route('session.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Sessions Setup')}}</a></li>
                    @endcan
                    @can('student-type-list')
                        <li><a href="{{ route('studenttype.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Student Type Setup')}}</a></li>
                    @endcan
                    @can('class-list')
                        <li><a href="{{ route('class.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Classes Setup')}}</a></li>
                    @endcan
                    @can('student-type-list')
                        <li><a href="{{ route('section.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Sections Setup')}}</a></li>
                    @endcan
                    </ul>
                  </li>

                  @canany(['student-list'])
                  <li class="{{ isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : '' }}"><a><i class="fa fa-users"></i> {{ __('sidebar.Student Record') }} <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('student-list')
                        <li><a href="{{ route('student.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">{{__('sidebar.Student Registration')}}</a></li>
                      @endcan
                      @can('student-list')
                        <li><a href="{{ route('StruckOffIndex') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Struck OFF</a></li>
                      @endcan
                    </ul>
                    @endcan
                  </li>

                  @canany(['student-list'])
                  <li class="{{ isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : '' }}"><a><i class="fa fa-edit"></i>Attendance<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('student-list')
                        <li><a href="{{ route('attendance.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Student Attendance</a></li>
                      @endcan
                      @can('student-list')
                        <li><a href="{{ route('leave.index') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Leave System</a></li>
                      @endcan
                      @can('student-list')
                        <li><a href="{{ route('StudentAttReportIndex') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Student Report</a></li>
                      @endcan
                      @can('student-list')
                        <li><a href="{{ route('ClassAttReportIndex') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Class Report</a></li>
                      @endcan
                    </ul>
                    @endcan
                  </li>

                  @canany(['report-list'])
                  <li class="{{ isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : '' }}"><a><i class="fa fa-search"></i>Reports<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @can('report-list')
                        <li><a href="{{ route('StudentReportIndex') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Students Report</a></li>
                      @endcan
                      @can('report-list')
                        <li><a href="{{ route('StudentAdmissionReport') }}"  class="{{ isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : '' }}">Admission Report</a></li>
                      @endcan
                    </ul>
                    @endcan
                  </li>

                  @endcan

                  {{-- <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li> --}}
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>

            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    @auth



                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-circle" src="{{ asset('images/' . Auth::user()->image)}}" /> {{ Auth::user()->name }}
                    </a>

@endauth
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      {{-- <a class="dropdown-item"  href="javascript:;"> Profile</a> --}}
                      {{-- <a class="dropdown-item" href="{{ route('profile') }}">Profile</a> --}}
                      {{-- <a class="dropdown-item" href="{{ route('userpasswordchange') }}">Change your password</a> --}}
                        {{-- <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a> --}}
                    {{--  <a class="dropdown-item"  href="javascript:;">Help</a>  --}}



                       <div class="">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline-block">
                            @csrf
                            <button type="submit" class="dropdown-item ">
                                <i class=""></i>
                                Logout
                            </button>
                        </form>
                    </div>
                    </div>
                  </li>

                  <li role="presentation" class="nav-item dropdown open">
                    {{--  <select class="form-control Langchange">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu</option>
                    </select>  --}}
                    @switch($locale)
                        @case('en')
                            <a class="dropdown-item" href="lang/ur">Urdu</a>
                        @break
                        @case('ur')
                            <a class="dropdown-item" href="lang/en">English</a>
                        @break
                        @default
                            <a class="dropdown-item" href="lang/en">English</a>
                    @endswitch
                    <div>

                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->

        <div class="content-wrapper">

            <!-- Content Header (Page header) -->

            <div class="right_col" role="main">
                <div class="col-md-12 col-sm-12">

                  <div class="clearfix"></div>
                  @yield('contents')

                </div>
              </div>

            <!-- Main content -->

            <!-- /.content -->
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="">
             <strong>{{date('Y')}} &copy; All Rights Reserved <a href="https://BSoft.pk/"> Bridge Soft Technologies
                (PVT) LTD</a>.</strong>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- calendar modal -->



    <!-- /calendar modal -->

    <!-- jQuery -->

    <script src="{{asset('../../asset/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->


   <script src="{{asset('../../asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->

    <script src="{{asset('../../asset/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->

    <script src="{{asset('../../asset/vendors/nprogress/nprogress.js')}}"></script>
    <!-- FullCalendar -->

    <script src="{{asset('../../asset/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('../../asset/vendors/fullcalendar/dist/fullcalendar.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('../../asset//build/js/custom.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function($){
            $('button.del-popup').click(function(e){
                var formid = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                        $('#' + formid).submit();
                    }
                  })
            })
        })
    </script>
    <script type="text/javascript">
        {{--  var url = "{{ route('LangChange') }}";
        $(".Langchange").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });  --}}
    </script>
  </body>
</html>
