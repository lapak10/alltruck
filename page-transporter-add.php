<?php
/*
Template Name: transporter-add
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
		<a href="transporter-home.html">
		<div class="col-md-2 hortab">
		Home
		</div>
		</a>
		<a href="transporter-post.html">
		<div class="col-md-2 hortab">
		Post Truck
		</div>
		</a>
		<a href="transporter-find.html">
		<div class="col-md-2 hortab">
		Find Load
		</div>
		</a>
		<a href="transporter-distance.html">
		<div class="col-md-2 hortab">
		Distance Calculator
		</div>
		</a>
		<a href="transporter-pricing.html">
		<div class="col-md-2 hortab">
		Truck Requests</div>
		</a>
		<a href="transporter-add.html">
		<div class="col-md-2 hortab-active">
		Add Ons
		</div>
		</a>
		</div>
		
		<div class="col-md-12">
		 <div class="col-sm-3">
			    <a href="transporter-add.html">
				<div class="vertab-active">
		        Pin Code Search
		        </div></a>
				<a href="transporter-add-werehouse.html">
				<div class="vertab">
		        Warehouse Enquiry
		        </div></a>
				<a href="transporter-add-franchise.html">
				<div class="vertab">
		        Franchise Inquiry
		        </div></a>
				<a href="transporter-add-loan.html">
				<div class="vertab">
		        Vehicle Loan Inquiry
		        </div></a>
				<a href="transporter-add-transporter.html">
				<div class="vertab">
		        Transporter Directory
		        </div></a>
				
			</div>
			<div class="col-md-9">
			<form action="" class="">
					<h4>Search Pin Code</h4>
					<div class="col-md-3">
					    <select required class="form-control-vin form-vin" >
						<option disabled selected>Country</option>
						<option value="open">India</option>
						<option value="closed">Afganistan</option>
						</select>
					</div>
					<div class="col-md-3">
					    <select required class="form-control-vin form-vin" >
						<option disabled selected>State</option>
						<option value="open">Uttar Pardesh</option>
						<option value="closed">Haryana</option>
						</select>
					</div>
					<div class="col-md-3">
					    <select required class="form-control-vin form-vin" >
						<option disabled selected>District</option>
						<option value="open">G B Nagar</option>
						<option value="closed">Gurugram</option>
						</select>
					</div>
					<div class="col-md-3">
					    <select required class="form-control-vin form-vin" >
						<option disabled selected>City</option>
						<option value="open">noida</option>
						<option value="closed">Palam Vihar</option>
						</select>
					</div>
						<button type="submit" class="btn btn1 btn-red">Search</button>
						<button type="reset" class="btn btn1 btn-green">Clear</button>
				</form>
			</div>   
		</div>
	</div>
    </div>
	</section>
	<!--footer-->
	<?php get_footer(); ?>