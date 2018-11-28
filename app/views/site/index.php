		
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


	        <section id="home-search-bg" class="home-search hero lazyload" data-sizes="auto">
	            <div class="overlay"></div>
	            <div class="rows align-center collapse">
	                <div class="columns smallport-24 small-22 large-18">
	                    <div class="search-form-wrapper clearfix rows show-for-medium">
	                        <div class="smallport-24 medium-20">

	                            <div class="search-field-wrapper search-type desktop-search-type">
	                                <button data-toggle="search-type-dropdown" class="search-field  expanded desktop-search-field">
	                                    <span class="text-label">Buy</span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane search-type" id="search-type-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="residential">Buy</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="rental">Rent</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="project">New Developments</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="borey">Borey</div>
	                                    <!--<div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="condo">Condo</div>-->
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper listing-type desktop-listing-type">
	                                <button data-toggle="listing-type-dropdown" class="search-field  expanded desktop-search-field">
	                                    <span class="text-label">Buy</span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane listing-type" id="listing-type-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-listing-type" data-target-field="#id_listing_type" data-target-value="sale">Buy</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-listing-type" data-target-field="#id_listing_type" data-target-value="lease">Rent</div>
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-location">
	                                <div class="search-field">
	                                    <span class="text-label"><input id="id_location_autocomplete" class="location-autocomplete" type="text" name="locations" placeholder="Enter any location, developer or agent name   " value=""></span>
	                                    <button data-toggle="location-dropdown" class="float-right icon-down"></button>
	                                </div>
	                                <div class="dropdown-pane" id="location-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <!-- <ul class="tabs" data-tabs id="desktop-location-tabs">
	                                        <li class="tabs-title is-active"><a href="#desktop-location-panel" aria-selected="true">Popular Locations</a></li>
	                                        <li class="tabs-title"><a href="#desktop-landmark-panel">Landmarks</a></li>
	                                    </ul> -->
	                                    <div class="tabs-content" data-tabs-content="desktop-location-tabs">
	                                        <div class="tabs-panel is-active location-panel" id="desktop-location-panel">
											<div class="location-content"></div>
	                                        </div>
	                                        <div class="tabs-panel landmark-panel" id="desktop-landmark-panel"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-categories">
	                                <button data-toggle="categories-dropdown" class="search-field hollow expanded">
	                                    <span class="text-label" data-default="All Property types">Property type</span>
	                                    <span class="text-label-selected small"><span class="min-label">All</span></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane" id="categories-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <!-- <ul class="tabs" data-tabs id="example-tabs">
	                                        <li class="tabs-title is-active residential-tab"><a href="#residential-panel" aria-selected="true">Residential</a></li>
	                                        <li class="tabs-title commercial-tab"><a href="#commercial-panel">Commercial</a></li>
	                                    </ul> -->
	                                    <div class="tabs-content" data-tabs-content="example-tabs">
	                                        <div class="tabs-panel is-active residential-panel" id="residential-panel"></div>
	                                        <div class="tabs-panel commercial-panel" id="commercial-panel"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-price desktop-search-price">
	                                <button data-toggle="price-range" class="search-field hollow expanded">
	                                    <span class="text-label">Price Range</span>
	                                    <span class="text-label-selected small"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane" id="price-range" data-dropdown data-v-offset="10" data-close-on-click="true">
	                                    <!-- <ul class="tabs" data-tabs id="desktop-price-tabs">
	                                        <li class="tabs-title is-active"><a href="#desktop-price-panel" aria-selected="true">Total price</a></li>
	                                        <li class="tabs-title"><a href="#desktop-area-panel">Price per m2</a></li>
	                                    </ul> -->
	                                    <div class="tabs-content" data-tabs-content="desktop-price-tabs">
	                                        <div class="tabs-panel is-active price-panel" id="desktop-price-panel">
	                                            <input type="text" name="minprice" placeholder="Min Price" data-price-min-changer data-target-list="#desktop-price-panel .price-min-list" data-target-button=".desktop-search-price"> -
	                                            <input type="text" name="maxprice" placeholder="Max Price" data-price-max-changer data-target-list="#desktop-price-panel .price-max-list" data-target-button=".desktop-search-price">
	                                            <div class="price-range-container"></div>
	                                        </div>
	                                        <div class="tabs-panel area-panel" id="desktop-area-panel">
	                                            <input type="text" name="minareaprice" placeholder="Min Price" data-area-min-changer data-target-list="#desktop-area-panel .area-min-list" data-target-button=".desktop-search-price"> -
	                                            <input type="text" name="maxareaprice" placeholder="Max Price" data-area-max-changer data-target-list="#desktop-area-panel .area-max-list" data-target-button=".desktop-search-price">
	                                            <div class="area-range-container"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            

	                            <div class="search-field-wrapper search-refine">
	                                <button data-toggle="refine-dropdown" class="search-field hollow expanded">
	                                    <span class="text-label">Refine Search</span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane search-refine" id="refine-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="rows">
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-floor-area desktop-search-floor-area">
	                                                <button data-toggle="floor-area-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Floor Area</span>
	                                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="floor-area-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <input type="text" name="minfloor-area" class="range" placeholder="Min Floor Area" data-range-min-changer data-target-list="#floor-area-range .range-min-list" data-target-button=".desktop-search-floor-area" data-target-field="#id_building_area_total__gte"> -
	                                                    <input type="text" name="maxfloor-area" class="range" placeholder="Max Floor Area" data-range-max-changer data-target-list="#floor-area-range .range-max-list" data-target-button=".desktop-search-floor-area" data-target-field="#id_building_area_total__lte">
	                                                    <div id="floor-area-range" class="range-container">
	                                                        <div class="range-min-list range-list left">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="40">40m<sup>2</sup></div>
	                                                            <div data-value="80">80m<sup>2</sup></div>
	                                                            <div data-value="90">90m<sup>2</sup></div>
	                                                            <div data-value="100">100m<sup>2</sup></div>
	                                                            <div data-value="200">200m<sup>2</sup></div>
	                                                            <div data-value="400">400m<sup>2</sup></div>
	                                                            <div data-value="600">600m<sup>2</sup></div>
	                                                        </div>
	                                                        <div class="range-max-list range-list right">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="40">40m<sup>2</sup></div>
	                                                            <div data-value="80">80m<sup>2</sup></div>
	                                                            <div data-value="90">90m<sup>2</sup></div>
	                                                            <div data-value="100">100m<sup>2</sup></div>
	                                                            <div data-value="200">200m<sup>2</sup></div>
	                                                            <div data-value="400">400m<sup>2</sup></div>
	                                                            <div data-value="600">600m<sup>2</sup></div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        </div>
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-bedrooms desktop-search-bedrooms">
	                                                <button data-toggle="bedrooms-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Bedrooms</span>
	                                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="bedrooms-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <input type="text" name="minbedrooms" class="range" placeholder="Min Bedrooms" data-range-min-changer data-target-list="#bedrooms-range .range-min-list" data-target-button=".desktop-search-bedrooms" data-target-field="#id_bedrooms__gte"> -
	                                                    <input type="text" name="maxbedrooms" class="range" placeholder="Max Bedrooms" data-range-max-changer data-target-list="#bedrooms-range .range-max-list" data-target-button=".desktop-search-bedrooms" data-target-field="#id_bedrooms__lte">
	                                                    <div id="bedrooms-range" class="range-container">
	                                                        <div class="range-min-list range-list left">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="1">1</div>
	                                                            <div data-value="2">2</div>
	                                                            <div data-value="3">3</div>
	                                                            <div data-value="4">4</div>
	                                                            <div data-value="5">5</div>
	                                                            <div data-value="6">6</div>
	                                                            <div data-value="7">7</div>
	                                                            <div data-value="8">8</div>
	                                                            <div data-value="9">9</div>
	                                                            <div data-value="10">10</div>
	                                                        </div>
	                                                        <div class="range-max-list range-list right">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="1">1</div>
	                                                            <div data-value="2">2</div>
	                                                            <div data-value="3">3</div>
	                                                            <div data-value="4">4</div>
	                                                            <div data-value="5">5</div>
	                                                            <div data-value="6">6</div>
	                                                            <div data-value="7">7</div>
	                                                            <div data-value="8">8</div>
	                                                            <div data-value="9">9</div>
	                                                            <div data-value="10">10</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        </div>
	                                    </div>
	                                    <div class="rows">
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-floor-level desktop-search-floor-level">
	                                                <button data-toggle="floor-level-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Floor Level</span>
	                                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="floor-level-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <input type="text" name="minfloor-level" class="range" placeholder="Min Floor Level" data-range-min-changer data-target-list="#floor-level-range .range-min-list" data-target-button=".desktop-search-floor-level" data-target-field="#id_address_floor_level__gte"> -
	                                                    <input type="text" name="maxfloor-level" class="range" placeholder="Max Floor Level" data-range-max-changer data-target-list="#floor-level-range .range-max-list" data-target-button=".desktop-search-floor-level" data-target-field="#id_address_floor_level__lte">
	                                                    <div id="floor-level-range" class="range-container">
	                                                        <div class="range-min-list range-list left">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="0">Ground</div>
	                                                            <div data-value="10">10</div>
	                                                            <div data-value="20">20</div>
	                                                            <div data-value="30">30</div>
	                                                            <div data-value="40">40</div>
	                                                            <div data-value="50">50</div>
	                                                            <div data-value="60">60</div>
	                                                            <div data-value="70">70</div>
	                                                            <div data-value="80">80</div>
	                                                            <div data-value="90">90</div>
	                                                            <div data-value="100">100</div>
	                                                        </div>
	                                                        <div class="range-max-list range-list right">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="0">Ground</div>
	                                                            <div data-value="10">10</div>
	                                                            <div data-value="20">20</div>
	                                                            <div data-value="30">30</div>
	                                                            <div data-value="40">40</div>
	                                                            <div data-value="50">50</div>
	                                                            <div data-value="60">60</div>
	                                                            <div data-value="70">70</div>
	                                                            <div data-value="80">80</div>
	                                                            <div data-value="90">90</div>
	                                                            <div data-value="100">100</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        </div>
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-bathrooms desktop-search-bathrooms">
	                                                <button data-toggle="bathrooms-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Bathrooms</span>
	                                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="bathrooms-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <input type="text" name="minbathrooms" class="range" placeholder="Min Bathrooms" data-range-min-changer data-target-list="#bathrooms-range .range-min-list" data-target-button=".desktop-search-bathrooms" data-target-field="#id_bathrooms__gte"> -
	                                                    <input type="text" name="maxbathrooms" class="range" placeholder="Max Bathrooms" data-range-max-changer data-target-list="#bathrooms-range .range-max-list" data-target-button=".desktop-search-bathrooms" data-target-field="#id_bathrooms__lte">
	                                                    <div id="bathrooms-range" class="range-container">
	                                                        <div class="range-min-list range-list left">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="1">1</div>
	                                                            <div data-value="2">2</div>
	                                                            <div data-value="3">3</div>
	                                                            <div data-value="4">4</div>
	                                                            <div data-value="5">5</div>
	                                                            <div data-value="6">6</div>
	                                                            <div data-value="7">7</div>
	                                                            <div data-value="8">8</div>
	                                                            <div data-value="9">9</div>
	                                                            <div data-value="10">10</div>
	                                                        </div>
	                                                        <div class="range-max-list range-list right">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="1">1</div>
	                                                            <div data-value="2">2</div>
	                                                            <div data-value="3">3</div>
	                                                            <div data-value="4">4</div>
	                                                            <div data-value="5">5</div>
	                                                            <div data-value="6">6</div>
	                                                            <div data-value="7">7</div>
	                                                            <div data-value="8">8</div>
	                                                            <div data-value="9">9</div>
	                                                            <div data-value="10">10</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        </div>
	                                    </div>
	                                    <div class="rows">
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-land-area desktop-search-land-area">
	                                                <button data-toggle="land-area-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Land Area</span>
	                                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="land-area-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <input type="text" name="minland-area" class="range" placeholder="Min Land Area" data-range-min-changer data-target-list="#land-area-range .range-min-list" data-target-button=".desktop-search-land-area" data-target-field="#id_land_area_total__gte"> -
	                                                    <input type="text" name="maxland-area" class="range" placeholder="Max Land Area" data-range-max-changer data-target-list="#land-area-range .range-max-list" data-target-button=".desktop-search-land-area" data-target-field="#id_land_area_total__lte">
	                                                    <div id="land-area-range" class="range-container">
	                                                        <div class="range-min-list range-list left">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="80">80m<sup>2</sup></div>
	                                                            <div data-value="90">90m<sup>2</sup></div>
	                                                            <div data-value="100">100m<sup>2</sup></div>
	                                                            <div data-value="200">200m<sup>2</sup></div>
	                                                            <div data-value="400">400m<sup>2</sup></div>
	                                                            <div data-value="600">600m<sup>2</sup></div>
	                                                            <div data-value="800">800m<sup>2</sup></div>
	                                                            <div data-value="1000">1000m<sup>2</sup></div>
	                                                            <div data-value="2000">2000m<sup>2</sup></div>
	                                                            <div data-value="4000">4000m<sup>2</sup></div>
	                                                        </div>
	                                                        <div class="range-max-list range-list right">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="80">80m<sup>2</sup></div>
	                                                            <div data-value="90">90m<sup>2</sup></div>
	                                                            <div data-value="100">100m<sup>2</sup></div>
	                                                            <div data-value="200">200m<sup>2</sup></div>
	                                                            <div data-value="400">400m<sup>2</sup></div>
	                                                            <div data-value="600">600m<sup>2</sup></div>
	                                                            <div data-value="800">800m<sup>2</sup></div>
	                                                            <div data-value="1000">1000m<sup>2</sup></div>
	                                                            <div data-value="2000">2000m<sup>2</sup></div>
	                                                            <div data-value="4000">4000m<sup>2</sup></div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                            <div class="search-field-wrapper search-completed-year search-year">
	                                                <button data-toggle="year-completed-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Year Completed</span>
	                                                    <span class="text-label-selected">Any</span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane completed-list-container" id="year-completed-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10"></div>
	                                            </div>

	                                            <div class="search-field-wrapper search-completion-year search-year">
	                                                <button data-toggle="completion-year-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Completion Year</span>
	                                                    <span class="text-label-selected">Any</span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane completion-list-container" id="completion-year-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10"></div>
	                                            </div>

	                                        </div>
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-features">
	                                                <button data-toggle="features-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Main Features</span>
	                                                    <span class="text-label-selected">Any</span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="features-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10"></div>
	                                            </div>

	                                        </div>
	                                    </div>
	                                    <div class="rows">
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-land-title search-title">
	                                                <button data-toggle="land-title-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Title Deed</span>
	                                                    <span class="text-label-selected">Any</span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="land-title-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".search-title" data-target-field="#id_land_title" data-target-value="">Any</div>
	                                                    <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".search-title" data-target-field="#id_land_title" data-target-value="hard">Hard Title/Freehold</div>
	                                                    <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".search-title" data-target-field="#id_land_title" data-target-value="long">Long-Term Leasehold</div>
	                                                    <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".search-title" data-target-field="#id_land_title" data-target-value="soft">Soft Title</div>
	                                                </div>
	                                            </div>

	                                        </div>
	                                        <div class="columns">

	                                            <div class="search-field-wrapper search-parking desktop-search-parking">
	                                                <button data-toggle="parking-dropdown" class="search-field  expanded">
	                                                    <span class="text-label">Parking Spaces</span>
	                                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                                    <span class="icon-down"></span>
	                                                </button>
	                                                <div class="dropdown-pane" id="parking-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                                    <input type="text" name="minparking" class="range" placeholder="Min Parking" data-range-min-changer data-target-list="#parking-range .range-min-list" data-target-button=".desktop-search-parking" data-target-field="#id_garages__gte"> -
	                                                    <input type="text" name="maxparking" class="range" placeholder="Max Parking" data-range-max-changer data-target-list="#parking-range .range-max-list" data-target-button=".desktop-search-parking" data-target-field="#id_garages__lte">
	                                                    <div id="parking-range" class="range-container">
	                                                        <div class="range-min-list range-list left">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="1">1</div>
	                                                            <div data-value="2">2</div>
	                                                            <div data-value="3">3</div>
	                                                            <div data-value="4">4</div>
	                                                            <div data-value="5">5</div>
	                                                            <div data-value="6">6</div>
	                                                            <div data-value="7">7</div>
	                                                            <div data-value="8">8</div>
	                                                            <div data-value="9">9</div>
	                                                            <div data-value="10">10</div>
	                                                        </div>
	                                                        <div class="range-max-list range-list right">
	                                                            <div data-value="">Any</div>
	                                                            <div data-value="1">1</div>
	                                                            <div data-value="2">2</div>
	                                                            <div data-value="3">3</div>
	                                                            <div data-value="4">4</div>
	                                                            <div data-value="5">5</div>
	                                                            <div data-value="6">6</div>
	                                                            <div data-value="7">7</div>
	                                                            <div data-value="8">8</div>
	                                                            <div data-value="9">9</div>
	                                                            <div data-value="10">10</div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>

	                                        </div>
	                                    </div>
	                                    <div class="rows">
	                                        <div class="columns align-self-bottom text-right">

	                                            <button type="button" class="button hollow" data-reset-button>Reset</button>
	                                            <button type="button" class="button highlight" data-search-button>Find</button>

	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="smallport-24 medium-4">
	                            <div class="search-field-wrapper search-button">
	                                <button class="button highlight expanded" id="search-submit-button" data-search-button>Search</button>
	                            </div>
	                            
	                        </div>
	                    </div>
	                    <div class="search-form-wrapper clearfix rows hide-for-medium js-mobile-search align-center">
	                        <div class="smallport-22 medium-20">

	                            <div class="search-field-wrapper search-location">
	                                <div class="search-field">
	                                    <span class="text-label"><input id="id_mobile_location_autocomplete" class="location-autocomplete" type="text" name="locations" placeholder="Enter any location   " value=""></span>
	                                    <button data-toggle="mobile-location-dropdown" class="float-right icon-down"></button>
	                                </div>
	                                <div class="dropdown-pane" id="mobile-location-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <!-- <ul class="tabs" data-tabs id="mobile-location-tabs">
	                                        <li class="tabs-title is-active"><a href="#mobile-location-panel" aria-selected="true">Popular Locations</a></li>
	                                        <li class="tabs-title"><a href="#mobile-landmark-panel">Landmarks</a></li>
	                                    </ul> -->
	                                    <div class="tabs-content" data-tabs-content="mobile-location-tabs">
	                                        <div class="tabs-panel is-active location-panel" id="mobile-location-panel">
												<div class="location-content"></div>
	                                        </div>
	                                        <div class="tabs-panel landmark-panel" id="mobile-landmark-panel"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-type mobile-search-type">
	                                <button data-toggle="mobile-search-type-dropdown" class="search-field hollow expanded mobile-search-field">
	                                    <span class="text-label">Looking to</span>
	                                    <span class="text-label-selected">Buy</span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane search-type" id="mobile-search-type-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="residential">Buy</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="rental">Rent</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="project">New Developments</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="borey">Borey</div>
	                                    <!--<div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="condo">Condo</div>-->
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper listing-type mobile-listing-type">
	                                <button data-toggle="mobile-listing-type-dropdown" class="search-field hollow expanded mobile-search-field">
	                                    <span class="text-label">Looking to</span>
	                                    <span class="text-label-selected">Buy</span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane listing-type" id="mobile-listing-type-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-listing-type" data-target-field="#id_listing_type" data-target-value="sale">Buy</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-listing-type" data-target-field="#id_listing_type" data-target-value="lease">Rent</div>
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-categories">
	                                <button data-toggle="mobile-categories-dropdown" class="search-field hollow expanded">
	                                    <span class="text-label" data-default="">Property type</span>
	                                    <span class="text-label-selected"><span class="min-label">All</span></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane" id="mobile-categories-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <!-- <ul class="tabs" data-tabs id="example-tabs">
	                                        <li class="tabs-title is-active residential-tab"><a href="#mobile-residential-panel" aria-selected="true">Residential</a></li>
	                                        <li class="tabs-title commercial-tab"><a href="#mobile-commercial-panel">Commercial</a></li>
	                                    </ul> -->
	                                    <div class="tabs-content" data-tabs-content="example-tabs">
	                                        <div class="tabs-panel is-active residential-panel" id="mobile-residential-panel"></div>
	                                        <div class="tabs-panel commercial-panel" id="mobile-commercial-panel"></div>
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-price mobile-search-price">
	                                <button data-toggle="mobile-price-range" class="search-field hollow expanded">
	                                    <span class="text-label">Price</span>
	                                    <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane" id="mobile-price-range" data-dropdown data-v-offset="10" data-close-on-click="true">
	                                    <!-- <ul class="tabs" data-tabs id="mobile-price-tabs">
	                                        <li class="tabs-title is-active"><a href="#mobile-price-panel" aria-selected="true">Total price</a></li>
	                                        <li class="tabs-title"><a href="#mobile-area-panel">Price per m2</a></li>
	                                    </ul> -->
	                                    <div class="tabs-content" data-tabs-content="mobile-price-tabs">
	                                        <div class="tabs-panel is-active price-panel" id="mobile-price-panel">
	                                            <input type="text" name="minprice" placeholder="Min Price" data-price-min-changer data-target-list="#mobile-price-panel .price-min-list" data-target-button=".mobile-search-price"> -
	                                            <input type="text" name="maxprice" placeholder="Max Price" data-price-max-changer data-target-list="#mobile-price-range .price-max-list" data-target-button=".mobile-search-price">
	                                            <div class="price-range-container"></div>
	                                        </div>
	                                        <div class="tabs-panel area-panel" id="mobile-area-panel">
	                                            <input type="text" name="minareaprice" placeholder="Min Price" data-area-min-changer data-target-list="#mobile-area-panel .area-min-list" data-target-button=".mobile-search-price"> -
	                                            <input type="text" name="maxareaprice" placeholder="Max Price" data-area-max-changer data-target-list="#mobile-area-panel .area-max-list" data-target-button=".mobile-search-price">
	                                            <div class="area-range-container"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>

	                            <script id="price-list-template" type="text/x-handlebars-template">
	                                <div id="price-min-list" class="price-min-list price-list left">
	                                    {{#each min}}
	                                    <div data-value="{{this.value}}">{{ this.label }}</div>{{/each}}
	                                </div>
	                                <div id="price-max-list" class="price-max-list price-list right">
	                                    {{#each max}}
	                                    <div data-value="{{this.value}}">{{ this.label }}</div>{{/each}}
	                                </div>
	                            </script>
	                            <script id="area-list-template" type="text/x-handlebars-template">
	                                <div id="area-min-list" class="area-min-list area-list left">
	                                    {{#each min}}
	                                    <div data-value="{{this.value}}">{{ this.label }}</div>{{/each}}
	                                </div>
	                                <div id="area-max-list" class="area-max-list area-list right">
	                                    {{#each max}}
	                                    <div data-value="{{this.value}}">{{ this.label }}</div>{{/each}}
	                                </div>
	                            </script>
	                            <script id="year-list-template" type="text/x-handlebars-template">
	                                {{#each min}}
	                                <div class="dropdown-item" data-year-dropdown-changer data-target-field="#id_year_built__gte" data-target-value="{{this.value}}">{{ this.label }}</div>{{/each}}
	                            </script>

	                            <div class="mobile-additional-options">

	                                <div class="search-field-wrapper search-bedrooms mobile-search-bedrooms">
	                                    <button data-toggle="mobile-bedrooms-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Bedrooms</span>
	                                        <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-bedrooms-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <input type="text" name="minbedrooms" class="range" placeholder="Min Bedrooms" data-range-min-changer data-target-list="#bedrooms-range .range-min-list" data-target-button=".mobile-search-bedrooms" data-target-field="#id_bedrooms__gte"> -
	                                        <input type="text" name="maxbedrooms" class="range" placeholder="Max Bedrooms" data-range-max-changer data-target-list="#bedrooms-range .range-max-list" data-target-button=".mobile-search-bedrooms" data-target-field="#id_bedrooms__lte">
	                                        <div id="bedrooms-range" class="range-container">
	                                            <div class="range-min-list range-list left">
	                                                <div data-value="">Any</div>
	                                                <div data-value="1">1</div>
	                                                <div data-value="2">2</div>
	                                                <div data-value="3">3</div>
	                                                <div data-value="4">4</div>
	                                                <div data-value="5">5</div>
	                                                <div data-value="6">6</div>
	                                                <div data-value="7">7</div>
	                                                <div data-value="8">8</div>
	                                                <div data-value="9">9</div>
	                                                <div data-value="10">10</div>
	                                            </div>
	                                            <div class="range-max-list range-list right">
	                                                <div data-value="">Any</div>
	                                                <div data-value="1">1</div>
	                                                <div data-value="2">2</div>
	                                                <div data-value="3">3</div>
	                                                <div data-value="4">4</div>
	                                                <div data-value="5">5</div>
	                                                <div data-value="6">6</div>
	                                                <div data-value="7">7</div>
	                                                <div data-value="8">8</div>
	                                                <div data-value="9">9</div>
	                                                <div data-value="10">10</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="search-field-wrapper search-bathrooms mobile-search-bathrooms">
	                                    <button data-toggle="mobile-bathrooms-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Bathrooms</span>
	                                        <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-bathrooms-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <input type="text" name="minbathrooms" class="range" placeholder="Min Bathrooms" data-range-min-changer data-target-list="#bathrooms-range .range-min-list" data-target-button=".mobile-search-bathrooms" data-target-field="#id_bathrooms__gte"> -
	                                        <input type="text" name="maxbathrooms" class="range" placeholder="Max Bathrooms" data-range-max-changer data-target-list="#bathrooms-range .range-max-list" data-target-button=".mobile-search-bathrooms" data-target-field="#id_bathrooms__lte">
	                                        <div id="bathrooms-range" class="range-container">
	                                            <div class="range-min-list range-list left">
	                                                <div data-value="">Any</div>
	                                                <div data-value="1">1</div>
	                                                <div data-value="2">2</div>
	                                                <div data-value="3">3</div>
	                                                <div data-value="4">4</div>
	                                                <div data-value="5">5</div>
	                                                <div data-value="6">6</div>
	                                                <div data-value="7">7</div>
	                                                <div data-value="8">8</div>
	                                                <div data-value="9">9</div>
	                                                <div data-value="10">10</div>
	                                            </div>
	                                            <div class="range-max-list range-list right">
	                                                <div data-value="">Any</div>
	                                                <div data-value="1">1</div>
	                                                <div data-value="2">2</div>
	                                                <div data-value="3">3</div>
	                                                <div data-value="4">4</div>
	                                                <div data-value="5">5</div>
	                                                <div data-value="6">6</div>
	                                                <div data-value="7">7</div>
	                                                <div data-value="8">8</div>
	                                                <div data-value="9">9</div>
	                                                <div data-value="10">10</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="search-field-wrapper search-features">
	                                    <button data-toggle="mobile-features-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Main Features</span>
	                                        <span class="text-label-selected">Any</span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-features-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10"></div>
	                                </div>

	                                <div class="search-field-wrapper search-floor-level mobile-search-floor-level">
	                                    <button data-toggle="mobile-floor-level-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Floor Level</span>
	                                        <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-floor-level-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <input type="text" name="minfloor-level" class="range" placeholder="Min Floor Level" data-range-min-changer data-target-list="#floor-level-range .range-min-list" data-target-button=".mobile-search-floor-level" data-target-field="#id_address_floor_level__gte"> -
	                                        <input type="text" name="maxfloor-level" class="range" placeholder="Max Floor Level" data-range-max-changer data-target-list="#floor-level-range .range-max-list" data-target-button=".mobile-search-floor-level" data-target-field="#id_address_floor_level__lte">
	                                        <div id="floor-level-range" class="range-container">
	                                            <div class="range-min-list range-list left">
	                                                <div data-value="">Any</div>
	                                                <div data-value="0">Ground</div>
	                                                <div data-value="10">10</div>
	                                                <div data-value="20">20</div>
	                                                <div data-value="30">30</div>
	                                                <div data-value="40">40</div>
	                                                <div data-value="50">50</div>
	                                                <div data-value="60">60</div>
	                                                <div data-value="70">70</div>
	                                                <div data-value="80">80</div>
	                                                <div data-value="90">90</div>
	                                                <div data-value="100">100</div>
	                                            </div>
	                                            <div class="range-max-list range-list right">
	                                                <div data-value="">Any</div>
	                                                <div data-value="0">Ground</div>
	                                                <div data-value="10">10</div>
	                                                <div data-value="20">20</div>
	                                                <div data-value="30">30</div>
	                                                <div data-value="40">40</div>
	                                                <div data-value="50">50</div>
	                                                <div data-value="60">60</div>
	                                                <div data-value="70">70</div>
	                                                <div data-value="80">80</div>
	                                                <div data-value="90">90</div>
	                                                <div data-value="100">100</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="search-field-wrapper search-floor-area mobile-search-floor-area">
	                                    <button data-toggle="mobile-floor-area-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Floor Area</span>
	                                        <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-floor-area-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <input type="text" name="minfloor-area" class="range" placeholder="Min Floor Area" data-range-min-changer data-target-list="#floor-area-range .range-min-list" data-target-button=".mobile-search-floor-area" data-target-field="#id_building_area_total__gte"> -
	                                        <input type="text" name="maxfloor-area" class="range" placeholder="Max Floor Area" data-range-max-changer data-target-list="#floor-area-range .range-max-list" data-target-button=".mobile-search-floor-area" data-target-field="#id_building_area_total__lte">
	                                        <div id="floor-area-range" class="range-container">
	                                            <div class="range-min-list range-list left">
	                                                <div data-value="">Any</div>
	                                                <div data-value="40">40m<sup>2</sup></div>
	                                                <div data-value="80">80m<sup>2</sup></div>
	                                                <div data-value="90">90m<sup>2</sup></div>
	                                                <div data-value="100">100m<sup>2</sup></div>
	                                                <div data-value="200">200m<sup>2</sup></div>
	                                                <div data-value="400">400m<sup>2</sup></div>
	                                                <div data-value="600">600m<sup>2</sup></div>
	                                            </div>
	                                            <div class="range-max-list range-list right">
	                                                <div data-value="">Any</div>
	                                                <div data-value="40">40m<sup>2</sup></div>
	                                                <div data-value="80">80m<sup>2</sup></div>
	                                                <div data-value="90">90m<sup>2</sup></div>
	                                                <div data-value="100">100m<sup>2</sup></div>
	                                                <div data-value="200">200m<sup>2</sup></div>
	                                                <div data-value="400">400m<sup>2</sup></div>
	                                                <div data-value="600">600m<sup>2</sup></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="search-field-wrapper search-land-area mobile-search-land-area">
	                                    <button data-toggle="mobile-land-area-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Land Area</span>
	                                        <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-land-area-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <input type="text" name="minland-area" class="range" placeholder="Min Land Area" data-range-min-changer data-target-list="#land-area-range .range-min-list" data-target-button=".mobile-search-land-area" data-target-field="#id_land_area_total__gte"> -
	                                        <input type="text" name="maxland-area" class="range" placeholder="Max Land Area" data-range-max-changer data-target-list="#land-area-range .range-max-list" data-target-button=".mobile-search-land-area" data-target-field="#id_land_area_total__lte">
	                                        <div id="land-area-range" class="range-container">
	                                            <div class="range-min-list range-list left">
	                                                <div data-value="">Any</div>
	                                                <div data-value="80">80m<sup>2</sup></div>
	                                                <div data-value="90">90m<sup>2</sup></div>
	                                                <div data-value="100">100m<sup>2</sup></div>
	                                                <div data-value="200">200m<sup>2</sup></div>
	                                                <div data-value="400">400m<sup>2</sup></div>
	                                                <div data-value="600">600m<sup>2</sup></div>
	                                                <div data-value="800">800m<sup>2</sup></div>
	                                                <div data-value="1000">1000m<sup>2</sup></div>
	                                                <div data-value="2000">2000m<sup>2</sup></div>
	                                                <div data-value="4000">4000m<sup>2</sup></div>
	                                            </div>
	                                            <div class="range-max-list range-list right">
	                                                <div data-value="">Any</div>
	                                                <div data-value="80">80m<sup>2</sup></div>
	                                                <div data-value="90">90m<sup>2</sup></div>
	                                                <div data-value="100">100m<sup>2</sup></div>
	                                                <div data-value="200">200m<sup>2</sup></div>
	                                                <div data-value="400">400m<sup>2</sup></div>
	                                                <div data-value="600">600m<sup>2</sup></div>
	                                                <div data-value="800">800m<sup>2</sup></div>
	                                                <div data-value="1000">1000m<sup>2</sup></div>
	                                                <div data-value="2000">2000m<sup>2</sup></div>
	                                                <div data-value="4000">4000m<sup>2</sup></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="search-field-wrapper search-completed-year mobile-search-year">
	                                    <button data-toggle="mobile-year-completed-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Year Completed</span>
	                                        <span class="text-label-selected">Any</span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane completed-list-container" id="mobile-year-completed-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10"></div>
	                                </div>

	                                <div class="search-field-wrapper search-completion-year mobile-search-year">
	                                    <button data-toggle="mobile-completion-year-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Completion Year</span>
	                                        <span class="text-label-selected">Any</span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane completion-list-container" id="mobile-completion-year-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10"></div>
	                                </div>

	                                <div class="search-field-wrapper search-parking mobile-search-parking">
	                                    <button data-toggle="mobile-parking-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Parking Spaces</span>
	                                        <span class="text-label-selected"><span class="min-label">Any</span><span class="max-label"></span></span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-parking-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <input type="text" name="minparking" class="range" placeholder="Min Parking" data-range-min-changer data-target-list="#parking-range .range-min-list" data-target-button=".mobile-search-parking" data-target-field="#id_garages__gte"> -
	                                        <input type="text" name="maxparking" class="range" placeholder="Max Parking" data-range-max-changer data-target-list="#parking-range .range-max-list" data-target-button=".mobile-search-parking" data-target-field="#id_garages__lte">
	                                        <div id="parking-range" class="range-container">
	                                            <div class="range-min-list range-list left">
	                                                <div data-value="">Any</div>
	                                                <div data-value="1">1</div>
	                                                <div data-value="2">2</div>
	                                                <div data-value="3">3</div>
	                                                <div data-value="4">4</div>
	                                                <div data-value="5">5</div>
	                                                <div data-value="6">6</div>
	                                                <div data-value="7">7</div>
	                                                <div data-value="8">8</div>
	                                                <div data-value="9">9</div>
	                                                <div data-value="10">10</div>
	                                            </div>
	                                            <div class="range-max-list range-list right">
	                                                <div data-value="">Any</div>
	                                                <div data-value="1">1</div>
	                                                <div data-value="2">2</div>
	                                                <div data-value="3">3</div>
	                                                <div data-value="4">4</div>
	                                                <div data-value="5">5</div>
	                                                <div data-value="6">6</div>
	                                                <div data-value="7">7</div>
	                                                <div data-value="8">8</div>
	                                                <div data-value="9">9</div>
	                                                <div data-value="10">10</div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="search-field-wrapper search-land-title mobile-search-title">
	                                    <button data-toggle="mobile-land-title-dropdown" class="search-field hollow expanded">
	                                        <span class="text-label">Title Deed</span>
	                                        <span class="text-label-selected">Any</span>
	                                        <span class="icon-down"></span>
	                                    </button>
	                                    <div class="dropdown-pane" id="mobile-land-title-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                        <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".mobile-search-title" data-target-field="#id_land_title" data-target-value="">Any</div>
	                                        <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".mobile-search-title" data-target-field="#id_land_title" data-target-value="hard">Hard Title/Freehold</div>
	                                        <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".mobile-search-title" data-target-field="#id_land_title" data-target-value="long">Long-Term Leasehold</div>
	                                        <div class="dropdown-item" data-refine-dropdown-changer data-target-button=".mobile-search-title" data-target-field="#id_land_title" data-target-value="soft">Soft Title</div>
	                                    </div>
	                                </div>

	                                <label class="checkbox">
	                                    <input type="checkbox" name="certified"> Realestate.com.kh Certified Properties Only</label>
	                                <label class="checkbox">
	                                    <input type="checkbox" name="private"> Show Private user properties only</label>
	                                <!--<label class="checkbox"><input type="checkbox" name="surrounding"> Include Surrounding Areas</label>-->

	                                <div class="mobile-refine-buttons">
	                                    <button type="button" class="button hollow mobile-reset" data-reset-button>Reset</button>
	                                    <button type="button" class="button highlight mobile-find" data-search-button>Find</button>
	                                </div>
	                            </div>
	                            <div class="mobile-refine-search">Refine Search <span class="icon-down"></span></div>
	                        </div>
	                        <div class="smallport-22 medium-4">
	                            <div class="search-field-wrapper search-button">
	                                <button class="button highlight expanded" data-search-button>Search</button>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
		    


		    <form id="hidden-search-form" data-action-residential="/buy/" data-action-rental="/rent/" data-action-commercial="/commercial/" data-action-project="/new-developments/search/" data-action-condo="/condo/search/" data-action-borey="/boreys/search/" data-action-land="/land/search/" data-view-type="">

		        <select id="id_listing_type" name="listing_type">
		            <option value="sale">Sale</option>
		            <option value="lease">Lease</option>
		            <option value="both">Both</option>
		        </select>

		        <select multiple="multiple" id="id_property_type" name="property_type">
		            <option value="">---------</option>
		            <option value="residential">Residential</option>
		            <option value="rental">Rental</option>
		            <option value="holidayrental">Holiday Rental</option>
		            <option value="rural">Rural</option>
		            <option value="land">Land</option>
		            <option value="commercial">Commercial</option>
		            <option value="business">Business</option>
		            <option value="project">Project</option>
		            <option value="condo">Condo</option>
		            <option value="borey">Borey</option>
		        </select>

		        <select multiple="multiple" id="id_commercial_listing_type" name="commercial_listing_type">
		            <option value="">---------</option>
		            <option value="sale">Sale</option>
		            <option value="lease">Lease</option>
		            <option value="both">Both</option>
		        </select>

		        <select multiple="multiple" id="id_categories" name="categories">
		            <optgroup label="Residential">
		                <option value="House">House</option>
		                <option value="Villa">Villa</option>
		                <option value="Alpine">Shophouse</option>
		                <option value="Terrace">Twin Villa</option>
		                <option value="Retreat">Flat House</option>
		                <option value="Unit">Link House</option>
		                <option value="Condo">Condo</option>
		                <option value="Apartment">Apartment</option>
		                <option value="ServicedApartment">Serviced Apartment</option>
		                <option value="Flat">Flat</option>
		                <option value="Studio">Studio</option>
		                <option value="Land/Development">Land</option>
		            </optgroup>
		            <optgroup label="Commercial">
		                <option value="Offices">Offices</option>
		                <option value="Land/Development">Land</option>
		                <option value="Warehouse">Warehouse</option>
		                <option value="Alpine">Shophouse</option>
		                <option value="Hotel">Hotel</option>
		                <option value="Food/Hospitality">Restaurant</option>
		                <option value="Leisure/Entertainment">Bars/Nightclubs</option>
		                <option value="Retail">Retail</option>
		                <option value="Motel">Factory</option>
		                <option value="other">Other</option>
		            </optgroup>
		        </select>

		        <select multiple="multiple" id="id_features" name="features">
		            <option value="swimmingpool">Swimming Pool</option>
		            <option value="gym">Gym/Fitness center</option>
		            <option value="lift">Lift</option>
		            <option value="garden">Garden</option>
		            <option value="furnished">Furnished</option>
		            <option value="balcony">Balcony</option>
		            <option value="airconditioning">Air Conditioning</option>
		            <option value="carparking">Car Parking</option>
		            <option value="nonflooding">Non-Flooding</option>
		            <option value="onmainroad">On main road</option>
		            <option value="internet">Internet</option>
		            <option value="paytv">Pay TV</option>
		            <option value="petfriendly">Pet Friendly</option>
		            <option value="jacuzzi">Jacuzzi</option>
		            <option value="sauna">Sauna</option>
		            <option value="tenniscourt">Tennis Court</option>
		            <option value="alarmsystem">Alarm System</option>
		            <option value="videosecurity">Video Security</option>
		            <option value="reception247">Reception 24/7</option>
		            <option value="firesprinkler">Fire sprinkler system</option>
		            <option value="oceanviews">Ocean Views</option>
		            <option value="cityviews">City Views</option>
		        </select>

		        <select id="id_order_by" name="order_by">
		            <option value="relevance">Relevance</option>
		            <option value="price-asc">Price (Low-High)</option>
		            <option value="price-desc">Price (High-Low)</option>
		            <option value="date-asc">Date (New-Old)</option>
		            <option value="date-desc">Date (Old-New)</option>
		        </select>

		        <input id="id_car_spaces__lte" min="0" name="car_spaces__lte" type="number" />

		        <input id="id_car_spaces__gte" min="0" name="car_spaces__gte" type="number" />

		        <input id="id_garages__lte" min="0" name="garages__lte" type="number" />

		        <input id="id_garages__gte" min="0" name="garages__gte" type="number" />

		        <input id="id_rent__lte" name="rent__lte" type="number" />

		        <input id="id_rent__gte" name="rent__gte" type="number" />

		        <input id="id_price__lte" name="price__lte" type="number" />

		        <input id="id_price__gte" name="price__gte" type="number" />

		        <input id="id_bedrooms__lte" min="0" name="bedrooms__lte" type="number" />

		        <input id="id_bedrooms__gte" min="0" name="bedrooms__gte" type="number" />

		        <input id="id_bathrooms__lte" min="0" name="bathrooms__lte" type="number" />

		        <input id="id_bathrooms__gte" min="0" name="bathrooms__gte" type="number" />

		        <input id="id_building_area_total__lte" name="building_area_total__lte" step="any" type="number" />

		        <input id="id_building_area_total__gte" name="building_area_total__gte" step="any" type="number" />

		        <input id="id_land_area_total__lte" name="land_area_total__lte" step="any" type="number" />

		        <input id="id_land_area_total__gte" name="land_area_total__gte" step="any" type="number" />

		        <select id="id_land_title" name="land_title">
		            <option value="" selected="selected">All</option>
		            <option value="hard">Hard Title / Freehold</option>
		            <option value="long">Long-Term Leasehold</option>
		            <option value="soft">Soft Title</option>
		        </select>

		        <input id="id_year_built__lte" name="year_built__lte" type="number" />

		        <input id="id_year_built__gte" name="year_built__gte" type="number" />

		        <input id="id_address_floor_level__lte" name="address_floor_level__lte" type="number" />

		        <input id="id_address_floor_level__gte" name="address_floor_level__gte" type="number" />

		        <select id="id_is_certified" name="is_certified">
		            <option value="1" selected="selected">Unknown</option>
		            <option value="2">Yes</option>
		            <option value="3">No</option>
		        </select>

		        <select id="id_private_seller" name="private_seller">
		            <option value="1" selected="selected">Unknown</option>
		            <option value="2">Yes</option>
		            <option value="3">No</option>
		        </select>

		        <input id="id_price_per_sqm__lte" name="price_per_sqm__lte" type="number" />

		        <input id="id_price_per_sqm__gte" name="price_per_sqm__gte" type="number" />

		        <input id="id_q" name="q" type="text" />

		    </form>


		        
			
			<!-- Begin Advanced Search -->
			<!-- <section class="pgl-advanced-search pgl-bg-light hide">
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
			</section> -->
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
		