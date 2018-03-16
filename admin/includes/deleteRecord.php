<?php include "../catagories.php";
 
 $query = "DELETE FROM catagories WHERE cat_id = '$cat_id'";
 $select_catz = mysqli_query($connection,$query);


 ?>