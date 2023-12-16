<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="{{asset('/admin/assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
{{--      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>--}}
      <link href="{{asset('/admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="{{asset('/admin/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="{{asset('/admin/assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="{{asset('/admin/assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="{{asset('/admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="{{asset('/admin/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="{{asset('/admin/assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="{{asset('/admin/assets/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="{{asset('/admin/assets/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="{{asset('/admin/assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
<body>
   <div class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="admins" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="{{asset('admin/assets/dist/img/mini-logo.png')}}" alt="">
               </span>
               <span class="logo-lg">
               <img src="{{asset('admin/assets/dist/img/logo.png')}}" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">

               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>

               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search.." />
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>

             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">

                     <!-- Messages -->
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <!-- start message -->
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Ronaldo</h4>
                                       <p>Please oreder 10 pices of kits..</p>
                                       <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Leo messi</h4>
                                       <p>Please oreder 10 pices of Sheos..</p>
                                       <span class="badge badge-info badge-massege"><small>6 days ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left" >
                                          <img src="assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Modric</h4>
                                       <p>Please oreder 6 pices of bats..</p>
                                       <span class="badge badge-info badge-massege"><small>1 hour ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar4.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Salman</h4>
                                       <p>Hello i want 4 uefa footballs</p>
                                       <span class="badge badge-danger badge-massege">
                                       <small>6 days ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Sergio Ramos</h4>
                                       <p>Hello i want 9 uefa footballs</p>
                                       <span class="badge badge-info badge-massege"><small>5 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <!-- Notifications -->
                     <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>


                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('admin/assets/dist/img/avatar5.png')}}" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-user"></i> User Profile</a>
                           </li>
                           <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="{{route('admins')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Users</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">

                        <li><a href={{route('users.create')}} >Add User</a></li>

                        <li><a href={{route('users.index')}}>List</a></li>

                     </ul>
                  </li>

                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Customers</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="add-customer.html">Add Customer</a></li>
                        <li><a href="clist.html">List</a></li>
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Customers</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="add-customer.html">Add Customer</a></li>
                        <li><a href="clist.html">List</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-gear"></i>
                     <span>settings</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="gsetting.html">Genaral settings</a></li>
                        <li><a href="stfsetting.html">Staff settings</a></li>
                        <li><a href="emailsetting.html">Email settings</a></li>
                        <li><a href="paysetting.html">Payment</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="company.html">
                     <i class="fa fa-home"></i> <span>Companies</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                  <li>
                     <a href="user.html">
                     <i class="fa fa-user-circle"></i><span>User</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="items.html">
                     <i class="fa fa-file-o"></i><span>Items</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="department.html">
                     <i class="fa fa-tree"></i><span>Categories</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                  <li>
                     <a href="calender.html">
                     <i class="fa fa-calendar"></i> <span>Calender</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

                  <li>
                     <a href="message.html">
                     <i class="fa fa-envelope-o"></i> <span>Message</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>

               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
        @yield('content')

      </div>
      <!-- /.wrapper -->

      <!-- Start Core Plugins
         =====================================================================-->
      <div>
       <!-- jQuery -->
      <script src="{{asset('/admin/assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
      <!-- jquery-ui -->
      <script src="{{asset('/admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="{{asset('/admin/assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="{{asset('/admin/assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="{{asset('/admin/assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="{{asset('/admin/assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="{{asset('/admin/assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="{{asset('/admin/assets/dist/js/custom.js')}}" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="{{asset('/admin/assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="{{asset('/admin/assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
      <script src="{{asset('/admin/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="{{asset('/admin/assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="{{asset('/admin/assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </div>
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });

         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
    type: 'bar',
         data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
             label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
             label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
             }
            }]
         }
    }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();
      </script>

   </div>
   </body>
</html>
