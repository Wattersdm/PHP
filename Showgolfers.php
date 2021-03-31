<!DOCTYPE html>

<html>

<!-- webpage title -->
	<style>
		
			ul {list-style-type: none; margin: 0;padding: 0; overflow: hidden; background-color: #333;}

li {float: left;}

li a {display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;}

/* Change the link color to #111 (black) on hover */
li a:hover {background-color:#FF5733;}

body {text-align:center; font-family: "Times New Roman", Times, serif; background-color: #F8F8FF;}

tr {font-size: 30px;}

input[type="text"] {font-size:25px;}

input[type="radio"] {display: inline-block; float: left;}

label {float: left;}

select {font-size:25px;}

form {display: inline-block; font-family: "Times New Roman", Times, serif;}

li {display: inline;}
					
		
		</style>
	<head>
	
		<meta charset = "utf-8">
		<title>Show Golfers</title>
		

	<body>
	
		<ul>
			<li><a href="Homepage.php">Home</a></li>
			 <li><a href="RegisterGolfer.php">Register to Golf</a></li> <!--working-->  
			 <li style="background-color: #111"><a href="">The Golfers</a></li>		
			<li><a href="Donate.php">Make a Donation</a></li> <!--working-->
			<li><a href="Update.php">Golfer Statistics</a></li>
</ul>
		
		
		<h3>**Please click on golfer ID to update golfer information.**</h3>
		<h3>**If you would like to donate to a golfer, please click on Donate Now.**</h3>
		
		<table border=1>
			<tr>
				<th>GolferID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Phone Number</th>
				<th>Email</th>
				<th>Shirt Size</th>
				<th>Gender</th>
				<th>Donate</th>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=1'>1</a></td>
				<td>Jen</td>
				<td>Doe</td>
				<td>123 Jen St</td>
				<td>Mason</td>
				<td>1</td>
				<td>12345</td>
				<td>123-123-1234</td>
				<td>jendoe@gmail.com</td>
				<td>1</td>
				<td>1</td>
				<td><a href = 'Donate.php?ID=1'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=2'>2</a></td>
				<td>John</td>
				<td>Doe</td>
				<td>890 Street Dr</td>
				<td>Cincinnati</td>
				<td>1</td>
				<td>12345</td>
				<td>123-123-1234</td>
				<td>johndoe@yahoo.com</td>
				<td>1</td>
				<td>1</td>
				<td><a href = 'Donate.php?ID=2'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=3'>3</a></td>
				<td>John</td>
				<td>Smith</td>
				<td>345 Central Pkwy</td>
				<td>Cincinnati</td>
				<td>1</td>
				<td>12345</td>
				<td>123-546-6789</td>
				<td>smith@yahoo.com</td>
				<td>3</td>
				<td>1</td>
				<td><a href = 'Donate.php?ID=3'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=4'>4</a></td>
				<td>Mike</td>
				<td>Williams</td>
				<td>634 Matheson blvd.</td>
				<td>Cincinnati</td>
				<td>1</td>
				<td>12345</td>
				<td>123-123-1230</td>
				<td>mwilliams@hotmail.com</td>
				<td>1</td>
				<td>1</td>
				<td><a href = 'Donate.php?ID=4'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=5'>5</a></td>
				<td>Jennifer</td>
				<td>Butler</td>
				<td>123 elm street</td>
				<td>Louiseville</td>
				<td>3</td>
				<td>12345</td>
				<td>123-123-1234</td>
				<td>jbutler@hotmail.com</td>
				<td>7</td>
				<td>2</td>
				<td><a href = 'Donate.php?ID=5'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=6'>6</a></td>
				<td>Anne</td>
				<td>Smith</td>
				<td>453 Center Dr</td>
				<td>Cincinnati</td>
				<td>1</td>
				<td>45370</td>
				<td>123-456-7890</td>
				<td>asmith@gmail.com</td>
				<td>5</td>
				<td>2</td>
				<td><a href = 'Donate.php?ID=6'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=7'>7</a></td>
				<td>Tom</td>
				<td>Cruise</td>
				<td>455 Central Drive</td>
				<td>Lexington</td>
				<td>2</td>
				<td>45624</td>
				<td>579-234-6789</td>
				<td>tcruise@gmail.com</td>
				<td>2</td>
				<td>1</td>
				<td><a href = 'Donate.php?ID=7'>Donate Now</a></td>
			</tr>
			<tr>
				<td><a href = 'Update.php?ID=8'>8</a></td>
				<td>Will</td>
				<td>Robinson</td>
				<td>8450 Marshall Rd.</td>
				<td>Maryville</td>
				<td>1</td>
				<td>56340</td>
				<td>123-456-3450</td>
				<td>wrobinson@ymail.com</td>
				<td>3</td>
				<td>1</td>
				<td><a href = 'Donate.php?ID=8'>Donate Now</a></td>
			</tr>		
		</table>
	</body>
</html> 