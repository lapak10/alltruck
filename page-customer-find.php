<?php
/*
Template Name: customer-find
*/
?>


	
		 
<?php get_header(); ?>
	<!--header-->
	<div style="height: 150px;  background: black; margin-bottom: 50px;">
		
	</div>
	
	<section>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<a href="customer-home.html">
		<div class="col-md-2 hortab">
		Home
		</div>
		</a>
		<a href="customer-post.html">
		<div class="col-md-2 hortab">
		Post Load
		</div>
		</a>
		<a href="customer-find.html">
		<div class="col-md-2 hortab-active">
		Find Truck
		</div>
		</a>
		<a href="customer-distance.html">
		<div class="col-md-2 hortab">
		Distance Calculator
		</div>
		</a>
		<a href="customer-pricing.html">
		<div class="col-md-2 hortab">
		Quotations
		</div>
		</a>
		<a href="customer-add.html">
		<div class="col-md-2 hortab">
		Add Ons
		</div>
		</a>
		</div>
		
		<div class="col-md-12">
		    <form action="" class="">
					<h4>Truck Board</h4>
					
					<div class="col-md-3">
					    <input type="text" required class="form-control-vin form-vin" placeholder="Source City">
					</div>
					<div class="col-md-3">
					    <input type="text" required class="form-control-vin form-vin" placeholder="Destination City">
					</div>
					<div class="col-md-3">
					    <select required class="form-control-vin form-vin" >
						<option disabled selected>Truck Type</option>
						<option value="Container Close Body (20-40 Feet)">Container Close Body (20-40 Feet)</option>
						<option value="Container Fixed (40-70 Feet)">Container Fixed (40-70 Feet)</option>
						<option value="Container Open Body (20-40 Feet)">	Container Open Body (20-40 Feet)</option>
                        <option value="Container Trucks">	Container Trucks</option>
                        <option value="Double Dacker">	Double Dacker</option>
                        <option value="Canter 4.5MT (17/6/6 ft) 4 Wheel">	Canter 4.5MT (17/6/6 ft) 4 Wheel</option>
                        <option value="Canter 4MT (9/6/6 ft) 4 Wheel">	Canter 4MT (9/6/6 ft) 4 Wheel</option>
                        <option value="Canter 7.5MT (19/7/7 ft) 6 Wheel">	Canter 7.5MT (19/7/7 ft) 6 Wheel</option>
                        <option value="Canters Jumbo (20/7/7 ft)">	Canters Jumbo (20/7/7 ft)</option>
                        <option value="Flat Bed Trailers (20-32 ft)">	Flat Bed Trailers (20-32 ft)</option>
                        <option value="Flat Bed Trailers (40-54 ft)">	Flat Bed Trailers (40-54 ft)</option>
                        <option value="HCV (Trucks/Trailers)">	HCV (Trucks/Trailers)</option>
                        <option value="LCV (Light Comercial Vehicle)">	LCV (Light Comercial Vehicle)</option>
                        <option value="Low Bed Trailer">	Low Bed Trailer</option>
                        <option value="Open Body Truck">	Open Body Truck</option>
                        <option value="10 Axle Trailer">	10 Axle Trailer</option>
                        <option value="Truck 14 Wheel">	Truck 14 Wheel</option>
                        <option value="Truck 15MT (22/7/7 ft) 10 Wheel">	Truck 15MT (22/7/7 ft) 10 Wheel</option>
                        <option value="Truck 20 MT (28/8/8 ft) 12 Wheel">	Truck 20 MT (28/8/8 ft) 12 Wheel</option>
                        <option value="Truck 9 MT (17/7/7 ft) 6 Wheel">	Truck 9 MT (17/7/7 ft) 6 Wheel</option>
                        <option value="Vehicle/Car Carrier (20-80 ft) Closed">	Vehicle/Car Carrier (20-80 ft) Closed</option>


						</select></div>
					<div class="col-md-3">
					    <input type="date" required class="form-control-vin form-vin" placeholder="Schd. Date">
					</div>
						<button type="submit" class="btn btn1 btn-red">Search</button>
						<button type="reset" class="btn btn1 btn-green">Clear</button>
				</form>
		</div>
	</div>
    </div>
	</section>
	<!--footer-->
<?php get_footer(); ?>