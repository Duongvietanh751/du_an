<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="formdanhmuc">
      <h1>Thêm Sản Phẩm</h1>
      <form action="#"  method="post" enctype="multipart/form-data" >
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
            <textarea name="desc"  cols="30" rows="10"></textarea>
        </div>
        <div class="formdanhmuc_input">
            <label for="">Danh mục</label>
            <input type="text" name="danhmuc">
        </div>
        <div id="thongbao" class="thongbao"></div>
        <input type="submit" class="button" name ="btnsub" value = "Thêm">
      </form>
    </div>
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
        <?php foreach ($ds_sp as $key => $value ):
         $suasp = "?act=suasp&id=".$value['id'];
         $xoasp = "?act=xoasp&id=".$value['id'];
          
          ?>
        <tr>
          <td><?php echo $value['id'] ?></td>
          <td><?php echo $value['name'] ?></td>
          <td><img src="<?php echo "../assets/images/".$value['img'] ?>" alt="" width="170px"></td>
          <td><?php echo $value['price'] ?></td>
          <td><?php echo $value['luotxem'] ?></td>
          <td><?php echo $value['iddm'] ?></td>
          <td><a href="<?php echo "?act=suasp&id=".$value['id']; ?>">Sửa</a> / 
          <a href="<?php echo "?act=xoasp&id=".$value['id']; ?>">Xóa</a></td>
        </tr>
        <?php  endforeach ?>
      </table>
    </div>
  </div>
  <!-- /.content-wrapper -->