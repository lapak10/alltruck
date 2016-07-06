<?php get_header(); ?>
	<!--header-->
	<div style="height: 150px;  background: black; margin-bottom: 50px;">
		
	</div>
	
	<section>
	<div class="container">
	<div class="row">
		
		<?php get_template_part( 'menu','customer' ); ?>
		
		<div class="col-md-12">
		    <div class="col-sm-3">
			    <a href="customer-home.html">
				<div class="vertab-active">
		        My Account
		        </div></a>
				<a href="customer-home.html">
		        <div class="vertab">
		        Veiw Profile
		        </div>
				</a>
				<a href="customer-home.html">
		        <div class="vertab">
		        Update Profile
		        </div>
				</a>
				<a href="customer-home.html">
		        <div class="vertab">
		        Change Password
		        </div>
				</a>
				<a href="customer-home.html">
		        <div class="vertab">
		        posted Load Details
		        </div>
				</a>
				<a href="customer-home.html">
		        <div class="vertab">
		        Dashboard
		        </div>
				</a>
				<a href="customer-home.html">
		        <div class="vertab">
		        History
		        </div>
				</a>
				<a href="customer-home.html">
		        <div class="vertab">
		        Deactivate Account
		        </div>
				</a>
			</div>
			<div class="col-md-9">
			<h3>Personal Info</h3>
			<br>
			<font class="vindetails" >
			User Type: Customer/Load Provider <br>
            Name: Abhay Singh<br>
            email: abhays.iitk@gmail.com<br>
            Mobile: 9958610005<br>
            City: Gurgaon, Haryana, India<br>
			</font>
			</div>
		</div>
	</div>
    </div>
	</section>
	<!--footer-->
	<?php get_footer(); ?>