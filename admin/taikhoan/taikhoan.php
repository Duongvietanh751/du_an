<div class="content-wrapper">
    <div class="listdanhmuc">
      <h1>Danh sách tài khoản</h1>
      <table>
      
        <tr>
          <th>ID</th>
          <th>Tên tài khoản</th>
          <th>Mật khẩu</th>
          <th>Email</th>
          <th>Address</th>
          <th>Tel</th>
          <th>Role</th>
          <th>Funtion</th>
        </tr>
        <?php foreach($ds_tk as $key => $value):
        extract($value);
        $xoatk = "?act=xoatk&id=".$id; ?>
        <tr>
          <td><?php echo $value['id'];?></td>
          <td><?php echo $value['user'];?></td>
          <td><?php echo $value['pass'];?></td>
          <td><?php echo $value['email'];?></td>
          <td><?php echo $value['address'];?></td>
          <td><?php echo $value['tel'];?></td>
          <td><?php echo $value['role'];?></td>
          <td><a href="<?php echo "?act=xoatk&id=".$id;?>">Xóa</a></td>
        </tr>
        <?php endforeach ?>
      </table>
    </div>
  </div>