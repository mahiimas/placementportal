<!DOCTYPE html>
<html>
	<head>
	<style>
	table,th,tr,td{
		border:2px solid;
		border-collapse:collapse;
		margin:10px;
	}
	</style>
	</head>
<body>
 <table>
    <thead> 
	 <tr>
        
		<th>Package no</th>
		<th>Package Name</th>
		<th>Type</th>
		<th>Cost</th>
		<th>Location</th>
		<th>Description</th>
		<th>Edit</th>
		<th colspan="2">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
require('connection.php');
$sql="SELECT * from packages";
if ($res=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
			{
       echo "<tr>
			     <td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['type']."</td>
	            <td>".$row['cost']."</td>
	            <td>".$row['duration']."</td>
				<td>".$row['location']."</td>
				<td>".$row['description']."</td>
				<td><a href='editpackage.php?id=".$row['id']."'>edit</a></td>
				<td><a href='deletepackage.php?id=".$row['id']."'>delete</a></td>
            </tr>" ;
		
			}
	}

}
    ?>
    </tbody>
   </table>
   </form>
   </body>
 </html>   