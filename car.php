
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Giỏ hàng</title>
	<link rel="stylesheet" type="text/css" href="css\cart.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/moblie.css">
  <link rel="stylesheet" type="text/css" href="css/newcart.css">
  <meta charset="utf-8">
</head>
<body  >
  
  <div>
  <nav id="nv-bar" class="navbar navbar-inverse ">
    <div class="navbar-header col-sm-4">
    <a href="index.php" ><img id="logo"  src="img/logo.jpg" alt="img"></a>
    </div>
    <div class="col-sm-4" style="padding: 25px;">
    
    <form>
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm...">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
    </div>

    <div id="nk-menu" class="col-sm-4" >

    <a style="text-decoration: none;" class="icon" href="#"><i class="far fa-envelope fa-3x"></i> Tin nhắn</a>
    
    
    <a style="padding-left: 10px;text-decoration: none;" class="icon" href="#"  > <i class="fa fa-atom fa-3x"></i> khuyến mãi</a>
    
    <a href="cart.html" style="text-decoration: none;" class="icon" href="#"  ><i class="fa fa-shopping-cart fa-3x"></i> Giỏ hàng</a>
    </div>
  </nav>
</div>

<section id="wrap_cart">
    <div class="top_cart">
      <a href="index.php" class="buymore"><- Quay lại</a>  
    </div>
     
    <div class="main_cart">
      <div class="img">
        <a href="#">
          <img width="55" src="img/bphone.png">
        </a>
      </div>

      <div class="colinfor">
        <strong>29.000.000 đ</strong>
        <a style="color:white;" href="#">iphone xr-64GB</a>
        <div class="list_color">
          <form action="/">
            <select name="color">
              <option value="volvo">Trắng</option>
              <option value="saab">Đen</option>
              <option value="fiat">Vàng</option>
              <option value="audi">Đỏ</option>
            </select>
          </form>
        </div>
      </div>
    </div>
    
    <div class="contact"> 
      
         <div class="infor-left">
            <h3 style="padding-top: 10px;text-align: center;">Điền thông tin mua hàng</h3>
          </div>

          <form>
          <div class="infor-left">
            <input class="input-name" type="text" name="customername" placeholder=" Nhập họ tên">
          </div>
           
        
          <div class="infor-left">
            <input class="input-name" type="text" name="customername" placeholder=" Email">
          </div>

          <div class="infor-left">
            <input class="input-name" type="text" name="customername" placeholder=" Địa chỉ">
          </div>

           <div class="infor-left">
            <input class="input-numberphone" type="text" name="phonenumber" placeholder=" Số điện thoại">
          </div>

           <div class="infor-left">
            <input style="background-color: #B06820;color: white;font-size: 16px;text-align: center;" class="input-numberphone" type="submit" name="phonenumber" value=" Mua sản phẩm">
          </div>

          </form>
         

           <div class="infor-left">
            <h3 style="padding-top: 10px;text-align: center;">Phương thức thanh toán</h3>
          </div>

          
        
          <div class="left">
            <a class="left-pay" href="#">
              Trả khi nhận hàng
            </a>
          </div>
          
          <div class="right">
            <a class="right-pay" href="#">
              Thanh toán qua thẻ
            </a>
          </div>
    </div>

    <div class="endcart">
      
    </div>
</section>

</body>
</html>


