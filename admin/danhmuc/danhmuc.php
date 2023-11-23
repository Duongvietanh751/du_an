

<div class="content-wrapper">
    <div class="formdanhmuc">
      <h1>Thêm Danh Mục</h1>
      <form action="#" method="POST" onsubmit="return kiemtradanhmuc();" >
        <div class="formdanhmuc_input">
          <label for="">Mã Loại</label>
          <input type="text" >
        </div>
        <div class="formdanhmuc_input">
          <label for="">Tên Loại</label>
          <input type="text" name="tenloai">
        </div>
        <div class="formdanhmuc_input">
        <div id="thongbao" class="thongbao"></div>
        </div>
        <div class="formdanhmuc_input">
        <input  type="submit" value="THÊM" name="btnsub">
        </div>
      </form>
    </div>
    <div class="listdanhmuc">
      <h1>Danh sách danh mục</h1>
      <table>
        <tr>
          <th>ID</th>
          <th>Tên danh mục</th>
          <th>Chức năng</th>
        </tr>
      <?php foreach ($ds_dm as $key => $value ):  extract($value);
       $suadm = "?act=suadm&id=".$id;
       $xoadm = "?act=xoadm&id=".$id;  ?>
        
        <tr>
          <td><?php echo $key +1 ?></td>
          <td><?php echo $value['name']; ?></td>
          <td><a href=<?php echo "'.$suadm.'" ?>.id;>Sửa</a> / <a href=<?php echo "'.$xoadm.'" ?>.id;>Xóa</a></td>
        </tr>
      <?php endforeach ?>
      </table>
    </div>
  </div>
  <!-- /.content-wrapper -->
 