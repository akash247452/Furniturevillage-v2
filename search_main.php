<?php
include 'con.php';
if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($con, $_POST['search']);
    $category2 = mysqli_real_escape_string($con, $_POST['category2']);
    if ($category2 == "All Category") {
        $sql = "select * from products where Match(name,description,short_desc) Against('.$search.')";
    } else {
        $sql = "select * from products where category='$category2' and Match(name,description,short_desc) Against('.$search.')";
    }
}
$result2 = mysqli_query($con, $sql);
$num_of_records = mysqli_num_rows($result2);
?>


<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="#">Search</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Product Style 1 -->
<section class="product-area shop-sidebar shop-list shop section">
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
                                    <label><?php echo $num_of_records; ?> Results Found</label>
                                </div>
                            </div>
                            <ul class="view-mode">
                                <li class="active"><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                        </div>
                        <!--/ End Shop Top -->
                    </div>
                </div>


                <?php
                while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                    <!-- Start Single List -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="productdetails.php?id=<?php echo $row['id'] ?>">
                                            <img class="default-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
                                            <img class="hover-img" src="images/products/<?php echo $row['img']; ?>/normal.jpg" alt="#">
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Add to cart" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="list-content">
                                    <div class="product-content">
                                        <div class="product-price">
                                            <span>&#8377;<?php echo $row['mrp']; ?></span>
                                        </div>
                                        <h3 class="title"><a href="productdetails.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a></h3>
                                        <div class="review-inner">
                                            <div class="ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-half-o"></i></li>
                                                    <li class="total">(4.5)</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p1 class="title">Category:<?php echo $row['category']; ?></p1>
                                    </div>
                                    <p class="des"><?php echo $row['description']; ?></p>
                                    <a href="#" class="btn">BUY NOW!</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--/ End Product Style 1  -->
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</section>