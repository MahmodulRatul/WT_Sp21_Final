<?php   include 'admin.php';
      require_once 'controllers/sellerController.php';
    ?>


<html>
       <title>Add Seller</title>
	<head> 
	<style>
	.login-div{
		border:1px solid black;
		margin:auto;
		width:40%;
		margin-top:5%
	}
	</style>
	</head>
	<body>
	<div class="login-div">
		<fieldset>
		<legend align="center"><h1>Add Seller</h1></legend>
	<form action="" onsubmit="return validateSeller()"method="post">
			<table align="center"> 

				<tr>
					<td><span><b>First Name:<b></span></td>
					<td>:<input type="text" id="fname" name="fname"value="<?php echo $fname;?>" placeholder="First Name">
						<span id="err_fname"><?php echo $err_fname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td>:<input type="text" id="lname" name="lname"value="<?php echo $lname;?>" placeholder="Last Name">
						<span id="err_lname"><?php echo $err_lname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td>:<input type="text" id="uname" name="uname"value="<?php echo $uname;?>" placeholder="Username">
						<span id="err_uname"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td>:<input type="text" id="ad" name="ad"value="<?php echo $ad;?>"placeholder="Address">
					<span id="err_ad"><?php echo $err_ad;?></span></td>
				</tr>	
				
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td>:<input type="radio" id="gender" name="gender" value="Male"><?php echo $gender;?><span>Male</span>
					    <input type="radio" id="gender" name="gender" value="Female"><?php echo $gender;?><span>Female</span><br>
						<span id="err_gender"><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" id="email" value="<?php echo $email;?>" name="email" placeholder="Mail Address">
						<span id="err_email"><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password" id="pass" name="pass" value="<?php echo $pass;?>" placeholder="Password"><br>
						<span id="err_pass"><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="text" id="number" name="number"value="<?php echo $number;?>"placeholder="Number">
					<span id="err_number"><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="add_seller" value="Add Seller"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	</body>
	<script src="JS/sellerValidation.js"></script>
 </html>