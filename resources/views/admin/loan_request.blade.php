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

                <h1>Tape Request Form</h1>
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
        </div>

        <div class="row">

            <div class="col-12">

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
                         <form class="form-wrp" method="POST" action="{{route('loanRequest')}}">
                             {{ csrf_field() }}
                           <!--  <div class="form-row">
                                <div class="form-group col-md-2 ">
                                    <label>Tape </label>
                                    <select class="form-control" id="">
                                        <option selected="selected">Choose ...</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Rushes">Rushes</option>
                                    </select>
                                </div> 
                            </div>
 -->

                            <div class="form-row ">
                                <div class="form-group col-md-6 ">
                                    <label>Firstname </label>
                                    <input type="text" name="firstname" class="form-control" required  value="{{old('firstname')}}">
                                </div> 

                                <div class="form-group col-md-6 ">
                                    <label>Lastname</label>
                                    <input type="text" name="lastname" class="form-control" required  value="{{old('lastname')}}">
                                </div>
                            </div>

                            <div class="form-row">  
                                <div class="form-group col-md-4 ">
                                    <label>Email Address</label>
                                    <input type="text" name="email" class="form-control" required  value="{{old('email')}}">
                                </div>

                                <div class="form-group col-md-4 ">
                                    <label>Telephone Number</label>
                                    <input type="number" name="phone" class="form-control" required  value="{{old('phone')}}">
                                </div>
                          
  
                                <div class="form-group col-md-4 ">
                                    <label>Department</label>
                                    <input type="text" name="dept" class="form-control" required  value="{{old('dept')}}">
                                </div>
                            </div>

                            {{-- <div class="form-row">
                                <div class="form-group col-md-12 ">
                        <button class="btn btn-default btn-xl" href="#" data-toggle="modal" data-target="#flipUp">Tape Title</button>
                            
                                </div>
                            </div> --}}
                            <div class="form-row">
                                <div class="form-group col-md-6 ">
                                <label>Tape Title</label> 
                                <select id="inputState" name="duration" class="form-control" data-toggle="modal" data-target="#flipUp">                              
                                 <option name="tapeTitle" class="form-control"  placeholder="Select Tape"></option>
                                </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label>Duration</label>
                                     <select id="inputState" name="duration" class="form-control"required>
                                     <option selected="selected">1 Week - 1 Month</option>
                                     <option selected="selected">2 - 3 Months</option>
                                     <option selected="selected">6 Months</option>
                                     <option selected="selected">Select Duration</option>
                                  </select>
                                </div>
                            </div>
                      
                            <div class="form-row">  
                                <div class="form-group col-md-6 ">
                                    <label>Date Borrowed</label>
                                    <input type="date" name="borrowedDate" class="form-control" required>
                                </div>

                                <div class="form-group col-md-6 ">
                                    <label>Date Returned </label>
                                    <input type="date" name="returningDate" class="form-control" required>
                                </div>
                            </div>
                          
                            <input type="hidden" name="id">
                                 
                            <div class="btn-group">
                                <div class="form-group col-md-6 "><button type="submit" name="submit" class="btn btn-primary d-block mt-3 ">Request</button></div>
                               <!--  <div class="form-group col-md-6 "> <button type="clear" class="btn btn-danger d-block mt-3 ">Cancel</button></div> -->
                              
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </main>

<!-- Modal Blade Starts Here -->
<div id="flipUp" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                <h5 style="text-align:center">Loan Tape</h5>
                <hr>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title"><!-- Upload CV and Cover Letter here, indicate your area of interest and position you are applying for as well as department --></h6s>
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
                        
                         <div style="max-height:400px; overflow: scroll;overflow-x:hidden;">
                         <table class="table table-bordered">                                   
                            <thead>
                             <tr>                               
                                 <th scope="col">Select</th>
                                 <th scope="col">Tape</th>
                            
                             </tr>
                             </tr>
                       
                         </thead>
                         <tbody>
                             <tr>
                             @if(count($posts) > 0)                           
                              @foreach($posts as $post)
                                      {{-- <option type="checkbox" class="product_list">{{$post->program}}</option> --}}
                                       
                                      <!--  -->                                                                               
                                <th scope="row"><input class="product_list" type="checkbox" name="services[]" value="{{$post->program }}"><br></th>
                                <td>{{$post->program}}</td>
                            
                              </tr>
                              @endforeach
                                 @else
                                 <h3> No Post Found</h3>
                             @endif
                    
                         </tbody>
                     </table>
                         </div>
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

  
   @include("users/include.footer");