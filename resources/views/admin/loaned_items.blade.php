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
            <div class="row app-row">
                <div class="col-12 list" data-check-all="checkAll">
                    <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <h1>Total Borrowed Items</h1>
                    
                        <div class="text-zero top-right-button-container">
                          <a href="/create_programs">
                           <!--  <button type="button" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</button></a> -->
                            <div class="btn-group">
                            </div>
                    </div>
                    </div>
                    <!-- <div class="separator mb-5"></div> -->
                </div>
            </div>

              <!--    @if(count($errors) >0)
                      @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                      @endforeach
                     @endif 
                   @if(session('response'))
                            <div class="alert alert-success">{{session('response')}}</div>
                  @endif     -->

                   
                   
                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">BORROWED ITEMS</a>
                        </li>

                        <li class="nav-item">
                           <!--  <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">TAPE REGISTRATION</a> -->
                        </li>
                    </ul>
                    <div class="tab-content mb-4">


                      <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab" >
                       <div class="row">
                         <div class="col-12 list" data-check-all="checkAll" style="background-color:#fff"> 
                        <!-- <div class="card mb-4">  -->          
                           <div class="card-body">
                            <!--    <h5 class="card-title">Filter & Length</h5> -->
                              <table class=" table data-table data-table-feature">
                                 <thead>

                                   <div class="col-md-11" style="background-color:#fff">
                                    <tr>
                                      <!--  <th>Id</th> -->
                                        <th>Id</th>
                                        <th>program Title </th>
                                        <th>Description</th>
                                        <th></th>
                                        <th>Minister</th>
                                        <th>Status</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @if(count($posts) > 0)
                                 <?php $x = 1;?>
                                 @foreach($posts as $post)
                                    <tr>
                                   
                                        <td>{{$x++}}</td>
                                        <td>{{$post->program}}</td>
                                        {{-- <td>{{$post->minister}}</td> --}}
                                        <td>{{$post->programDescription}}</td>
                                        <td></td>                                     
                                        <td>{{$post->minister}}</td>

                                        
                                 
                                    
                                     @if($post->status == 'borrowed')
                                    
                                    <td>
                                     <a href="{{url('/events')}}"><span class="badge badge-pill badge-danger">BORROWED</span></a>
                                  </td>
                                    @endif
                                       </tr>
                                      @endforeach
                                      <!--  -->
                                                                           
                                     @else
                                       <h3 style="text-align:center; color:#145388; font-size:25px"> No Post Found</h3>
                                   @endif
                               </tbody>
                            </table>
                        </div>
                     </div>
                </div>
            <!--  </div> -->
         </div>










<!-------------------------------------------SECOND TAP ---------------------------------->

           <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
              <div class="row">
                 <div class="col-md-11" style="background-color:#fff">
             <!--    <div class="card mb-4"> -->
                    <div class="card-body">
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                             @endforeach
                        @endif 
                        @if(session('response'))
                            <div class="alert alert-success">{{session('response')}}</div>
                         @endif    
                         <form class="form-wrp" method="POST" action="{{route('tapeReg')}}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputState">Programs</label>
                                    <select id="inputState" name="chooseTape" class="form-control">
                                         <option selected="selected">Select Program</option>
                                         <option>World Evangelism Conference</option>
                                         <option>Healling School Canada</option>
                                         <option>Higher Life Conference</option>
                                 </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputAddress">Minister</label>
                                     <input type="text" name="minister" class="form-control ">
                                </div>
                                <!--  <div class="form-group col-md-2">
                                    <label for="inputState">Tape</label>
                                    <select id="inputState" name="chooseTape" class="form-control">
                                         <option selected="selected">Choose...</option>
                                         <option>Rushes</option>
                                         <option>Master</option>
                                 </select>
                                </div> -->
                                 <div class="form-group col-md-7">
                                    <label for="inputAddress">Program Description</label>
                                     <input type="text" name="description" class="form-control ">
                                </div>
                              <!--   <div class="form-group col-md-6">
                                    <label for="inputAddress">Lib.No</label>
                                    <input type="text" name="libNo" class="form-control" placeholder="Insert Library No.">
                                </div>
                                 -->
                               
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Producer/Camera Man</label>
                                    <input type="text" name="producer" class="form-control ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Shelf No.</label>
                                     <input type="number" name="shelf" class="form-control ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Row No.</label>
                                     <input type="number" name="row" class="form-control ">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Tape Numbering</label>
                                    <input type="text" name="tapeNumbering" class="form-control ">
                                </div>
                           

                            <!-- <div class="form-row ">
                                <div class="form-group col-md-6 ">
                                    <label for="inputCity ">Tape Type</label>
                                    <input type="text" name="tapeType" class="form-control ">
                                </div> -->

                                <div class="form-group col-md-6 ">
                                    <label for="inputCity">Date/Year</label>
                                    <input type="date" name="dateYear" class="form-control datepicker">
                                </div>

                            </div>
                          </div>
                            <!-- <h4 class="mb-4 mt-4"><b>Tape Location</b></h4>
                            <div class="form-row ">

                                <div class="form-group col-md-3 ">
                                    <label for="inputCity ">Library Name </label>
                                    <input type="text " class="form-control ">
                                </div>
                                <div class="form-group col-md-3 ">
                                    <label for="inputCity ">Shelf Number </label>
                                    <input type="text " class="form-control ">
                                </div>
                                <div class="form-group col-md-3 ">
                                    <label for="inputCity ">Row Number </label>
                                    <input type="text " class="form-control ">
                                </div>
                                <div class="form-group col-md-3 ">
                                    <label for="inputCity ">Tape Number </label>
                                    <input type="text " class="form-control ">
                                </div>

                            </div>
 -->
                            <div class="btn-group ">
                                <div class="form-group col-md-6 "> <button type="submit"  name="submit" class="btn btn-primary d-block mt-3 ">Save Records</button></div>
                              <!--   <div class="form-group col-md-6 "> <button type="submit " class="btn btn-danger d-block mt-3 ">Cancel</button></div> -->

                            </div>

                        </form>
                    </div>
                </div>
            <!-- </div> -->


     
        </div>

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
@include("admin/include.footer")