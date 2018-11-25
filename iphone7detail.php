
<?php include 'includes\db.php';
  mysqli_set_charset($conection,'utf8');
 ?>


<?php
$query="select * from phone where ID_sp='ip_01' ";
include "includes\load_data.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chi tiết sản phẩm</title>
	<style type="text/css">
	*{
		box-sizing: border-box;
	}
	</style>
	<!-- Bootstrap Core CSS -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/moblie.css">
  <meta charset="utf-8">
  <style type="text/css">
  	body {margin:0;}
  	
    ul{
    	list-style: none;
    }
  </style>
</head>
<body>

 <header style="background-color:#2A426E; overflow: hidden;">

  <div  class="container-fluid">
  	<div  class="row">
  		<div class="col-lg-4">
  			<img  id="logo"  src="img/logo.jpg" alt="img">
  		</div>
  		
  		<div class="col-lg-4">
  		 <form style="padding-top: 25px;">
             <div class="input-group">
              <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm...">
              <div class="input-group-btn">
               <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
         </form>
  		</div>

  		<div class="col-lg-4">
         <ul style="display: block;overflow: hidden;padding-top: 25px; " class="list-group">

         	<li  style="display: inline;" >
         		<a  href="#" class="icon"><i class="far fa-envelope fa-3x"></i> Tin nhắn</a>
         	</li>

         	<li  style="display: inline;" >
         		<a class="icon" href="#"  > <i class="fa fa-atom fa-3x"></i> khuyến mãi</a>
         	</li>

         	<li style="display: inline;" >
         		<a href="cart.html" style="position: relative;"  class="icon" href="#"  ><i class="fa fa-shopping-cart fa-3x"></i><span id="cart" style="color: red;position: absolute;border-radius: 50%;padding:0px 4px;background-color: white;top:-35px;" class="noti">0</span> Giỏ hàng         
            </a>
         	</li>
         </ul> 			
  	    </div>
  	
  </div>
 </header>



	<div  class="row">
    <ul style="display:block;padding-left: 98px; padding-top: 10px;">
    	<li style="display: inline;">
    		<a href="index.php">Trang chủ</a><span> ></span>
    	</li>

         <li style="display: inline;">
    		<a href="index.php">Điện thoại</a><span> ></span>
    	</li>

    	<li  style="display: inline;">
    		<a href="#">Samsung</a>
    	</li>

    	<li style="list-style-type: none;" >
    		<h2><?php echo $name_phone; ?></h2>
    	</li>
    </ul>
    
 </div>

<div class="row">
	<div style="font-size: 20px;">
    <div>
      
    </div>
	</div>
</div>

<script type="text/javascript">
 
</script>

 <div class="container-fluid">
 	<div class="row">
 		<div style="padding-left: 100px;padding-top: 50px;padding-bottom: 80px;" class="col-lg-6">
 			<img class="img" style="width:300px;height: 300px;" class="image" src="img/ip632agb.png">
 		</div>
         
        
 		<div  style="width: 600px;" class="col-lg-6">
 			<div>
 				<form action="" method="POST">
 					<p style="color: red; font-size: 20px;"><?php echo number_format($price,0,',','.');  ?><small> đ</small> <button type="button" style="padding-left: 10px;margin-left: 20px;" class="btn btn-primary">Mua ngay</button> <a href="cart.php" target="_bank"><button id="btn" type="button" onclick="add_cart_ip7()" style="padding-left: 10px;margin-left: 20px;" class="btn btn-primary">Thêm vào giỏ hàng</button></a></p><hr>

 				</form>
 			</div>
 			<div>
 				<h1><?php echo $name_phone; ?></h1>
 			</div>
 			
 			<p>
 			Đặc điểm nổi bật của Samsung Galaxy Note 9
                   Bộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Bút cảm ứng, Cáp, Cây lấy sim, Ốp lưng, Adapter chuyển USB
                   Mang lại sự cải tiến đặc biệt trong cây bút S-Pen, siêu phẩm Samsung Galaxy Note 9 còn sở hữu dung lượng pin khủng lên tới 4.000 mAh cùng hiệu năng mạnh mẽ vượt bậc, xứng đáng là một trong những chiếc điện thoại cao cấp nhất của Samsung.
             </p>
 		</div>
 	</div>
 </div>

 <div class="container-fluid">
 	<div class="row">
 		<div class="col-lg-6" style="padding-left: 70px;" >
 			<h2 style="margin:0;">Đặc điểm nổi bật của Samsung Galaxy Note 9</h2>
            <hr>
 			<div id="myCarousel" class="carousel slide" data-ride="carousel">
 				
 				 <div class="carousel-inner">
    <div class="item active">
      <img src="img/-samsung-galaxy-note-9-thietke.gif" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="img/vi-vn-samsung-galaxy-note-9-carbon.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="img/vi-vn-samsung-galaxy-note-9-spen-1.jpg" alt="New York">
    </div>

     <div class="item">
      <img src="img/vi-vn-samsung-galaxy-note-9-spen-2.jpg" alt="New York">
    </div>

     <div class="item">
      <img src="img/samsung-galaxy-note-9-bo-ban-hang-1-org.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

        <ol class="carousel-indicators">
 					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
 		</ol>

 			</div>

 			<div>
 				<h3>Sau nhiều thông tin rò rỉ thì <a href="">Samsung Galaxy J8</a> đã chính thức được ra mắt với nhiều trang bị cao cấp với màn hình tràn viền, camera kép xóa phông cùng một hiệu năng ổn định.</h3>
 				<hr>
 				<h3>Camera kép xóa phông nổi bật vật thể</h3>

 				<div style="text-align: center;" class="image">
 					<img style="width: 600px;" src="img/camerass.jpg">
 					<div >
 						Cụm camera kép đặt dọc ở mặt sau 
 					</div>
 					
 						<p style="padding-top: 10px;margin: 0">Để đánh dấu sự vượt trội về khả năng chụp ảnh của mình thì hệ thống camera kép với độ phân giải 16 MP và 5 MP cũng đã có mặt trên Samsung J8 hỗ trợ khả năng xóa phông ảo diệu.
 						</p>

 					   <div class="image">
 					   	 <img style="width: 600px;" src="img/samsungss1.jpg">
 					   </div>
 					   <div>
 					   	Hình ảnh xoá phông chụp từ Galaxy J8
 					   </div>

 					   <p style="padding-top: 10px;">
 					   	Nhờ các tính năng chụp ảnh chuyên nghiệp đi kèm giúp máy cho ra những bức ảnh chụp khá ấn tượng với độ sáng cao, màu sắc trong trẻo nhưng không kém phần rực 
 					   </p>
 				</div>


 			</div>
 		</div>

 		<div  class="col-lg-6" style="padding-left: 150px; ">
 			<h2 style="margin:0">Thông số kĩ thuật</h2><hr>
 				
                <div class="row">
                	<div class="col-lg-3">
                		Hệ điều hành:
                	</div>

                	<div class="col-lg-3">
                		<a href="">	Android 8.1 (Oreo)</a>
                	</div>
                </div><hr style="width: 500px;margin-right:200px;">

                <div class="row">
                	<div class="col-lg-3">
                	   Camera sau:
                	</div>

                	<div class="col-lg-3">
                	2 camera 12 MP
                	</div>
                </div><hr>

                 <div class="row">
                	<div class="col-lg-3">
                	   Camera trước:
                	</div>

                	<div class="col-lg-3">
                	  8 MP
                	</div>
                </div><hr>

                <div class="row">
                	<div class="col-lg-3">
                	   Cpu:
                	</div>

                	<div class="col-lg-3">
                	  <a href="#">Exynos 9810 8 nhân 64 bit</a>
                	</div>
                </div><hr>

                <div class="row">
                	<div class="col-lg-3">
                	   Ram:
                	</div>

                	<div class="col-lg-3">
                	  6 GB
                	</div>
                </div><hr>

                <div class="row">
                	<div class="col-lg-3">
                	   Bộ nhớ trong:
                	</div>

                	<div class="col-lg-3">
                	  	128 GB
                	</div>
                </div><hr>

                <div class="row">
                	<div class="col-lg-3">
                	   Dung lượng pin;
                	</div>

                	<div class="col-lg-3">
                	  		4000 mAh, có sạc nhanh
                	</div>
                </div><hr style="width: auto;">

 				<button type="button" class="btn btn-primary">Thông tin chi tiết</button>

                
                <div class="row">
                	<h3>Tin tức về Samsung Galaxy J8</h3>
 				<ul>
 					<li style="float: left;display: list-item;margin: 0;text-decoration: none;">
 						<a href="#" style="text-decoration: none;"><img style="width: 100px;height: 60px; float: left;" src="img/1_800x450.jpg"><h4 style="padding-left: 10px;margin-bottom: 30px;"> Những lý do nên chọn mua Galaxy J8, smartphone tầm trung từ Samsung</h4></a>
 					</li>

 					<li style="float: left;display: list-item;margin: 0;">
 						<a href="#" style="text-decoration: none;"><img style="width: 100px;height: 60px; float: left;" src="img/2.jpg"><h4 style="padding-left: 10px;margin-bottom: 30px;"> Samsung sẽ mang các tính năng cao cấp lên smartphone tầm trung ở Ấn Độ</h4></a>
 					</li>

 					<li style="float: left;display: list-item;margin: 0;">
 						<a href="#" style="text-decoration: none;"><img style="width: 100px;height: 60px; float: left;" src="img/3.jpg"><h4 style="padding-left: 10px;margin-bottom: 30px;"> Cách mua Galaxy A6 giảm 500k, Galaxy J8 giảm 600k với Quà tặng Galaxy</h4></a>
 					</li>
 				</ul>
                </div>

                <div class="row" style="margin-top: 50px;">
                	<h3>Hướng dẫn sử dụng Samsung Galaxy J8</h3>
 				<ul>
 					<li style="float: left;display: list-item;margin: 0;text-decoration: none;">
 						<a href="#" style="text-decoration: none;"><img style="width: 100px;height: 60px; float: left;" src="img/1_800x450.jpg"><h4 style="padding-left: 10px;margin-bottom: 30px;"> Không thể kết nối được Wifi trên Samsung Galaxy Note 9</h4></a>
 					</li>

 					<li style="float: left;display: list-item;margin: 0;">
 						<a href="#" style="text-decoration: none;"><img style="width: 100px;height: 60px; float: left;" src="img/2.jpg"><h4 style="padding-left: 10px;margin-bottom: 30px;"> Hướng dẫn quét mống mắt trên Samsung Galaxy Note 9</h4></a>
 					</li>

 					<li style="float: left;display: list-item;margin: 0;">
 						<a href="#" style="text-decoration: none;"><img style="width: 100px;height: 60px; float: left;" src="img/3.jpg"><h4 style="padding-left: 10px;margin-bottom: 30px;"> Tạo ảnh gif trên Samsung Galaxy Note 9</h4></a>
 					</li>
 				</ul>
                </div>
 				
              					
 		</div>

 	</div>
 </div>
<hr>
<footer>
	<div class="container-fluid">
		<div class="col-lg-3">
			<ul>
				<li><a href="">Tìm hiểu về mua trả góp</a></li>
				<li><a href="">Chính sách bảo hành</a></li>
				<li><a href="">Chính sách bảo hành</a></li>
				<li><a href="">Giao hàng & Thanh toán</a></li>
			</ul>
		</div>

		<div class="col-lg-3">
			<ul>
				<li><a href="">Giới thiệu sản phẩm</a></li>
				<li><a href="">Tuyển dụng</a></li>
				<li><a href="">Gửi góp ý,khiếu nại</a></li>
				<li><a href="">Tìm siêu thị</a></li>
			</ul>
		</div>

		<div class="col-lg-3">
			<ul>
				<li><a href="">Gọi mua hàng 1800.1060 (7:30 - 22:00</a></li>
				<li><a href="">Gọi khiếu nại 1800.1062 (8:00 - 21:30)</a></li>
				<li><a href="">Gọi bảo hành 1800.1064 (8:00 - 21:00)</a></li>
				<li><a href="">Hỗ trợ kỹ thuật 1800.1763 (7:30 - 22:00)</a></li>
			</ul>
		</div>

		<div class="col-lg-3">
			<ul>
				<li><a href="#"><img src=""></a></li>
				<li><a href="#"><img src=""></a></li>
				<li><a href="#"><img src=""></a></li>
				<li><a href="#"><img src=""></a></li>
			</ul>
		</div>
	</div>
</footer>

</body>
</html>

<script type="text/javascript">
 function add_cart_ip7() {
  localStorage.setItem("name_ip7","block");
 }
</script>