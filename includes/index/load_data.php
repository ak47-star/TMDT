
<?php
$select_all_phones=mysqli_query($conection,$query);
while ($row=mysqli_fetch_assoc($select_all_phones)) {
   	$id=$row['MaDt'];
	$name_phone=$row['TenDT'];
    $descripition=$row['MoTaDT'];
    $price=$row['Gia'];
    $size=$row['kichthuoc'];
    $weight=$row['Trongluong'];
    $imge=$row['AnhSp'];
    $os=$row['Hedieuhanh']; 
}
?>