		
		<!-- Begin Main -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-slide" class="owl-carousel pgl-main-slide" data-plugin-options='{"autoPlay": true}'>
					<div class="item" id="item1"><img src="<?php echo site_url('template')?>/images/slides/slider1.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-detail.html">Chatham St NW, Roanoke, VA 24012</a></h2>
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item2"><img src="<?php echo site_url('template')?>/images/slides/slider2.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-detail.html">Presidential Parcel Frames Command Views of Mt. Rushmore</a></h2>
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item3"><img src="<?php echo site_url('template')?>/images/slides/slider3.jpg" alt="Photo" class="img-responsive">
						<div class="item-caption">
							<div class="container">
								<div class="property-info">
									<span class="property-thumb-info-label">
										<span class="label price">$358,000</span>
										<span class="label"><a href="property-detail.html" class="btn-more">More Detail</a></span>
									</span>
									<div class="property-thumb-info-content">
										<h2><a href="property-detail.html">Alpine Rd, Stockton, CA 95215</a></h2>
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Slide -->
			
			<!-- Begin Advanced Search -->
			<section class="pgl-advanced-search pgl-bg-light">
				<div class="container">
					<form name="advancedsearch" action="<?php echo site_url('site/site/search')?>">
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="property-status">Property Status</label>
									<select id="property-status" name="property-status" data-placeholder="Property Status" class="chosen-select">
										<option selected="selected" value="">Property Status</option>
										<option value="1">For Sale</option>
										<option value="2">For Rent</option>
										<option value="3">For Rent & Sale</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="location">Location</label>
									<select id="location" name="location" data-placeholder="Location" class="chosen-select">
										<?php 
											foreach ($location as $loc) {
										?>
										<option value="<?php echo $loc->propertylocationid;?>"><?php echo str_repeat("---- &nbsp;",$loc->level).$loc->locationname;?></option>
										<?php 
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="property-types">Property Types</label>
									<select id="property-types" name="property-types" data-placeholder="Property Types" class="chosen-select" multiple="multiple">
										<?php 
											foreach ($type as $type) {
										?>
											<option value="<?php echo $type->typeid?>"><?php echo $type->typename?></option>
										<?php
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<div class="row pgl-narrow-row">
										<div class="col-xs-6">
											<label class="sr-only" for="search-minprice">Area From</label>
											<select id="area-from" name="area-from" data-placeholder="Area From" class="chosen-select">
												<option selected="selected" value="Area From">Area From</option>
												<option value="">any</option>
												<option value="40">40<sup>m2</sup></option>
												<option value="80">80<sup>m2</sup></option>
												<option value="90">90<sup>m2</sup></option>
												<option value="100">100<sup>m2</sup></option>
												<option value="200">200<sup>m2</sup></option>
												<option value="400">400<sup>m2</sup></option>
												<option value="600">600<sup>m2</sup></option>
											</select>
										</div>
										<div class="col-xs-6">
											<label class="sr-only" for="search-maxprice">Area To</label>
											<select id="area-from" name="area-from" data-placeholder="Area From" class="chosen-select">
												<option selected="selected" value="Area From">Area To</option>
												<option value="">any</option>
												<option value="40">40<sup>m2</sup></option>
												<option value="80">80<sup>m2</sup></option>
												<option value="90">90<sup>m2</sup></option>
												<option value="100">100<sup>m2</sup></option>
												<option value="200">200<sup>m2</sup></option>
												<option value="400">400<sup>m2</sup></option>
												<option value="600">600<sup>m2</sup></option>
											</select>
										</div>
									</div>
								</div>
							</div>	
						</div>
						
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="search-bedrooms">Bedrooms</label>
									<select id="search-bedrooms" name="search-bedrooms" data-placeholder="Bedrooms" class="chosen-select">
										<option selected="selected" value="Bedrooms">Bedrooms</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="5plus">5+</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<label class="sr-only" for="search-bathrooms">Bathrooms</label>
									<select id="search-bathrooms" name="search-bathrooms" data-placeholder="Bathrooms" class="chosen-select">
										<option selected="selected" value="Bathrooms">Bathrooms</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="4plus">4+</option>
									</select>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<div class="row pgl-narrow-row">
										<div class="col-xs-6">
											<label class="sr-only" for="search-minprice">Price From</label>
											<select id="search-minprice" name="search-minprice" data-placeholder="Price From" class="chosen-select">
												<option selected="selected" value="Price From">Price From</option>
												<option value="0">$0</option>
												<option value="25000">$25000</option>
												<option value="50000">$50000</option>
												<option value="75000">$75000</option>
												<option value="100000">$100000</option>
												<option value="150000">$150000</option>
												<option value="200000">$200000</option>
												<option value="300000">$300000</option>
												<option value="500000">$500000</option>
												<option value="750000">$750000</option>
												<option value="1000000">$1000000</option>
											</select>
										</div>
										<div class="col-xs-6">
											<label class="sr-only" for="search-maxprice">Price To</label>
											<select id="search-maxprice" name="search-maxprice" data-placeholder="Price To" class="chosen-select">
												<option selected="selected" value="Price To">Price To</option>
												<option value="25000">$25000</option>
												<option value="50000">$50000</option>
												<option value="75000">$75000</option>
												<option value="100000">$100000</option>
												<option value="150000">$150000</option>
												<option value="200000">$200000</option>
												<option value="300000">$300000</option>
												<option value="500000">$500000</option>
												<option value="750000">$750000</option>
												<option value="1000000">$1000000</option>
												<option value="1000000plus">>$1000000</option>
											</select>
										</div>
									</div>
								</div>
							</div>	
							<div class="col-xs-6 col-sm-3">
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-primary">Search</button>
								</div>
							</div>	
						</div>
						
					</form>
				</div>
			</section>
			<!-- End Advanced Search -->
			
			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>Properties</h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs pgl-pro-tabs text-center animation hide" role="tablist">
						<li class="active"><a href="#all" role="tab" data-toggle="tab">All</a></li>
						<li><a href="#house" role="tab" data-toggle="tab">House</a></li>
						<li><a href="#offices" role="tab" data-toggle="tab">Offices</a></li>
						<li><a href="#apartment" role="tab" data-toggle="tab">Apartment</a></li>
						<li><a href="#residential" role="tab" data-toggle="tab">Residential</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="all">
							<div class="row">
								<?php 
									foreach ($lists as $list) {
								?>
								<div class="col-xs-3 animation">
									<div class="pgl-property">
										<div class="property-thumb-info">
											<div class="property-thumb-info-image">
												<a href="<?php echo site_url('site/site/detail/'.$list->pid)?>">
													<img alt="" class="img-responsive" src="<?php echo site_url('assets/upload/property/thumb/'.$list->pid.'_'.$list->url)?>">
												</a>
												<span class="property-thumb-info-label">
													<span class="label price">$<?php echo number_format($list->price) ?></span>
													<span class="label forrent">
														<?php 
															if($list->p_type == 1)
																echo "Sale";
															if($list->p_type == 2)
																echo "Rent";
															if($list->p_type == 3)
																echo "Rent & Sale";	
														?>
													</span>
												</span>
											</div>
											<div class="property-thumb-info-content" style="height: 120px;">
												<h3><a class="module line-clamp" href="<?php echo site_url('site/site/detail/'.$list->pid)?>"><?php echo $list->property_name?></a></h3>
												<address class="module line-clamp"><?php echo $list->address?></address>
											</div>
											<div class="amenities clearfix">
												<ul class="pull-left">
													<li><strong>Area:</strong> <?php echo $list->housesize?><sup>m2</sup></li>
												</ul>
												<ul class="pull-right">
													<li><i class="icons icon-bedroom"></i> <?php echo $list->bedroom;?></li>
													<li><i class="icons icon-bathroom"></i> <?php echo $list->bathroom?></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php 
									}
								?>
						</div>
						<ul class="pagination">
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
					   	</ul>
				</div>
			</section>
			<!-- End Properties -->
			
			<!-- Begin Agents -->
			<!-- <section class="pgl-agents hide">
				<div class="container">
					<h2>Our Agents</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="pgl-agent-item pgl-bg-light">
								<div class="row pgl-midnarrow-row">
									<div class="col-xs-5">
										<div class="img-thumbnail-medium">
											<a href="agentprofile.html"><img src="<?php echo site_url('template')?>/images/agents/temp-agent.png" class="img-responsive" alt=""></a>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="pgl-agent-info">
											<small>NO.1</small>
											<h4><a href="agentprofile.html">John Smith</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis.</p>
											<address>
												<i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
												<i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
												<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
												<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:JohnSmith@gmail.com">JohnSmith@gmail.com</a>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="pgl-agent-item pgl-bg-light">
								<div class="row pgl-midnarrow-row">
									<div class="col-xs-5">
										<div class="img-thumbnail-medium">
											<a href="agentprofile.html"><img src="<?php echo site_url('template')?>/images/agents/temp-agent.png" class="img-responsive" alt=""></a>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="pgl-agent-info">
											<small>NO.2.1</small>
											<h4><a href="agentprofile.html">Andrew MCCarthy</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis.</p>
											<address>
												<i class="fa fa-map-marker"></i> Office : 1-800-666-8888<br>
												<i class="fa fa-phone"></i> Mobile : 0800-666-6666<br>
												<i class="fa fa-fax"></i> Fax : 1-800-666-8888<br>
												<i class="fa fa-envelope-o"></i> Mail: <a href="mailto:MCCarthy@gmail.com">MCCarthy@gmail.com</a>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="top-tall">
				</div>
			</section> -->
			<!-- End Agents -->
			
			<!-- Begin About -->
			<!-- <section class="pgl-about hide">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animation about-item">
							<h2>Who We Are</h2>
							<p><img src="<?php echo site_url('template')?>/images/content/demo-1.jpg" alt="" class="img-responsive"></p>
							<p>We have a total of 25+ years combined experience dealing exclusively with New York buyers and sellers ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="about-us.html" class="btn btn-lg btn-default">View more</a>
						</div>
						<div class="col-md-4 animation about-item">
							<h2>Why Choose Us</h2>
							<div class="panel-group" id="accordion">
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Designed for your business</a> </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">Fully responsive</a> </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body"> <p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p> </div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Ample customizations</a> </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFouth" class="collapsed">Bootstrap Compatible</a> </h4>
									</div>
									<div id="collapseFouth" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default pgl-panel">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" class="collapsed">Unique Design</a> </h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 animation about-item">
							<h2>Happy Clients</h2>
							<div class="owl-carousel pgl-bg-dark pgl-testimonial" data-plugin-options='{"items": 1, "pagination": false, "autoHeight": true}'>
								<div class="col-md-12">
									<div class="testimonial-author">
										<div class="img-thumbnail-small img-circle">
											<img src="<?php echo site_url('template')?>/images/agents/agent-1.jpg" class="img-circle" alt="Andrew MCCarthy">
										</div>
										<h4>Andrew MCCarthy</h4>
										<p><strong>Selller</strong></p>
									</div>
									<div class="divider-quote-sign"><span>“</span></div>
									<blockquote class="testimonial">
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium totam rem.</p>
									</blockquote>
								</div>
								<div class="col-md-12">
									<div class="testimonial-author">
										<div class="img-thumbnail-small img-circle">
											<img src="<?php echo site_url('template')?>/images/agents/agent-1.jpg" class="img-circle" alt="John Smith">
										</div>
										<h4>John Smith</h4>
										<p><strong>Selller</strong></p>
									</div>
									<div class="divider-quote-sign"><span>“</span></div>
									<blockquote class="testimonial">
										<p>Sed perspiciatis unde omnisiste natus error voluptatem remopa accusantium doloremque laudantium totam rem.</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- End About -->
			
		</div>
		<!-- End Main -->
		