<?php
/*
Template Name: customer-distance
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
		<div class="col-md-2 hortab-active">
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
					<h4>Calculate Distance</h4>
					<div class="col-md-4">
					    <input type="text" required class="form-control-vin form-vin" placeholder="Source City">
					</div>
					<div class="col-md-4">
					    <input type="text" required class="form-control-vin form-vin" placeholder="Destination City">
					</div>
					    <button type="submit" class="btn btn1 btn-red">Calculate</button>
						<button type="reset" class="btn btn1 btn-green">Clear</button>
				</form>
		</div>
	</div>
    </div>
	</section>
	<!--footer-->
	<?php get_footer(); ?>