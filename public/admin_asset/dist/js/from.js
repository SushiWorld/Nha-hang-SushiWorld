function contact() {
    var hoten = document.myform.hoten.value;
    var sdt = document.myform.sdt.value;
    var email = document.myform.email.value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    var textarea = document.myform.textarea.value;
    var submit = document.myform.submit;

    if (hoten == "" || sdt == "" || email == "") {
        alert("Gửi không thành công ! Vui lòng nhập đầy đủ thông tin.");
        return;
    }
    if (hoten = Number(hoten)) {
        alert("Gửi không thành công ! Họ & Tên nhập không có kí tự số.");
        return;
    }
    if (isNaN(sdt)) {
        alert("Gửi không thành công ! Số điện thoại nhập vào phải là số.");
        return;
    }
    if (atposition < 1 || dotposition < (atposition + 2) ||
        (dotposition + 2) >= email.length) {
        alert("Gửi không thành công ! Vui lòng nhập đúng Email.");
        return;
    }
    if (textarea == "") {
        alert("Gửi không thành công ! Vui lòng viết gì đó cho chúng tôi.");
        return;
    }
    if (submit.click) {
        alert("Đơn liên hệ của quý khách đã được gửi thành công !");
    }
}

function success(){
    var submit = document.contactform.submit;
    
    if (submit.click) {
        Swal.fire(
            'ĐẶT BÀN THÀNH CÔNG !',
            '<b>Quý khách vui lòng chú ý:</b><br>Hãy đảm bảo rằng thông tin điền vào là chính xác.<br>Chúng tôi sẽ liên lạc lại để xác nhận. Xin cảm ơn !',
            'success'
          )
    }  
}