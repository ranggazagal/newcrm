<div class="row">
	<!--
		CHART 1
	-->
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>REPORT</h5>
				<div class="pull-right">
					<div class="btn-group">
						<button type="button" class="btn btn-xs btn-white active">Leads</button>
						<button type="button" class="btn btn-xs btn-white">Opportunity</button>
						<button type="button" class="btn btn-xs btn-white">CS</button>
					</div>
				</div>
			</div>
			<div class="ibox-content">
				<div class="row">
				<div class="col-lg-9">
					<div class="flot-chart">
						<div class="flot-chart-content" id="DASHchart_report"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<ul class="stat-list">
						<li>
							<h2 class="no-margins">2,346</h2>
							<small>Total orders in period</small>
							<div class="stat-percent">48% <i class="fa fa-level-up text-navy"></i></div>
							<div class="progress progress-mini">
								<div style="width: 48%;" class="progress-bar"></div>
							</div>
						</li>
						<li>
							<h2 class="no-margins ">4,422</h2>
							<small>Orders in last month</small>
							<div class="stat-percent">60% <i class="fa fa-level-down text-navy"></i></div>
							<div class="progress progress-mini">
								<div style="width: 60%;" class="progress-bar"></div>
							</div>
						</li>
						<li>
							<h2 class="no-margins ">9,180</h2>
							<small>Monthly income from orders</small>
							<div class="stat-percent">22% <i class="fa fa-bolt text-navy"></i></div>
							<div class="progress progress-mini">
								<div style="width: 22%;" class="progress-bar"></div>
							</div>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-8">
		<div class="ibox float-e-margins">
			<div class="ibox-content">
				<div>
								
					<h3 class="font-bold no-margins">
						Key Performance Indicator	
						<span class="pull-right text-right btn-group">     
							<button type="button" class="btn btn-xs btn-white active">Monthly</button>
							<button type="button" class="btn btn-xs btn-white">Quarterly</button>
							<button type="button" class="btn btn-xs btn-white">Yearly</button>
						</span>
					</h3>
				
				</div>

				<div class="m-t-sm">
					<div class="row">
						<div class="col-md-6">
							<ul class="stat-list m-t-lg">
								<li>
									<h2 class="no-margins">Leads
										<span class='pull-right'>30</span> 
									</h2>
									<small>Orders in last month
										<div class="stat-percent font-bold text-success">44% <i class="fa fa-level-up"></i></div>
									</small>
									<div class="progress progress-mini">
										<div class="progress-bar" style="width: 48%;"></div>
									</div>
								</li>
							</ul>
						</div>	
						<div class="col-md-6">
							<ul class="stat-list m-t-lg">
								<li>
									<h2 class="no-margins ">Opportunity Won
										<span class='pull-right'>15</span> 
									</h2>
									<small>Orders in last month
										 <div class="stat-percent font-bold text-danger">38% <i class="fa fa-level-down"></i></div>
									</small>
									<div class="progress progress-mini">
										<div class="progress-bar" style="width: 60%;"></div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-12">
							<div>
								<canvas id="lineChart" height="110"></canvas>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- -->
	
	<div class="col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Assist</h5>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content" style="display: block;">
				<div class='row'>
						<?php for($ix=1;$ix<=4;$ix++){ ?>
							<div class='feed-activity-list'>
								<div class='feed-element'>
									<div class="col-md-12">
										<h5>
											This Opportunity Has Had No Activity For 30 Days
										</h5>
									</div>
									<div class="col-md-2">
										<img src="<?=base_url();?>/assets/img/salaman.png"></img>
									</div>
									<div class="col-md-6">
										<small class="m-r">
											<a href="#"> 
												ABC Project
												<br> PT DEF Indonesia
											</a>
										</small>
									</div>
									<div class="col-md-4">
										<small class="m-r">
											<br>
											01/06/2016 <img src="<?=base_url();?>/assets/img/warning.png"></img>
										</small>
									</div>
								</div>
							</div>
						<?php } ?>
					<div class="col-md-12">
						<small class="m-r" style='position:relative;top:10px'>
							<a href="#" > 
								View More
							</a>
						</small>
					</div>
				</div>
			</div>
			<!--
			
			<div class="ibox-content">
				
			</div>
			-->
		</div>
	</div>
</div>
	<!-- -->					
<div class="row">	
	<div class="col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Today Tasks</h5><span class="label label-warning">8</span>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content">
				<div class='row' >	
			<?php for($ix=1;$ix<=5;$ix++){ ?>
	
				<div class='feed-activity-list'>
								<div class='feed-element'>
									<div class="col-md-2">
										<div class="icheckbox_square-green"><label> <input type="checkbox" value=""> </label></div>
									</div>
									<div class="col-md-6">
										<small class="m-r">
											
												Meeting di Alexis Hotel lt 7
												<br> 
											<a href="#"> PT DEF Indonesia
											</a>
										</small>
									</div>
									<div class="col-md-4">
										<small class="m-r">
											Bruno Mars
										</small>
									</div>
								</div>
							</div>
			<?php } ?>
					<div class="col-md-12">
						<small class="m-r" style='position:relative;top:10px'>
							<a href="#" > 
								View More
							</a>
						</small>
					</div>
				</div>	
			</div>
		</div>
	</div>
	
	<!-- -->
	<div class="col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Upcoming Events</h5><span class="label label-danger">8</span>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content">
				<div class='row' >	
			<?php for($ix=1;$ix<=5;$ix++){ ?>
	
				<div class='feed-activity-list'>
								<div class='feed-element'>
									<div class="col-md-10 no-padding">
										<div class="col-md-4">
											<small class="m-r" style='word-wrap: break-word;'>
												16 Jul 2016
											</small>
										</div>
										<div class="col-md-8 no-padding">
											<small class="m-r">
												
													Meeting di Alexis Hotel lt 7
													<br> 
												<a href="#"> PT DEF Indonesia
												</a>
											</small>
										</div>
									</div>
									<div class="col-md-2 no-padding">
										<small class="m-r" style='word-wrap: break-word;'>
											Bruno Mars
										</small>
									</div>
								</div>
							</div>
			<?php } ?>
					<div class="col-md-12">
						<small class="m-r" style='position:relative;top:10px'>
							<a href="#" > 
								View More
							</a>
						</small>
					</div>
				</div>	
			</div>
		</div>
	</div>
	
	<!-- -->
	<div class="col-lg-4">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Account Insights</h5>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
			</div>
			<div class="ibox-content">
				<div>
					<div class="feed-activity-list">
					<?php for($ix=1;$ix<=3;$ix++){ ?>
						<div class="feed-element">
							<a href="profile.html" class="pull-left">
								<img alt="image" class="img-circle" src="<?=base_url();?>assets/img/profile.jpg">
							</a>
							<div class="media-body ">
								<small class="pull-right">5m ago</small>
								<strong>Monica Smith</strong> <br>@posted a new blog. <br>
								<small class="text-muted">Saya menunggu untuk menunggumu disaat engkau menunggu</small>

							</div>
						</div>
					<?php } ?>
						<div class="col-md-12">
						<small class="m-r" style='position:relative;top:10px'>
							<a href="#" > 
								View More
							</a>
						</small>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- -->
</div>

 <script>
        $(document).ready(function() {
          /*
			#
			# DASHchart_REPORT
			#
			#
		  */
            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#DASHchart_report"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };
			

			/*
			#
			#
			#
			#
			*/
			
            var lineData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 40, 51, 36, 25, 40]
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgba(26,179,148,0.5)",
                        strokeColor: "rgba(26,179,148,0.7)",
                        pointColor: "rgba(26,179,148,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(26,179,148,1)",
                        data: [48, 48, 60, 39, 56, 37, 30]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("lineChart").getContext("2d");
            var myNewChart = new Chart(ctx).Line(lineData, lineOptions);
			
		/*
		
		*/
		
		
		});
		
		  
    </script>