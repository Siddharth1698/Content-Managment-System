<?php include "includes/db.php"; ?>
<?php session_start(); ?>


<?php 

  if (isset($_POST['submit'])) {
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$username = mysqli_real_escape_string($connection,$username);
  	$password = mysqli_real_escape_string($connection,$password);

 $query = "SELECT * FROM users WHERE username = '{$username}'";

 $connect_login = mysqli_query($connection,$query);

 while ($row = mysqli_fetch_array($connect_login)) {
 	$db_userid = $row['user_id'];
 	$db_username = $row['username'];
 	$db_password = $row['user_password'];
 	$db_firstname = $row['user_firstname'];
 	$db_lastname = $row['user_lastname'];
 	$db_status = $row['user_status'];
    $db_role = $row['user_role'];

  $password = crypt($password, $db_password);


 	if ($username == $db_username && $password == $db_password && $db_role == 'admin') {
 		header("Location: admin ");
 		$_SESSION['username'] = $db_username;
        $_SESSION['user_firstname'] = $db_firstname;
        $_SESSION['user_lastname'] =  $db_lastname;
        $_SESSION['user_role'] = $db_role;
 		
 	} else if ($username == $db_username && $password == $db_password && $db_role == 'subscriber') {
 		$_SESSION['username'] = $db_username;
        $_SESSION['user_firstname'] = $db_firstname;
        $_SESSION['user_lastname'] =  $db_lastname;
        $_SESSION['user_role'] = $db_role;
        header("Location: index.php ");
       
 	} else {
 		echo "not matching";
 	}
 }

  }



 ?>