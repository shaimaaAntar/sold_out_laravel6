@extends('layouts.admin')
@section('content')

    <div class="hold-transition sidebar-mini">
    <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <h1>controll panel</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">

               <div class="row">
                 <a href="{{route('users.index')}}"> <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">
                                  <?php
                                 $count1= \App\User::all()->count();
                                  ?>
                                  {{ $count1  }}

                              </span>
{{--                              <span class="count-number">11</span>--}}
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Users</h3>
                        </div>
                     </div>
                  </div> </a>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
{{--                              <span class="count-number">--}}

{{--                                   <?php--}}
{{--                                  $count1= \App\order::all()->count();--}}
{{--                                  ?>--}}
{{--                                  {{ $count1  }}--}}

{{--                              </span>--}}
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Orders </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-money fa-3x"></i>
                           <div class="counter-number pull-right">
                              <i class="ti ti-money"></i><span class="count-number">

                                    <?php
                                   $count1= \App\product::all()->count();
                                   ?>
                                   {{ $count1  }}

                               </span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Products</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">

                                   <?php
                                  $count1= \App\category::all()->count();
                                  ?>
                                  {{ $count1  }}

                              </span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>categories</h3>
                        </div>
                     </div>
                  </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">
                                  <?php
                                 $count1= \App\User::all()->count();
                                  ?>
                                  {{ $count1  }}

                              </span>
{{--                              <span class="count-number">11</span>--}}
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Users</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
{{--                              <span class="count-number">--}}

{{--                                   <?php--}}
{{--                                  $count1= \App\order::all()->count();--}}
{{--                                  ?>--}}
{{--                                  {{ $count1  }}--}}

{{--                              </span>--}}
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Orders </h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-money fa-3x"></i>
                           <div class="counter-number pull-right">
                              <i class="ti ti-money"></i><span class="count-number">

                                    <?php
                                   $count1= \App\product::all()->count();
                                   ?>
                                   {{ $count1  }}

                               </span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Products</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number">

                                   <?php
                                  $count1= \App\category::all()->count();
                                  ?>
                                  {{ $count1  }}

                              </span>
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>categories</h3>
                        </div>
                     </div>
                  </div>
               </div>


               <!-- /.row -->

            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

</div>

@endsection
