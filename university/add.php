<?
mysql_connect("localhost");
mysql_select_db("youthseva") or die("database could not connect ");
?>
<html>
<head>
<meta name="description"content="Php Code for View, Search,Edit and Delete Record" />
<meta http-equiv="Content-Type"content="text/html; charset=iso-8859-1" />
<meta charset="UTF-8"
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<title>Add Student Record</title>
</head>
<body>
<center>
<h1><u>Student Database</u></h1>
</center>
<?if(isset($_POST["submit"])){$name=$_POST["name"];$rno=$_POST["rollno"];$email=$_POST["email"];$disability=$_POST["disability"];$query="insert into studentvalue('$name','$rno','$email','$disability') values('name','rollno','email','disability')";if(mysql_query($query)){echo "";}}?>
<form name="add" method="post" action="add.php">

	<form name="add" method="post" action="add.php">
	<table class="table">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" placeholder="Enter student name" required>
			
		</tr>
		<tr>
			<td>Roll No</td>
			<td><input type="text" name="rollno" placeholder="Enter Roll Number" required>
			
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="Enter email of student" required>
			
		</tr>
		<tr>
			<td>Disability</td>
			<td><input type="text" name="disability" placeholder="Enter the disability " required>
			
		</tr>
		<tr>
			
			<td><input type="submit" value="submit"  required>
			
		</tr>
	</table>
</form>
<p align="center"><a href="index.php">Go Back to Home</a></p>

</body>
</html>

