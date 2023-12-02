<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="formdanhmuc">
    <h1>Thêm Sản Phẩm</h1>
    <form action="index.php?act=sanpham" method="post" enctype="multipart/form-data">
      <div class="formdanhmuc_input">
        <label for="">Danh mục</label>
        <select name="iddm">
          <?php
          foreach ($ds_dm as $danhmucc) {
            extract($danhmucc);
            echo '<option value="' . $id . '">' . $name . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="formdanhmuc_input">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="name_sanpham" id="tennd">
      </div>
      <div class="formdanhmuc_input">
        <label for="">Giá sản phẩm</label>
        <input type="text" name="price">
      </div>
      <div class="formdanhmuc_input">
        <label for="">Hình Ảnh</label>
        <input type="file" name="img">
      </div>
      <div class="formdanhmuc_input">
        <label for="">Mô tả</label>
        <textarea name="desc" cols="30" rows="10"></textarea>
      </div>
      <div id="thongbao" class="thongbao"></div>
      <input type="submit" class="button" name="btnsub" value="Thêm">
    </form>
  </div>
  <form action="?act=sanpham" method="POST">
           <div class="row2 mb10 formds_loai">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" name="keyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach($ds_dm as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>' ;
                    }
                    ?>
           </select>
           <input type="submit" name="btn" value="GO">
            </form>
  <div class="listdanhmuc">
    <h1>Danh sách sản phẩm</h1>
    <table>
      <tr>
        <th>Mã loại</th>
        <th>Tên sản phẩm</th>
        <th>Hình</th>
        <th>Giá</th>
        <th>Lượt xem</th>
        <th>Danh mục</th>
        <th>Chức năng</th>
      </tr>
      <?php foreach ($listsanpham as $key => $value) :
      extract($value);
        $suasp = "index.php?act=suasp&id=" . $value['id'];
        $xoasp = "index.php?act=xoasp&id=" . $value['id'];
      ?>
        <tr>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['name'] ?></td>
          <td><img src="<?php echo "../upload/" . $value['img'] ?>" width="170px"></td>
          <td><?php echo $value['price'] ?></td>
          <td><?php echo $value['luotxem'] ?></td>
          <td><?php echo $value['iddm'] ?></td>
          <td><a href="<?php echo "index.php?act=suasp&id=" . $value['id']; ?>">Sửa</a> /
            <a href="<?php echo "index.php?act=xoasp&id=" . $value['id']; ?>">Xóa</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>
<!-- /.content-wrapper -->