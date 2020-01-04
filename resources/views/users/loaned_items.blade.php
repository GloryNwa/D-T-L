@include("users/include.header");
<body id="app-container" class="menu-default ">
   @include("users/include.top_nav");
   @include("users/include.side_nav");
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 list">

                    <div class="mb-2">

                  <h1>Loaned Tapes</h1>

                      <!--   <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
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
                           <!--  <a href="#second">LOANED BOOKS</a> -->
                        </li>
                    </ul>





                    <div>


                        <div class="row">
                            <div class="col-12 list">
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

                                <nav class="mt-4 mb-4">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link first" href="#">
                                                <i class="simple-icon-control-start"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link prev" href="#">
                                                <i class="simple-icon-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link next" href="#" aria-label="Next">
                                                <i class="simple-icon-arrow-right"></i>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link last" href="#">
                                                <i class="simple-icon-control-end"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        

                    </div>

                </div>
            </div>
        </div>

    </main>

@include("users/include.footer");