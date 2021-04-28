<?php
require_once 'controllers/reviewController.php';
?>
<html>
      <head>
	  <title>Review</title>
	      <style>
		  .re-div
				{
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:15%;
				}
	       </style>
	  <head>
	  
	     <body>
		 <div class="re-div">
		 <fieldset>
        <legend align="center"><h1>Customer Review</h1></legend>
		<form action="" onsubmit="return validateData()" method="post">
			<table>
				<tr>
					<td><span >Username</span></td>
					<td>:</td>
					<td><input type="text" name="uname" id="uname" value="<?php echo $uname;?>" placeholder="Username"> </td><td><span><?php echo $err_uname;?></span><span id="err_uname"</span></td>
				</tr>
				<tr>
					<td><span >Address</span></td>
					<td>:</td>
					<td><input type="text" name="address" id="ad" value="<?php echo $address;?>" placeholder="Address"> </td><td><span><?php echo $err_address;?></span><span id="err_ad"</span></td>
				</tr>
				<tr>
					<td><span >Email</span></td>
					<td>:</td>
					<td><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="Email"> </td><td><span><?php echo $err_email;?></span><span id="err_email"</span></td>
				</tr>
					<td><span>Review Type</span></td>
					<td>:</td>
					<td>
					<select name="rtype" id="rtype">
					<option disabled selected>Choose One</option>
					<option>Product</option>
					<option>Service</option>
					<option>Delivery</option>
					<option>Others</option>
					</select></td>
					<td><span><?php echo $err_rtype;?></span> <span id="err_rtype"</span>
					</td>
				</tr>
				<tr>
					<td><span>Rating</span></td>
					<td>:</td>
					<td>
					<input type="radio" name="rating" id="1" value="Disagree"><span>1</span>
					<input type="radio" name="rating" id="2" value="Moderately Agree"><span>2</span>
					<input type="radio" name="rating" id="3" value="Agree"><span>3</span>
					<input type="radio" name="rating" id="4" value="Highly Agree"><span>4</span>
					<input type="radio" name="rating" id="5" value="Highly Agree"><span>5</span>
					</td>
					<td><span> <?php echo $err_rating;?></span> <span id="err_rating"</span></td><br>
				</tr>
				<tr>
					<td><span>Comment</span></td>
					<td>:</td>
					<td><textarea name="comment" id="comment" ></textarea></td>
					<td><span><?php echo $err_comment;?></span><span id="err_comment"</span></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
					<br>
					<input type="Submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
			</fieldset>
			</div>
		</form>
		</center>
	</body>
	<script src="JS/reviewValidation.js"></script>
</html>