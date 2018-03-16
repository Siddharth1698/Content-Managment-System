<?php 

if (isset($_POST['submit'])) {
	echo $_POST['submit'];
	
	                                        $post_id = $_POST['post_id'];
                                            $post_catagory_id = $_POST['post_catagory_id'];
                                             $post_title = $_POST['post_title'];
                                              $post_author = $_POST['post_author'];
                                              $post_date = date('d-m-y');

                                              $post_image = $_FILES['post_image']['name'];
                                              

                                                $post_content = $_POST['post_content'];
                                                $post_tags = $_POST['post_tags'];
                                                $post_status = $_POST['post_status'];



        $query = "INSERT INTO `posts` (`post_id`, `post_catagory_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_status`) VALUES (' $post_id ', '$post_catagory_id', ' $post_title', '   $post_author', now(), '$post_image', ' $post_content', '$post_tags', '$post_status')";            
        
         $add_post_admin = mysqli_query($connection,$query);                            
}

 ?>


<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
	<label for="post_id">post_id</label>
	<input type="number" class="form-control" name="post_id">
</div>	
<div class="form-group">
	<label for="post_catagory_id">post_catagory_id</label>
	<input type="number" class="form-control" name="post_catagory_id">
</div>
<div class="form-group">
	<label for="post_title">post_title</label>
	<input type="text" class="form-control" name="post_title">
</div>
<div class="form-group">
	<label for="post_author">post_author</label>
	<input type="text" class="form-control" name="post_author">
</div>
<div class="form-group">
	<label for="post_date">post_date</label>
	<input type="date" class="form-control" name="post_date">
</div>
<div class="form-group">
	<label for="post_image">post_image</label>
	<input type="file" class="form-control" name="post_image">
</div>
<div class="form-group">
	<label for="post_content">post_content</label>
	<textarea  class="form-control" id="body" name="post_content"></textarea>
	
</div>
<div class="form-group">
	<label for="post_tags">post_tags</label>
	<input type="text" class="form-control" name="post_tags">
</div>

<div class="form-group">
	<label for="post_status">post_status</label>
	<input type="text" class="form-control" name="post_status">
</div>

<div class="form-group">
	<input class="btn btn-danger" type="submit" name="submit" value="submit">
</div>
</form>