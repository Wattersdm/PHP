
<!-- Author: - Devin Watters -->
<!-- Class:  - Webb App Dev -->
<!-- Abstract: Update-->

<!DOCTYPE html>
<html>


<head>
<ul>
			<li><a href="Homepage.php">Home</a></li>
			 <li><a href="RegisterGolfer.php">Register to Golf</a></li> <!--working-->
			<li><a href="showgolfers.php">The Golfers</a></li> <!--working-->
			<li><a href="Donate.php">Make a Donation</a></li> <!--working--> 
			<li style="background-color: #111"><a href="">Golfer Statistics</a></li>
		
</ul>
<script>
function GolferUpdated(){
	alert("Golfer Updated");
}

</script>
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






<script>
function validateFormInput() {
	
  var txtFirstName = document.forms["frmGolferInfo"]["txtFirstName"].value;
  var txtLastName = document.forms["frmGolferInfo"]["txtLastName"].value;
  var txtAddress = document.forms["frmGolferInfo"]["txtAddress"].value;
  var txtCity = document.forms["frmGolferInfo"]["txtCity"].value;
  var intState = document.forms["frmGolferInfo"]["intState"].value;
  var txtZipCode = document.forms["frmGolferInfo"]["txtZipCode"].value;
  var txtPhoneNumber = document.forms["frmGolferInfo"]["txtPhoneNumber"].value;
  var txtEmail = document.forms["frmGolferInfo"]["txtEmail"].value;
  var intShirtSize = document.forms["frmGolferInfo"]["intShirtSize"].value;
  var intGender = document.forms["frmGolferInfo"]["intGender"].value;
  
if (txtFirstName == ""){
    alert("Please enter a First Name");
    return false; 
  } else if (txtLastName == "") {
    alert("Please enter a Last Name");
    return false; 
  } else if (txtAddress == "") {
    alert("Please enter an Address");
    return false; 
  } else if (txtCity == "") {
    alert("Please enter a City");
    return false; 
  } else if (intState == 0) {
    alert("please Choose a State");
    return false;
  } else if (txtZipCode == "") {
    alert("Please enter a ZipCode");
    return false; 
  } else if (txtPhoneNumber == "") {
    alert("Please enter a PhoneNumber");
    return false; 
  } else if (txtEmail  == "") {
    alert("Please enter a Email");
    return false; 
  } else if (intShirtSize == 0) {
    alert("please Choose a Shirt Size");
    return false;
  }  else if (intGender == 0) {
    alert("please Choose a Gender");
    return false;
  }
}
</script>

<title>Edit Player</title>

</head>

<body>

<h3>
Golfer Info
</h3>

<form name="frmGolferInfo" method="post" action="update.php?ID=1" onsubmit="return validateFormInput()">
<table border="1">



<tr>
<td>
FirstName:*
</td>
<td>
<input type="text" name="txtFirstName"  value="">
</form>
</td>
</tr>

<tr>
<td>
LastName:*
</td>
<td>
<input type="text" name="txtLastName" value="">
</form>
</td>
</tr>

<tr>
<td>
Address:*
</td>
<td>
<input type="text" name="txtAddress" value="">
</form>
</td>
</tr>


<tr>
<td>
City:*
</td>
<td>
<input type="text" name="txtCity" value="">
</form>
</td>
</tr>


<tr>
<td>
State:*
</td>
<td>


<select id="State-list" type="number"  name="intState"  >
<option value="1" selected>Ohio</option>
<option value=2>Kentucky</option><option value=3>Indiana</option></select>
</td>
</tr>


<tr>
<td>
ZipCode:*
</td>
<td>
<input type="text" name="txtZipCode" value="">
</form>
</td>
</tr>

<tr>
<td>
PhoneNumber:*
</td>
<td>
<input type="text" name="txtPhoneNumber" value="">
</form>
</td>
</tr>


<tr>
<td>
Email:*
</td>
<td>
<input type="text" name="txtEmail" value="">
</form>
</td>
</tr>


<tr>
<td>
Shirt Sizes:*
</td>
<td>

<select id="ShirtSize-list" type="number"  name="numShirtSize">
<option value="0" selected>Select your Shirt Size</option>
<option value=1>Small</option><option value=2>Medium</option><option value=3>Large</option><option value=4>XL</option><option value=5>XXL</option></datalist>
</td>
</tr>

<tr>
<td>
Gender:*
</td>
<td>

<select id="Gender-list" type="number" name="numGender">
<option value="0" selected>Select your Gender</option>
<option value=1>Male</option><option value=2>Female</option></select>
</td>
</tr>

<tr>
<td align="right" colspan="2">
*Required Field
</td>
</tr>
<tr>
<td align="center" colspan="2" >
<input  type="submit" onclick=""  value="Register">
<input  type="reset" onclick="" value="Clear Input">
</td>
</tr>



</table>

</form>

</body>


</html>
