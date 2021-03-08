<!DOCTYPE htmml>
<html>
<head>
<title></title>
<style>
 input{
 padding:10px;
 margin:10px;}
</style>
</head>
<body>
	<form action="insertion.php" method="GET">
		<fieldset style="width:100px">
		<legend>login</legend>
		<table>
			<tr>
				<td><h2>Student Name:</h2></td>
				<td><input type="text" name="name"></td>
			</tr>	
                <tr>
				<td><h2>Student dob:</h2></td>
				<td><input type="text" name="dob"></td>
			</tr>
			<tr>
				<td><h2>Address:</h2></td>
				<td><textarea style="width:50px" name="address"></textarea></td>
			</tr>
			<tr>
				<td><h2>Student course:</h2></td>
				<td><input type="course" name="course"></td>
			</tr>
			<tr>
				<td><h2>Student mark:</h2></td>
				<td><input type="mark" name="mark"></td>
			</tr>
			<tr>
				<td><h2>Student email:</h2></td>
				<td><input type="email" name="email"></td>
			</tr>
            </br>
            <tr>
			<td><input type="submit" name="submit" value="login"></td>
			</tr>
	
</table>
</fieldset>
</form>
</body>
</html>