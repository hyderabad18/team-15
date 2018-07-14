<?php
	function getConnection(){
	$con=new mysqli("localhost","root","");
		if($con->connect_error){
			header("location:db_error.php");// see later add this php
		}
		else{
			$con->select_db("sih_db"); //DATABASE NAME
			return $con;
		}
	}

	
?>