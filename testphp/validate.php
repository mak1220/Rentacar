
<?php
  include "dbconnection.php";

?>
<?php
     session_start();
         $_SESSION['emailErr'] = "";
         $_SESSION['passwordErr'] = "";
         $_SESSION['cpasswordErr'] = "";

         $useremail = "";
         $password = "";
         
         if (isset($_POST['UserEmail']))
         {
             if (!filter_var($_POST['UserEmail'], FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['emailErr'] = "Invalid email format";
                    $useremail = $_POST['UserEmail'];
             }
            /* if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
                      $emailErr = "You Entered An Invalid Email Format"; 
                  }*/
         }
         if(!empty($_POST["password"])) 
         {
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
            elseif(empty($_POST["cpassword"])) {
                  $_SESSION['cpasswordErr'] = "Please Check You've Entered Or Confirmed Your Password!";
            }
            else if ($_POST["password"] == $_POST["cpassword"])
            {
                   
                   $useremail = $_POST['UserEmail'];
                   $password = $_POST["password"];
                   $currdate = date("Y-m-d");

                   $sql = "INSERT INTO user (email, password, lastupdated)
                   VALUES ('". $useremail . "','" . $password . "','" . $currdate. "')";

                  if ($conn->query($sql) === TRUE) {
                       $last_id = $conn->insert_id;
                     echo "<script> window.alert('Your Form have been submitted') </script>";
                  } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                mysqli_close($conn);
            }
                  // header("Location:validate.php?login=success");
            else
                $_SESSION['cpasswordErr'] = "Please Check you password and confirm password did not match";      
        }
   
     
?>

