<?php get_header(); ?>
	
	<!--header-->
	<div style="height: 150px;  background: black; margin-bottom: 50px;">
		
	</div>
	
	<section>
	<div class="container">
	<div class="row">
		<?php get_template_part( 'menu','customer' ); ?>
		
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