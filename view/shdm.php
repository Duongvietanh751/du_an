 <!-- Page Banner Section Start -->
 <div class="section page-banner-section" style="background-image: url(view/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Shop Page</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop Page</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shop Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Product Section Wrapper Start -->
            <div class="product-section-wrapper">
                <!-- Shop top Bar Start -->
                <div class="shop-top-bar">
                    <div class="shop-text">
                        <p>
                            <span>12</span> Product Found of <span>30</span>
                        </p>
                    </div>
                    <div class="shop-tabs">
                        <ul class="nav">
                            <li>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#grid">
                                    <i class="fa fa-th"></i>
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#list">
                                    <i class="fa fa-list"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-sort">
                        <span class="title">Sort By :</span>
                        <form action="index.php" method="get">
    <select name="iddm">
        <?php foreach ($ds_dm as $key => $dm): ?>
            <option value="<?php echo $dm['id']; ?>"><?php echo $dm['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="hidden" name="act" value="shdm">
    <input type="submit" value="Go" style="background-color: #fff; 
    color: #000000; padding: 5px 10px; border: solid black 1px; 
    border-radius: 4px; cursor: pointer;">
</form>
                    </div>
                </div>
                <!-- Shop top Bar End -->

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid">
                        <!-- Shop Product Wrapper Start -->
                        <div class="shop-product-wrapper">
                            <div class="row">
                                <?php  foreach($sp_dm as $key => $value): ?>
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <a href="index.php?act=product&idsp=<?php echo $value['id']; ?>"><img src="<?php echo "upload/".$value['img'] ?>" width="270" height="303" alt="product" /></a>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="index.php?act=product&idsp=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a>
                                            </h4>
                                            <div class="price">
                                                <span class="sale-price"><?php echo $value['price'];?></span>
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
                                <?php endforeach ?>                             
                            </div>
                        </div>
                        <!-- Shop Product Wrapper End -->

                    </div>
                    <div class="tab-pane fade" id="list">
                        <!-- Shop Product Wrapper Start -->
                        <div class="shop-product-wrapper">
                            <?php foreach($sp_dm as $key => $value): ?>
                            <div class="single-product-02 product-list">
                                <div class="product-images">
                                    <a href="index.php?act=product&idsp=<?php echo $value['id']; ?>"><img src="<?php echo "upload/" . $value['img']; ?>" width="270" height="303" alt="product" /></a>

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
                                <div class="product-content">
                                    <h4 class="title">
                                        <a href="index.php?act=product&idsp=<?php echo $value['id']; ?>"><?php echo $value['name'] ?></a>
                                    </h4>
                                    <div class="price">
                                        <span class="sale-price"><?php echo "$". $value['price'] ?></span>
                                    </div>
                                    <p>
                                        <?php echo $value['mota']?>
                                    </p>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <!-- Shop Product Wrapper End -->

                    </div>
                </div>

                <!-- Page pagination Start -->
                <div class="page-pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link active" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- Page pagination End -->
            </div>
            <!-- Product Section Wrapper End -->
        </div>
    </div>
    <!-- Shop Section End -->
