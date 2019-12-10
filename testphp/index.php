<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial- scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
 

     require "validate.php";
 
?>

<body>
         
       <?php

        require "header.php";
       ?>
    <?php
       
       require "frmLogin.php";

    ?>

<?php
 
 $_SESSION['emailErr'] = "";
 $_SESSION['passwordErr'] = "";
 $_SESSION['cpasswordErr'] = "";

 session_destroy()
 ?>

</body>
</html>