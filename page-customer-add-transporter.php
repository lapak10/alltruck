<?php
/*
Template Name: customer-add-transporter
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
				<div class="vertab">
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
				<div class="vertab-active">
		        Transporter Directory
		        </div></a>
				
			</div>
			<div class="col-md-9">
			<form action="" class="">
					<h4>Directory</h4>
					<div class="col-md-6">
					    <h5>Search By Company Name</h5>
					    <input type="text" required class="form-control-vin form-vin" placeholder="Company">
					</div>
					<div class="col-md-6">
					    <h5>Search By City</h5>
					    <input type="text" required class="form-control-vin form-vin" placeholder="City">
					</div>
					<button type="submit" class="btn btn1 btn-red1">Search</button>
						
				</form>
			</div>   
		</div>
	</div>
    </div>
	</section>
	<!--footer-->
	<?php get_footer(); ?>