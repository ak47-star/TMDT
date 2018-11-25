
<?php
 $query="select * from phone";
 $select_query_all=mysqli_query($conection,$query);
 while ($row=mysqli_fetch_assoc($select_query_all)) {
   $_SESSION['name']=$row['Name_sp'];
   $_SESSION['price']=$row['price'];
 }?>