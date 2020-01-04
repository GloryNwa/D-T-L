@include("users/include.header");
<body id="app-container" class="menu-default ">
   @include("users/include.top_nav");
   @include("users/include.side_nav");
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Add Profile</h1>
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
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-11">
                   <div class="card mb-4">
                        <div class="card-body">

                            <form class="form-wrp" method="POST" action="{{route('upload_profile')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <h4 class="mb-4 mt-4"><b>Add Profile</b></h4>

                                <div class="form-row ">
                                    <div class="form-group col-md-6 ">
                                        <label>Full Name </label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label>Email Address</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label>Telephone Number</label>
                                        <input type="number" name="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label>Department</label>
                                        <input type="text" name="department" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 ">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" placeholder="Please tell us about yourself">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12 ">
                                        <label>Upload Image</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="btn-group">
                                        <div class="form-group col-md-6 "> <button type="submit" name="submit" class="btn btn-primary d-block mt-3 ">Submit</button></div>
                              <!--        <div class="form-group col-md-6 "> <button type="clear" class="btn btn-danger d-block mt-3 ">Cancel</button></div> -->
                                    </div>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </main>
@include("users/include.footer");