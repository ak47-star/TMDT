 <?php include "includes/db.php";
mysqli_set_charset( $conection,'utf8'); 
 ?>

<?php session_start(); ?>

<?php
 /* $query="select * from phone";
 $select_query_all=mysqli_query($conection,$query);

 while ($row=mysqli_fetch_assoc($select_query_all)) {
   $name=$row['Name_sp'];
   $price=$row['price'];
   $_SESSION['name']=$row['Name_sp'];
   $_SESSION['price']=$row['price'];
 }*/
?>

<?php ?>

 <section>
<h2>Thông tin giỏ hàng</h2>
  	<div class="main">
   		
   		<div class="header-cart">
   			<h3 class="pro">
   				Sản Phẩm
   			</h3>

   			<h3 class="Qua">
   				Số Lượng
   			</h3>

   			<h3 class="Pri">
   				Giá
   			</h3>
   		</div>

     
   	
   	<div  class="container-fluid">

   		<div style="padding-top: 20px;" class="row">
   			<div class="col-lg-2">
   				<img class="" src="img\ss1.png">
   			</div>

   			<div class="col-lg-5">
   				<h4><?php echo $name_phone; ?></h4>
   			</div>

   			<div class="col-lg-2">
   				<h4 id="h4"><?php echo "{$price}"; ?></h4>
   			</div>

   			<div class="col-lg-2">
   				<form>
   					<input id="number" style="text-align: center;" type="number" name="" min="1" max="10" value="0">
   				</form>		
   			</div>

   			<div class="col-lg-1">
   				<i onclick="sumPrice()" style="padding:5px;" class="fas fa-times"></i>
   				<i class="fas fa-plus"></i>
   			</div>

   		</div><hr>

   		<!--<div class="row">
   			<div class="col-lg-2">
   				<img class="" src="img\ss1.png">
   			</div>

   			<div class="col-lg-5">
   				<h4>some thing like that</h4>
   			</div>

   			<div class="col-lg-2">
   				<h4>40 $</h4>
   			</div>

   			<div class="col-lg-2">
   				<form>
   					<input  type="number" name="" min="1" max="10" value="0">
   				</form>		
   			</div>

   			<div class="col-lg-1">
   				<i style="padding: 5px;" class="fas fa-times"></i>
   				<i class="fas fa-plus"></i>
   			</div>
   		</div><hr>


   		<div class="row">
   			<div class="col-lg-2">
   				<img class="" src="img\ss1.png">
   			</div>

   			<div class="col-lg-5">
   				<h4>some thing like that</h4>
   			</div>

   			<div class="col-lg-2">
   				<h4>40 $</h4>
   			</div>

   			<div class="col-lg-2">
   				<form>
   					<input  type="number" name="" min="1" max="10" value="0">
   				</form>		
   			</div>

   			<div class="col-lg-1">
   				<i style="padding: 5px;" class="fas fa-times"></i>
   				<i class="fas fa-plus"></i>
   			</div>
   		</div><hr>

   		<div class="row">
   			<div class="col-lg-2">
   				<img class="" src="img\ss1.png">
   			</div>

   			<div class="col-lg-5">
   				<h4>some thing like that</h4>
   			</div>

   			<div class="col-lg-2">
   				<h4>40 $</h4>
   			</div>

   			<div class="col-lg-2">
   				<form>
   					<input type="number" name="" min="1" max="10" value="0">
   				</form>			
   			</div>

   			<div class="col-lg-1">
   				<i style="padding:5px;" class="fas fa-times"></i>
   				<i class="fas fa-plus"></i>
   			</div>
   		</div><hr>

   		<div class="row">
   			<div class="col-lg-2">
   				<img class="" src="img\ss1.png">
   			</div>

   			<div class="col-lg-5">
   				<h4>some thing like that</h4>
   			</div>

   			<div class="col-lg-2">
   				<h4>40 $</h4>
   			</div>

   			<div class="col-lg-2">
   				<form>
   					<input  type="number" name="" min="1" max="10" value="1">
   				</form>		
   			</div>

   			<div class="col-lg-1">
   				<i style="padding:5px;" class="fas fa-times"></i>
   				<i class="fas fa-plus"></i>
   			</div>
   		</div>
   	</div>-->

   	<div class="header-cart">
   			<h3 class="pro">
   				Tổng Giá
   			</h3>

   			<h3 id="sumprice" style="color: red;" class="Qua">
   				40.000.000 đ
   			</h3>
   		</div>
   </section>

   <script type="text/javascript">

        function sumPrice(){
         var x=document.getElementById('number').value;
         var y=document.getElementById('h4').innerHTML;
         var z=(x*y)
         document.getElementById('sumprice').innerHTML=z;
      }
   </script>