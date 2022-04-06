<!doctype html>
<html lang="en">

<head>
    @include('includes.c_css')
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('includes.c_sidebar')
        @include('includes.c_header')

        
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">PLANS</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Choose A Suitable Investment Plan</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="row">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-3">
                      <div class="card text-center">
                        <div class="card-header text-center border-bottom-0 bg-transparent text-success pt-4">
                          <h4>Diamond Plan</h4>
                        </div>
                        <div class="card-body">
                          <h3><span>MIN-</span> $299</h3>
                          <h3><span>MAX-</span> $300</h3>
                          <h5 class="text-muted"><small>Taxes per Month</small></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><i class="fas fa-male text-success mx-2"></i>Type  <span>Total Return Swap</span></li>
                          <li class="list-group-item"><i class="fas fa-venus text-success mx-2"></i>ROI <span>10%</span></li>
                          <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Duration- <span>7 Days</span></li>
                          <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Commission- <span>10%</span></li>
                          <li class="list-group-item"><i class="fas fa-gavel text-success mx-2"></i>Currency <span>USD</span></li>
                        </ul>
                        <div class="card-footer border-top-0">
                            <input type="text" placeholder="Enter Amount" style="width: 300px">
                        </div>
                        <div class="card-footer border-top-0">
                            <button type="submit" class="btn btn-primary px-5 w-100">+ Select Plan</button>
                        </div>
                      </div>
                    </div>
                  </div>
			</div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        @include('includes.c_footer')

    </div>
    <!--end wrapper-->
    <!--start switcher-->
    @include('includes.c_switch')
    @include('includes.c_script')

</body>


<!-- Mirrored from codervent.com/rocker/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 15:30:50 GMT -->

</html>
