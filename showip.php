<?php include 'includes/index/db.php'; ?>

<?php
$query="select * from  danhmucsp INNER JOIN dienthoai on danhmucsp.idDM=dienthoai.idDM  where danhmucsp.idDM={$_GET['id']}";
include 'includes/index/load_data.php';
foreach ($select_all_phones as $key=>$value) {
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>kết quả tìm kiếm iphone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ip.css">
    <link rel="stylesheet" type="text/css" href="css/moblie.css">
    
</head>

<body>


  <nav style="width: 1409px; height: 55px; border-bottom: solid 1px #123d82;" id="nv-bar" class="navbar navbar-inverse ">
    <div style="height: 55px;" class="navbar-header col-sm-4">
    <a href="#" ><img id="logo" style="height: 84px;"  src="img/logo.jpg" alt="img"></a>
    </div>
    <div class="col-sm-4" style="padding: 25px;">
    <!--<input class="form-control" style="height: 40px;width: 300px;"  type="text" name="" placeholder=" tìm kiếm sản phẩm...">
    <button class="btn btn-primary" style="height: 40px;width: 70px;">Search</button>-->
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

    <a class="icon" href="#"><i class="far fa-envelope fa-3x"></i> Tin nhắn</a>
    
    
    <a style="padding-left: 10px;" class="icon" href="#"  > <i class="fa fa-atom fa-3x"></i>  khuyến mãi</a>
    
    <a  class="icon" href="#"  ><i class="fa fa-shopping-cart fa-3x"></i> Giỏ hàng</a>
    </div>
  </nav>

<div style="max-width: 1200px;min-width: 1024px;margin: auto ;padding-top: 5px;" class="black">
    <a href="index.php"><i class="fa fa-home"></i> Trang chủ</a> >
    <a href="">Iphone</a>
</div>


<section style="background-color: #E3E2E2;margin-top: 30px;">
 <aside class="left-search">
  <h2 style="padding-left: 20px;font-size: 20px;">Tìm thấy 69 sản phẩm</h2>

  <ul class="list-search">

    <?php foreach ($select_all_phones as $key => $value): ?>
        <li class="cat42">
      <label class="tagicon">Trả góp 0%</label>
      <a href="#">
        <img  style="height: 120px;width: 120px;" src="img/ss6.png">
         <h3><?php echo $value['TenDT']; ?></h3>
        <strong><?php echo $value['Gia']; ?></strong>
      </a>

      <figure class="bginfo">
        <h3><?php echo $value['TenDT']; ?></h3>
        <strong style="margin-left: 5px;padding: 6px 2px;"><?php echo $value['Gia']; ?> đ</strong>
        <span>Màn hình:<?php echo $value['kichthuoc']; ?></span>
        <span><?php echo $value['Hedieuhanh']; ?></span>
        <span>CPU:Apple A8 2 nhân 64 bit</span>
        <span><?php echo $value['BoNho']; ?>,ROM:32 GB</span>
        <span>Camera:<?php echo $value['CameraTr']; ?></span>
        <span>PIN:<?php echo $value['Pin']; ?></span>
      </figure>
    </li>
    <?php endforeach ?>
  
  
  </ul>
  <a href="" class="viewmore">
    Còn 59 sản phẩm
    <span></span>
  </a>
 </aside>

<aside class="aside-left">
  <h3 style="padding-top: 30px;">Phụ kiện đi kèm</h3>
  <ul class="list-right">
    <div class="box_right">
    <li>
      <a href="#">
        <img height="50" src="img/phukien1.jpg">
        <h3>Ôp lưng iphone 6-6s Nhựa Chi-s sweet home</h3>
        <strong>30.000đ</strong>
        <span></span>
      </a>
    </li>

    <li>
      <a href="#">
        <img height="50" src="img/phukien1.jpg">
        <h3>Ôp lưng iphone 6-6s Nhựa Chi-s sweet home</h3>
        <strong>30.000đ</strong>
        <span></span>
      </a>
    </li>


    <li>
      <a href="#">
        <img height="50" src="img/phukien1.jpg">
        <h3>Ôp lưng iphone 6-6s Nhựa Chi-s sweet home</h3>
        <strong>30.000đ</strong>
        <span></span>
      </a>
    </li>


    <li>
      <a href="#">
        <img height="50" src="img/phukien1.jpg">
        <h3>Ôp lưng iphone 6-6s Nhựa Chi-s sweet home</h3>
        <strong>30.000đ</strong>
        <span></span>
      </a>
    </li>

        <li>
      <a href="#" style="float: right;text-decoration: none;cursor: pointer;">
        Xem thêm phụ kiện
        <span></span>
      </a>
        </li>

    </div>

    <div class="box_right">
      <h3>Các sản phẩm đã sử dụng</h3>
      <ul style="margin-top: 10px;" class="list-right">
        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>

        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>


        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>


        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>


        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>


        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>

        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/iphone-x.jpg">
            <h3>Iphone x 256GB đã qua sử dụng</h3>
            <strong>20.102.000 đ</strong>
            <span>(đã khuyến mãi)</span>
          </a>
        </li>

        <li>
         <a style="display: block;float: right;" href="#">
        Xem thêm máy đã qua sử dụng
      </a>
      </li>
      </ul>

    </div>

    <div class="box_right">
      <h3>Thông tin liên quan</h3>
      <ul style="margin-top: 10px;" class="list-right">
        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/xr_800.jpg">
            <h3>Ming-Chi Kuo: Nhu cầu đặt hàng iPhone XR cao, lượng hàng dồi dào</h3>
          </a>
        </li>

        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/xr_800.jpg">
            <h3>Ming-Chi Kuo: Nhu cầu đặt hàng iPhone XR cao, lượng hàng dồi dào</h3>
          </a>
        </li>


        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/xr_800.jpg">
            <h3>Ming-Chi Kuo: Nhu cầu đặt hàng iPhone XR cao, lượng hàng dồi dào</h3>
          </a>
        </li>


        <li>
          <a style="text-decoration: none;" href="#">
            <img src="img/xr_800.jpg">
            <h3>Ming-Chi Kuo: Nhu cầu đặt hàng iPhone XR cao, lượng hàng dồi dào</h3>
          </a>
        </li>
      </ul>
    </div>
  </ul>
</aside>

</section>

<footer>
    

<div class="row" id="row-footer"  >
    <div class="col-sm-3" id="row-col-sm-3">
      <h5>Hỗ trợ khách hàng</h5>
      <p><a id="col-sm-3-a" href="">Thẻ ưu đãi</a></p>
      <p><a id="col-sm-3-a" href="">Phiếu mua hàng</a></p>
      <p><a id="col-sm-3-a" href="">Trung tâm bảo hành</a></p>
    </div>

    <div class="col-sm-3" id="col-sm-3-footer" >
      <h5>Chính sách mua hàng và bảo hành</h5>
      <p><a id="col-sm-3-a" href="">Thẻ ưu đãi</a></p>
      <p><a id="col-sm-3-a" href="">Phiếu mua hàng</a></p>
      <p><a id="col-sm-3-a" href="">Trung tâm bảo hành</a></p>
      
    </div>

    <div class="col-sm-3" id="col-sm-3-footer">
      <h5>Hỗ trợ khách hàng</h5>
      <p><a id="col-sm-3-a" href="">Thẻ ưu đãi</a></p>
      <p><a id="col-sm-3-a" href="">Phiếu mua hàng</a></p>
      <p><a id="col-sm-3-a" href="">Trung tâm bảo hành</a></p> 
    </div>

    <div class="col-sm-3" id="col-sm-3-footer"">
      <h5>Hỗ trợ khách hàng</h5>
      <p><a id="col-sm-3-a" href="">Facebook</a></p>
      <p><a id="col-sm-3-a" href="">Twiter</a></p>
      <p><a id="col-sm-3-a" href="">Youtube</a></p>  
    </div>
     
  </footer>

</body>
</html>
