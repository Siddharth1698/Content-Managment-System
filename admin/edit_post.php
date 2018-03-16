
<form action="" method="post" enctype="multipart/form-data">
<?php           

            if (isset($_GET['p_id'])) {
            	$the_post_id = $_GET['p_id'];
            }
        


                                        
                                        $query = "SELECT * FROM posts WHERE post_id = {$the_post_id}";
                                        $select_all_posts = mysqli_query($connection,$query);
                                       
                                       while ($row = mysqli_fetch_assoc($select_all_posts)) {
                                           $post_id = $row['post_id'];
                                            $post_catagory_id = $row['post_catagory_id'];
                                             $post_title = $row['post_title'];
                                              $post_author = $row['post_author'];
                                              $post_date = $row['post_date'];
                                              $post_image = $row['post_image'];
                                                $post_content = $row['post_content'];
                                                $post_tags = $row['post_tags'];
                                                $post_status = $row['post_status'];
                                          



}
    $query = "SELECT * FROM catagories";
    $select_ca = mysqli_query($connection,$query);

 while ($row = mysqli_fetch_assoc($select_ca)) {
      $cat_title = $row['cat_title'];
                                        
}


 ?>

 <div class="form-group">
	<label for="post_catagory_id">post_catagory_id</label>
  <input value="<?php  if(isset($post_catagory_id)) {echo $post_catagory_id;} ?>" type="number" class="form-control" name="post_catagory_id">

</div>
<div class="form-group">
	<label for="post_title">post_title</label>
	<input value="<?php  if(isset($post_title)) {echo $post_title;} ?>" type="text" class="form-control" name="post_title">
</div>
<div class="form-group">
	<label for="post_author">post_author</label>
	<input value="<?php  if(isset($post_author)) {echo $post_author;} ?>" type="text" class="form-control" name="post_author">
</div>
<div class="form-group">
	<label for="post_date">post_date</label>
	<input value="<?php  if(isset($post_date)) {echo $post_date;} ?>" type="date" class="form-control" name="post_date">
</div>
<div class="form-group">
	<img width="300" height="300" src=" ../images/<?php echo $post_image; ?> " >
	<input value="<?php  if(isset($post_image)) {echo $post_image;} ?>" type="file" class="form-control" name="post_image">
</div>
<div class="form-group">
	<label for="post_content">post_content</label>
	<input value="<?php  if(isset($post_content)) {echo $post_content;} ?>" type="text" class="form-control" name="post_content">
</div>
<div class="form-group">
	<label for="post_tags">post_tags</label>
	<input value="<?php  if(isset($post_tags )) {echo $post_tags ;} ?>" type="text" class="form-control" name="post_tags">
</div>

<div class="form-group">
	<label for="post_status">post_status</label>
	<input value="<?php  if(isset($post_status)) {echo $post_status;} ?>" type="text" class="form-control" name="post_status">
</div>
<div class="form-group">
	<input  class="btn btn-danger" type="submit" name="update" value="update">
</div>


<?php
  if (isset($_POST['update'])) {
      
                  
       
                                         
                                            $post_catagory_id = $_POST['post_catagory_id'];
                                             $post_title = $_POST['post_title'];
                                              $post_author = $_POST['post_author'];
                                              $post_date = date('d-m-y');

                                              $post_image = $_FILES['post_image']['name'];
                                              $post_image_temp = $_FILES['post_image']['temp_name'];

                                              

                                                $post_content = $_POST['post_content'];
                                                $post_tags = $_POST['post_tags'];
                                                $post_status = $_POST['post_status'];
                            
                              move_uploaded_file($post_image_temp, "../images/$post_image");

   

    if (empty($post_image)) {
	$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
    $select_image = mysqli_query($connection,$query);

     while ($row = mysqli_fetch_array($select_image)) {
               
                $post_image = $row['post_image'];
                    }}

$query = "UPDATE `posts` SET post_catagory_id = '{$post_catagory_id}', post_author = '{$post_author}', post_title = '{$post_title}', post_date = '{$post_date}', post_image = '{$post_image}', post_content = '{$post_content}', post_tags = '{$post_tags}', post_status = '{$post_status}' WHERE `posts`.`post_id` = '{$post_id}';";

             $select_cpost = mysqli_query($connection,$query);


 header("Location: posts.php");
    }

?>
</form>