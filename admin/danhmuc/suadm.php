

<div class="content-wrapper">
<?php 
        if(is_array($dm)){
          extract($dm);
        }
?>
    <div class="formdanhmuc">
      <h1>Sửa Danh Mục</h1>
      <form action="#" onsubmit="return kiemtradanhmuc();" method="post"  >
        <div class="formdanhmuc_input">
          
            <input type="hidden" name="id" value="<?= $id ?>">
        </div>
       
        <div class="formdanhmuc_input">
       
            <label for="">Tên danh mục</label>
            <input type="text" name="tenloai" value="<?= $name?>">
        </div>
        <div id="thongbao" class="thongbao"></div>
        <div class="formdanhmuc_input">
            <input type="submit" value="Cập Nhật" name ="capnhat">
        </div>
      </form>
    </div>
  </div>