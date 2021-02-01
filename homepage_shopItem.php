	<br>
	<br>
	<br>
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>

					<?php
					include 'con.php';
					$sql1 = "select * from products where sale=1 and trending=0 and topviewed=0 limit 0,3";
					$result1 = mysqli_query($con, $sql1);
					while ($row1 = mysqli_fetch_assoc($result1)) {
					?>

						<!-- Start Single List  -->

						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="images/products/<?php echo $row1['img']; ?>/normal.jpg" height="115px" width="140px" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h5 class="title"><a href="productdetails.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></h5>
										<p class="price with-discount">&#8377;<?php echo $row1['mrp']; ?></p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single List  -->
					<?php
					}
					?>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Best Seller</h1>
							</div>
						</div>
					</div>
					<?php
					include 'con.php';
					$sql2 = "select * from products where sale=0 and trending=0  and topviewed=0 limit 0,3";
					$result2 = mysqli_query($con, $sql2);
					while ($row2 = mysqli_fetch_assoc($result2)) {
					?>

						<!-- Start Single List  -->

						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="images/products/<?php echo $row2['img']; ?>/normal.jpg" height="115px" width="140px" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h5 class="title"><a href="productdetails.php?id=<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></a></h5>
										<p class="price with-discount">&#8377;<?php echo $row2['mrp']; ?></p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single List  -->
					<?php
					}
					?>

				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>


					<?php
					include 'con.php';
					$sql3 = "select * from products where topviewed=1 and sale=0 and trending=0 limit 0,3";
					$result3 = mysqli_query($con, $sql3);
					while ($row3 = mysqli_fetch_assoc($result3)) {
					?>

						<!-- Start Single List  -->

						<div class="single-list">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="list-image overlay">
										<img src="images/products/<?php echo $row3['img']; ?>/normal.jpg" height="115px" width="140px" alt="#">
										<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 no-padding">
									<div class="content">
										<h5 class="title"><a href="productdetails.php?id=<?php echo $row3['id']; ?>"><?php echo $row3['name']; ?></a></h5>
										<p class="price with-discount">&#8377;<?php echo $row3['mrp']; ?></p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Single List  -->
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->