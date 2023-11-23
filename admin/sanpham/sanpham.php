<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="formdanhmuc">
      <h1>Thêm Sản Phẩm</h1>
      <form action=""  method=""  >
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
        <div id="thongbao" class="thongbao"></div>
        <button type="submit" class="button">Thêm</button>
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
            <th>Chức năng</th>
        </tr>
        <tr>
          <td>1</td>
          <td>GHế sofa</td>
          <td><img src="countdown.png" alt="" width="170px"></td>
          <td>5000.000 VND</td>
          <td>10</td>
          <td><a href="index.php?act=suasp">Sửa</a> / <a href="">Xóa</a></td>
        </tr>
      </table>
    </div>
  </div>
  <!-- /.content-wrapper -->