 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="listdanhmuc">
      <h1>Danh sách bình luận</h1>
      <table>
        <tr>
          <th>ID</th>
          <th>Nội dung</th>
          <th>Tên người bình luận</th>
          <th>Ngày bình luận</th>
          <th>Chức năng</th>
        </tr>
      <?php foreach($ds_bl as $key => $value): ?>
        <tr>
          <td><?php echo $value['id']; ?></td>
          <td><?php echo $value['noidung']; ?></td>
          <td><?php echo $value['user']; ?></td>
          <td><?php echo $value['ngaybinhluan']; ?></td>
          <td><a href="<?php echo "?act=xoabl&id=".$value['id']; ?>">Xóa</a></td>
        </tr>
        
        <?php endforeach ?>
      </table>
    </div>
  </div>
  <!-- /.content-wrapper -->