@include("users/include.header");
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
                    <h1>Create Programs</h1>
                    <!-- nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
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
            </div>

            <div class="row">
                
                <div class="col-md-10">
                    <div class="card mb-4">
                        <div class="card-body">
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                             @endforeach
                        @endif 
                        @if(session('response'))
                            <div class="alert alert-success">{{session('response')}}</div>
                         @endif    
                        
                         <form class="form-wrp" method="POST" action="{{route('AddPrograms')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-row">

                                  <div class="form-group col-md-4">
                                        <label for="">Program Title</label>
                                        <input type="text" id="" class="form-control" name="title">

                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="">Location</label>
                                        <input type="text" id="" class="form-control" name="location">

                                   </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="">Date</label>
                                        <input type="date" id="" class="form-control" name="description">

                                    </div>

                                       
                               </div>
                               <button type="submit" name="submit" class="btn btn-primary">Create</button>
                           </form>


                    </div>
                </div>
            </div>
        </div>
        </div>

         <div class="app-menu">
            <div class="p-4">
                <div class="scroll">
                    <!-- <p class="text-muted text-small">Status</p>
                    <ul class="list-unstyled mb-5">
                        <li class="active">
                            <a href="#">
                                <i class="simple-icon-refresh"></i>
                                Pending Tasks
                                <span class="float-right">12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="simple-icon-check"></i>
                                Completed Tasks
                                <span class="float-right">24</span>

                            </a>
                        </li>
                    </ul>
 -->
                   <!--  <p class="text-muted text-small">Categories</p>
                    <ul class="list-unstyled mb-5">
                        <li>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="category1">
                                <label class="custom-control-label" for="category1">Flexbox</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="category2">
                                <label class="custom-control-label" for="category2">Sass</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="category3">
                                <label class="custom-control-label" for="category3">React</label>
                            </div>
                        </li>
                    </ul> -->




                   <!--  <p class="text-muted text-small">Labels</p>
                    <div>
                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-primary mb-1">NEW FRAMEWORK</span>
                            </a>
                        </p>

                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-theme-3 mb-1">EDUCATION</span>
                            </a>
                        </p>
                        <p class="d-sm-inline-block mb-1">
                            <a href="#">
                                <span class="badge badge-pill badge-outline-secondary mb-1">PERSONAL</span>
                            </a>
                        </p>
                    </div> -->

                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-refresh"></i>
            </a>
        </div>
    </main>
  
    @include("admin/include.footer");











