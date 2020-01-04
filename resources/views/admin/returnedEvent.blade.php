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
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Returned Events</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Returned Tapes</a>
                    </li> --}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-10 mb-4">
                                <div class="card">
                                    <div class="card-body">

                                        <form class="form-wrp" method="POST" action="{{route('returnedEventBlade',($returnedEvent->id))}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-row">  
                                                <div class="form-group col-md-2">
                                                    <label>Name</label>
                                                    <input type="text" name="firstname" class="form-control" value="{{$returnedEvent->firstname}}&nbsp;{{$returnedEvent->firstname}}" disabled>
                                                </div>
                
                                                <div class="form-group col-md-2">
                                                    <label>Department</label>
                                                    <input type="text" name="dept" class="form-control" value="{{$returnedEvent->dept}}"disabled>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" class="form-control" value="{{$returnedEvent->phone}}" disabled>
                                                </div>
                
                                                <div class="form-group col-md-3">
                                                    <label>Email</label>
                                                    <input type="text" name="email" class="form-control" value="{{$returnedEvent->email}}" disabled>
                                                </div>
                                                <div class="form-group col-md-3 ">
                                                    <label>Tape Title</label>
                                                    <input type="text" name="tapeTitle" class="form-control" value="{{$returnedEvent->tapeTitle}}" disabled>
                                                </div>
                                                
                                                <div class="form-group col-md-3">
                                                    <label> Date Returned </label>
                                                    <input type="text" name="borrowedDay" class="form-control" required  value="{{$returnedEvent->borrowedDate}}"required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Time Returned</label>
                                                    <input type="text" name="returningDate" class="form-control"  value="{{$returnedEvent->returningDate}}"required>
                                                </div>
                
                                                <div class="form-group col-md-3">
                                                    <label>Duration</label>
                                                    <input type="text" name="duration" class="form-control" value="{{$returnedEvent->duration}}"required>
                                                </div>
                                                <div class="form-group col-md-3 ">
                                                 <label>Status</label>
                                                  <select name="status" required class="form-control">
                                                   <option value="{{$returnedEvent->status}}" style="font-weight: bold">{{$returnedEvent->status}}</option>
                                                   <option value="pending" style="font-weight: bold">Pending</option>
                                                   <option value="success" style="font-weight: bold">Available</option>
                                                 </select>
                                                </div>
                                                    
                                              <input class="brd-rd5" type="hidden" name="id" value="{{$returnedEvent->id}}" placeholder="amount*" style="color: black; font-size: 15px;"/>
                                            </div>
                                               <button type="submit" name="update" class="btn btn-primary mb-0">Update</button>
                                          </form>
                                    </div>
                      

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