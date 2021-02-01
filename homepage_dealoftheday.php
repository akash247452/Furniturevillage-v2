<!-- Start Cowndown Area -->
<section class="cown-down" id="dealoftheday">
	<div class="section-inner ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-12 padding-right">
					<?php
					include 'con.php';
					$sql4 = "select * from products where dealoftheday=1";
					$result4 = mysqli_query($con, $sql4);
					$row4 = mysqli_fetch_assoc($result4);

					?>
					<a href="productdetail.php?id=<?php echo $row4['id']; ?>">
						<div class="image">
							<img src="images/products/<?php echo $row4['img']; ?>/0.jpg" alt="#">
						</div>
				</div>
				<div class="col-lg-6 col-12 padding-left">
					<div class="content">
						<div class="heading-block">
							<p class="small-title">Deal of the day</p>
							<h3 class="title"><?php echo $row4['name']; ?></h3>
							<p class="text"><?php echo $row4['short_desc']; ?> </p>
							<h1 class="price">&#8377;<?php echo $row4['mrp']; ?><s><?php echo $row4['oldmrp'];?></s></h1>
							<div class="coming-time">
								<div class="clearfix" data-countdown="2021/02/30"></div>
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End Cowndown Area -->