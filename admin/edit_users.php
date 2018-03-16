
<form action="" method="post" enctype="multipart/form-data">
<?php           

            if (isset($_GET['u_id'])) {
            	$the_user_id = $_GET['u_id'];
            }
        


                                        
                                        $query = "SELECT * FROM users WHERE user_id = {$the_user_id}";
                                        $select_users = mysqli_query($connection,$query);
                                       
                                       while ($row = mysqli_fetch_assoc($select_users)) {
                                           $user_id = $row['user_id'];
                                            $username = $row['username'];
                                           
                                              $user_firstname = $row['user_firstname'];
                                             
                                              $user_image = $row['user_image'];
                                                $user_lastname = $row['user_lastname'];
                                                $user_email = $row['user_email'];
                                                $user_role = $row['user_role'];
                                          



}
    $query = "SELECT * FROM catagories";
    $select_ca = mysqli_query($connection,$query);

 while ($row = mysqli_fetch_assoc($select_ca)) {
      $cat_title = $row['cat_title'];
                                        
}


 ?>

 <div class="form-group">
	<label for="username">username</label>
  <input value="<?php  if(isset($username)) {echo $username;} ?>" type="text" class="form-control" name="username">

</div>

<div class="form-group">
	<label for="user_firstname">user_firstname</label>
	<input value="<?php  if(isset($user_firstname)) {echo $user_firstname;} ?>" type="text" class="form-control" name="user_firstname">
</div>

<div class="form-group">
	<img width="300" height="300" src=" ../images/<?php echo $user_image; ?> " >
	<input value="<?php  if(isset($user_image)) {echo $user_image;} ?>" type="file" class="form-control" name="user_image">
</div>
<div class="form-group">
	<label for="user_lastname">user_lastname</label>
	<input value="<?php  if(isset($user_lastname)) {echo $user_lastname;} ?>" type="text" class="form-control" name="user_lastname">
</div>
<div class="form-group">
	<label for="user_email">user_email</label>
	<input value="<?php  if(isset($user_email )) {echo $user_email ;} ?>" type="text" class="form-control" name="user_email">
</div>

<div class="form-group">
	<label for="user_role">user_role</label>
	<input value="<?php  if(isset($user_role)) {echo $user_role;} ?>" type="text" class="form-control" name="user_role">
</div>
<div class="form-group">
	<input  class="btn btn-danger" type="submit" name="update" value="update">
</div>


<?php
  if (isset($_POST['update'])) {
      
                  
       
                                         
                                            $username = $_POST['username'];
                                           
                                              $user_firstname = $_POST['user_firstname'];
                                             

                                              $user_image = $_FILES['user_image']['name'];
                                              $post_image_temp = $_FILES['user_image']['temp_name'];

                                              

                                                $user_lastname = $_POST['user_lastname'];
                                                $user_email = $_POST['user_email'];
                                                $user_role = $_POST['user_role'];
                            
                              move_uploaded_file($post_image_temp, "../images/$user_image");

   

    if (empty($user_image)) {
	$query = "SELECT * FROM users WHERE user_id = $the_user_id";
    $select_image = mysqli_query($connection,$query);

     while ($row = mysqli_fetch_array($select_image)) {
               
                $user_image = $row['user_image'];
                    }}

$query = "UPDATE `users` SET username = '{$username}', user_firstname= '{$user_firstname}', user_lastname = '{$user_lastname}', user_image = '{$user_image}', user_email = '{$user_email}', user_role = '{$user_role}' WHERE `users`.`user_id` = '{$user_id}'";

             $select_cpost = mysqli_query($connection,$query);


 header("Location: users.php");
    }

?>
</form>