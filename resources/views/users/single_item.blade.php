@include("users/include.header");
<body id="app-container" class="menu-default ">
   @include("users/include.top_nav");
   @include("users/include.side_nav");

   <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 list">

                <div class="mb-2">


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
                    </nav>
                </div>

                <div class="tab-content">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card-title mb-4">
                                    <h3 class="mb-4">Year of Lights</h3>
                                </div>
                                <div class="card mb-4">

                                    <img src="img/books.jpg" alt="Detail Picture" class="card-img-top">

                                    <div class="card-body">
                                        <p class="text-muted text-small mb-2">Description</p>
                                        <p class="mb-3">
                                            It’s all about simplicity…Less is more. Chocolate Cake exclusively brings you the classic chocolate cake. This cake is the one you always dream of-moist cake and creamy chocolate frosting.
                                            <br>
                                            <br> This cake proudly serves itself for a family gathering, a dinner party, a birthday celebration, a baby christening, and a gift to someone special or simply to have on hand on the cake stand at home served
                                            with an ice cold glass of milk!</p>
                                        <p class="text-muted text-small mb-2">Rating</p>
                                        <div class="form-group mb-3">
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                        </div>

                                        <p class="text-muted text-small mb-2">Tags</p>
                                        <p class="mb-3">
                                            <a href="#">
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">Worship</span>
                                            </a>
                                            <a href="#">
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">Praise</span>
                                            </a>
                                            <a href="#">
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">Teachings</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Available</h6>
                                        <button type="button" class="btn btn-success mb-1">Yes</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="card-title mb-4">
                                    <h5 class="mb-4">Borrowers</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12 list">
                                        <div class="card d-flex flex-row mb-3">
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Sis Precious Kathy
                                                </a>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">Healing School</p>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">02.04.2018</p>
                                                    <div class="w-15 w-xs-100 text-right">
                                                        <span class="badge badge-pill badge-secondary">BORROWED</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card d-flex flex-row mb-3">
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Bro Jenkins Moore
                                                </a>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">Rhapsody of Realities</p>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">01.04.2018</p>
                                                    <div class="w-15 w-xs-100 text-right">
                                                        <span class="badge badge-pill badge-primary">RETURNED</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card d-flex flex-row mb-3">
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Sis Netty Parker 
                                                </a>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">New Media
                                                    </p>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">25.03.2018</p>
                                                    <div class="w-15 w-xs-100 text-right">
                                                        <span class="badge badge-pill badge-primary">RETURNED</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card d-flex flex-row mb-3">
                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                                    <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Bro Esperanza Lodesa
                                                </a>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">Loveworld Plus
                                                    </p>
                                                    <p class="mb-1 text-muted text-small w-15 w-xs-100">20.03.2018</p>
                                                    <div class="w-15 w-xs-100 text-right">
                                                        <span class="badge badge-pill badge-primary">RETURNED</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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

                    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="row">
                            <div class="col-12 list">
                                <div class="card d-flex flex-row mb-3">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Sis Precious Kathy
                                                </a>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">Healing School</p>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">02.04.2018</p>
                                            <div class="w-15 w-xs-100 text-right">
                                                <span class="badge badge-pill badge-secondary">ON QUEUE</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card d-flex flex-row mb-3">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Bro Jenkins Moore
                                                </a>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">Rhapsody of Realities</p>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">01.04.2018</p>
                                            <div class="w-15 w-xs-100 text-right">
                                                <span class="badge badge-pill badge-primary">RETURNED</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-flex flex-row mb-3">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Sis Netty Parker 
                                                </a>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">New Media
                                            </p>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">25.03.2018</p>
                                            <div class="w-15 w-xs-100 text-right">
                                                <span class="badge badge-pill badge-primary">RETURNED</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card d-flex flex-row mb-3">
                                    <div class="d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                                            <a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#">
                                                    Bro Esperanza Lodesa
                                                </a>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">Loveworld Plus
                                            </p>
                                            <p class="mb-1 text-muted text-small w-15 w-xs-100">20.03.2018</p>
                                            <div class="w-15 w-xs-100 text-right">
                                                <span class="badge badge-pill badge-primary">RETURNED</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
    </div>
</main>

@include("users/include.footer");