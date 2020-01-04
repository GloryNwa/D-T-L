@include("users/include.header");
<body id="app-container" class="menu-default ">
   @include("users/include.top_nav");
   @include("users/include.side_nav");

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Dashboard</h1>
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
                <div class="col-lg-12 col-xl-6">

                    <div class="icon-cards-row">
                        <div class="owl-container">
                            <div class="owl-carousel dashboard-numbers">
                                <a href="/shelf" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Items In The Library</p>
                                        <p class="lead text-center">{{count($posts)}}</p>
                                    </div>
                                </a>
                                <a href="" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Total Borrowed Messages</p>
                                        <p class="lead text-center">Shf 2</p>
                                    </div>
                                </a>

                                <a href="" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Available Messages</p>
                                        <p class="lead text-center">Shf 3</p>
                                    </div>
                                </a>

                                <a href="" class="card">
                                    <div class="card-body text-center">
                                        <i class="iconsminds-data-center "></i>
                                        <p class="card-text mb-0">Shelf Title</p>
                                        <p class="lead text-center">Shf 4</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                
                            
                        <div class="row">
                            <div class="col-12 list">

                                <h3>Borrowed Items</h3>
                               
                          @if(count($posts) > 0)
                            <!-- <?php $x = 1;?> -->
                            @foreach($posts as $post)

                                <div class="card d-flex flex-row mb-3">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    {{$post['title']}}
                                                </a>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$post['author']}}</p>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">{{$post['created_at']}}</p>


                                          @if($post['Loaned'] == 'Yes')
                                            <div class="w-15 w-xs-100 text-right">
                                                <span class="badge badge-pill badge-primary">BORROWED</span>
                                            </div>
                                           @else

                                          <div class="w-15 w-xs-100 text-right">
                                                <span class="badge badge-pill badge-primary">AVAILABE</span>
                                            </div>
                                          @endif

                                        </div>
                                    </div>
                                </div>
                                  @endforeach
                                  
                               @endif

                            </div>
                        </div>
                        </div>
                   


        <!--- -->             

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <a href="/all_items"><button class="btn btn-outline-primary active">View all items</button></a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recently Added Items</h5>
                            <div class="scroll dashboard-list-with-thumbs">
                             @if(count($posts) > 0)
                                @foreach($posts as $post)

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="all_items">
                                            @if(!empty(Auth::user()->profile_pic))
                                                <img src="{{$post->file}}" alt="Marble Cake" class="list-thumbnail border-0" width="80px">
                                              @else
                                                 <img src="img/images.png"  class="list-thumbnail border-0" width="80px">
                                              @endif
                                        

                                   
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                      
                                           
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">{{$post->title}} - {{$post->description}}</p>
                                            </div>
                                             <p class="list-item-heading"> By: {{$post->author}}</p>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                {{$post->created_at}}</div>
                                        </a>
                                    </div>
                                </div>
                                 @endforeach
                                  {{$posts->links()}}     
                                @else

                                <div class="col-md-3">
                                    <div class="alert alert-info">
                                        No Items available
                                    </div>
                                </div>

                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logs</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New user registiration</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 products added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="col-md-6 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Profile</h5>

                            <div class="scroll dashboard-list-with-user">

                             
        
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <span class="name">{{ucfirst(strtolower(Auth::user()->name))}}</span>
                                        <span>&nbsp;&nbsp;
                                            <img alt="Profile Picture" src="img/profile-pic-l.jpg">
                                        </span>
                                    <div class="pl-3">
                                        
                                            <p class="font-weight-medium mb-0"></p>
                                            <p class="text-muted mb-0 text-small"></p>
                                        </a>
                                    </div>
                                </div>
                               
                        </div>
                    </div>
                </div>
            </div>
            </div>

          <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payment Status</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Work Progress</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="64" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Tasks Completed</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="75" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payments Done</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>

@include("users/include.footer")