	<!-- Start Product Area -->
	<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Trending Item</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#bed" role="tab">BEDS</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sofa" role="tab">SOFAS</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dinning" role="tab">DINNING</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#dressing" role="tab">DRESSING</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#wardrobes" role="tab">WARDROBES</a></li>
							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="bed" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<?php
										include 'con.php';
										$sql = "select * from products where category='bed' and trending=1 limit 0,8";
										$result = mysqli_query($con, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
										?>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="productdetails.php?id=<?php echo $row['id']; ?>">
															<img class="default-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
															<img class="hover-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
															<span class="new">Trending</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="productdetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
														<div class="product-price">
															<span>&#8377;<?php echo $row['mrp']; ?></span>
														</div>
													</div>
												</div>
											</div>
										<?php
										}
										?>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="sofa" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<?php
										include 'con.php';
										$sql = "select * from products where category='sofa' and trending=1 limit 0,8";
										$result = mysqli_query($con, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
										?>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="productdetails.php?id=<?php echo $row['id']; ?>">
															<img class="default-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
															<img class="hover-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
															<span class="new">Trending</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="productdetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
														<div class="product-price">
															<span>&#8377;<?php echo $row['mrp']; ?></span>
														</div>
													</div>
												</div>
											</div>
										<?php
										}
										?>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="dinning" role="tabpanel">
								<div class="tab-single">
									<div class="row">

										<?php
										include 'con.php';
										$sql = "select * from products where category='dinning' and trending=1 limit 0,8";
										$result = mysqli_query($con, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
										?>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.php">
															<img class="default-img" src="images/products/normal/<?php echo $row['img']; ?>" alt="#">
															<img class="hover-img" src="images/products/normal/<?php echo $row['img_big']; ?>" alt="#">
															<span class="new">Trending</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="productdetail.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
														<div class="product-price">
															<span>&#8377;<?php echo $row['mrp']; ?></span>
														</div>
													</div>
												</div>
											</div>
										<?php
										}
										?>

									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="dressing" role="tabpanel">
								<div class="tab-single">
									<div class="row">

										<?php
										include 'con.php';
										$sql = "select * from products where category='dressing' and trending=1 limit 0,8";
										$result = mysqli_query($con, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
										?>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="productdetails.php?id=<?php echo $row['id']; ?>">
															<img class="default-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
															<img class="hover-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
															<span class="new">Trending</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="productdetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
														<div class="product-price">
															<span>&#8377;<?php echo $row['mrp']; ?></span>
														</div>
													</div>
												</div>
											</div>
										<?php
										}
										?>

									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="wardrobes" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<?php
										include 'con.php';
										$sql = "select * from products where category='wardrobes' and trending=1 limit 0,8";
										$result = mysqli_query($con, $sql);
										while ($row = mysqli_fetch_assoc($result)) {
										?>

											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="productdetails.php?id=<?php echo $row['id']; ?>">
															<img class="default-img" src="images/products/normal/<?php echo $row['img']; ?>" alt="#">
															<img class="hover-img" src="images/products/normal/<?php echo $row['img_big']; ?>" alt="#">
															<span class="new">Trending</span>
														</a>
														<div class="button-head">
															<div class="product-action">

																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="productdetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
														<div class="product-price">
															<span>&#8377;<?php echo $row['mrp']; ?></span>
														</div>
													</div>
												</div>
											</div>
										<?php
										}
										?>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Product Area -->