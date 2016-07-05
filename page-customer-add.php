<?php
/*
Template Name: customer-add
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
		<div class="col-md-2 hortab">
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
		<div class="col-md-2 hortab-active">
		Add Ons
		</div>
		</a>
		</div>
		
		<div class="col-md-12">
		 <div class="col-sm-3">
			    <a href="customer-add.html">
				<div class="vertab-active">
		        Pin Code Search
		        </div></a>
				<a href="customer-add-werehouse.html">
				<div class="vertab">
		        Warehouse Enquiry
		        </div></a>
				<a href="customer-add-franchise.html">
				<div class="vertab">
		        Franchise Inquiry
		        </div></a>
				<a href="customer-add-loan.html">
				<div class="vertab">
		        Vehicle Loan Inquiry
		        </div></a>
				<a href="customer-add-transporter.html">
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
	
	<?php get_footer(); ?>