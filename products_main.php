<?php

include 'con.php';
$category = mysqli_real_escape_string($con, $_GET['category']);
$result1 = mysqli_query($con, "select * from products where category='$category'");
$num_of_records = mysqli_num_rows($result1);
if (isset($_POST['sort'])) {
	$sort = mysqli_real_escape_string($con, $_POST['sort']);
} else {
	$sort = 'name';
}
if (isset($_GET['page_no'])) {
	$page_no = $_GET['page_no'];
} else {
	$page_no = 1;
}
$records_per_page = 12;
$no_of_pages = ceil($num_of_records / $records_per_page);
$start_from = ($page_no - 1) * $records_per_page;
$sql1 = "select * from products where category='$category' order by $sort limit $start_from,$records_per_page";
$result2 = mysqli_query($con, $sql1);
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
</header>
<!--/ End Header -->

<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="#"><?php echo $category; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style -->
<section class="product-area shop-sidebar shop section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-12">
				<div class="shop-sidebar">
					<!-- Single Widget -->
					<div class="single-widget category">
						<h3 class="title">Categories</h3>
						<ul class="categor-list">
							<li><a href="products.php?category=bed">BEDS</a></li>
							<li><a href="products.php?category=sofa">SOFAS</a></li>
							<li><a href="products.php?category=dinning">DINNING</a></li>
							<li><a href="products.php?category=dressing">DRESSING</a></li>
							<li><a href="products.php?category=wardrobes">WARDROBES</a></li>
						</ul>
					</div>
					<!--/ End Single Widget -->
				</div>
			</div>
			<div class="col-lg-9 col-md-8 col-12">
				<div class="row">
					<div class="col-12">
						<!-- Shop Top -->
						<div class="shop-top">
							<div class="shop-shorter">
								<div class="single-shorter">
									<form method="post">
										<label>Sort By :</label>
										<select name="sort">
											<option>Name</option>
											<option>mrp</option>
											<option>timestamp</option>
											<option>mrp desc</option>
											<option>name desc</option>
											<option>timestamp desc</option>
										</select>
										<button class="btn-default btn-sm" type="submit">Apply</button>
									</form>
								</div>
							</div>
							<ul class="view-mode">
								<li class="active"><a href="#"><i class="fa fa-th-large"></i></a></li>
							</ul>
						</div>
						<!--/ End Shop Top -->
					</div>
				</div>
				<div class="row">



					<?php
					while ($row = mysqli_fetch_assoc($result2)) {
					?>



						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="productdetails.php?id=<?php echo $row['id']; ?>">
										<img class="default-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
										<img class="hover-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">

										<?php
										if ($row['trending'] != 1) {
											$discount = $row['oldmrp'] - $row['mrp'];
											$discountpercent = ($discount / $row['oldmrp']) * 100;
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
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>

										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="productdetails.html"><?php echo $row['name']; ?></a></h3>
									<div class="product-price">
										<span class="old">&#8377;<?php echo $row['oldmrp']; ?></span>
										<span>&#8377;<?php echo $row['mrp']; ?></span>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="col-12">
					<!-- Pagination -->
					<div class="pagination">
						<ul class="pagination-list">
							<?php if ($page_no > 1) { ?>
								<li><a href="?page_no=<?php echo ($page_no - 1);  ?>&category=<?php echo $category;  ?>"><i class="ti-arrow-left"></i></a></li>
								<?php }
							for ($i = 1; $i <= $no_of_pages; $i++) {
								if ($i == $page_no) { ?>
									<li class="active"><a href="?page_no=<?php echo $i;  ?>&category=<?php echo $category;  ?>"><?php echo $i; ?></a></li>
								<?php } else { ?>
									<li><a href="?page_no=<?php echo $i;  ?>&category=<?php echo $category;  ?>"><?php echo $i; ?></a></li>
							<?php }
							}
							?>
							<?php if ($page_no < $no_of_pages) { ?>
								<li><a href="?page_no=<?php echo ($page_no + 1);  ?>&category=<?php echo $category;  ?>"><i class="ti-arrow-right"></i></a></li>
							<?php } ?>
						</ul>
					</div>
					<!--/ End Pagination -->
				</div>
			</div>

		</div>

	</div>

</section>
<!--/ End Product Style 1  -->