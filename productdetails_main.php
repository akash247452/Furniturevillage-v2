<?php

include 'con.php';
$id = mysqli_real_escape_string($con, $_GET['id']);
$sql1 = "select * from products where id='$id'";
$result2 = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result2)
?>

<!-- Header Inner -->
<div class="header-inner">
	<div class="container">
		<div class="cat-nav-head">
			<div class="row">
				<div class="col-12">
					<div class="menu-area">
						<!-- Main Menu -->
						<nav class="navbar navbar-expand-lg">
							<div class="navbar-collapse">
								<div class="nav-inner">
									<ul class="nav main-menu menu navbar-nav">
										<li><a href="index.php">Home</a></li>
										<li class="active"><a href="#">Product<i class="ti-angle-down"></i></a>
											<ul class="dropdown">
												<li><a href="products.php?category=bed">BEDS</a></li>
												<li><a href="products.php?category=sofa">SOFAS</a></li>
												<li><a href="products.php?category=dinning">DINNING</a></li>
												<li><a href="products.php?category=dressing">DRESSING</a></li>
												<li><a href="products.php?category=wardrobes">WARDROBES</a></li>
											</ul>
										</li>
										<li><a href="#">Shop</a></li>
										<li><a href="#">Service</a></li>
										<li><a href="contactus.php">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</nav>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ End Header Inner -->


<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
						<li><a href="products.php?category=<?php echo $row['category']; ?>"><?php echo $row['category']; ?><i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="#"><?php echo $row['name']; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Shop Single -->
<section class="shop single section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Product Slider -->
						<div class="product-gallery">
							<!-- Images slider -->
							<div class="flexslider-thumbnails">
								<ul class="slides">
									<li data-thumb="images/products/<?php echo $row['img']; ?>/0.jpg" rel="adjustX:10, adjustY:">
										<img src="images/products/<?php echo $row['img']; ?>/0.jpg" alt="#">
									</li>
									<li data-thumb="images/products/<?php echo $row['img']; ?>/1.jpg">
										<img src="images/products/<?php echo $row['img']; ?>/1.jpg" alt="#">
									</li>
									<li data-thumb="images/products/<?php echo $row['img']; ?>/2.jpg">
										<img src="images/products/<?php echo $row['img']; ?>/2.jpg" alt="#">
									</li>
									<li data-thumb="images/products/<?php echo $row['img']; ?>/3.jpg">
										<img src="images/products/<?php echo $row['img']; ?>/3.jpg" alt="#">
									</li>
								</ul>
							</div>
							<!-- End Images slider -->
						</div>
						<!-- End Product slider -->
					</div>
					<div class="col-lg-6 col-12">
						<div class="product-des">
							<!-- Description -->
							<div class="short">
								<h4><?php echo $row['name']; ?></h4>
								<div class="rating-main">
									<ul class="rating">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star-half-o"></i></li>
										<li class="dark"><i class="fa fa-star-o"></i></li>
									</ul>
									<a href="#" class="total-review">(09)Review</a>
								</div>
								<p class="price"><span class="discount">&#8377;<?php echo $row['mrp']; ?></span><s>&#8377;<?php echo $row['oldmrp']; ?></s> </p>
								<p class="description"><?php echo $row['short_desc']; ?></p>
							</div>
							<!--/ End Description -->

							<!-- Size -->
							<div class="size">
								<h4>Dimensions:</h4>
								<ul>
									<li><?php echo $row['dimensions']; ?></li>
								</ul>
							</div>
							<!--/ End Size -->

							<!-- Product Buy -->
							<div class="product-buy">
								<div class="quantity">
									<h6>Quantity :</h6>
									<!-- Input Order -->
									<div class="input-group">
										<div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
										</div>
										<input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
										<div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</div>
								<div class="add-to-cart">
									<a href="#" class="btn">Add to cart</a>
									<a href="#" class="btn min"><i class="ti-heart"></i></a>

								</div>
								<p class="cat">Category :<a href="#"><?php echo $row['category']; ?></a></p>
								<p class="availability">Availability : In Stock</p>
							</div>
							<!--/ End Product Buy -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Description Tab -->
								<div class="tab-pane fade show active" id="description" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-12">
												<div class="single-des">
													<p><?php echo $row['description']; ?></p>
												</div>
												<div class="single-des">
													<h4>Product Features:</h4>
													<ul>
														<li>Modern design in affordable prices.</li>
														<li>High quality raw material used which is of maximum tensile strength.</li>
														<li>Throughly tested by experts for a long time.</li>
														<li>Waterproof plywood used. </li>
														<li>10 year manufacturing warranty.</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Description Tab -->
								<!-- Reviews Tab -->
								<div class="tab-pane fade" id="reviews" role="tabpanel">
									<div class="tab-single review-panel">
										<div class="row">
											<div class="col-12">
												<div class="ratting-main">
													<div class="avg-ratting">
														<h4>4.5 <span>(Overall)</span></h4>
														<span>Based on experts tests.</span>
													</div>
													
												</div>
												<!-- Review -->
												<div class="comment-review">
													<div class="add-review">
														<h5>Add A Review</h5>
														<p>Your email address will not be published. Required fields are marked.</p>
													</div>
													<h4>Your Rating</h4>
													<div class="review-inner">
														<div class="ratings">
															<ul class="rating">
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
																<li><i class="fa fa-star"></i></li>
															</ul>
														</div>
													</div>
												</div>
												<!--/ End Review -->
												<!-- Form -->
												<form class="form" method="post" action="mail/mail.php">
													<div class="row">
														<div class="col-lg-6 col-12">
															<div class="form-group">
																<label>Your Name<span>*</span></label>
																<input type="text" name="name" required="required" placeholder="">
															</div>
														</div>
														<div class="col-lg-6 col-12">
															<div class="form-group">
																<label>Your Email<span>*</span></label>
																<input type="email" name="email" required="required" placeholder="">
															</div>
														</div>
														<div class="col-lg-12 col-12">
															<div class="form-group">
																<label>Write a review<span>*</span></label>
																<textarea name="message" rows="6" placeholder=""></textarea>
															</div>
														</div>
														<div class="col-lg-12 col-12">
															<div class="form-group button5">
																<button type="submit" class="btn">Submit</button>
															</div>
														</div>
													</div>
												</form>
												<!--/ End Form -->
											</div>
										</div>
									</div>
								</div>
								<!--/ End Reviews Tab -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Shop Single -->

<!-- Start Most Popular -->
<?php
$category = $row['category'];
$sql = "select * from products where category='$category' limit 0,6";
$result = mysqli_query($con, $sql);
?>
<div class="product-area most-popular related-product section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Related Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel popular-slider">
					<?php
					while ($row2 = mysqli_fetch_assoc($result)) {
					?>
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="productdetails.php?id=<?php echo $row2['id']; ?>">
									<img class="default-img" src="images/products/<?php echo $row2['img']; ?>/normal.jpg" alt="#">
									<img class="hover-img" src="images/products/<?php echo $row2['img']; ?>/normal.jpg" alt="#">
									<?php
									if ($row2['trending'] != 1) {
										$discount = $row2['oldmrp'] - $row2['mrp'];
										$discountpercent = ($discount / $row2['oldmrp']) * 100;
										$int_discountpercent = (int)$discountpercent;
										echo "<span class='price-dec'>";
										echo $int_discountpercent;
										echo "%</span>";
									} else {
										echo "<span class='new'>Trending</span>";
									}
									?>
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
								<h3><a href="productdetails.php?id=<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></a></h3>
								<div class="product-price">
									<span class="old"><?php echo $row2['oldmrp']; ?></span>
									<span><?php echo $row2['mrp']; ?></span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Most Popular Area -->