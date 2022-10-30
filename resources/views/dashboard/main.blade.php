!

@extends('dashboard/template/v_main')
@section('content')
    <div class="container-fluid">
				<!-- BEGIN row -->
				<div class="row justify-content-center">
					<!-- BEGIN col-10 -->
					<div class="col-xl-12">
						<!-- BEGIN row -->
						<div class="row">
							<!-- BEGIN col-9 -->
							<div class="col-xl-10">
								<h1 class="page-header">
									Location <small>Monitoring system</small>
								</h1>
								<!-- BEGIN #jVectorMap -->
								<div  >
									<div class="card">
										<div class="card-body">
											<div id="jvectorMap" style="width: 100%; height: 60vh;"></div>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
										
										</div>
									</div>
								</div>
								<!-- END #jVectorMap -->
								<div class="col-xl-2">
								<h1 class="page-header">
									Available <small>Monitoring system</small>
								</h1>
								<!-- BEGIN #jVectorMap -->
								<div id="jVectorMap" >
									<div class="card">
										<div class="card-body">
											<div  style="width: 100%; height: 60vh;">
                                                <a href="area?page=01" class="no-under">
												<div class="card bg-theme border-theme bg-opacity-25 mb-3">
												  <div class="card-header border-theme fw-bold small text-white">Bandung Area</div>
												  <div class="card-body py-0">
												    
												    <p class="card-text text-white text-opacity-75">
												    	<div class="row align-items-center mb-2">
														<div class="col-7">
															<h4 class="mb-0">Overview</h4>
														</div>
														<div class="col-5">
															<div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
														</div>
													</div>
													<!-- END stat-lg -->
													<!-- BEGIN stat-sm -->
                                                    
                                                        <div class="small text-white text-opacity-50 text-truncate">
                                                            <i class="fa fa-chevron-up fa-fw me-1"></i> 100Kwh Avarage Total KWH<br />
                                                            <i class="far fa-user fa-fw me-1"></i> 45.5% usable<br />
                                                            <i class="far fa-times-circle fa-fw me-1"></i> 3.25% Consumption Rate
                                                        </div>
                                                    
													
													
												    </p>
												  </div>
												</div>
                                                </a>
											
											</div>
										</div>
										<div class="card-arrow">
											<div class="card-arrow-top-left"></div>
											<div class="card-arrow-top-right"></div>
											<div class="card-arrow-bottom-left"></div>
											<div class="card-arrow-bottom-right"></div>
										</div>
										
										</div>
									</div>
								</div>
						   	</div>
						</div>			
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Total Cunsumption</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">4.2m</h3>
								</div>
								<div class="col-5">
									<div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-white text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% more than last week<br />
								<i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br />
								<i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
							</div>
							<!-- END stat-sm -->
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
				<!-- END col-3 -->
				
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Total Production</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">$35.2K</h3>
								</div>
								<div class="col-5">
									<div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-white text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 20.4% more than last week<br />
								<i class="fa fa-shopping-bag fa-fw me-1"></i> 33.5% new orders<br />
								<i class="fa fa-dollar-sign fa-fw me-1"></i> 6.21% conversion rate
							</div>
							<!-- END stat-sm -->
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
				<!-- END col-3 -->
				
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">All Time High</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">4,490</h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-white text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br />
								<i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br />
								<i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
							</div>
							<!-- END stat-sm -->
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
				<!-- END col-3 -->
				
				<!-- BEGIN col-3 -->
				<div class="col-xl-3 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-body -->
						<div class="card-body">
							<!-- BEGIN title -->
							<div class="d-flex fw-bold small mb-3">
								<span class="flex-grow-1">Total Production</span>
								<a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
							</div>
							<!-- END title -->
							<!-- BEGIN stat-lg -->
							<div class="row align-items-center mb-2">
								<div class="col-7">
									<h3 class="mb-0">4.5MW</h3>
								</div>
								<div class="col-5">
									<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
								</div>
							</div>
							<!-- END stat-lg -->
							<!-- BEGIN stat-sm -->
							<div class="small text-white text-opacity-50 text-truncate">
								<i class="fa fa-chevron-up fa-fw me-1"></i> Rate Production / Day<br />
								<i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br />
								<i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
							</div>
							<!-- END stat-sm -->
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
		<!-- END #content -->
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
@endsection
@section('js')
    <script src="dist/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="dist/assets/plugins/jvectormap-content/world-mill.js"></script>
    <script>
        var handleRenderVectorMap = function() {
        if (('#jvectorMap').length !== 0) {
            var gdpData = {"ID": 0};
            $('#jvectorMap').vectorMap({
                map: 'world_mill',
                normalizeFunction: 'polynomial',
                hoverOpacity: 0.5,
                hoverColor: false,
                zoomOnScroll: false,
                markersSelectable: true,
                
                series: {
                // regions: [{
                        // values: gdpData,
                        // scale: [app.color.gray300, app.color.gray800],
                        // normalizeFunction: 'polynomial'
                // }],
                markers: [{
                        attribute: 'fill',
                        scale: [app.color.gray300, app.color.gray800],
                        normalizeFunction: 'polynomial',
                        // values: [5000, 4000, 3000, 2000, 1000],
                        // legend: {
                        // 	vertical: true,
                        // 	title: 'World GDP (Billion)',
                        // 	labelRender: function(v){
                        // 	var text = v - 999;
                        // 		text = (text < 1000) ? '< 1000' :v + ' - ' + text;
                        // 	return text;
                        // 	}
                        // }
                }]
                },

                focusOn: {
                    x: 0.791,
                    y: 0.66,
                    scale: 10,

                },
                onRegionTipShow: function(e, el, code){
                el.html(el.html()+' <a href="index.php"></a> - '+gdpData[code]+')');
                },
                onMarkerClick: function(event, code){
                    window.location.href = "area?page=" + code
                },
                markerStyle: {
                initial: {
                        fill: app.color.theme,
                        stroke: 'none',
                        "stroke-width": 2,
                }
                },
                regionStyle: {
                    initial: {
                        fill: app.color.gray300,
                        "fill-opacity": 1,
                        stroke: 'none',
                        "stroke-width": 0.4,
                        "stroke-opacity": 1
                    },
                    hover: {
                        "fill-opacity": 0.5
                    }
                },
                backgroundColor: 'transparent',
                markers: [
                {latLng: [-6.9898464,107.6250235], name: 'Bandung',url : "http://www.google.co.uk"},
                {latLng: [-10.9898464,107.6250235], name: 'Bandung',url : "http://www.google.co.uk"},
                
                ]
            });
        }
    };




    /* Controller
    ------------------------------------------------ */
    $(document).ready(function() {
        handleRenderVectorMap();

        
        $(document).on('theme-reload', function() {
            $('#jvectorMap').empty();
            handleRenderVectorMap();
        });
    });
    </script>
	

@endsection