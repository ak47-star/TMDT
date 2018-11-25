<?php
$db['db_host']='localhost';
$db['db_user']='root';
$db['db_pass']='';
$db['db_name']='bandienthoai';

foreach ($db as $key => $value) {
	define(strtoupper($key),$value);
}
$conection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset( $conection,'utf8');
?>

<?php
$query="select * from dienthoai where MaDt=0 ";
include "load_data.php";
?>
  <div class="col-sm-8" id="col-8">
      <div class="row" style="margin-top: 10px;">
 			<div class="col-sm-3">
 				<div  class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id='0'" target="_bank"><img style="height: 189px;" id="img"  class="img-responsive"  src="img/ip632agb.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(vàng)"; ?></p>
 						<p style="color:red;width: 100px;margin-right: 0;border-right: 1px;"><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=1";
include "load_data.php";
?>
           <div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none; color: black;" href="detailproduct.php?id='1'" target="_bank" style="text-decoration: none;color:black;"><img style="height: 189px;width: 170px;" class="img-responsive"   src="img/ip7.jpg">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(đen)"; ?></p>
 						<p style="color:red;"><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div>		
 				</div></a>
 			</div>
<?php
$query="select * from dienthoai where MaDt=2";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none; color: black;" href="detailproduct.php?id=2" target="_bank"><img style="height: 189px;" class="img-responsive" id="img" src="img/<?php echo  $imge; ?>">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>

<?php
$query="select * from dienthoai where MaDt=3";
include "load_data.php";
?>

 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color:black;" href="detailproduct.php?id=3" target="_bank"><img style="height: 189px;"  class="img-responsive" id="img"  src="img/ipxs.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen Sẫm)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=4";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=4" target="_bank"><img style="height: 189px;" class="img-responsive" id="img"  src="img/ss1.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Nâu Xám)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>


<?php
$query="select * from dienthoai where MaDt=5";
include "load_data.php";
?>

 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color:black;" href="detailproduct.php?id=5" target="_bank"><img style="height: 189px;" class="img-responsive" id="img"  src="img/ss2.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Xanh dương)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>

<?php
$query="select * from dienthoai where MaDt=6";
include "load_data.php";
?>

 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=6" target="_bank"><img style="height: 189px;" class="img-responsive" id="img"  src="img/ss3.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen Tuyền)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>

<?php
$query="select * from dienthoai where MaDt=7";
include "load_data.php";
?>

 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=7" target="_bank"><img style="height: 189px;" class="img-responsive" id="img"  src="img/ss4.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Xanh dương)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>

<?php
$query="select * from dienthoai where MaDt=8";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=8" target="_bank"><img style="height: 189px;" class="img-responsive" id="img"  src="img/ss5.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div style="text-align: center;">
 						<p><?php echo $name_phone." "."(Đen vàng)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=9";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=9" target="_bank"><img style="height: 189px;" class="img-responsive" id="img"  src="img/opp1.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div style="text-align: center;">
 						<p><?php echo $name_phone." "."(Đỏ)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>

<?php
$query="select * from dienthoai where MaDt=10";
include "load_data.php";
?>

 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=10" target="_bank"href=""><img style="height: 189px;" class="img-responsive" id="img"  src="img/opp2.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Hồng Cam)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=11";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href=""><img style="height: 189px;" class="img-responsive" id="img" src="img/opp5.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=12";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=12" target="_bank"><img style="height: 189px;"  class="img-responsive" id="img"  src="img/bphone.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=13";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=13" target="_bank"><img style="height: 189px;"  class="img-responsive" id="img"  src="img/bphone1.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=14";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color: black;" href="detailproduct.php?id=14" target="_bank"><img  style="height: 189px;"  class="img-responsive" id="img"  src="img/bphone2.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
<?php
$query="select * from dienthoai where MaDt=15";
include "load_data.php";
?>
 			<div class="col-sm-3">
 				<div class=" thumbnail">
 					<a style="text-decoration: none;color:black;" href="detailproduct.php?id=15" target="_bank"><img style="height: 189px;"  class="img-responsive" id="img"  src="img/bphone3.png">
 					<div class="middle">
 						<div class="text">Click xem chi tiết</div>
 					</div>
 					<div>
 						<p><?php echo $name_phone." "."(Đen)"; ?></p>
 						<p style="color:red; "><?php echo number_format($price,0,',','.')." <small style='text-decoration:underline;font-size:10px;'>đ</small>"; ?></p>
 					</div></a>
 				</div>
 			</div>
 			<div class="col-sm-4">
 				
 			</div>
 	  </div>
   	</div>