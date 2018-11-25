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
  <meta charset="utf-8">
</head>
<body background="red;">
  <header>
  	<div>
	<nav id="nv-bar" class="navbar navbar-inverse ">
		<div class="navbar-header col-sm-4">
		<a href="#" ><img id="logo"  src="img/logo.jpg" alt="img"></a>
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
		
		<!--<a style="text-decoration: none;" class="icon" href="#"  ><i class="fa fa-shopping-cart fa-3x"></i> Giỏ hàng</a>-->
			
         <a href="cart.html" style="position: relative;"  class="icon" href="#"  ><i class="fa fa-shopping-cart fa-3x"></i><span id="cart" style="color: red;position: absolute;border-radius: 50%;padding:0px 4px;background-color: white;top:-35px;" class="noti">0</span> Giỏ hàng         
        </a>     	
		</div>
	</nav>
</div>