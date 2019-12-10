<?php
  require "dbconnection.php";
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

<body bgcolor="#E6E6FA">
         
       <?php

      $query="SELECT * FROM customers";
      $result=$conn->query($query);
      $num= mysqli_num_rows($result);
      ?>
      <table border="3" cellspacing="5" cellpadding="2">
            <tr>
                <td>
                  <font face="Arial, Helvetica, sans-serif">Cust Number</font>
                </td>
                <td>
                  <font face="Arial, Helvetica, sans-serif">Name</font>
                </td>
                <td>
                  <font face="Arial, Helvetica, sans-serif">Contact</font>
                </td>
                <td>
                  <font face="Arial, Helvetica, sans-serif">City</font>
                </td>
                <td>
                  <font face="Arial, Helvetica, sans-serif">Country</font>
                </td>
                <td>
                  <font face="Arial, Helvetica, sans-serif">Credit Limit</font>
                </td>
            </tr>
            <?php
            
            while ($row = mysqli_fetch_array($result)) {
            
            /*$f1=mysql_result($result,$i,"field1");
            $f2=mysql_result($result,$i,"field2");
            $f3=mysql_result($result,$i,"field3");
            $f4=mysql_result($result,$i,"field4");
            $f5=mysql_result($result,$i,"field5");*/?>
            <tr>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $row['customerNumber']; ?></font>
            </td>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $row['customerName']; ?></font>
            </td>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $row['phone']; ?></font>
            </td>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $row['city']; ?></font>
            </td>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $row['country']; ?></font>
            </td>
            <td>
            <font face="Arial, Helvetica, sans-serif"><?php echo $row['creditLimit']; ?></font>
            </td>
            </tr>
      <?php
    
      }?>


</body>
</html>
