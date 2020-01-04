@include("admin/include.header");
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
                <div class="col-12">

                    <h1>Dashboard</h1>
                    <!-- <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav> -->
                    <div class="separator mb-5"></div>


                </div>
                <div class="col-lg-12 col-xl-6">

                    <div class="icon-cards-row">
                        <div class="owl-container">
                            <div class="owl-carousel dashboard-numbers">
                                <a href="{{url('/all_items')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Items In The Library</p>
                                        <p class="lead text-center">{{count($posts)}}</p>
                                       <!--  <p class="lead text-center">{{count($posts)}}</p> -->
                                    </div>
                                </a>
                                <a href="{{url('/loaned_items')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Borrowed Items</p>
                                        <p class="lead text-center">{{count($borrowed)}}</p>
                                    </div>
                                </a>

                                <a href="{{url('/available_items')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Available Messages</p>
                                        <p class="lead text-center">{{count($available)}}</p>
                                    </div>
                                </a>

                                <a href="{{url('/users')}}" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Users</p>
                                        <p class="lead text-center">{{count($users)}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">


                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="mb-4">Create Users</h5>
                                    @if(count($errors) >0)
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                     @endforeach
                                @endif 
                                @if(session('response'))
                                    <div class="alert alert-success">{{session('response')}}</div>
                                 @endif    
                                 <form class="form-wrp" method="POST" action="{{route('createUsers')}}" enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                   <div class="form-group">
                                                    <label for="">Full Name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name')}}" >
                                                </div>
                                        
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email"  class="form-control" name="email" placeholder="Email"  value="{{old('email')}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Department</label>
                                                <input type="text" class="form-control" name="dept" placeholder="Department" value="{{old('dept')}}">
                                                </div>
                                                <div class="form-group">
                                                        <label for="">Date</label>
                                                        <input  type="date" class="form-control" name="dateYear">
                                                    </div>
            
        
        
                                                <div class="form-group">
                                                    <label for="">Generate Unique Password</label>
                                                    <input class="form-control" name="password" placeholder="Password">
                                                </div>
        
                                                <button type="submit" name="create" class="btn btn-primary mb-0">Create User</button>
                                   </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


        <!--- -->             

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <a href="{{url('/all_items')}}"><button class="btn btn-outline-primary active">View all items</button></a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recently Added Items</h5>
                            <div class="scroll dashboard-list-with-thumbs">
                             @if(count($posts) > 0)
                                @foreach($posts as $post)

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="all_items">
                                            @if(!empty(Auth::user()->profile_pic))
                                                <img src="{{$post->file}}" alt="Marble Cake" class="list-thumbnail border-0" width="80px">
                                              @else
                                                 <img src="img/images.png"  class="list-thumbnail border-0" width="80px">
                                              @endif
                                        

                                   
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                      
                                           
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">{{$post->program}} - {{$post->description}}</p>
                                            </div>
                                             <p class="list-item-heading"> By: {{$post->minister}}</p>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                {{$post->dateYear}}</div>
                                        </a>
                                    </div>
                                </div>
                                 @endforeach
                                 
                                @else

                                <div class="col-md-3">
                                    <div class="alert alert-info">
                                        No Items available
                                    </div>
                                </div>

                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logs</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New user registiration</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 products added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="col-md-6 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                             <hr>
                            <div class="scroll dashboard-list-with-user">

                              @if(count($users) > 0)
                              
                                @foreach($users as $user)
        
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    {{-- <a href="#"> --}}
                                        {{-- <img src="img/profile-pic-l.jpg" alt="" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall"> --}}
                                  
                                    <div class="pl-3">
                                        
                                            <p class="font-weight-medium mb-0">{{$user->name}}</p>
                                            <p class="text-muted mb-0 text-small">{{$user->created_at}}</p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach  
                            @endif
                        </div><br>
                    </div>
                </div>
            </div>
            </div>

          <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payment Status</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Work Progress</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="64" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Tasks Completed</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="75" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payments Done</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>

@include("admin/include.footer")