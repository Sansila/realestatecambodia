<?php 
	$status = ''; $location = ''; $category = ''; $firstprice = ''; $lastprice = ''; $available = '';
	if(isset($_GET['status']))
		$status = $_GET['status'];
	if(isset($_GET['q']))
		$location = $_GET['q'];
	if(isset($_GET['categories']))
		$category = $_GET['categories'];
	if(isset($_GET['price__gte']))
		$firstprice = $_GET['price__gte'];
	if(isset($_GET['price__lte']))
		$lastprice = $_GET['price__lte'];
	if(isset($_GET['available']))
		$available = $_GET['available'];
?>
		<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<!-- <section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span>List rows</span></h2>
					</div>
				</div>
			</section> -->
			<!-- End page top -->
			
			<!-- Begin Advanced Search -->
			<section id="home-search-bg" class="home-search hero lazyload" data-sizes="auto">
	            <div class="overlay"></div>
	            <div class="rows align-center collapse">
	                <div class="columns smallport-24 small-22 large-18">
	                    <div class="search-form-wrapper clearfix rows show-for-medium">
	                        <div class="smallport-24 medium-20">

	                            <div class="search-field-wrapper search-type desktop-search-type">
	                                <button data-toggle="search-type-dropdown" class="search-field  expanded desktop-search-field">
	                                    <span class="text-label"><?php echo $status;?></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane search-type" id="search-type-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="rent">Rent</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="sale">Sale</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="both">Rent & Sale</div>
	                                    <!--<div class="dropdown-item" data-dropdown-changer data-target-button=".desktop-search-type" data-target-field="#id_property_type" data-target-value="condo">Condo</div>-->
	                                </div>
	                            </div>

	                            <div class="search-field-wrapper search-location">
	                                <div class="search-field">
	                                    <span class="text-label"><input id="id_location_autocomplete" class="location-autocomplete" type="text" name="locations" placeholder="Enter any location" value=""></span>
	                                    <button data-toggle="location-dropdown" class="float-right icon-down"></button>
	                                </div>
	                                <div class="dropdown-pane" id="location-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="tabs-content" data-tabs-content="desktop-location-tabs">
	                                        <div class="tabs-panel is-active location-panel" id="desktop-location-panel">
											<div class="location-content"><?php echo $data;?></div>
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
	                                    <div class="tabs-content" data-tabs-content="mobile-location-tabs">
	                                        <div class="tabs-panel is-active location-panel" id="mobile-location-panel">
												<div class="location-content"><?php echo $data;?></div>
	                                        </div>
	                                        <div class="tabs-panel landmark-panel" id="mobile-landmark-panel"></div>
	                                    </div>
	                                </div>
	                            </div>

	                             <div class="search-field-wrapper search-type mobile-search-type">
	                                <button data-toggle="mobile-search-type-dropdown" class="search-field hollow expanded mobile-search-field">
	                                    <span class="text-label">Looking to</span>
	                                    <span class="text-label-selected"><?php echo $status;?></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane search-type" id="mobile-search-type-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="rent">Rent</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="sale">Sale</div>
	                                    <div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="both">Rent & Sale</div>
	                                    <!--<div class="dropdown-item" data-dropdown-changer data-target-button=".mobile-search-type" data-target-field="#id_property_type" data-target-value="condo">Condo</div>-->
	                                </div>
	                            </div>


	                            <div class="search-field-wrapper search-categories">
	                                <button data-toggle="mobile-categories-dropdown" class="search-field hollow expanded">
	                                    <span class="text-label" data-default="">Property type</span>
	                                    <span class="text-label-selected"><span class="min-label">All</span></span>
	                                    <span class="icon-down"></span>
	                                </button>
	                                <div class="dropdown-pane" id="mobile-categories-dropdown" data-dropdown data-close-on-click="true" data-v-offset="10">
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
		    


		    <form id="hidden-search-form" action="<?php echo site_url('site/site/search')?>" data-view-type="">

				<select id="available" name="available">
		            <option value="0">Sale</option>
		        </select>

		        <select multiple="multiple" method="get" id="id_property_type" name="status">
		            <option value="">---------</option>
		            <option <?php if($status == "sale") echo "selected"; else echo "";?> value="sale">Sale</option>
		            <option <?php if($status == "rent") echo "selected"; else echo "";?> value="rent">Rent</option>
		            <option <?php if($status == "both") echo "selected"; else echo "";?> value="both">Both</option>
		        </select>

		        <select multiple="multiple" id="id_categories" name="categories[]">
		            <optgroup label="Residential">
						<?php
							$title = array(); $sel = "";
							foreach ($category as $arr) {
								$title[$arr] = $arr;
							}
							foreach ($type as $type) {
								if($title[$type->typename] == $type->typename)
									$sel = "selected";
								else
									$sel = "";
						?>
							<option <?php echo $sel;?> value="<?php echo $type->typename?>"><?php echo $type->typename?></option>
						<?php
							}
						?>
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

		        <input id="id_car_spaces__lte" min="0" name="car_spaces__lte" type="number" />

		        <input id="id_car_spaces__gte" min="0" name="car_spaces__gte" type="number" />

		        <input id="id_garages__lte" min="0" name="garages__lte" type="number" />

		        <input id="id_garages__gte" min="0" name="garages__gte" type="number" />

		        <input id="id_rent__lte" name="rent__lte" type="number" />

		        <input id="id_rent__gte" name="rent__gte" type="number" />

		        <input id="id_price__lte" name="price__lte" type="number" value="<?php echo $lastprice;?>"/>

		        <input id="id_price__gte" name="price__gte" type="number" value="<?php echo $firstprice;?>"/>

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
		            <option value="hard">Hard Title</option>
		            <option value="soft">Soft Title</option>
		        </select>

		        <input id="id_year_built__lte" name="year_built__lte" type="number" />

		        <input id="id_year_built__gte" name="year_built__gte" type="number" />

		        <input id="id_address_floor_level__lte" name="address_floor_level__lte" type="number" />

		        <input id="id_address_floor_level__gte" name="address_floor_level__gte" type="number" />

		        <input id="id_price_per_sqm__lte" name="price_per_sqm__lte" type="number" />

		        <input id="id_price_per_sqm__gte" name="price_per_sqm__gte" type="number" />

		        <input id="id_q" name="q" type="text" />

		    </form>
			<!-- End Advanced Search -->
			
			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>Cambodia Rent Search</h2>
					<?php 
						// foreach ($_GET['categories'] as $cat) {
						// 	echo$cat."OR";
						// }
						//print_r($result);
					?>
					<div class="properties-full properties-listing properties-listfull">
						<div class="listing-header clearfix">
							<ul class="list-inline list-icons pull-left">
								<li><a href="grid-fullwidth-4-column.html"><i class="fa fa-th"></i></a></li>
								<li class="active"><a href="list-fullwidth.html"><i class="fa fa-th-list"></i></a></li>
								<li><a href="list-map.html"><i class="fa fa-map-marker"></i></a></li>
							</ul>
							<ul class="list-inline list-sort pull-right">
								<li><label for="order-status">Order</label></li>
								<li>
									<select id="order-status" name="order-status" data-placeholder="Order" class="chosen-select">
										<option value="Descending">Descending</option>
										<option value="Ascending">Ascending</option>
									</select>
								</li>
								<li><label for="sortby-status">Sort by</label></li>
								<li>
									<select id="sortby-status" name="sortby-status" data-placeholder="Sort by" class="chosen-select">
										<option value="Name">Name</option>
										<option value="Area">Area</option>
										<option value="Date">Date</option>
									</select>
								</li>
							</ul>
						</div>

						<?php 
							foreach ($result as $result) {
						?>
						<div class="pgl-property animation">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="property-thumb-info-image">
										<!-- <img alt="" class="img-responsive" src="<?php echo site_url('template')?>/images/properties/property-1.jpg"> -->
										<a href="<?php echo site_url('site/site/detail/'.$result->pid)?>">
											<img alt="" class="img-responsive" src="<?php echo site_url('assets/upload/property/thumb/'.$result->pid.'_'.$result->url)?>">
										</a>
										<span class="property-thumb-info-label">
											<span class="label price">$<?php echo number_format($result->price) ?></span>
											<span class="label forrent">
												<?php 
													if($result->p_type == 1)
														echo "Sale";
													if($result->p_type == 2)
														echo "Rent";
													if($result->p_type == 3)
														echo "Rent & Sale";	
												?>
											</span>
										</span>
									</div>
								</div>
								<div class="col-sm-6 col-md-8">
									<div class="property-thumb-info">
											
										<div class="property-thumb-info-content">
											<h3><a class="module line-clamp" href="property-detail.html"><?php echo $result->property_name;?></a></h3>
											<address class="module line-clamp"><?php echo $result->address?></address>
											<p><?php echo $result->description;?></p>
										</div>
										<div class="amenities clearfix">
											<ul class="pull-left">
												<li><strong>Area:</strong> <?php if($result->housesize !="") echo $result->housesize; else echo 0;?><sup>m2</sup></li>
											</ul>
											<ul class="pull-right">
												<li><i class="icons icon-bedroom"></i> <?php if($result->bedroom !="") echo $result->bedroom; else echo 0;?></li>
												<li><i class="icons icon-bathroom"></i> <?php if($result->bathroom !="") echo $result->bathroom; else echo 0;?></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php 
							}
						?>
						
						<ul class="pagination">
							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
					   </ul>
					</div>
				</div>
			</section>
			<!-- End Properties -->
			
		</div>
		<!-- End Main