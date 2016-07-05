
	<?php get_header(); ?>
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
										<form action="" class="">
					<h4>Basic Details</h4>
					<input type="text" required="required" class="form-control-vin form-vin" placeholder="First Name">
					<input type="text" required class="form-control-vin form-vin" placeholder="Last Name">
					<input type="email" required class="form-control-vin form-vin" placeholder="Email Address">
					<input type="tel" required class="form-control-vin form-vin" placeholder="Contact No.">
					<input type="password" required class="form-control-vin form-vin" placeholder="Password">
					<input type="password" required class="form-control-vin form-vin" placeholder="Confirm Password">
					
					<h4>Contact Details</h4>
					<input type="text" required class="form-control-vin form-vin" placeholder="Full Address">
					<input type="text" required class="form-control-vin form-vin" placeholder="Locality">
					<input type="text" required class="form-control-vin form-vin" placeholder="City">
					<input type="text" required class="form-control-vin form-vin" placeholder="State">
					<input type="text" required class="form-control-vin form-vin" placeholder="Country">
					<input type="number" required class="form-control-vin form-vin" placeholder="PIN Code">
					<input type="tel"  class="form-control-vin form-vin" placeholder="Landline No.">
					<input type="number"  class="form-control-vin form-vin" placeholder="FAX">
					
					<h4>Business Details</h4>
					<input type="text"  required class="form-control-vin1 form-vin" placeholder="Transport Name">
					<select required class="form-control-vin1 form-vin" >
						<option disabled selected>Transporter Type</option>
						<option value="Fleet Owner">Fleet Owner</option>
						<option value="Container Supplier">Container Supplier</option>
						<option value="Broker/Agent">Broker/Agent</option>
						<option value="Logistics Transporter">Logistics Transporter</option>
					</select>
					<select required class="form-control-vin1 form-vin" >
						<option disabled selected>Business Entity Type</option>
						<option value="Individuals">Individuals</option>
						<option value="Proprietorship">Proprietorship</option>
						<option value="Broker/Agent">Privated Limited Company</option>
						<option value="Publick Limited Company">Public Limited Company</option>
					</select>
					<input type="date" required class="form-control-vin1 form-vin" placeholder="Business Establishment Date">
					<input type="url"  class="form-control-vin1 form-vin" placeholder="website(optional)">
					<input type="text" required class="form-control-vin1 form-vin" placeholder="PAN #">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Service Tax #">
					<input type="text" class="form-control-vin1 form-vin" placeholder="TIN/CIN">
					<input type="number" required class="form-control-vin1 form-vin" placeholder="No of Truck">
					<input type="text" required class="form-control-vin1 form-vin" placeholder="No of Truck with GPS">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Branch">
					<input type="text" required class="form-control-vin1 form-vin" placeholder="States being Operated">
					<br>Major Routes Being Covered*<br>
					<input type="text" class="form-control-vin1 form-vin" placeholder="From Location">
					<input type="text" class="form-control-vin1 form-vin" placeholder="To location">
					<button type="" class="btn btn1 btn-red">Add More</button>
					<br><label>Truck type</label><br>
					<select multiple required class="form-control-vin1 form-vin" >
				        <option value="Tankers">Tankers</option>
						<option value="Double Dackers">Double Dackers</option>
						<option value="Refrigerated">Refrigerated</option>
						<option value="Canters">Canters</option>
						<option value="Scooter Body">Scooter Body</option>
					</select>
					
					<br>Business Registration Certificate* (Shop & Establishment License, Partnership Deed, Trade License, Certificate of Incorporation, etc.)
					<input type="file" required class="form-control-vin1 form-vin" placeholder="">
					<br>Company Logo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="">
					<br>Office Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="">
					<br>User Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="">
					
					<div class="">
							<input type="checkbox" required name="check">
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong> and <strong>Privacy Policy</strong></span></label>
						</div>
					<br><button type="submit" class="btn btn-red">Create Account</button>
				</form>
										</div>
                                        
										<div role="tabpanel" class="tab-pane" id="customer">
																	<form action="" class="">
					<div class="col-md-12">
					<h4>Basic Details</h4>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="First Name"></div>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="Last Name"></div>
					<div class="col-md-6"><input type="email" required class="form-control-vin form-vin" placeholder="Email Address"></div>
					<div class="col-md-6"><input type="tel" required class="form-control-vin form-vin" placeholder="Contact No."></div>
					<div class="col-md-6"><input type="password" required class="form-control-vin form-vin" placeholder="Password"></div>
					<div class="col-md-6"><input type="password" required class="form-control-vin form-vin" placeholder="Confirm Password"></div>
					
					</div>
					<div class="col-md-12">
					<h4>Contact Details</h4>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="Full Address"></div>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="Locality"></div>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="City"></div>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="State"></div>
					<div class="col-md-6"><input type="text" required class="form-control-vin form-vin" placeholder="Country"></div>
					<div class="col-md-6"><input type="number" required class="form-control-vin form-vin" placeholder="PIN Code"></div>
					<div class="col-md-6"><input type="number"  class="form-control-vin form-vin" placeholder="Landline"></div>
					<div class="col-md-6"><input type="number"  class="form-control-vin form-vin" placeholder="FAX"></div>
					</div>
					
					<h4>Business Details</h4>
					<input type="text"  required class="form-control-vin1 form-vin" placeholder="Company Name">
					<select required class="form-control-vin1 form-vin" >
						<option disabled selected>Company Type</option>
						<option value="Manufacturing Unit">Manufacturing Unit</option>
						<option value="Dealer/Distributer">Dealer/Distributer</option>
						<option value="Broker/Agent">Logistics Transporter</option>
						
					</select>
					<select required class="form-control-vin1 form-vin" >
						<option disabled selected>Business Entity Type</option>
						<option value="Individuals">Individuals</option>
						<option value="Proprietorship">Proprietorship</option>
						<option value="Broker/Agent">Privated Limited Company</option>
						<option value="Publick Limited Company">Public Limited Company</option>
					</select>
					<input type="date" required class="form-control-vin1 form-vin" placeholder="Business Establishment Date">
					<input type="url"  class="form-control-vin1 form-vin" placeholder="website(optional)">
					<input type="text" required class="form-control-vin1 form-vin" placeholder="PAN #">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Service Tax #">
					<input type="text" class="form-control-vin1 form-vin" placeholder="TIN/CIN">
					<input type="text" class="form-control-vin1 form-vin" placeholder="Branch">
					<input type="text" required class="form-control-vin1 form-vin" placeholder="States being Route Covered">
					<br>Major Routes Being Covered*<br>
					<input type="text" class="form-control-vin1 form-vin" placeholder="From Location">
					<input type="text" class="form-control-vin1 form-vin" placeholder="To location">
					<button type="" class="btn btn1 btn-red">Add More</button>
					
					
					<br>Business Registration Certificate* (Shop & Establishment License, Partnership Deed, Trade License, Certificate of Incorporation, etc.)
					<input type="file" required class="form-control-vin1 form-vin" placeholder="">
					<br>Company Logo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="">
					<br>Office Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="">
					<br>User Photo:
					<input type="file" class="form-control-vin1 form-vin" placeholder="">
					<div class="">
							<input type="checkbox" required name="check">
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong> and <strong>Privacy Policy</strong></span></label>
						</div>
					<br><button type="submit" class="btn btn-red">Create Account</button>
					
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