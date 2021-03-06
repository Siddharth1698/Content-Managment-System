 
   <?php 
             include "includes/header.php";include "includes/db.php";
   
    ?>

 <?php 
             include "includes/navigation.php";
   
    ?>
    <div id="wrapper">

        <!-- Navigation -->


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $_SESSION['username'];  ?>
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

          
                        
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
<?php global $connection;
 $query = "SELECT * FROM posts";
 $select_all_post = mysqli_query($connection,$query);
 $post_counts = mysqli_num_rows($select_all_post);

           echo "<div class='huge'>{$post_counts}</div>";
           

  ?>

<div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php global $connection;
 $query = "SELECT * FROM comments";
 $select_all_comment = mysqli_query($connection,$query);
 $comment_counts = mysqli_num_rows($select_all_comment);

           echo "<div class='huge'>{$comment_counts}</div>";
           

  ?>
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                                         <?php global $connection;
 $query = "SELECT * FROM users";
 $select_all_users = mysqli_query($connection,$query);
 $user_counts = mysqli_num_rows($select_all_users);

           echo "<div class='huge'>{$user_counts}</div>";
           

  ?>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                                                         <?php global $connection;
 $query = "SELECT * FROM catagories";
 $select_all_catagories = mysqli_query($connection,$query);
 $catagories_counts = mysqli_num_rows($select_all_catagories);

           echo "<div class='huge'>{$catagories_counts}</div>";
           

  ?>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="catagories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>
                <!-- /.row -->
 <div class="row">
  <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

 </div>








            </div>
            <!-- /.container-fluid -->
 
        </div>
        <!-- /#page-wrapper -->

 <?php 
             include "includes/footer.php";
   
    ?>

   
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
           var data = google.visualization.arrayToDataTable([
 ['Data', 'Count'],
          ['Posts',  <?php echo $post_counts;?>],
          ['Comments', <?php echo $comment_counts;?>],
          ['Users', <?php echo $user_counts;?>],
          ['Categories', <?php echo $catagories_counts;?>]
        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

 
 