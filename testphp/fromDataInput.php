<?php
  include "dbconnection.php";
?>

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

<body>


  <form action="insert.php" method="post">     
          Value1: <input type="text" name="field1-name" />
          Value2: <input type="text" name="field2-name" />
          Value3: <input type="text" name="field3-name" />
          Value4: <input type="text" name="field4-name" />
          Value5: <input type="text" name="field5-name" />
          <input type="Submit" />
  </form>
         
  <?php

      <?php
          $field1-name=$_POST['Value1'];
          $field2-name=$_POST['Value2'];
          $field3-name=$_POST['Value3'];
          $field4-name=$_POST['Value4'];
          $field5-name=$_POST['Value5'];
          $query = "INSERT INTO tablename VALUES('','$field1-name','$field2-name','$field3-name','$field4-name','$field5-name')";
          $conn->query($query);
          $conn->close();

     
      ?>



</body>
</html>