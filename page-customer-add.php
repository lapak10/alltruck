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