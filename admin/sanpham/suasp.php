<div class="content-wrapper">
    <div class="formdanhmuc">
      <h1>Sửa Sản Phẩm</h1>
     <form action="#" method="post" enctype="multipart/form-data"  >
      <?php
          if(is_array($sp)){
            extract($sp);
          }
?>
        <div class="formdanhmuc_input">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name_sanpham" id="tennd" value="<?=$name ?>">
        </div>
        <div class="formdanhmuc_input">
            <label for="">Giá sản phẩm</label>
            <input type="text" name="price" value="<?=$price ?>">
        </div>
        <div class="formdanhmuc_input">
            <label for="">Hình Ảnh</label>
            <input type="file" name="img" value="<?=$img ?>">
        </div>
        <div class="formdanhmuc_input">
            <label for="">Mô tả</label>
            <textarea name="desc"  cols="30" rows="10" value="<?=$mota ?>"></textarea>
        </div>
        <div id="thongbao" class="thongbao"></div>
        <div class="formdanhmuc_input">
            <input type="submit" value="Cập Nhật" name="capnhat">
        </div>
      </form>
    </div>
  </div>