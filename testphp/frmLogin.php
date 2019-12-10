<form role="form" method="POST" action="index.php">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="text" class="form-control" width="100px" id="exampleInputEmail1" name="UserEmail" value="<?php echo isset($_POST['UserEmail']) ? $_POST['UserEmail'] : ''?>" placeholder="Enter email">
                <span class="error">* <?php echo $_SESSION['emailErr']?></span>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" width="100px" id="exampleInputPassword1" name="password" placeholder="Password">
                <span class="error">* <?php echo $_SESSION['passwordErr'];?></span>
			</div>
            <div class="form-group">
				<label for="exampleInputPassword1">Confirm Password</label>
				<input type="password" class="form-control" width="100px" id="ConfirmPassword1" name="cpassword" placeholder="Password">
                <span class="error">* <?php echo $_SESSION['cpasswordErr'];?></span>
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
</form>