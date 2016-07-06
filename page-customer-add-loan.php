<?php
 get_header(); ?>
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
					<h4>Warehouse Enquiry</h4>
					<div class="col-md-3">
					    <input type="tel" required class="form-control-vin form-vin" placeholder="Phone">
					</div>
					<div class="col-md-3">
					    <input type="text" required class="form-control-vin form-vin" placeholder="Name">
					</div>
					<div class="col-md-3">
					    <input type="email" required class="form-control-vin form-vin" placeholder="Email">
					</div>
					<div class="col-md-3">
					    <select required class="form-control-vin form-vin" >
						<option disabled selected>Message Categary</option>
						<option value="Warehouse">Warehouse Enquiry</option>
						<option value="Franchise">Franchise Enquiry</option>
						<option value="Loan">Loan Enquiry</option>
						</select>
					</div>
					<div class="col-md-12">
					    <input type="text" required class="form-control-vin form-vin" placeholder="Message">
					</div>
						<button type="submit" class="btn btn1 btn-red1">Submit</button>
						
				</form>
			</div>   
		</div>
	</div>
    </div>
	</section>
	<!--footer-->
	<?php get_footer(); ?>