  
@extends('layouts.admin')




@section('content')

            <div class="container-fluid  dashboard-content">
    
 
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Food Categories</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/food-categories/create" class="breadcrumb-link">All Food Categories</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Food Category</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
  
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Food Category</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputCategory">Category Name</label>
                                            <input id="inputCategory" type="text" name="category" data-parsley-trigger="change" required="" placeholder="Enter Category Name" autocomplete="off" class="form-control">
                                        </div>
                                               <div class="form-group">
                                            <label for="inputCategoryImageUrl">Category Image Url</label>
                                            <input id="inputCategoryImageUrl" type="text" name="category" data-parsley-trigger="change" required="" placeholder="http://www.pizzaplanet.com/img/burger.jpg" autocomplete="off" class="form-control">
                                        </div>
                             
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                
                                                </label>
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                   
                                                </p>
                                            </div>
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
       
@endsection