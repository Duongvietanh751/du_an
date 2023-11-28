
<?php
if (empty($dataDb)) {
    echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
} else {
?>
<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(view/assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Cart</h2>

                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Cart</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="cart-wrapper">
                <!-- Cart Wrapper Start -->
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-action">STT</th>
                                <th class="product-thumb">Image</th>
                                <th class="product-info">
                                    product Information
                                </th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total-price">
                                    Total Price
                                </th>
                                <th class="product-action">Sum</th>
                                <th class="product-action">Action</th>
                            </tr>
                        </thead>
                        <tbody id="order">
                            <?php
                                $sum_total = 0;
                                foreach($dataDb as $key =>$product):
                                    $quantityInCart = 0;
                                    foreach($_SESSION['cart'] as $item){
                                        if($item['id'] == $product['id']){
                                            $quantityInCart = $item['quantity'];
                                            break;
                                        }
                                    }
                            ?>
                            <tr>
                                <td class="product-action"><?= $key + 1 ?></td>
                                <td class="product-thumb">
                                    <img src="<?= $img_path, $product['img'] ?>" alt="">
                                </td>
                                <td class="product-info">
                                    <h6 class="name">
                                        <a href="#"><?=$product['name'] ?></a>
                                    </h6>
                                </td>
                                <td class="quantity">
                                    <div class="">
                                        <!-- <button type="button" class="sub">
                                            -
                                        </button> -->
                                        <input type="number" value="<?= $quantityInCart ?>" min="1" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                                        <!-- <button type="button" class="add">
                                            +
                                        </button> -->
                                    </div>
                                </td>
                                <td class="product-total-price">
                                <?= number_format((int)$product['price'], 0, ",", ".")  ?> <u>$</u>
                                </td>
                                <td class="product-action">
                                <span class="price"><?= number_format((int)$product['price'] * (int)$quantityInCart, 0, ",", ".") ?> <u>$</u></span>
                                </td>
                                <td class="product-action">
                                    <button class="remove" onclick="removeFormCart(<?= $product['id'] ?>)">
                                        <i class="pe-7s-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php
                            // Tính tổng giá đơn hàng
                                    $sum_total += ((int)$product['price'] * (int)$quantityInCart);
                                    // Lưu tổng giá trị vào sesion
                                    $_SESSION['resultTotal'] = $sum_total;
                            endforeach; 
                            ?>
                            <tr>
                                <td colspan="5" align="center">
                                    <h2>Total:</h2>
                                </td>
                                <td colspan="2" align="center">
                                    <h2>
                                        <span>
                                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>$</u>
                                        </span>
                                    </h2>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="col-lg-4">
                    <!-- Cart Totals Start -->
                    <div class="cart-totals">
                        <div class="cart-title">
                            <h4 class="title">Cart totals</h4>
                        </div>
                        <!-- <div class="cart-total-table">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="value">Total</p>
                                        </td>
                                        <td>
                                            <p class="price">
                                            <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>$</u>
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                        <div class="cart-total-btn">
                            <a href="index.php?act=checkout" class="btn btn-dark btn-hover-primary btn-block">Proceed To Checkout</a>
                        </div>
                    </div>
                    <!-- Cart Totals End -->
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>