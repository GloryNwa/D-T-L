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
                <div class="col-12 list" data-check-all="checkAll" >
                 <div class="row">
                  <div class="col-12">
                    <div class="mb-3">
                        <h1>All Programs</h1>
                    
                        <div class="text-zero top-right-button-container">
                          <a href="#">
                            <button type="button" class="btn btn-primary btn-lg top-right-button mr-1"  href="#" data-toggle="modal" data-target="#flipUp">ADD NEW</button></a>
                            <div class="btn-group">
                            </div>
                    </div>
                    </div>

                    {{-- <li class="menu-item">
                            <a class="menu-link" href="#" data-toggle="modal" data-target="#flipUp">
                              <i class="icon fa fa-upload"></i>
                              Upload CV
                            </a>
                          </li> --}}
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
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">ALL PROGRAMS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">CREATE PROGRAM</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-4">
                      <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab" >

                       <div class="row">
                         <div class="col-12 list" data-check-all="checkAll" style="background-color:#fff"> 
                        <!-- <div class="card mb-4">   -->         
                           <div class="card-body">
                            <!--    <h5 class="card-title">Filter & Length</h5> -->
                              <table class="table data-table data-table-feature"">
                                <thead>
                                     <tr>
                                      <!--  <th>Id</th> -->
                                        <th>Id</th>
                                        <th>Program Title</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                    
                                        <th></th>
                                        <th></th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($programs) > 0)
                                    <?php $x = 1;?>
                                     @foreach($programs as $post)
                                      <tr>
                                        <!--  <td></td> -->
                                          <td>{{$x++}}</td>
                                          <td>{{$post->programTitle}}</td>
                                          <td>{{$post->programTitle}}</td>                                     
                                          <td>{{$post->location}}</a></td>
                                          <td>{{$post->dateYear}}</td>                                     
                                           @if($post->status == 'borrowed')
                                       <td>                              
                                                                       
                                     </td>
                                  
                                      @else
                                         <td>
                                           
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
                      <!--   </div> -->
                     </div>
                </div>
             </div>
         </div>












<!-------------------------------------------SECOND TAP ---------------------------------->

           <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
              <div class="row">
                 <div class="col-md-11" style="background-color:#fff">
                <!-- <div class="card mb-4"> -->
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
                                        <input type="text" id="" class="form-control" name="programTitle" value="{{old('programTitle')}}">

                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="">Location</label>
                                        <input type="text" id="" class="form-control" name="location"value{{old('location')}}>

                                   </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="">Date</label>
                                        <input type="date" id="" class="form-control" name="dateYear">

                                    </div>

                                       
                               </div>
                               <button type="submit" name="create" class="btn btn-primary">Create</button>
                           </form>

                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
     
    <!--     </div>
 -->
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

    
<!-- Modal Blade Starts Here -->
<div id="flipUp" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h6 class="modal-title"><!-- Upload CV and Cover Letter here, indicate your area of interest and position you are applying for as well as department --></h6s>
            </div>
            <hr>
            
            <div class="row">
                
                    <div class="col-md-10">
                        <h5 style="text-align:center">Create Program</h5>
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
    
                                      <div class="form-group col-md-12">
                                            <label for="">Program Title</label>
                                            <input type="text" id="" class="form-control" name="programTitle">
    
                                        </div>
                                        <div class="form-group col-md-12">
                                           <label for="">Location</label>
                                            <input type="text" id="" class="form-control" name="location">
    
                                       </div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="">Date</label>
                                            <input type="dateYear" id="" class="form-control" name="description">
    
                                        </div>
    
                                           
                                   </div>
                                   <button type="submit" name="submit" class="btn btn-primary">Create</button>
                               </form>
    
    
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> --}}
          </div>
      
        </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Modal Blade Stops Here -->
@include("admin/include.footer")


























