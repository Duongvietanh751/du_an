 <!-- Page Banner Section Start -->
 <div class="section page-banner-section" style="background-image: url(view/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Order Status</h2>

                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Order Status</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding ">
        <div class="container">
            <div class="cart-wrapper mb">
            <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-quantity">
                                    Mã đơn hàng
                                </th>
                                <th class="product-info">
                                    Ngày Đặt
                                </th>
                                <th class="product-total-price">
                                    Tổng giá trị đơn hàng
                                </th>
                                <th class="product-quantity">Tình trạng đơn hàng</th>
                            </tr>
                        </thead>
                        <?php 
                        
                        ?>
                        <tbody>
                            <?php
                                if(is_array($ds_dh)){
                                    foreach($ds_dh as $bill){
                                        extract($bill);
                                        $ttdh=get_ttdh($bill['trangthai']);
                                        echo'
                                        <tr>
                                        <td class="quantity">
                                        '.$bill['id_order'].'
                                        </td>
                                        <td class="product-info">
                                            <h6 class="name">
                                            '.$bill['ngaydathang'].'
                                            </h6>
                                        </td>
                                        <td class="product-total-price">
                                            <span class="price">'.$bill['tongtien'].'</span>
                                        </td>
                                        <td class="quantity">
                                            '.$ttdh.'
                                        </td>
                                        </tr>
                                        ';
                                    }
                                }
                            ?>
                            </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
