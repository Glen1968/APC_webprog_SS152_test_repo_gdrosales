<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 $email = $_POST['email'];
 $website = $_POST['website'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(first_name,last_name,user_city,email,website) VALUES('$first_name','$last_name','$city_name','$email','$website')";
 mysqli_query($con,$sql_query);
        
        // sql query for inserting data into database
 
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label> ADD EDIT DELETE </a></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Nickname" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="email" placeholder="Email Address" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="website" placeholder="Website" required /></td>
    </tr>
	
	
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>