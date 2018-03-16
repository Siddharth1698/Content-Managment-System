<form method="post">
                    <label for="cat-title">Update</label>
                      <div class="form-group">
                    <?php

   if (isset($_GET['edit'])) {
       $cat_id = $_GET['edit'];
    $query = "SELECT * FROM catagories WHERE cat_id = {$cat_id}";
    $select_catcx = mysqli_query($connection,$query);
    
     while ($row = mysqli_fetch_assoc($select_catcx)) {
     $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
     
      ?>
  <input value="<?php  if(isset($cat_title)) {echo $cat_title;} ?>" class="form-control" type="text" name="cat_title">

  <?php  }}
  ?>

  
                    
                    </div>

                    <?php
  if (isset($_POST['update'])) {
       
                                          $post_id = $_POST['post_id'];
                                            $post_catagory_id = $_POST['post_catagory_id'];
                                             $post_title = $_POST['post_title'];
                                              $post_author = $_POST['post_author'];
                                              $post_date = date('d-m-y');

                                              $post_image = $_FILES['post_image']['name'];
                                              

                                                $post_content = $_POST['post_content'];
                                                $post_tags = $_POST['post_tags'];
                                                $post_status = $_POST['post_status'];
    $query = "UPDATE catagories SET UPDATE `posts` SET post_catagory_id = $post_catagory_id, post_author = $post_author, post_title = $post_title, post_date = $post_date, post_image = $post_image, post_content = $post_content, post_tags = $post_tags, post_status = $post_status WHERE `posts`.`post_id` = $post_id;";
    $select_catcxy = mysqli_query($connection,$query);
    }
     
      ?>
                   
                    <div class="form-group">
                    <input class="btn btn-danger" type="submit" name="update" value="update">    

                   </div>
                </form>