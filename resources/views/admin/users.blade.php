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
                        <h1>Users</h1>
                    
                        <div class="text-zero top-right-button-container">
                          <a href="/create_programs">
                          <!--   <button type="button" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</button></a> -->
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
                            <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">ALL USERS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">CREATE USERS</a>
                        </li>
                    </ul>
                    <div class="tab-content mb-4">


                      <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab" >
                       <div class="row">
                         <div class="col-12 list" data-check-all="checkAll" style="background-color:#fff"> 
                        <!-- <div class="card mb-4">   -->         
                           <div class="card-body">
                            <!--    <h5 class="card-title">Filter & Length</h5> -->
                             <table class=" table data-table data-table-feature">
                                 <thead>

                                   <div class="col-md-11" style="background-color:#fff">
                                    <tr>
                                      <!--  <th>Id</th> -->
                                        <th>Id</th>
                                        <th>Name </th>
                                          <th>Email</th>
                                        <th>Department</th>
                                         <th>Date</th>
                                        <th>Current Status</th>
                                        <th>Change Status</th>
                                    
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                 
                                    <tr>
                                    @if(count($users) > 0)
                                    <?php $x = 1;?>
                                        @foreach($users as $user)
                                        <tr>
                                       <td>{{$x++}}.</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->dept}}</td>
                                        <td>{{$user->dateYear}}</td>
                                        <td>
                                        @if($user->status == '1')
                                        <p id="sts {{$user->id}}" style='color:green'>Active</p>
                                        @else
                                          <p sts {{$user->id}} style='color:red'>Inactive</p>
                                        @endif
                                        </td>
                                          {{-- <td><span class="badge badge-pill badge-success">ACTIVE</span></td>  --}}
                                          <td><select onchance="active_inactive_user(this.value,{{$user->id}})">
                                            <option value="">Select</option>
                                            <option value="1">Activated</option>
                                            <option value="0">Deactivate</option>
                                        </select></td> 
                                        
                                        @endforeach
                                      @endif
                                 </tr>
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
                         <form class="form-wrp" method="POST" action="{{route('createUsers')}}" enctype="multipart/form-data">
                             {{ csrf_field() }}
                           <div class="form-group">
                                            <label for="">Full Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name')}}" >
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email"  class="form-control" name="email" placeholder="Email"  value="{{old('email')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Department</label>
                                        <input type="text" class="form-control" name="dept" placeholder="Department" value="{{old('dept')}}">
                                        </div>
                                        <div class="form-group">
                                                <label for="">Date</label>
                                                <input  type="date" class="form-control" name="dateYear">
                                            </div>
    


                                        <div class="form-group">
                                            <label for="">Generate Unique Password</label>
                                            <input class="form-control" name="password" placeholder="Password">
                                        </div>

                                        <button type="submit" name="create" class="btn btn-primary mb-0">Create User</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function active_inactive_user(val,user_id){
        $.ajax({
          type:'post',
          url:'change.blade.php',
          data:{val:val,user_id:user_id},
          success: function(result){
           if(result==1){
              $('#sts'+user_id).html('Active').css('color','green');
           }else{
            $('#sts'+user_id).html('Inactive').css('color','red');
           }

          }
     
        });
    }
    </script>

























