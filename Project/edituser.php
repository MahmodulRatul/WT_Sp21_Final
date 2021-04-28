<?php
	require_once 'controllers/editUserController.php'
?>

<html>
      <head>
	  <title>Edit User</title>
	      <style>
		  .ed-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  </head>
	     <body>
		 <div class="ed-div">
		<fieldset>
        <legend align="center"><h1>Edit Profile</h1></legend>
		 
		    <form action="" onsubmit="return validateData()" method="post">
			<table align="center"> 
			<h2 align="center">Personal Information</h2>	
				<tr>
					<td><span><b>First Name:<b></span></td>
					<td>:<input type="text" id="fname" name="fname" value="<?php echo $fname;?>" placeholder="First Name">
					<span id="err_fname"> </span> <span><?php echo $err_fname;?></span> </td>
				</tr>
				<tr>
					<td><span><b>Last Name:</b></span></td>
					<td>:<input type="text" name="lname" id="lname" value="<?php echo $lname;?>" placeholder="Last Name">
					<span id="err_lname"></span> <span><?php echo $err_lname;?></span> </td>
				</tr>
				<tr>
					<td><span><b>Address:</b></span></td>
					<td>:<input type="text" name="ad" id="ad" value="<?php echo $ad;?>"placeholder="Address">
					<span id="err_ad"></span> <span><?php echo $err_ad;?></span> </td>
				</tr>	
				
				<tr>
					<td><span><b>Gender:</b></span></td>
					<td>:<input type="radio" name="gender" id="male" value="Male"><span>Male</span>
					     <input type="radio" name="gender" id="female" value="Female"><span>Female</span> <br>
						 <span id="err_gender"></span> <span><?php echo $err_gender;?></span></td>
				</tr>
				
				</table>
				<table align="center">
				<h2 align="center">Account</h2>
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" value="<?php echo $email;?>" name="email" id="email" placeholder="Mail Address">
					<span id="err_email"></span> <span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password" name="pass" id="pass" value="<?php echo $pass;?>" placeholder="Password">
					<span id="err_pass"></span> <span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Phone:</b></span></td>
					<td><input type="text" name="number" id="number" value="<?php echo $number;?>"placeholder="Number">
					<span id="err_number"></span> <span><?php echo $err_number;?></span> </td>
				</tr>
				<tr>
					<td><input type="submit" name="Update" value="Update"></td>
				</tr>
			</table>
	</form>
			 <div>
		 </fieldset>
		 </body>
		<script src="JS/editUser.js"></script>
</html>