<?php
	function getConnection(){
	$con=new mysqli("localhost","root","");
		if($con->connect_error){
			header("location:db_error.php");
		}
		else{
			$con->select_db("youthseva");
			return $con;
		}
	}

	

?>