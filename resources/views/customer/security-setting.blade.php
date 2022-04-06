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
					<div class="breadcrumb-title pe-3">Your Security Detail</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								{{-- <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li> --}}
								{{-- <li class="breadcrumb-item active" aria-current="page">Personal Loan Form</li> --}}
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<h6 class="mb-0 text-uppercase" style="text-align: center ">Transaction Pin Reset section</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3">
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Current Pin</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter Current Pin">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">New Pin</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="Enter New Pin">
									</div>
                                    <div class="col-md-12">
										<button type="submit" class="btn btn-primary px-5 w-100">Change Pin</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

                <div class="row">
					<div class="col-xl-6 mx-auto">
						<h6 class="mb-0 text-uppercase" style="text-align: center ">Password Reset Section</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-primary">
							<div class="card-body p-5">
								<form class="row g-3">
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">Current Password</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="current password">
									</div>
                                    <div class="col-md-12">
										<label for="inputLastName" class="form-label">New Password</label>
										<input type="password" class="form-control" id="inputLastName" placeholder="new password">
									</div>
                                    <div class="col-md-12">
										<button type="submit" class="btn btn-primary px-5 w-100">Change Password</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        @include('includes.c_footer')

    </div>
    @include('includes.c_switch')
    @include('includes.c_script')

</body>
</html>
