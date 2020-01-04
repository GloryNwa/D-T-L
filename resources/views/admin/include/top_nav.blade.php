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


























@include("admin/include.header");
<body id="app-container" class="menu-default ">
   @include("admin/include.top_nav");
   @include("admin/include.side_nav");
    <main>
        <div class="container-fluid">
            <div class="row app-row">
                <div class="col-12 list" data-check-all="checkAll">
                    <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <h1>All Items</h1>
                    
                        <div class="text-zero top-right-button-container">
                          <a href="/create_programs">
                            <a class="menu-link" href="#" data-toggle="modal" data-target="#flipUp">
                        <!--     <button type="button" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</button></a> -->
                        </a>
                            <div class="btn-group">
                            </div>
                    </div>
                    </div>
<!-- 
                    <li class="menu-item">
                       <a class="menu-link" href="#" data-toggle="modal" data-target="#flipUp">
                       <span class="title" style="font-size:11px; text-decoration:underline;">Upload CV</span>
                    </a>
                  </li> -->
                    <!-- <div class="separator mb-5"></div> -->
                </div>
            </div>

                 @if(count($errors) >0)
                      @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                      @endforeach
                     @endif 
                   @if(session('response'))
                            <div class="alert alert-success">{{session('response')}}</div>
                  @endif    

                   
                    <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">ALL ITEMS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">LOAN A TAPE</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-4">


                      <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab" >
                       <div class="row">
                         <div class="col-12 list" data-check-all="checkAll" style="background-color: #fff"> 
                       <!--  <div class="card mb-4">  -->          
                           <div class="card-body">
                            <!--    <h5 class="card-title">Filter & Length</h5> -->
                              <table class="table data-table data-table-feature">
                                <thead>

                                
                                    <tr>
                                      <!--  <th>Id</th> -->
                                        <th>Id &nbsp; &nbsp; &nbsp; &nbsp;programs</th>
                                        <th>Author</th>
                                        <th>Shelf</th>
                                        <th>Row</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                 @if(count($posts) > 0)
                                  <?php $x = 1;?>
                                   @foreach($posts as $post)
                                    <tr>
                                      <!--  <td></td> -->
                                        <td>{{$x++}} &nbsp; &nbsp; &nbsp; &nbsp;{{$post->title}}</td>
                                        <td>{{$post->author}}</td>
                                        <td>{{$post->shelf}}</td>
                                        <td>{{$post->row}}</td>                                     
                                        <td>{{$post->created_at}}</td>

                                        
                                 
                                    
                                     @if($post->status == 'borrowed')
                                     <td>                              
                                        <a href="/events"> <span class="badge badge-pill badge-danger">BORROWED</span></a>                                   
                                   </td>
                                
                                    @else
                                       <td>
                                          <a href="/loan_request"><span class="badge badge-pill badge-success">AVAILABE</span></a>
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
               <!--  </div> -->
             </div>
         </div>












<!-------------------------------------------SECOND TAP ---------------------------------->

           <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
              <div class="row">
                 <div class="col-md-11">
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
                         <form class="form-wrp" method="POST" action="{{route('tapeReg')}}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputState">Tape</label>
                                    <select id="inputState" name="chooseTape" class="form-control">
                                         <option selected="selected">Choose...</option>
                                         <option>Rushes</option>
                                         <option>Master</option>
                                 </select>
                                </div>
                                 <div class="form-group col-md-10">
                                    <label for="inputAddress">Tape Content</label>
                                    <input type="text" name="tapeContent" class=" form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Lib.No</label>
                                    <input type="text" name="libNo" class="form-control" placeholder="Insert Library No.">
                                </div>
                                
                               
                                <div class="form-group col-md-6 ">
                                    <label for="inputAddress">Producer/Camera Man</label>
                                    <input type="text" name="producer" class="form-control ">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="inputAddress">Shelf No.</label>
                                    <input type="text" name="shelfNo" class="form-control ">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="inputAddress">Row No.</label>
                                    <input type="text" name="rowNo" class="form-control ">
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="inputAddress">Tape Numbering</label>
                                    <input type="text" name="tapeNumbering" class="form-control ">
                                </div>
                            </div>

                            <div class="form-row ">
                                <div class="form-group col-md-6 ">
                                    <label for="inputCity ">Tape Type</label>
                                    <input type="text" name="tapeType" class="form-control ">
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="inputCity">Date/Year</label>
                                    <input type="date" name="dateYear" class="form-control datepicker">
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
            </div>


     
        </div>

    </div>
</div>

 </div>
    </div>
      </div>
        <div class="app-menu">
            <div class="p-4">
                <div class="scroll">
                    <p class="text-muted text-small">Status</p>
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

                    <p class="text-muted text-small">Categories</p>
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
                    </ul>




                    <p class="text-muted text-small">Labels</p>
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
                    </div>

                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-refresh"></i>
            </a>
        </div>


    </main>
@include("admin/include.footer")