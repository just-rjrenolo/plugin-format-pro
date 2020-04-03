<?php use \Includes\Base\BaseController; ?>
<form action="">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
					<div class="product-list">
						<header>
							<h1>RECYCLE</h1>
							<button type="button" class="btn btn btn-success btn-md" id="buttonModal" data-toggle="modal" data-target="#selectProductModal">Add Product</button>
						</header>

						<hr>

						<div class="content">
							<!-- Product 1 -->
							<div class="row product">
								
								<div class="col-md-8">

									<div class="product-info flex">
										<img src="<?php echo $this->plugin_url; ?>assets/img/6ClassicTobacco.jpg" alt="6 Classic Tobacco">
										<div class="product-details">
											<h4>Product Title : CLASSIC TOBACCO</h4>
											<p>Product Description : Tobacco Leaf</p>
										</div>
									</div>

								</div>

								<div class="col-md-4">
									<div class="product-qty">
										<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
										<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" title="Delete Product"><i class="fa fa-times"></i></button>
									</div>
								</div>

							</div>
							
							<!-- Product 2 -->
							<div class="row product">

								<div class="col-md-8">

									<div class="product-info flex">
										<img src="<?php echo $this->plugin_url; ?>assets/img/6MintFreeze.jpg" alt="6 Classic Tobacco">
										<div class="product-details">
											<h4>Product Title : MINT FREEZE</h4>
											<p>Product Description : Mint + Menthol</p>
										</div>
									</div>

								</div>

								<div class="col-md-4">
									<div class="product-qty">
										<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
										<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" title="Delete Product"><i class="fa fa-times"></i></button>
									</div>
								</div>

							</div>
							

							<!-- Product 3 -->
							<div class="row product">

								<div class="col-md-8">

									<div class="product-info flex">
										<img src="<?php echo $this->plugin_url; ?>assets/img/6BerryBlast.jpg" alt="6 Classic Tobacco">
										<div class="product-details">
											<h4>Product Title : BERRY BLAST</h4>
											<p>Product Description : Strawberry + Blueberry</p>
										</div>
									</div>

								</div>

								<div class="col-md-4">
									<div class="product-qty">
										<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
										<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" title="Delete Product"><i class="fa fa-times"></i></button>
									</div>
								</div>

							</div>

							<!-- Product 4 -->
							<div class="row product">

								<div class="col-md-8">

									<div class="product-info flex">
										<img src="<?php echo $this->plugin_url; ?>assets/img/6LushIce-700x700.jpg" alt="6 Classic Tobacco">
										<div class="product-details">
											<h4>Product Title : LUSH ICE</h4>
											<p>Product Description : Watermelon + Melon + Menthol</p>
										</div>
									</div>

								</div>

								<div class="col-md-4">
									<div class="product-qty">
										<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
										<button type="button" class="btn btn-danger btn-circle" data-toggle="tooltip" title="Delete Product"><i class="fa fa-times"></i></button>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div>

				<div class="col-md-4">
					
					<div class="user-details">

						<header>
							<h1>FROM</h1>
						</header>
						
						<hr>

						<div class="content">
							
								<div class="form-group">
							    	<label for="firstName">First Name:</label>
							    	<input type="text" class="form-control" id="firstname">
							  	</div>
							  	<div class="form-group">
							    	<label for="lastName">Last Name:</label>
							    	<input type="text" class="form-control" id="lastName">
							  	</div>
							  	<div class="form-group">
							    	<label for="email">Email Address:</label>
							    	<input type="email" class="form-control" id="email">
							  	</div>
							  	<div class="form-group">
							    	<label for="country">Country:</label>
							    	<select class="form-control" name="country" id="country">
							    		<option value="Australia">Australia</option>
							    		<option value="NEW Zealand">New Zealand</option>
							    		<option value="USA">USA</option>
							    	</select>
							  	</div>
							  	<div class="form-group">
							    	<label for="postcode">Postcode:</label>
							    	<input type="text" class="form-control" id="postcode">
							  	</div>
							  	<div class="form-group">
							    	<label for="city">City:</label>
							    	<input type="text" class="form-control" id="city">
							  	</div>
							  	<div class="form-group">
							    	<label for="state">State:</label>
							    	<input type="text" class="form-control" id="state">
							  	</div>
							  	<div class="form-group">
							    	<label for="email">Email address:</label>
							    	<input type="email" class="form-control" id="email">
							  	</div>
							
						</div>
					</div>

				</div>
			</div>


			<div class="row" style="margin-top:.5em;">

				<div class="col-md-8">
					<div class="mail-return">
						<h3>How will you mail your return?</h3>
						<div class="radio">
						  <label><input type="radio" name="optradio" checked>Pick Up</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="optradio">Drop Off</label>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="shipping-details">
						<h3>Return Summary</h3>
						<div class="shippingfee">
							<h5>Shipping FEE</h5>
							<p>$9.0</p>
						</div>
						
						<hr>
						
						<span>Pay Securely with Authorize.net</span>

						<div class="form-group">
					    	<label for="cardnumber">Card Number *:</label>
					    	<input type="text" class="form-control" id="cardnumber">
					  	</div>
					  	<div class="form-group">
					    	<label for="lastName">Expiry (MM/YY) *:</label>
					    	<input type="text" class="form-control" id="lastName">
					  	</div>
					  	<div class="form-group">
					    	<label for="cardcode">Card code *:</label>
					    	<input type="email" class="form-control" id="cardcode">
					  	</div>
					  	<div class="form-group">
					    	<label for="email">Email address:</label>
					    	<input type="email" class="form-control" id="email">
					  	</div>

					  	<div class="form-group">
					  		<button type="button" class="form-control btn btn-success">Confirm Recycle</button>
					  	</div>
					</div>
				</div>
			</div>

		</div>
	</form>


	<!-- Modal -->
<div id="selectProductModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Product</h4>
      </div>

      <div class="modal-body">

      		<!-- Product 1 -->
        	<div class="row product">

				<div class="col-md-8">

					<div class="product-info flex">
						<img src="<?php echo $this->plugin_url; ?>assets/img/6ClassicTobacco.jpg" alt="6 Classic Tobacco">
						<div class="product-details">
							<h4>Product Title : CLASSIC TOBACCO</h4>
							<p>Product Description : Tobacco Leaf</p>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="product-qty">
						<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
						<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="Add Product"><i class="fa fa-plus"></i></button>
					</div>
				</div>

			</div>
			
			<!-- Product 2 -->
			<div class="row product">

				<div class="col-md-8">

					<div class="product-info flex">
						<img src="<?php echo $this->plugin_url; ?>assets/img/6MintFreeze.jpg" alt="6 Classic Tobacco">
						<div class="product-details">
							<h4>Product Title : MINT FREEZE</h4>
							<p>Product Description : Mint + Menthol</p>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="product-qty">
						<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
						<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="Add Product"><i class="fa fa-plus"></i></button>
					</div>
				</div>

			</div>
			
			<!-- Product 3 -->
			<div class="row product">

				<div class="col-md-8">

					<div class="product-info flex">
						<img src="<?php echo $this->plugin_url; ?>assets/img/6BerryBlast.jpg" alt="6 Classic Tobacco">
						<div class="product-details">
							<h4>Product Title : BERRY BLAST</h4>
							<p>Product Description : Strawberry + Blueberry</p>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="product-qty">
						<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
						<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="Add Product"><i class="fa fa-plus"></i></button>
					</div>
				</div>

			</div>

			<!-- Product 4 -->
			<div class="row product">

				<div class="col-md-8">

					<div class="product-info flex">
						<img src="<?php echo $this->plugin_url; ?>assets/img/6LushIce-700x700.jpg" alt="6 Classic Tobacco">
						<div class="product-details">
							<h4>Product Title : LUSH ICE</h4>
							<p>Product Description : Watermelon + Melon + Menthol</p>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="product-qty">
						<input type="number" class="form-control" id="productQty" name="productQty" data-toggle="tooltip" title="Add Quantity">
						<button type="button" class="btn btn-success btn-circle" data-toggle="tooltip" title="Add Product"><i class="fa fa-plus"></i></button>
					</div>
				</div>

			</div>
      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>
</div>