<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../global.php";

// Kiểm tra xem giỏ hàng có dữ liệu hay không
if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];

    // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
    $productId = array_column($cart, 'id');

    // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
    $idList = implode(',', $productId);

    // Lấy sản phẩm trong bảng sản phẩm theo id
    $dataDb = loadone_sanphamCart($idList);

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
<?php
}
?>