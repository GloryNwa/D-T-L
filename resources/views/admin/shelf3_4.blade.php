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
                        <li class="nav-item">
                                <a class="nav-link" id=""  href="{{url('/shelf1_2')}}" role="" aria-controls="" aria-selected="false">SHELF 2</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#first" role="tab" aria-controls="second" aria-selected="false">SHELF 3</a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">SHELF 4</a>
                        </li>

                        <li class="nav-item">
                            {{-- <a class="nav-link" id=""  href="" role="" aria-controls="" aria-selected="false">SHELF 3</a> --}}
                        </li>
                    </ul>
                    <div class="tab-content">
                     <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                       <div class="row">
                       <div class="container-fluid library-app">

                        <div class="row">
                            <div class="col-xxl-2 col-xl-6 col-12 text-center">
                                <div class="card d-flex flex-row mb-4 media-thumb-container">

                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                            <a href="#" class="w-100">
                                                <h2>Shelf 3</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


            <div class="col-12 col-xl-9 " data-check-all="checkAll">
                <h5 class="mb-4 text-center">Row 1</h5>
                <div class="row">
                  
                @if(count($shelfs) > 0)
                        @foreach($shelfs as $shelf)
                    <div class="col-xxl-4 col-xl-6 col-12">
                    
                        <div class="card d-flex flex-row mb-4 media-thumb-container">
                            <div class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                                <i class="iconsminds-book"></i>
                            </div>
                            <div class="d-flex flex-grow-1 min-width-zero">
                                 <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                    <p></p><br>
                    
                                    <a href='{{url("/view_single_item/{$shelf->id}")}}'>Program Title : - {{$shelf->program}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                     <br>
                                   
                                     Minister: - {{$shelf->minister}}
                                    <span class="fa fa-eye mb-2" style="color:#009efb;float:right"></span>
                                  <br>
                                    {{-- program Description: - Day 1 morning Session --}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
                                    </a>
                                    @if($shelf->status == 'borrowed')                                                                   
                                        <a href='{{url("/events/{$shelf->id}")}}'><span class="badge badge-pill badge-danger">BORROWED</span></a> 

                                      @elseif($shelf->status == 'available')                                      
                                        
                                      <a href="{{url('/loan_request')}}"><span class="badge badge-pill badge-success">AVAILABE</span></a> 
                                  
                                      @else                                                                                                                              
                                         <h3 style="text-align:center; color:#145388; font-size:25px"> No Post Found</h3>                             
                                  @endif
                                    <br>
                                </div>
                            </div>
                        </div>                                             
                    </div>
                    
                   @endforeach                                
                 @else
                  <h5 class="mb-4 text-center"> &nbsp;No Post Found</h5>           
               @endif
             </div>




            <hr>
             <h5 class="mb-4 text-center">Row 2</h5>
                <div class="row">
                  
                    @if(count($shelfs) > 0)
                    @foreach($shelfs as $shelf)
                <div class="col-xxl-4 col-xl-6 col-12">
                
                    <div class="card d-flex flex-row mb-4 media-thumb-container">
                        <div class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                            <i class="iconsminds-book"></i>
                        </div>
                        <div class="d-flex flex-grow-1 min-width-zero">
                             <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                <p></p><br>
                
                                  <a href='{{url("/view_single_item?id={$shelf->id}")}}'>Program Title : - {{$shelf->program}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                 <br>
                               
                                 Minister: - {{$shelf->minister}}
                                <span class="fa fa-eye mb-2" style="color:#009efb;float:right"></span>
                              <br>
                                {{-- program Description: - Day 1 morning Session --}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
                                </a>
                                <a href="{{url('/events')}}"> <span class="badge badge-pill badge-danger mb-4"width="10%" >BORROWED</span></a> 
                                <br>
                            </div>
                        </div>
                    </div>                                             
                </div>
                
               @endforeach                                
             @else
              <h5 class="mb-4 text-center"> &nbsp;No Post Found</h5>           
           @endif
             </div>


            <hr>
             <h5 class="mb-4 text-center">Row 3</h5>
                 <div class="row">
                  
                    @if(count($shelfs) > 0)
                    @foreach($shelfs as $shelf)
                <div class="col-xxl-4 col-xl-6 col-12">
                
                    <div class="card d-flex flex-row mb-4 media-thumb-container">
                        <div class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                            <i class="iconsminds-book"></i>
                        </div>
                        <div class="d-flex flex-grow-1 min-width-zero">
                             <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                <p></p><br>
                
                                  <a href='{{url("/view_single_item?id={$shelf->id}")}}'>Program Title : - {{$shelf->program}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                 <br>
                               
                                 Minister: - {{$shelf->minister}}
                                <span class="fa fa-eye mb-2" style="color:#009efb;float:right"></span>
                              <br>
                                {{-- program Description: - Day 1 morning Session --}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
                                </a>
                                <a href="{{url('/events')}}"> <span class="badge badge-pill badge-danger mb-4"width="10%" >BORROWED</span></a> 
                                <br>
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
        
         <!--  -->
        
        </div>
        <br>
        <br>
        <br>

       <div class="col-lg-12 col-xl-11">
                    <div class="icon-cards-row">
                        <div class="owl-container">
                            <div class="owl-carousel dashboard-numbers">
                                <a href="#" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Shelf  3</p>
                                        <p class="lead text-center">366</p>
                                    </div>
                                </a>
                                <a href="" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Row 1</p>
                                        <p class="lead text-center">100</p>
                                    </div>
                                </a>

                                <a href="" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Row 2</p>
                                        <p class="lead text-center">211</p>
                                    </div>
                                </a>

                                <a href="" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Row 3</p>
                                        <p class="lead text-center">123</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
         <br><br>
    </div>
  </div>
</div>


      <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                 <div class="row">
                       <div class="container-fluid library-app">

                        <div class="row">
                            <div class="col-xxl-2 col-xl-6 col-12 text-center">
                                <div class="card d-flex flex-row mb-4 media-thumb-container">

                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                            <a href="#" class="w-100">
                                                <h2>Shelf 4</h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

            <div class="col-12 col-xl-9 " data-check-all="checkAll">
                <h5 class="mb-4 text-center">Row 1</h5>
                <div class="row">
                  
                    @if(count($shelfs) > 0)
                    @foreach($shelfs as $shelf)
                <div class="col-xxl-4 col-xl-6 col-12">
                
                    <div class="card d-flex flex-row mb-4 media-thumb-container">
                        <div class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                            <i class="iconsminds-book"></i>
                        </div>
                        <div class="d-flex flex-grow-1 min-width-zero">
                             <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                <p></p><br>
                
                                  <a href='{{url("/view_single_item?id={$shelf->id}")}}'>Program Title : - {{$shelf->program}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                 <br>
                               
                                 Minister: - {{$shelf->minister}}
                                <span class="fa fa-eye mb-2" style="color:#009efb;float:right"></span>
                              <br>
                                {{-- program Description: - Day 1 morning Session --}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
                                </a>
                                <a href="{{url('/events')}}"> <span class="badge badge-pill badge-danger mb-4"width="10%" >BORROWED</span></a> 
                                <br>
                            </div>
                        </div>
                    </div>                                             
                </div>
                
               @endforeach                                
             @else
              <h5 class="mb-4 text-center"> &nbsp;No Post Found</h5>           
           @endif
             </div>




            <hr>
             <h5 class="mb-4 text-center">Row 2</h5>
                <div class="row">
                  
                    @if(count($shelfs) > 0)
                    @foreach($shelfs as $shelf)
                <div class="col-xxl-4 col-xl-6 col-12">
                
                    <div class="card d-flex flex-row mb-4 media-thumb-container">
                        <div class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                            <i class="iconsminds-book"></i>
                        </div>
                        <div class="d-flex flex-grow-1 min-width-zero">
                             <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                <p></p><br>
                
                                  <a href='{{url("/view_single_item?id={$shelf->id}")}}'>Program Title : - {{$shelf->program}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                 <br>
                               
                                 Minister: - {{$shelf->minister}}
                                <span class="fa fa-eye mb-2" style="color:#009efb;float:right"></span>
                              <br>
                                {{-- program Description: - Day 1 morning Session --}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
                                </a>
                                <a href="{{url('/events')}}"> <span class="badge badge-pill badge-danger mb-4"width="10%" >BORROWED</span></a> 
                                <br>
                            </div>
                        </div>
                    </div>                                             
                </div>
                
               @endforeach                                
             @else
              <h5 class="mb-4 text-center"> &nbsp;No Post Found</h5>           
           @endif
             </div>


            <hr>
             <h5 class="mb-4 text-center">Row 3</h5>
                 <div class="row">
                  
                    @if(count($shelfs) > 0)
                    @foreach($shelfs as $shelf)
                <div class="col-xxl-4 col-xl-6 col-12">
                
                    <div class="card d-flex flex-row mb-4 media-thumb-container">
                        <div class="d-flex align-self-center media-thumbnail-icon" href="Apps.MediaLibrary.ViewFolder.html">
                            <i class="iconsminds-book"></i>
                        </div>
                        <div class="d-flex flex-grow-1 min-width-zero">
                             <div class="card-body align-self-center d-flex flex-column justify-content-between min-width-zero align-items-lg-center">
                                <p></p><br>
                
                                  <a href='{{url("/view_single_item?id={$shelf->id}")}}'>Program Title : - {{$shelf->program}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>
                                 <br>
                               
                                 Minister: - {{$shelf->minister}}
                                <span class="fa fa-eye mb-2" style="color:#009efb;float:right"></span>
                              <br>
                                {{-- program Description: - Day 1 morning Session --}}
                                 <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
                                </a>
                                <a href="{{url('/events')}}"> <span class="badge badge-pill badge-danger mb-4"width="10%" >BORROWED</span></a> 
                                <br>
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
        <!--  -->
        </div>
        <br>
        <br>
        <br>

      
       <div class="col-lg-12 col-xl-11">
                    <div class="icon-cards-row">
                        <div class="owl-container">
                            <div class="owl-carousel dashboard-numbers">
                                <span  class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Shelf  4</p>
                                        <p class="lead text-center">366</p>
                                    </div>
                                </span>
                                <span  class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Row 1</p>
                                        <p class="lead text-center">100</p>
                                    </div>
                                </span>

                                <span class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Row 2</p>
                                        <p class="lead text-center">211</p>
                                    </div>
                                </span>

                                <span class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Number of Items in Row 3</p>
                                        <p class="lead text-center">123</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
          <br><br>
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
