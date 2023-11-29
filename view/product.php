<?php

?>
<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(view/assets/images/page-banner.jpg)">
    <div class="container">
        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Product Details</h2>

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Product Details</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Product Details Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Product Section Wrapper Start -->
        <div class="product-section-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Product Details Images Start -->
                    <div class="product-details-images">
                        <!-- Details Gallery Images Start -->
                        <div class="details-gallery-images" id="img-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide single-img zoom">
                                        <?php
                                        if (is_array($ctsp)) {
                                            extract($ctsp);
                                        }
                                        ?>
                                        <img src="<?php echo "upload/" . $img; ?>" width="570" height="604" alt="Product Image" />
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Details Gallery Images End -->

                        <!-- Details Gallery Thumbs Start -->
                        <div class="details-gallery-thumbs">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="<?php echo "upload/" . $img; ?>" width="88" height="93" alt="Product Thumbnail" />
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                        <!-- Details Gallery Thumbs End -->
                    </div>
                    <!-- Product Details Images End -->
                </div>
                <div class="col-lg-6">
                    <!-- Product Details Description Start -->
                    <div class="product-details-description">
                        <h4 class="product-name">
                            <?= $name ?>
                        </h4>
                        <div class="price">
                            <span class="sale-price">$<?= $price ?></span>

                        </div>
                        <div class="review-wrapper">
                            <div class="review-star">
                                <div class="star" style="width: 80%"></div>
                            </div>
                            <p>
                                <a href="#reviews">( 1 Customer Review )</a>
                            </p>
                        </div>

                        <div class="product-color">
                            <span class="lable">Color:</span>
                            <ul>
                                <li>
                                    <input type="radio" name="colors" id="color1" />
                                    <label for="color1"><span class="color-blue"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color2" />
                                    <label for="color2"><span class="color-gray"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color3" />
                                    <label for="color3"><span class="color-dark-blue"></span></label>
                                </li>
                                <li>
                                    <input type="radio" name="colors" id="color4" />
                                    <label for="color4"><span class="color-gray-dark"></span></label>
                                </li>
                            </ul>
                        </div>

                        <p>
                            <?= $mota ?>
                        </p>

                        <div class="product-meta">
                            <div class="product-quantity d-inline-flex">
                                <button type="button" class="sub">
                                    -
                                </button>
                                <input type="text" value="1" />
                                <button type="button" class="add">
                                    +
                                </button>
                            </div>
                            <div class="meta-action">
                                <button class="btn btn-dark btn-hover-primary">
                                    <a href="index.php?act=cart">Add To Cart</a>
                                </button>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="meta-action">
                                <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                            </div>
                        </div>

                        <div class="product-info">
                            <div class="single-info">
                                <span class="lable">SKU:</span>
                                <span class="value">Ch-256xl</span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Categories:</span>
                                <span class="value"><a href="#">Office,</a>
                                    <a href="#">Home</a></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">tag:</span>
                                <span class="value"><a href="#">Furniture</a></span>
                            </div>
                            <div class="single-info">
                                <span class="lable">Share:</span>
                                <ul class="social">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Product Details Description End -->
                </div>
            </div>
        </div>
        <!-- Product Section Wrapper End -->
    </div>
</div>
<!-- Product Details Section End -->

<!-- Product Details tab Section Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Product Details Tabs Start -->
        <div class="product-details-tabs">
            <ul class="nav justify-content-center">
                <li>
                    <button data-bs-toggle="tab" data-bs-target="#reviews">
                        Reviews (03)
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade" id="reviews">
                    <!-- Reviews Content Start -->
                    <div class="reviews-content">
                        <!-- Review Comment Start  -->
                        <div class="reviews-comment">
                        <?php foreach ($kh_bl as $key => $value) : ?>
                            <div class="single-reviews">
                                
                                    <div class="comment-content">
                                        <div class="author-name-rating">
                                            <h6 class="name"><?php echo $value['user'] ?></h6>
                                            <div class="review-star">
                                                <div class="star" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <span class="date"><?php echo $value['ngaybinhluan'] ?></span>
                                        <p>
                                            <?php echo $value['noidung'] ?>
                                        </p>
                                    </div>
                                
                            </div>
                            <?php endforeach ?>
                        </div>
                        <div class="reviews-form">
                            <h3 class="reviews-title">Add a review</h3>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="text" name="noidung" placeholder="Write your comments here"></input>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="hidden" name="idpro" value="<?= $id ?>">
                                            <input type="hidden" name="iduser" value="<?= $iduser ?>">
                                            <input class="btn btn-dark btn-hover-primary" type="submit" name="guibinhluan" value="Gửi bình luận">
                            </form>
                            <?php

                            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                                $noidung = $_POST['noidung'];
                                $idsp = $_POST['idpro'];
                                $iduser = $_SESSION['user']['id'];
                                $date = date('h:i:a d/m/y');
                                sent_bl($idsp, $iduser, $noidung, $date);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <!-- Review Form End  -->
        </div>
        <!-- Reviews Content End -->
    </div>
</div>
</div>
<!-- Product Details Tabs End -->
</div>
</div>
<!-- Product Details tab Section End -->

<!-- Sale Product Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="">
            <!-- Product Wrapper Start -->
            <div class="product-active-02">
                <!-- Product Top Wrapper Start -->
                <div class="product-top-wrapper">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"># Related Products</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Product Menu Start -->
                    <div class="product-menu">
                        <ul class="nav">
                            <li>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#tab7">
                                    All Time
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#tab8">
                                    This Year
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#tab9">
                                    This Month
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- Product Menu End -->

                    <!-- Swiper Arrows End -->
                    <div class="swiper-arrows">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev">
                            <i class="pe-7s-angle-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="pe-7s-angle-right"></i>
                        </div>
                    </div>
                    <!-- Swiper Arrows End -->
                </div>
                <!-- Product Top Wrapper End -->

                <!-- Product Tabs Content Start -->
                <div class="product-tabs-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab7">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-01.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Elona bedside grey
                                                        table</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-02.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Simple minimal Chair</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-03.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Pendant Chandelier
                                                        Light</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-04.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">High quality vase
                                                        bottle</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab8">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-01.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Elona bedside grey
                                                        table</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-02.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Simple minimal Chair</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-03.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Pendant Chandelier
                                                        Light</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-04.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">High quality vase
                                                        bottle</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab9">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-04.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">High quality vase
                                                        bottle</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-03.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Pendant Chandelier
                                                        Light</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-01.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Elona bedside grey
                                                        table</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="#"><img src="view/assets/images/product/product-10.jpg" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="product-details.html">Round Swivel Chair</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">$240.00</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-shopbag"></i></a>
                                                </li>
                                                <li>
                                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Tabs Content End -->
            </div>
            <!-- Product Wrapper End -->
        </div>
    </div>
</div>
<!-- Sale Product Section End -->