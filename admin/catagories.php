 
   <?php 
             include "includes/header.php";
             include "includes/db.php";
   
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
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
             <div class="col-lg-6">
                 <form method="post">
              <?php
                     if (isset($_POST['submit'])) {
                         $cat_title = $_POST['cat_title'];
                         $cat_id = $_POST['cat_id'];

                                   if ($cat_title == "" || empty($cat_title) ) {
                                       echo "This feild cannot be empty";
                                   } else {
                                 
                                    $query = "INSERT into catagories VALUES($cat_id,'$cat_title');";
                                     $select_cati = mysqli_query($connection,$query);
                                   }

                      } 


                ?>

               
                    <label for="cat-title">Add Category</label>
                    <div class="form-group">
                    <input type="text" class="form-control" name="cat_title">     
                    
                    </div>
                    <div class="form-group">
                        <input type="number" name="cat_id">
                    </div>
                    <div class="form-group">
                    <input class="btn btn-danger" type="submit" name="submit" value="Add Cat">    
                   </div>
                </form>



  <?php
    if (isset($_GET['edit'])) {
          $cat_id = $_GET['edit'];
          include "editcat.php";
    }
 
  ?>








</div>


 <div class="col-lg-6">

 <?php
 $query = "SELECT * FROM catagories";
 $select_cat = mysqli_query($connection,$query);
                                        ?>



<table class="table table-bordered table-hover">
  <thead class="thead-light">
    <tr>
      
      <th>Id</th>
      <th>Category Title</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
  while ($row = mysqli_fetch_assoc($select_cat)) {
     $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
      echo "<tr>";
      echo "<td>{$cat_id}</td>";
      echo "<td>{$cat_title}</td>";
      echo "<td><a onClick =\"javascript: retuen confirm('Are u sure u want to delete this');\" href='catagories.php?delete={$cat_id}'>Delete</a></td>";
       echo "<td><a href='catagories.php?edit={$cat_id}'>Update</a></td>";
      echo "</tr>";
                                       }
?>

<?php


if (isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM catagories WHERE cat_id = {$the_cat_id}";
    $select_catc = mysqli_query($connection,$query);
    header("Location: catagories.php");
}

                                        ?>


    </tr>
   
  </tbody>
</table>
</div>

</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 <?php 
             include "includes/footer.php";
   
    ?>