 
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
            
                <!-- /.row -->
<h1>Admin </h1>

<?php 

  if (isset($_GET['source'])) {
     $source = $_GET['source'];
} else{
    $source = "";
}



switch ($source) {
    case 'add_post':
        include "add_comments.php";
        break;

    case 'edit_post':
        include "edit_comments.php";
        break;    
    
    default:
      include "view_comments.php";
        break;
}


 ?>








</div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 <?php 
             include "includes/footer.php";
   
    ?>