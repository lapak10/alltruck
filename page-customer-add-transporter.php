<?php get_header(); ?>
	<!--header-->
	<div style="height: 150px;  background: black; margin-bottom: 50px;">
		
	</div>
	
	<section>
	<div class="container">
	<div class="row">
		<?php get_template_part( 'menu','customer' ); ?>
		
		<div class="col-md-12">
		 <?php get_template_part( 'menu','customer-addons' ); ?>
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