<?php
		include ("db_connection.php");
		$user =$_SESSION['userid'];
		
		$sql = "SELECT * FROM student_tab WHERE Stu_id='$user'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc()
		//$dept = 'Computer Science';
	
	?>

<html>
	<head>  <div class = "header" > Student Platform </div> </head>
	
	
	<style>
	.header{
		background-color: #615c4e;
		color: #fff;
		padding: 10px;
		font-size: 50px;
		font-family: Arial, sans-serif;
	}
	
	table {
		border-collapse: collapse;
		width: 100%;
		max-width: 800px;
		margin: 0 auto;
	}

	th, td {
		text-align: left;
		padding: 8px;
		border: 1px solid #ddd;
	}

	th {
		background-color: #f2f2f2;
	}

	tr:hover {
		background-color: #f5f5f5;
	}
	</style>
	
	
	
	<body>
	<table>
		<th>
			<td "Student Id"> <?php echo $row['Stu_id'] ?></td>
			<td "Student name"> <? php echo row['Stu_name'] ?> </td>
			
	</table>
	</body>

</html>