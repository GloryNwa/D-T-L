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
                        <h1>All Items</h1>
                    
                        <div class="text-zero top-right-button-container">
                          <a href="/create_programs">
                            {{-- <button type="button" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</button></a> --}}
                            <div class="btn-group">
                            </div>
                    </div>
                    </div>
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
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">TAPE REGISTRATION</a>
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
                                        <th>ShelfNo.</th>
                                        <th>RowNo.</th>
                                      
                                        <th>Status</th>
                                     
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($posts) > 0)
                                    <?php $x = 1;?>
                                     @foreach($posts as $post)
                                      <tr>
                                        <!--  <td></td> -->
                                          <td><a href='{{url("/view_single_item/{$post->id}")}}'>{{$x++}}</td></a>
                                          <td><a href='{{url("/view_single_item/{$post->id}")}}'>{{$post->program}}</td></a>
                                          <td>{{$post->programDescription}}</a></td>
                                          <td>{{$post->shelfNo}}</a></td>
                                          <td>{{$post->rowNo}}</td>                                     
                                  
  
                                          
                                   
                                      
                                       @if($post->status == 'borrowed')
                                       <td>                              
                                        <a href='{{url("/events/{$post->id}")}}'><span class="badge badge-pill badge-danger">BORROWED</span></a>                                   
                                                          
                                     </td>
                                  
                                      @else
                                         <td>
                                            <a href="{{url('/loan_request')}}"><span class="badge badge-pill badge-success">AVAILABE</span></a>
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
                                    <select id="inputState" name="program" class="form-control">
                                     
                                         <option selected="selected">Select Program</option>
                                         @if(count($formPosts) > 0)                               
                                       @foreach($formPosts as $post)
                                         <option> {{$post->programTitle}}</option>

                                         @endforeach
                                         <!--  --> 
                                                                            
                                      @else
                                        <h3> No Post Found</h3>
                                    @endif
                                 </select>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label for="inputAddress">Minister</label>
                                     <input type="text" name="minister" class="form-control"value="{{old('minister')}}">
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
                                     <input type="text" name="programDescription" class="form-control"value="{{old('programDescription')}}">
                                </div>
                              <!--   <div class="form-group col-md-6">
                                    <label for="inputAddress">Lib.No</label>
                                    <input type="text" name="libNo" class="form-control" placeholder="Insert Library No.">
                                </div>
                                 -->
                               
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Producer/Camera Man</label>
                                    <input type="text" name="producer" class="form-control" value="{{old('producer')}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Shelf No.</label>
                                     <input type="number" name="shelfNo" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAddress">Row No.</label>
                                     <input type="number" name="rowNo" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Tape Numbering</label>
                                    <input type="text" name="tapeNumbering" class="form-control"value="{{old('tapeNumbering')}}">
                                </div>
                           

                                <div class="form-group col-md-6 ">
                                    <label for="inputCity">Date/Year</label>
                                    <input type="date" name="dateYear" class="form-control">
                                </div>

                            </div>
                          </div>
                                 <div class="btn-group ">
                                <div class="form-group col-md-6 "> <button type="submit"  name="submit" class="btn btn-primary d-block mt-3 ">Save Records</button></div>
 
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
                 
                </div>
            </div>
            <a class="app-menu-button d-inline-block d-xl-none" href="#">
                <i class="simple-icon-refresh"></i>
            </a>
        </div>



    </main>

    
@include("admin/include.footer")