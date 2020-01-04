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
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">SHELF 1</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">SHELF 2</a>
                        </li> --}}
                       <!--  <li class="nav-item">
                            <a class="nav-link active" id="" data-toggle="tab" href="#" role="" aria-controls="" aria-selected="true">SHELF 3</a>
                        </li> -->

                        {{-- <li class="nav-item">
                            <a class="nav-link" id=""  href="{{url('/shelf3_4')}}" role="" aria-controls="" aria-selected="false">SHELF 3</a>
                        </li> --}}
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

                            @foreach($rowdata as $row => $item)
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
                                                             {{-- <h3 style="text-align:center; color:#145388; font-size:25px"> No Post Found</h3> --}}
                                                      @endif
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       @endforeach
                                     @else
                                   
                                   @endif
                                 </div>

                                 </div>

                            @endforeach       
         <!--  --> 
                     </div>
                  <br>
              <br>
            <br>

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
