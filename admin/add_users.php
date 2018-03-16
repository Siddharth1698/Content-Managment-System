<?php 

if (isset($_POST['submit'])) {
	echo $_POST['submit'];
	
	                                        $user_id = $_POST['user_id'];
                                            $username = $_POST['username'];
                                             $user_password = $_POST['user_password'];
                                              $user_firstname = $_POST['user_firstname'];
                                               $user_image = $_FILES['user_image']['name'];
                                               $user_lastname = $_POST['user_lastname'];
                                                $user_email = $_POST['user_email'];
                                                $user_role = $_POST['user_role'];
                                                



        $query = "INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_image`, `user_lastname`, `user_email`, `user_role`, `user_status`) VALUES (' $user_id ', '$username', ' $user_password', '$user_firstname',  '$user_image', ' $user_lastname', '$user_email', '$user_role', 'unapproved')";            
      $add_user_admin = mysqli_query($connection,$query);                            
}

 ?>


<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
	<label for="user_id">user_id</label>
	<input type="number" class="form-control" name="user_id">
</div>	
<div class="form-group">
	<label for="username">username</label>
	<input type="text" class="form-control" name="username">
</div>
<div class="form-group">
	<label for="user_password">user_password</label>
	<input type="password" class="form-control" name="user_password">
</div>
<div class="form-group">
	<label for="post_author">user_firstname</label>
	<input type="text" class="form-control" name="user_firstname">
</div>
<div class="form-group">
	<label for="user_lastname">user_lastname</label>
	<input type="text" class="form-control" name="user_lastname">
</div>

<div class="form-group">
	<label for="user_image">user_image</label>
	<input type="file" class="form-control" name="user_image">
</div>

<div class="form-group">
	<label for="user_email">user_email</label>
	<input type="email" class="form-control" name="user_email">
</div>

<div class="form-group">
	<label for="user_role">role</label>
	<input type="text" class="form-control" name="user_role">
</div>

<div class="form-group">
	<input class="btn btn-danger" type="submit" name="submit" value="submit">
</div>
</form>