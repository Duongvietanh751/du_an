

<div class="content-wrapper">
    <div class="formdanhmuc">
      <h1>Thêm Danh Mục</h1>
      <form action="#" method="POST">
        <div class="formdanhmuc_input">
          <label for="">Mã Loại</label>
          <input type="text" >
        </div>
        <div class="formdanhmuc_input">
          <label for="">Tên Loại</label>
          <input type="text" name="tenloai">
        </div>
        <input type="submit" value="Them" name="btnsub">
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
      <?php foreach ($ds_dm as $key => $value ):  extract($value)  ?>
        
        <tr>
          <td><?php echo $key +1 ?></td>
          <td><?php echo $value['name']; ?></td>
          <td><a href="">Sửa</a> / <a href="">Xóa</a></td>
        </tr>
      <?php endforeach ?>
      </table>
    </div>
  </div>
  <!-- /.content-wrapper -->
 