<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Xác nhận đặt hàng</title>
</head>
<body>
	<h1>{{$details['title']}}</h1>
	<h2>Thông xin khách hàng xác nhận như sau:</h2>
	<h3>Tên đặt bàn: {{$details['name']}}</h3>
	<h3>Số điện thoại: {{$details['phone']}}</h3>
	<h3>Số người: {{$details['no_of_guest']}}</h3>
	<h3>Loại bàn: {{$details['kind']}}</h3>
	<h3>Ngày: {{$details['date_res']}}</h3>
	<h3>Thời gian: {{$details['time']}}</h3>
	<h3>Nhân dịp: {{$details['occasion']}}</h3>	
	<h3>Ghi chú: {{$details['note']}}</h3>
	<p>------------------------------------------</p>
	<p></p>
	<h3>Cảm ơn quý khách!</h3><p></p>
	<i>Liên hệ với chúng tôi để biết thêm thông tin: 
	<p>Địa chỉ: 101 Mai Xuân Thưởng - Vĩnh Hòa - Nha Trang - Khánh Hòa
	<p>Số điện thoại: +84 393 572 241
	<p>Email: sushiworldrestaurant@gmail.com</p></i>

</body>
</html>