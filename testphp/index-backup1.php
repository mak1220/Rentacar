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
 session_start();
 $_SESSION['emailErr'] = "";
 $_SESSION['passwordErr'] = "";
 $_SESSION['cpasswordErr'] = "";
 
 if (isset($_GET['UserEmail']))
 {
	 if (!filter_var($_GET['UserEmail'], FILTER_VALIDATE_EMAIL)) {
          $_SESSION['emailErr'] = "Invalid email format";
	 }
	/* if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "You Entered An Invalid Email Format"; 
        }*/
 }
 if(!empty($_GET["password"]) && ($_GET["password"] == $_GET["cpassword"])) {
    $password = $_GET["password"];
    $cpassword = $_GET["cpassword"];
    if (strlen($_GET["password"]) <= '8') {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 8 Characters!";
        exit;
    }
    
    
    elseif(!preg_match("#[0-9]+#",$password)) {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 1 Number!";
        exit;
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 1 Capital Letter!";
        exit;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
        exit;

    }
    else
    	header("Location:validate.php?login=success");
}
elseif(empty($_GET["cpassword"])) {
    $_SESSION['cpasswordErr'] = "Please Check You've Entered Or Confirmed Your Password!";
} else {
     $_SESSION['passwordErr'] = "Please Enter password   ";
}
 
?>

<body>
         
       <header>  
         <nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">WebSiteName</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Home</a></li>
			      <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Page 1-1</a></li>
			          <li><a href="#">Page 1-2</a></li>
			          <li><a href="#">Page 1-3</a></li>
			        </ul>
			      </li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
			    </ul>
			  </div>
			</nav>
         </header>
         <form role="form" method="get" action="index.php">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" name="UserEmail" value="<?php echo isset($_GET['UserEmail']) ? $_GET['UserEmail'] : ''?>" placeholder="Enter email">
                <span class="error">* <?php echo $_SESSION['emailErr']?></span>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                <span class="error">* <?php echo $_SESSION['passwordErr'];?></span>
			</div>
            <div class="form-group">
				<label for="exampleInputPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="ConfirmPassword1" name="cpassword" placeholder="Password">
                <span class="error">* <?php echo $_SESSION['cpasswordErr'];?></span>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>

<?php
 
 $_SESSION['emailErr'] = "";
 $_SESSION['passwordErr'] = "";
 $_SESSION['cpasswordErr'] = "";

 session_destroy()
 ?>

</body>
</html>