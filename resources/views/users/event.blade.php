@include("users/include.header");
<body id="app-container" class="menu-default ">
   @include("users/include.top_nav");
   @include("users/include.side_nav");
   <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 list">

                <div class="mb-2">
                    <h1>Events</h1>

                </div>


                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Borrowed events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Returned events</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">


                                        <table class="table table-bordered">
                                    
                                               <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Tape Title</th>
                                                    <th scope="col">Author</th>
                                                    <th scope="col">Date Returned</th>
                                                    <th scope="col">Time Returned</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                                </tr>
                                          
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Glory</td>
                                                    <td>Ceflix Scepter</td>
                                                    <td>07068057873</td>

                                                    <td>glorynwa@gmail.com</td>
                                                      <td>Healing From Heaven</td>
                                                    <td>Pastor Chris</td>
                                                  

                                                    <td>24/2/2019</td>
                                                    <td>02:30pm</td>
                                                    <td>1 month</td>
                                                     <td>Borrowed</td>
                                                </tr>
                                                

                                            </tbody>
                                        </table>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">


                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Tape Title</th>
                                                    <th scope="col">Author</th>
                                                    <th scope="col">Date Returned</th>
                                                    <th scope="col">Time Returned</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>Glory</td>
                                                    <td>Ceflix Scepter</td>
                                                    <td>07068057873</td>

                                                    <td>glorynwa@gmail.com</td>
                                                      <td>Healing From Heaven</td>
                                                    <td>Pastor Chris</td>
                                                  

                                                    <td>2/4/2019</td>
                                                    <td>02:30pm</td>
                                                    <td>1 month / 3 weeks</td>
                                                     <td>Borrowed</td>
                                                </tr>
                                               

                                            </tbody>
                                        </table>



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
@include("users/include.footer");