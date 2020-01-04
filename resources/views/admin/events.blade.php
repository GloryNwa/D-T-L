<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Digital Lbrary</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
   @include("users/include.top_nav");
    
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
                    <h1>Events</h1>

                </div>


                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Borrowed Tapes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Returned Tapes</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">


                                        <table class="table table-bordered">
                                    
                                               <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Tape Title</th>
                                                    <th scope="col">Date Borrowed</th>
                                                    <th scope="col">Time Returning</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                                </tr>
                                          
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$event->firstname}} &nbsp;{{$event->lastname}}</td>
                                                    <td>{{$event->dept}}</td>
                                                    <td>{{$event->phone}}</td>
                                                    <td>{{$event->email}}</td>
                                                    <td>{{$event->tapeTitle}}</td>
                                                    <td>{{$event->borrowedDate}}</td>
                                                    <td>{{$event->returningDate}}</td>
                                                    <td>{{$event->duration}}</td>
                                                    {{-- <td>{{$event->created_at}}</td> --}}
                                                    {{-- <td>1 month</td> --}}
                                                    <td><span class="badge badge-pill badge-danger">{{$event->status}}</span></td>
                                                </tr>
                                                

                                            </tbody>
                                        </table>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">


                                        
                                            <table class="table table-bordered">
                                    
                                                    <thead>
                                                    
                                                     <tr>
                                                         <th scope="col">Name</th>
                                                         <th scope="col">Department</th>
                                                         <th scope="col">Phone</th>
                                                         <th scope="col">Email</th>
                                                         <th scope="col">Tape Title</th>
                                                         <th scope="col">Date Borrowed</th>
                                                         <th scope="col">Time Returning</th>
                                                         <th scope="col">Duration</th>
                                                         <th scope="col">Status</th>
                                                     </tr>
                                                     </tr>
                                               
                                                 </thead>
                                                 <tbody>
                                                     {{-- @if(count($events) > 0)
                                                      @foreach($events as $event) --}}
                                                     <tr>
                                                         <td><a href='{{url("/returnedEvent/{$event->id}")}}'>{{$event->firstname}} &nbsp;{{$event->lastname}}</a></td>
                                                         <td>{{$event->dept}}</a></td>
                                                         <td>{{$event->phone}}</td>
                                                         <td>{{$event->email}}</td>
                                                         <td>{{$event->tapeTitle}}</td>
                                                         <td>{{$event->borrowedDate}}</td>
                                                         <td>{{$event->returningDate}}</td>
                                                         <td>{{$event->duration}}</td>
                                                         {{-- <td>{{$event->status}}</td> --}}
                                                         {{-- <td>1 month</td> --}}
                                                         <td><a href='{{url("/returnedEvent/{$event->id}")}}'><span class="badge badge-pill badge-danger">{{$event->status}}</span></a></td>
                                                     </tr>
                                                     {{-- @endforeach
                                                    @endif --}}
                                                    
                                                 </tbody>
                                             </table>
     
                                    </div>

                                </div>
                            </div>
                        </div>
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