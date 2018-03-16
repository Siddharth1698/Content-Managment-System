<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                
                        <?php  session_start();
                       if (isset($_SESSION['user_role'])) {   

                        if (isset($_GET['p_id'])) {
                            $the_post_id = $_GET['p_id'];

                            echo "<li><a href='admin/posts.php?source=edit_post&p_id={$the_post_id}'>Edit</a></li>";
                           
                       }}

              
  
                ?>
                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

<?php   include "includes/db.php";

    if (isset($_GET['p_id'])) {
        $the_post_id = $_GET['p_id'];
                 

                                        $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                                        $select_all_post = mysqli_query($connection,$query);
                                       
                                       while ($row = mysqli_fetch_assoc($select_all_post)) {
                                          $post_id = $row['post_id'];
                                           $post_title = $row['post_title'];
                                            $post_author = $row['post_author'];
                                             $post_date = $row['post_date'];
                                              $post_image = $row['post_image'];
                                                $post_content = $row['post_content'];
                                          
?>

 <!-- Blog Post -->

                <!-- Title -->
                <h2>
                    <a href="#"><?php echo $post_title;  ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author;  ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date;  ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content;  ?></p>   <?php }} ?>
                
                      
                <hr>

                <!-- Blog Comments -->
   <?php global $connection;
                  
                        if (isset($_POST['submit'])) {
                                echo $_POST['submit'];
                        $i = rand(0,10000);
                        $comment_id = rand(0,10000);

                                             
                                            $comment_author = $_POST['comment_author'];
                                             $comment_email = $_POST['comment_email'];
                                              $comment_content = $_POST['comment_content'];
       $query = "INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES ('$comment_id', '$i', '$comment_author', '$comment_email', '$comment_content ', 'unapproved', now())";            

        
         $add_comment = mysqli_query($connection,$query);       


          $query = "UPDATE posts SET  post_comment_count =  post_comment_count + 1 ";
 $select_comments = mysqli_query($connection,$query);

 }  

                      ?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
    <label for="comment_author">comment_author</label>
    <input type="text" class="form-control" name="comment_author">
</div>
<div class="form-group">
    <label for="comment_email">comment_email</label>
    <input type="text" class="form-control" name="comment_email">
</div>


<div class="form-group">
    <label for="comment_content">comment_content</label>
    <input type="text" class="form-control" name="comment_content">
</div>


<div class="form-group">
    <input class="btn btn-danger" type="submit" name="submit" value="submit">
</div>
<p>comment will be added once verified</p>
</form>
                    

                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <label>Enter your tags here</label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                  <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->
 <div class="media">
                    
                    <div class="media-body">
                        <h3>Comments here</h3>
                                          <?php
 $query = "SELECT * FROM comments WHERE comment_status = 'approved' ORDER BY comment_id DESC";
 $select_comments = mysqli_query($connection,$query);
                                        ?>

                                        <?php
  while ($row = mysqli_fetch_assoc($select_comments)) {
     
      $comment_author = $row['comment_author']; 
       $comment_date = $row['comment_date']; 
       $comment_content = $row['comment_content']; 
  ?>
         <h4 class="media-heading"> <?php echo $comment_author; ?> 
                            <small><?php echo $comment_date; ?> </small>
                        </h4>  
                        <?php echo $comment_content; ?>
                             <hr>    <?php }?> 
                    </div>
                </div>

                <!-- Comment -->
            

            </div>

            <!-- Blog Sidebar Widgets Column -->
           
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Siddharth M 2018</p>
                </div>

            </div>

            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
