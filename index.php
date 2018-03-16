<?php

   include "includes/header.php";
    include "includes/naviigation.php";
    
    

  
  ?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                       <?php

                                        $query = "SELECT * FROM posts";
                                        $select_all_posts = mysqli_query($connection,$query);
                                       
                                       while ($row = mysqli_fetch_assoc($select_all_posts)) {
                                          $post_id = $row['post_id'];
                                           $post_title = $row['post_title'];
                                            $post_author = $row['post_author'];
                                             $post_date = $row['post_date'];
                                              $post_image = $row['post_image'];
                                                $post_content = substr($row['post_content'], 0,300) ;
                                          
                                    
                                  


 ?>


              

                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id;  ?>"><?php echo $post_title;  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date;  ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content;  ?></p>
             
                            <hr>
                         <?php } ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

 <?php

   include "includes/sidebar.php";
  
  ?>

        </div>
        <!-- /.row -->

        <hr>

 <?php

   include "includes/footer.php";
  
  ?>