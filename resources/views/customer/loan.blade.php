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
					<div class="breadcrumb-title pe-3">Personal Loan</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Personal Loan Form</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<h6 class="mb-0 text-uppercase" style="text-align: center ">APPLY FOR YOUR PERSONAL LOAN</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3">
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Firstname</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter Firstname">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Lastname</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter Lastname">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Email</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter Email">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Address</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter Address">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Next of Kin</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter Name of Next of Kin">
									</div>
                                    <div class="col-md-12">
										<label for="inputState" class="form-label">Payment Method</label>
										<select id="inputState" class="form-select">
											<option selected>Payment Method</option>
											<option>...</option>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="inputState" class="form-label">Amount</label>
										<select id="inputState" class="form-select">
											<option selected>Choose...</option>
											<option>...</option>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="inputState" class="form-label">Duration of Loan</label>
										<select id="inputState" class="form-select">
											<option selected>Duration of Loan</option>
											<option>...</option>
										</select>
									</div>
                                    <div class="col-md-12">
										<button type="submit" class="btn btn-primary px-5 w-100">Submit Request</button>
									</div>
								</form>
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
