<div class="content-wrapper">
    <div class="formdanhmuc">
      <h1>Sửa Sản Phẩm</h1>
      <form action="" onsubmit="return kiemtra();" method=""  >
        <div class="formdanhmuc_input">
            <label for="">Danh mục</label>
            <select name="" id="">
                <option value="">Tất cả</option>
                <option value="">Ghế</option>
                <option value="">Tủ</option>
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
            <textarea name="desc"  cols="30" rows="10"></textarea>
        </div>
        <div id="thongbao" class="thongbao"></div>
        <div class="formdanhmuc_input">
            <input type="submit" value="Cập Nhật">
        </div>
      </form>
    </div>
  </div>