<?php
 if ($_GET['login'] == "success")
 echo "You Form have been submiited with valid email and password ";
/* if (isset($_POST['UserEmail']))
 {
	 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $_SESSION['emailErr'] = "Invalid email format";
	 }
	 if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
            $emailErr = "You Entered An Invalid Email Format"; 
        }
 }
 if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    if (strlen($_POST["password"]) <= '8') {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        $_SESSION['passwordErr'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
}
elseif(empty($_POST["cpassword"])) {
    $_SESSION['cpasswordErr'] = "Please Check You've Entered Or Confirmed Your Password!";
} else {
     $_SESSION['passwordErr'] = "Please enter password   ";
}
 
 */



?>
