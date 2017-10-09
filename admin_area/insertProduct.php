<?php
include "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>The Store</title>

		<!-- Bootstrap -->
		<link href="assets/bstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>-->
	</head>
	<body>
		
	</body>
		<form action="insertProduct.php" method="post" enctype="multipart/form-data">
			<table align="center" width="750" border="2" bgcolor="#ccff99">
				<tr align="center">
					<td colspan="8"><h2>Insert New Product Here</h2></td>
				</tr>
					<td>Product Title :</td>
					<td><input type="text" name="product_title" /></td>
				</tr>
				<tr>
					<td>Product Category :</td>
					<td>
						<select name="product_cat">
							<option>Select Category</option>
							<option>Option 1</option>
							<option>Option 2</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Product Brand :</td>
					<td>
						<select name="product_brand">
							<option>Select Brand</option>
							<option>Option 1</option>
							<option>Option 2</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Product Code :</td>
					<td><input type="text" name="product_code" /></td>
				</tr>
				<tr>
					<td>Product Description :</td>
					<td><textarea name="product_desc" cols="35" rows="10"></textarea></td>
				</tr>
				<tr>
					<td>Product Price :</td>
					<td><input type="text" name="product_price" /></td>
				</tr>
				<tr>
					<td>Product Image :</td>
					<td><input type="file" name="product_image" /></td>
				</tr>
				<tr>
					<td>Product Keyword :</td>
					<td><input type="text" name="product_keyword" /></td>
				</tr>
				<tr align="center">					
					<td colspan="8"><input type="submit" name="Submit" value="Submit" /></td>
				</tr>
			</table>
		</form>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="assets/bstrap/js/bootstrap.min.js"></script>
	</body>
</html>
	

