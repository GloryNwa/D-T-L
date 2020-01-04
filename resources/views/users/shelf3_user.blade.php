@include("users/include.header");
<body id="app-container" class="menu-default ">
   @include("users/include.top_nav");
   @include("users/include.side_nav");
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
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">SHELF 3</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">SHELF 4</a>
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
                                                <h2>Shelf 1</h2>
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
                                    <p></p>
                    
                                     <a href="#">{{$shelf->title}}   - By:  {{$shelf->author}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
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
                                    <p></p>
                    
                                     <a href="#">{{$shelf->title}}   - By:  {{$shelf->author}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
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
                                    <p></p>
                    
                                     <a href="#">{{$shelf->title}}   - By:  {{$shelf->author}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
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
                                                <h2>Shelf 2</h2>
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
                                    <p></p>
                    
                                     <a href="#">{{$shelf->title}}   - By:  {{$shelf->author}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
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
                                    <p></p>
                    
                                     <a href="#">{{$shelf->title}}   - By:  {{$shelf->author}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
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
                                    <p></p>
                    
                                     <a href="#">{{$shelf->title}}   - By:  {{$shelf->author}}
                                     <span class="fa fa-eye" style="color:#009efb;float:right"></span>  
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
                                        <p class="card-text mb-0">Total Number of Items in Shelf  4</p>
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
</div>
</div>


</div>

</div>
</div>
</div>


</main>

@include("users/include.footer");
