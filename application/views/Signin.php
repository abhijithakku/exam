<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #d5d5d5;">
<form action="<?php echo base_url().'index.php/exam/data'?>" methode="post">
<table border="0">
<tr><td>Name</td><td><input type="text" name="name"></td></tr>
<tr><td>profile pic</td><td><input type="file" name="pro_pic"></td></tr>
<tr><td>Email</td><td><input type="text" name="email"></td></tr>
<tr><td>Address</td><td><textarea col="50"></textarea></td></tr>
<tr><td>country</td><td><select name="country">
	<option> india</option>
		<option>Usa</option>
</select></td></tr>
<tr><td>Hobbies</td><td>
Reading<input type="checkbox" name="reading"><br>
Music<input type="checkbox" name="music"><br>
Browsing<input type="checkbox" name="browsing"><br>
Playing<input type="checkbox" name="playing"><br>
</td></tr>
<tr><td>password</td><td><input type="password" name="password"></td></tr>
<tr><td></td><td><input type="submit" value="SAVE" name=""></td></tr>

</table>
</form>
</body>
</html>