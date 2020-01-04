<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Digital Lbrary</title>
    <link rel="stylesheet"href="{{ URL::to('/')}}/font/iconsmind-s/css/iconsminds.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/font/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/bootstrap.rtl.only.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/fullcalendar.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/datatables.responsive.bootstrap4.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/select2.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/perfect-scrollbar.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/bootstrap-stars.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/nouislider.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/bootstrap-datepicker3.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/vendor/component-custom-switch.min.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/main.css">
    <link rel="stylesheet"href="{{ URL::to('/')}}/css/dore.light.blue.min.css">
   
</head>

<body id="app-container" class="menu-default ">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1"/>
                    <rect x="0.48" y="7.5" width="7" height="1"/>
                    <rect x="0.48" y="15.5" width="7" height="1"/>
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1"/>
                    <rect x="1.56" y="7.5" width="16" height="1"/>
                    <rect x="1.56" y="15.5" width="16" height="1"/>
                </svg>
            </a>
    
            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1"/>
                    <rect x="0.5" y="7.5" width="25" height="1"/>
                    <rect x="0.5" y="15.5" width="25" height="1"/>
                </svg>
            </a>
    
            <!-- <div class="search" data-search-path="Pages.Search03d2.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div> -->
        </div>
    
    
        <a class="navbar-logo" href="#">
           <h3>Loveworld Tape Library</h3>
            <span class=""></span> 
            
        </a>
    
        <div class="navbar-right">
           
    
            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="name">{{ucfirst(strtolower(Auth::user()->name))}}</span>
                    <span>
                        <img alt="Profile Picture" src="img/profile-pic-l.jpg">
                    </span>
                </button>
    
                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="/user_profile">User Account</a>
                    <a class="dropdown-item" href="/update_profile">Update Profile</a>
                    <!-- <a class="dropdown-item" href="#">History</a>
                    <a class="dropdown-item" href="#">Support</a> -->
                    <a class="dropdown-item" href="/logout">Sign out</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    
    
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="{{url('/dashboard')}}">
                            <i class="iconsminds-dashboard"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/all_items')}}">
                            <i class="iconsminds-inbox-full"></i> All Items
                        </a>
                    </li>

                    <li>
                        <a href="{{url('/users')}}">
                            <i class="iconsminds-conference"></i> Users
                        </a>
                    </li>
                  <!--   <li>
                        <a href="/loaned_items">
                            <i class="iconsminds-inbox-into"></i> Loaned Items
                        </a>
                    </li> -->
                   <!--  <li>
                        <a href="/loan_request">
                            <i class="iconsminds-inbox-out"></i> Loan Request
                        </a>
                    </li> -->
                    <li>
                        <a href="{{url('/all_programs')}}">
                            <i class="iconsminds-inbox-full"></i> All Programs
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{url('/events')}}">
                            <i class="simple-icon-calendar"></i> Events
                        </a>
                    </li> --}}
                    <li>
                            <a href="{{url('/shelfs')}}">
                            <i class="iconsminds-data-center"></i> Shelves
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/logout')}}">
                            <i class="iconsminds-password"></i>Logout
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 list">

                <div class="mb-2">
                    <h1>Program Details</h1>
                </div>

                <div class="tab-content">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <hr>
                            <div class="col-lg-10 col-10 mb-4">
                                <div class="card-title mb-4">
                                   <!--  <h5 class="mb-4">Details</h5> -->
                                </div>
                                <div class="card mb-4">
                                   <!--  <img src="img/profile-pic-l-4.jpg" alt="Detail Picture" class="card-img-top"> -->

                                    <div class="card-body">
                                        <h3 class=" text-medium mb-2">Program Title :</h3><h4 class="mb-3">
                                            {{$single->program}}</h4>
                                        <hr>
                                        
                                    </div>
                                </div>
                                   
                                   
                                    <div class="card mb-4">
                                        <h5 class="mb-4"  style="padding: 30px">Tape Description</h5><div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Status: </h6>

                                        @if($single->status == 'borrowed')
                                                                   
                                        <a href='{{url("/events/{$single->id}")}}'><span class="badge badge-pill badge-danger">BORROWED</span></a>                                                                                           
                                       @else
                                      
                                             <a href="{{url('/loan_request')}}"><span class="badge badge-pill badge-success">AVAILABE</span></a>                                 
                                       @endif
                                    </div>
                                     <hr>
                                    <div class="card-body" style="padding: 30px">

                                       <h6 class="mb-0">Tape Number:<br> {{$single->tapeNumbering}}</h6><br>
                                       <h6 class="mb-0">Location: <br> {{$single->location}}</h6><br>
                                        <h6 class="mb-0">Description:<br>{{$single->programDescription}} </h6><br>
                                        <h6 class="mb-0">Minister: <br>{{$single->minister}} </h6><br>
                                        <h6 class="mb-0">Producer / Camera Man:<br>{{$single->producer}} </h6><br>
                                        <h6 class="mb-0">Shelf No: {{$single->shelfNo}} </h6><br>
                                        <h6 class="mb-0">Row No:  {{$single->rowNo}}</h6><br>
                                         <h6 class="mb-0">Date and Time : {{$single->dateYear}}</h6>

                                  <!--        <span class="badge badge-pill badge-danger">Borrowed</span> -->
                                    </div>
                                </div>
                              
                                                                                      
                
                            <div class="card mb-4">                                
                               </div>
                                                                
                               </div>

                            <div class="col-2 col-lg-2">
                                <div class="card-title mb-4">
                                   <!--  <h5 class="mb-4">Borrowed History</h5> -->
                                </div>

                       <div class="row">
                         <div class="col-12 list" data-check-all="checkAll" > 
                       <div class="card mb-4">           
                           <!-- <div class="card-body">
                               <h5 class="card-title"></h5>
                            
                        </div> -->
                     </div>
                </div>

        
                </div> 

            </div>

        </div>
    </div>
    <h3 style="text-align:center">Borrowed History</h3>
      <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab" >
            <div class="row">
                    <div class="col-10 list" data-check-all="checkAll" style="background-color:#fff"> 
                   <!-- <div class="card mb-4">   -->         
                      <div class="card-body">
                       <!--    <h5 class="card-title">Filter & Length</h5> -->
                         <table class="table data-table data-table-feature"">
                           <thead>
                                <tr>
                                 <!--  <th>Id</th> -->
                                   <th>Id</th>
                                   <th>Name</th>
                                   <th>Program Title</th>
                                   <th>Department</th>                                                    
                                   <th>Status</th>
                                   <th></th>
                                   
                               </tr>
                           </thead>
                           <tbody>
                               @if(count($singlePost) > 0)
                               <?php $x = 1;?>
                              
                                 <tr>
                                   <!--  <td></td> -->
                                     <td>{{$x++}}</td>
                                     <td>{{$singlePost->firstname}}&nbsp;{{$singlePost->lastname}}</td>
                                     <td>{{$singlePost->dept}}</td>                                     
                                     <td>{{$singlePost->tapeTitle}}</a></td>
                                                                        
                                
                                  @if($singlePost->status == 'borrowed')
                                  <td>                              
                                     <a href='{{url("/events/{$single->id}")}}'><span class="badge badge-pill badge-danger">BORROWED</span></a>                                   
                                </td>
                             
                                 @endif
                                    </tr>
                           
                                     <!--  --> 
                                                                        
                                  @else
                                    <h5 style="text-align:center; color:#145388; font-size:25px"> No Borrowed History Found!</h5>
                                @endif
                          </tbody>
                       </table>
                 <!--   </div> -->
                </div>
           </div>
        </div>
             </div>
         </div>

    </main>
    <script src="{{ URL::to('/')}}/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/Chart.bundle.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/chartjs-plugin-datalabels.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/moment.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/fullcalendar.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/datatables.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/owl.carousel.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/progressbar.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/jquery.barrating.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/select2.full.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/nouislider.min.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/bootstrap-datepicker.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/Sortable.js"></script>
    <script src="{{ URL::to('/')}}/js/vendor/mousetrap.min.js"></script>
    <script src="{{ URL::to('/')}}/js/dore.script.js"></script>
    <script src="{{ URL::to('/')}}/js/scripts.js"></script>
</body>
</html>
