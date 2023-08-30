
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('../../asset/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?php echo e(asset('../../asset/vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- NProgress -->

    <link rel="stylesheet" href="<?php echo e(asset('../../asset/vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- FullCalendar -->

    <link rel="stylesheet" href="<?php echo e(asset('../../asset/vendors/fullcalendar/dist/fullcalendar.min.css')); ?>" rel="stylesheet" media="print">
    
    

    <!-- Custom styling plus plugins -->
    
    <link rel="stylesheet" href="<?php echo e(asset('../../asset/build/css/custom.min.css')); ?>">
  </head>

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
                <?php if(auth()->guard()->check()): ?>
              <div class="profile_pic">
                
                <img class="img-circle profile_img" src="<?php echo e(asset('images/' . Auth::user()->image)); ?>" />
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php echo e(Auth::user()->name); ?></h2>
              </div>
              <?php endif; ?>
            </div>
            


            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['user-list', 'role-list', 'permission-list'])): ?>
                  <li class="<?php echo e(isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : ''); ?>"><a><i class="fa fa-home"></i> <?php echo e(__('sidebar.User Configuration')); ?> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-list')): ?>
                        <li><a href="<?php echo e(route('users.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('users.User')); ?></a></li>
                      <?php endif; ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-list')): ?>
                        <li ><a href="<?php echo e(route('roles.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'roleslist' ? 'active' : '') : ''); ?>"><?php echo e(__('users.Roles')); ?></a></li>
                      <?php endif; ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-list')): ?>
                        <li><a href="<?php echo e(route('permissions.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'permissionlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Permissions')); ?></a></li>
                      <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                  </li>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['basic-list'])): ?>
                  <li class="<?php echo e(isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : ''); ?>"><a><i class="fa fa-home"></i> <?php echo e(__('sidebar.Basic Setting')); ?> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country-list')): ?>
                        <li><a href="<?php echo e(route('country.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Country Setup')); ?></a></li>
                      <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('province-list')): ?>
                        <li><a href="<?php echo e(route('province.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Province Setup')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('district-list')): ?>
                        <li><a href="<?php echo e(route('district.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.District Setup')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-list')): ?>
                        <li><a href="<?php echo e(route('department.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Department Setup')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('session-list')): ?>
                        <li><a href="<?php echo e(route('session.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Sessions Setup')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-type-list')): ?>
                        <li><a href="<?php echo e(route('studenttype.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Student Type Setup')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('class-list')): ?>
                        <li><a href="<?php echo e(route('class.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Classes Setup')); ?></a></li>
                    <?php endif; ?>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('student-type-list')): ?>
                        <li><a href="<?php echo e(route('section.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Sections Setup')); ?></a></li>
                    <?php endif; ?>
                    </ul>
                  </li>

                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['basic-list'])): ?>
                  <li class="<?php echo e(isset($menu) ? ($menu == 'userconfiguration' ? 'active open' : '') : ''); ?>"><a><i class="fa fa-home"></i> <?php echo e(__('sidebar.Student Record')); ?> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('basic-list')): ?>
                        <li><a href="<?php echo e(route('student.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Student Registration')); ?></a></li>
                      <?php endif; ?>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('section-list')): ?>
                        <li><a href="<?php echo e(route('student.index')); ?>"  class="<?php echo e(isset($sub_menu) ? ($sub_menu == 'userlist' ? 'active' : '') : ''); ?>"><?php echo e(__('sidebar.Generate Cards')); ?></a></li>
                      <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                  </li>

                  <?php endif; ?>






                  
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
                    <?php if(auth()->guard()->check()): ?>



                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-circle" src="<?php echo e(asset('images/' . Auth::user()->image)); ?>" /> <?php echo e(Auth::user()->name); ?>

                    </a>

<?php endif; ?>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      
                      
                      
                        
                    



                       <div class="">
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline-block">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item ">
                                <i class=""></i>
                                Logout
                            </button>
                        </form>
                    </div>
                    </div>
                  </li>

                  <li role="presentation" class="nav-item dropdown open">
                    <select class="form-control Langchange">
                        <option value="en" <?php echo e(session()->get('locale') == 'en' ? 'selected' : ''); ?>>English</option>
                        <option value="ur" <?php echo e(session()->get('locale') == 'ur' ? 'selected' : ''); ?>>Urdu</option>
                    </select>
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
                  <?php echo $__env->yieldContent('contents'); ?>

                </div>
              </div>

            <!-- Main content -->

            <!-- /.content -->
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="">
             <strong><?php echo e(date('Y')); ?> &copy; All Rights Reserved <a href="https://BSoft.pk/"> Bridge Soft Technologies
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

    <script src="<?php echo e(asset('../../asset/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap -->


   <script src="<?php echo e(asset('../../asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- FastClick -->

    <script src="<?php echo e(asset('../../asset/vendors/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- NProgress -->

    <script src="<?php echo e(asset('../../asset/vendors/nprogress/nprogress.js')); ?>"></script>
    <!-- FullCalendar -->

    <script src="<?php echo e(asset('../../asset/vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('../../asset/vendors/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('../../asset//build/js/custom.min.js')); ?>"></script>

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
        var url = "<?php echo e(route('LangChange')); ?>";
        $(".Langchange").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });
    </script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\mmis\resources\views/admin/adminmain.blade.php ENDPATH**/ ?>