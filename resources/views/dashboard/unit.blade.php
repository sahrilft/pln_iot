@extends('dashboard/template/v_main')
@section('content')

<div class="container-fluid">
		<!-- BEGIN row -->
		<h1 class="page-header">
				Analytics <small>stats, overview & performance</small>
			</h1>
            <div class="row" data-masonry='{"percentPosition": true }'>
				<!-- BEGIN col-4 -->
				<div class="col-lg-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-bold fs-16px">Active Power</div>
								{{-- <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a> --}}
							</div>
				
							<!-- stats -->
							<div class="d-flex align-items-center h4 mb-3">
								<div id="active_power">0.00 </div> &nbsp KWH
								
							</div>
							
							<!-- chart -->
							<div>
								<div class="fs-12px fw-bold mb-2 text-white text-opacity-50">SALES OVER TIME</div>
								<div class="chart mb-2" style="height: 190px">
									<div id="linechart" class="w-100" height="190"></div>
								</div>
								<div class="d-flex align-items-center justify-content-center fw-bold text-white text-opacity-50">
									<i class="fa fa-square text-gray-300 me-2"></i> 
									<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
									<i class="fa fa-square text-theme me-2"></i> 
									<span class="fs-12px" data-id="today-date">&nbsp;</span>
								</div>
							</div>
                            
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
                <div class="col-lg-6 col-xl-4 mb-4">
					<!-- BEGIN card -->
					<div class="card">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- title -->
							<div class="d-flex align-items-center mb-2">
								<div class="flex-fill fw-bold fs-16px">Active Power</div>
								{{-- <a href="#" class="text-decoration-none text-white text-opacity-50">View report</a> --}}
							</div>
				
							<!-- stats -->
							<div class="d-flex align-items-center h4 mb-3">
								<div id="active_power">0.00 </div> &nbsp KWH
								
							</div>
							
							<!-- chart -->
							<div>
								<div class="fs-12px fw-bold mb-2 text-white text-opacity-50">SALES OVER TIME</div>
								<div class="chart mb-2" style="height: 190px">
									<div id="linechart1" class="w-100" height="190"></div>
								</div>
								<div class="d-flex align-items-center justify-content-center fw-bold text-white text-opacity-50">
									<i class="fa fa-square text-gray-300 me-2"></i> 
									<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
									<i class="fa fa-square text-theme me-2"></i> 
									<span class="fs-12px" data-id="today-date">&nbsp;</span>
								</div>
							</div>
                            
						</div>
						<!-- END card-body -->
						
						<!-- BEGIN card-arrow -->
						<div class="card-arrow">
							<div class="card-arrow-top-left"></div>
							<div class="card-arrow-top-right"></div>
							<div class="card-arrow-bottom-left"></div>
							<div class="card-arrow-bottom-right"></div>
						</div>
						<!-- END card-arrow -->
					</div>
					<!-- END card -->
				</div>
				
				
			</div>
		<!-- END #content -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>

@endsection

@section('js')
 
    <script src="dist/assets/plugins/masonry-layout/dist/masonry.pkgd.min.js"></script>
	<script src="dist/assets/plugins/chart.js/dist/chart.min.js"></script>
    <script src="dist/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="dist/assets/plugins/moment/min/moment.min.js"></script>
	<script src="dist/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="dist/assets/js/pln/unit.js"></script>
    <script type = "text/javascript" language = "javascript">
		
		// var host="203.194.112.5";
		// Create a client instance
       
    </script>
      
@endsection