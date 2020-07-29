<?php
session_start();


?>
<html>
<table border="1" style="width: 80%; border: 1px solid;">
  <tr>
  <th width="70px"><img src="logo.png" /></th>
  <th width="auto"></th>
  <th width="100px">
  <a href="">loggedin as
  <?php echo $_SESSION['userName'];   ?>| </a><a href="">logout </a>
  </th>
  </tr>
  <tr>
  <td>
  <h2>Account</h2>
  <hr/>
  <ul>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="view_profile.php">View Profile</a></li>
  <li><a href="edit_profile.php">Edit Profile</a></li>
  <li><a href="">Change Profile Picture</a></li>
  <li><a href="change_password.php">Change password</a></li>
  <li><a href="login.html">Logout</a></li>
  </ul>
  </td>

  <td height="200px">

<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form>
    <br/>
    <table width="80%" cellpadding="0" cellspacing="0">
    <tr>
    <td>Name</td>
    <td>:</td>
    <td><input name="name" type="text" value="Bob"></td>
    <td></td>
    </tr>		
    <tr><td colspan="2">
    <hr/>
    </td>
    </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td>
    <input name="email" type="text" value="bob@aiub.edu">
    <abbr title="hint: sample@example.com"><b>i</b></abbr>
    </td>
    <td></td> 
    </tr>				
			

    <tr><td colspan="2">
    <hr/>
    </td>
    </tr>
    <tr>
    <td>Gender</td>
    <td>:</td>
    <td>   
        <input name="gender" type="radio" checked="checked">Male
	<input name="gender" type="radio">Female
        <input name="gender" type="radio">Other
     </td>
				
     <td></td>
			
     </tr>		
     <tr><td colspan="2">
     <hr/>
     </td>
     </tr>
     <tr>
     <td valign="top">Date of Birth</td>
     <td valign="top">:</td>
     <td>
     <input name="dob" type="text" value="23/12/1999">
     <br/>
     <font size="3"><i>(dd/mm/yyyy)</i></font>
     </td>
				

     <td></td>
     </tr>
     </table>
     <hr/>
     <input type="submit" value="Submit">		
     </form>
</fieldset>