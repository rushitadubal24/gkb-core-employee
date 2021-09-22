<!DOCTYPE html>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
	<a href="insert.php">Add Record</a></p>
    <div class="container">
	<div class="row">
		<table class="table "> 
		<thead>
			<tr> 
				<th>No.</th> 
				<th>FullName</th> 
				<th>Gender</th> 
				<th>E-Mail</th>
				<th>Hobbies</th> 
				<th>Joiningdate</th> 
				<th>Department</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>  
		</table>
	</div>
</div>
</body>
<html>
<?php
	include 'curd.php';
	$no = 1;
	while($res = mysqli_fetch_array($result)){
?>
	<tr> 
		<td scope="row"><?php echo $no; ?></th> 
		<td> <?php echo $res['FirstName']." ".$res['LastName']; ?></td> 
		<td> <?php echo $res['Gender']; ?> </td> 
		<td> <?php echo $res['Email']; ?> </td> 
		<td> <?php echo $res['Jdate']; ?> </td>
		<td> <?php echo $res['DeptName']?> </td>
		<td> <?php echo $res['Hobbies']; ?> </td> 
                <td> <img src="<?php echo $res['Picture']?>" width = "100" height="100"> </td>
		<td>
                       <a href="update.php?id=<?php echo $res['id'];?>"><span class="glyphicon glyphicon-edit" 
                          aria-hidden="true"></span></a>
                       <a href="delete.php?id=<?php echo $res['id'];?>"><span class="glyphicon glyphicon-remove" 
                          aria-hidden="true"></span></a>
                </td>
        </tr> 
	<?php
		$no++;
		}
	?>	