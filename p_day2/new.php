<!DOCTYPE html>
<html>
<head>
	<title>todo list</title>
</head>
<body>
	<?php
	$err="";
$conn=mysqli_connect('localhost','root','','todos1');
  
    if(!$conn) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
if (isset($_POST['submit'])) {
	$task=$_POST['task'];
	if (empty($task)) {
		$err="mandatory fill";
	}else{
	mysqli_query($conn,"INSERT INTO todo1 (tasks) VALUES ('$task')");
}


}
if (isset($_GET['del'])) {

	$id=$_GET['del'];
	mysqli_query($conn,"DELETE FROM todo1 WHERE id=$id");
}
$select=mysqli_query($conn,"SELECT * FROM todo1");
?>
	<form action="index.php" method="POST">
		<?php if(isset($err)){ ?>
			<p><?php echo $err; ?></p>
		<?php } ?>
		<input type="text" name="task" placeholder="Enter the task">
		<button type="submit" name="submit">Create</button>
	</form>
	<table>
		<tr>
			<th>NO</th>
			<th>Task</th>
			<th>Action</th>
		</tr>
		<?php $i=1; while($row=mysqli_fetch_array($select)) { ?>
		<tr>
			<th><?php echo $i; ?></th>
			<th><?php echo $row['tasks']; ?></th>
			<th><a href="index.php?del=<?php echo $row['id']; ?>">X</a>&nbsp;&nbsp;<a href="up.php?del=<?php echo $row['id']; ?>">EDIT</a></th>
		</tr>
	<?php $i++; } ?>
	</table>


</body>
</html>