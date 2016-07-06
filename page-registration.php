
<?php get_header(); ?>
<?php
//This is to check if the form of registration form is submitted or not, if yes..run the code.
if ( isset( $_POST['type_of_user']) AND $_POST['type_of_user']==='transporter' ){

	//create a user in wordpress and it's ID is returned to $user_id
	$user_id = wp_create_user( 'transporter', 'password', 'anand@gmail.com');
		
		//we can add as much details as we want 
		add_user_meta( $user_id, 'transporter_full_address', $POST['transporter_full_address'], true );


		$new_user_data = array(
				'ID'=>$user_id,
				'role' => 'transporter',
				'first_name'=>$_POST['transporter_first_name'],
				'last_name'=>$_POST['transporter_last_name'],
				'user_email'=>$_POST['transporter_email_address']
				);


	$user_id = wp_update_user( $new_user_data );

	//console_log($user_id);
}

elseif ( isset( $_POST['type_of_user']) AND $_POST['type_of_user']==='customer' ){
	
	$user_id = wp_create_user( 'customer', 'password', 'ananda@gmail.com');
	$user_id = wp_update_user( array( 'ID' => $user_id, 'role' => 'customer' ) );

	//console_log($user_id);
}

	?>
	<!--header-->
	<div style="height: 150px;  background: black; margin-bottom: 50px;">
		
	</div>
	
	<section>
	<div class="container">
	<div class="row">
		                                <div class="col-md-12">
										<h3>Register As</h3>
                                    <!-- Nav tabs --><div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#transporter" aria-controls="transporter" role="tab" data-toggle="tab">Truck Supplier</a></li>
                                        <li role="presentation"><a href="#customer" aria-controls="customer" role="tab" data-toggle="tab">Freight Provider</a></li>
                                        
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="transporter">
										<form method="POST">
					<h4>Basic Details</h4>
					<input type="text" class="form-control-vin form-vin" placeholder="First Name" name="transporter_first_name">
					<input type="text"  class="form-control-vin form-vin" placeholder="Last Name" name="transporter_last_name">
					<input type="email"  class="form-control-vin form-vin" placeholder="Email Address" name="transporter_email_address">
					<input type="tel"  class="form-control-vin form-vin" placeholder="Contact No." name="transporter_contact_number">
					<input type="password"  class="form-control-vin form-vin" placeholder="Password" name="transporter_password">
					<input type="password"  class="form-control-vin form-vin" placeholder="Confirm Password" name="transporter_confirm_password">
					
					<h4>Contact Details</h4>
					<input type="text"  class="form-control-vin form-vin" placeholder="Full Address" name="transporter_full_address">
					<input type="text"  class="form-control-vin form-vin" placeholder="Locality" name="transporter_locality">
					<input type="text"  class="form-control-vin form-vin" placeholder="City" name="transporter_city">
					<input type="text"  class="form-control-vin form-vin" placeholder="State" name="transporter_state">
					<input type="text"  class="form-control-vin form-vin" placeholder="Country" name="transporter_country">
					<input type="number"  class="form-control-vin form-vin" placeholder="PIN Code" name="transporter_pin_code">
					<input type="tel"  class="form-control-vin form-vin" placeholder="Landline No." name="transporter_landline_number">
					<input type="number"  class="form-control-vin form-vin" placeholder="FAX" name="transporter_fax">
					
					<h4>Business Details</h4>
					<input type="text"   class="form-control-vin1 form-vin" placeholder="Transport Name" name="transporter_transport_name">
					<select  class="form-control-vin1 form-vin"  name="transporter_type">
						<option disabled selected>Transporter Type</option>
						<option value="Fleet Owner">Fleet Owner</option>
						<option value="Container Supplier">Container Supplier</option>
						<option value="Broker/Agent">Broker/Agent</option>
						<option value="Logistics Transporter">Logistics Transporter</option>
					</select>
					<select  class="form-control-vin1 form-vin"  name="transporter_business_entity_type">
						<option disabled selected>Business Entity Type</option>
						<option value="Individuals">Individuals</option>
						<option value="Proprietorship">Proprietorship</option>
						<option value="Broker/Agent">Privated Limited Company</option>
						<option value="Publick Limited Company">Public Limited Company</option>
					</select>
					<input type="date"  class="form-control-vin1 form-vin" placeholder="Business Establishment Date" name="transporter_business_establishment_date">
					<input type="url"  class="form-control-vin1 form-vin" placeholder="website(optional)" name="transporter_website">
					<input type="text"  class="form-control-vin1 form-vin" placeholder="PAN #" name="transporter_pan">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Service Tax #" name="transporter_service_tax">
					<input type="text" class="form-control-vin1 form-vin" placeholder="TIN/CIN"  name="transporter_tin_cin">
					<input type="number"  class="form-control-vin1 form-vin" placeholder="No of Truck"  name="transporter_number_of_truck">
					<input type="text"  class="form-control-vin1 form-vin" placeholder="No of Truck with GPS" name="transporter_first_name">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Branch" name="transporter_branch">
					<input type="text"  class="form-control-vin1 form-vin" placeholder="States being Operated" name="transporter_states_being_operated">
					<br>Major Routes Being Covered*<br>
					<input type="text" class="form-control-vin1 form-vin" placeholder="From Location" name="transporter_from_location">
					<input type="text" class="form-control-vin1 form-vin" placeholder="To location" name="transporter_to_location">
					<button type="" class="btn btn1 btn-red">Add More</button>
					<br><label>Truck type</label><br>
					<select multiple  class="form-control-vin1 form-vin"  name="transporter_truck_type">
				        <option value="Tankers">Tankers</option>
						<option value="Double Dackers">Double Dackers</option>
						<option value="Refrigerated">Refrigerated</option>
						<option value="Canters">Canters</option>
						<option value="Scooter Body">Scooter Body</option>
					</select>
					
					<br>Business Registration Certificate* (Shop & Establishment License, Partnership Deed, Trade License, Certificate of Incorporation, etc.)
					<input type="file"  class="form-control-vin1 form-vin" placeholder=""  name="transporter_business_registration_certificate">
					<br>Company Logo:
					<input type="file" class="form-control-vin1 form-vin" placeholder=""  name="transporter_company_logo">
					<br>Office Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder=""  name="transporter_office_photo">
					<br>User Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder=""   name="transporter_user_photo">
					
					<div class="">
							<input type="checkbox"  name="check">
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong> and <strong>Privacy Policy</strong></span></label>
						</div>
					<br><button type='submit' name='type_of_user' value="transporter" class="btn btn-red">Create Account</button>
				</form>
										</div>
                                        
										<div role="tabpanel" class="tab-pane" id="customer">
				<form method="POST">
					<div class="col-md-12">
					<h4>Basic Details</h4>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="First Name"  name="customer_first_name"></div>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="Last Name" name="customer_last_name"></div>
					<div class="col-md-6"><input type="email"  class="form-control-vin form-vin" placeholder="Email Address" name="customer_email_address"></div>
					<div class="col-md-6"><input type="tel"  class="form-control-vin form-vin" placeholder="Contact No."  name="customer_contact_no"></div>
					<div class="col-md-6"><input type="password"  class="form-control-vin form-vin" placeholder="Password" name="customer_password"></div>
					<div class="col-md-6"><input type="password"  class="form-control-vin form-vin" placeholder="Confirm Password" name="customer_confirm_password"></div>
					
					</div>
					<div class="col-md-12">
					<h4>Contact Details</h4>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="Full Address"  name="customer_full_address"></div>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="Locality" name="customer_locality"></div>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="City" name="customer_city"></div>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="State" name="customer_state"></div>
					<div class="col-md-6"><input type="text"  class="form-control-vin form-vin" placeholder="Country" name="customer_country"></div>
					<div class="col-md-6"><input type="number"  class="form-control-vin form-vin" placeholder="PIN Code" name="customer_pin_code"></div>
					<div class="col-md-6"><input type="number"  class="form-control-vin form-vin" placeholder="Landline"  name="customer_landline"></div>
					<div class="col-md-6"><input type="number"  class="form-control-vin form-vin" placeholder="FAX" name="customer_fax"></div>
					</div>
					
					<h4>Business Details</h4>
					<input type="text"   class="form-control-vin1 form-vin" placeholder="Company Name" name="customer_company_name">
					<select  class="form-control-vin1 form-vin"  name="customer_company_type">
						<option disabled selected>Company Type</option>
						<option value="Manufacturing Unit">Manufacturing Unit</option>
						<option value="Dealer/Distributer">Dealer/Distributer</option>
						<option value="Broker/Agent">Logistics Transporter</option>
						
					</select>
					<select  class="form-control-vin1 form-vin"  name="customer_business_entity_type">
						<option disabled selected>Business Entity Type</option>
						<option value="Individuals">Individuals</option>
						<option value="Proprietorship">Proprietorship</option>
						<option value="Broker/Agent">Privated Limited Company</option>
						<option value="Publick Limited Company">Public Limited Company</option>
					</select>
					<input type="date"  class="form-control-vin1 form-vin" placeholder="Business Establishment Date" name="customer_business_establishment_date">
					<input type="url"  class="form-control-vin1 form-vin" placeholder="website(optional)" name="customer_website">
					<input type="text"  class="form-control-vin1 form-vin" placeholder="PAN #" name="customer_pan">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Service Tax #" name="customer_service_tax">
					<input type="text" class="form-control-vin1 form-vin" placeholder="TIN/CIN" name="customer_tin_cin">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Branch" name="customer_branch">
					<input type="text"  class="form-control-vin1 form-vin" placeholder="States being Route Covered" name="customer_state_being_route_covered">
					<br>Major Routes Being Covered*<br>
					<input type="text" class="form-control-vin1 form-vin" placeholder="From Location" name="customer_from_location">
					<input type="text" class="form-control-vin1 form-vin" placeholder="To location" name="customer_to_location">
					<button type="" class="btn btn1 btn-red">Add More</button>
					
					
					<br>Business Registration Certificate* (Shop & Establishment License, Partnership Deed, Trade License, Certificate of Incorporation, etc.)
					<input type="file"  class="form-control-vin1 form-vin" placeholder="" name="customer_business_registration_certificate">
					<br>Company Logo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="" name="customer_company_logo">
					<br>Office Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="" name="customer_office_photo">
					<br>User Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="" name="customer_user_photo">
					<div class="">
							<input type="checkbox"  name="check">
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong> and <strong>Privacy Policy</strong></span></label>
						</div>
					<br><button type='submit' name='type_of_user' value='customer' class="btn btn-red">Create Account</button>
					
				</form>
									    </div>
                                    </div>
</div>
                                </div>
	</div>
</div>
	</section>
	<!--footer-->
<?php get_footer(); ?>