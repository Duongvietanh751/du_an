<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="">
      <h1>Danh sách dơn hàng</h1>
      <table>
        <tr>
            <th>Mã đơn hàng</th>
            <th>ID khách</th>
            <th>Khách hàng</th>
            <th>SDT</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Tổng tiền</th>
            <th>Phương thức thanh toán</th>
            <th>Ngày đặt hàng</th>
            <th>Trạng thái</th>
            <th>Chức năng</th>
        </tr>
        <?php foreach ($ds_dh as $key => $value ):
         extract($value);
          ?>
        <tr>
          <td><?php echo $value['id_order'] ?></td>
          <td><?php echo $value['id_user'] ?></td>
          <td><?php echo $value['hoten'] ?></td>
          <td><?php echo $value['sdt'] ?></td>
          <td><?php echo $value['email'] ?></td>
          <td><?php echo $value['diachi'] ?></td>
          <td><?php echo $value['tongtien'] ?></td>
          <td><?php echo $value['pttt'] ?></td>
          <td><?php echo $value['ngaydathang'] ?></td>
          <td><?php echo $value['trangthai'] ?></td>
          <td><a href="<?php echo "index.php?act=suadh&id=".$value['id_order']; ?>">Sửa</a> / 
          <a href="<?php echo "index.php?act=detail_order&id=".$value['id_order']; ?>">Xem chi tiết</a> </td>
        </tr>
        <?php  endforeach ?>
      </table>
    </div>
  </div>
  <!-- /.content-wrapper -->