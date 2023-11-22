function kiemtra(){
    var tennd = document.getElementById("tennd");
    var thongbao = document.getElementById("thongbao");

    if (tennd.value.length <= 6) {
        thongbao.innerHTML = "Tên người dùng phải lớn hơn 6 ký tự!";
        return false;
    }

    thongbao.innerHTML = "Đăng ký thành công!";
            return false;
}
function kiemtradanhmuc(){
    var tenloai = document.getElementById("tenloai");
    var thongbao = document.getElementById("thongbao");
    
    if (tenloai.value.length <= 6) {
        thongbao.innerHTML = "Tên sản phẩm phải lớn hơn 6 ký tự!";
        return false;
    }

    thongbao.innerHTML = "Thêm Danh Mục Thành Công!";
            return false;
}