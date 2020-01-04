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
                <div class="col-12 list">

                    <div class="mb-2">
                        <h1>SHELF</h1>
<!-- 
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
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
                    </div>


                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                        {{-- <li class="nav-item">
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">SHELF 1</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">SHELF 2</a>
                        </li> --}}
                       <!--  <li class="nav-item">
                            <a class="nav-link active" id="" data-toggle="tab" href="#" role="" aria-controls="" aria-selected="true">SHELF 3</a>
                        </li> -->

                        {{-- <li class="nav-item">
                            <a class="nav-link" id=""  href="" role="" aria-controls="" aria-selected="false">SHELF 3</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content">
                     <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                       <div class="row">
                       <div class="container-fluid library-app">
                            <div class="row">
                  
                                    @if(count($shelves) > 0)
                                            @foreach($shelves as $shelf)
                                        <div class="col-xxl-3 col-xl-3 col-12">
                                        
                                            <div class="card d-flex flex-row mb-4 media-thumb-container">
                                                <div class="d-flex align-self-center media-thumbnail-icon" href="#"> </div>
                                             
                                                <h2><a href='{{route('displaySingleShelf',['shelfNo'=>$shelf->shelfNo])}}'>Shelf &nbsp;{{$shelf->shelfNo}} </a></h2>
                                            
                                                    <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                                <div class="d-flex flex-grow-1 min-width-zero">
                                                    <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                                            <h3></h3>
                                                         
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </div>                                             
                                        </div>
                                        
                                       @endforeach                                
                                     @else
                                      <h5 class="mb-4 text-center"> &nbsp;No Post Found</h5>           
               @endif

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

@include("admin/include.footer");
