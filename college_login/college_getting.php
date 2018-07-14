<?php
	function getConnection(){
	$con=new mysqli("localhost","root","MadhuMysql");
		if($con->connect_error){
			header("location:db_error.php");
		}
		else{
			$con->select_db("sih_db");
			return $con;
		}
	}

	function getTopicName($topic_id){
		$con=getConnection();
		$result=$con->query("select `topic_name` from `module` where `topic_id`='".$topic_id."'");
		echo $con->error;
		$row=$result->fetch_assoc();
		return $row['topic_name'];
	}
	function getSubTopicName($sub_topic_id){
		$con=getConnection();
		$result=$con->query("select `sub_topic_name` from `sub_module` where `sub_topic_id`='".$sub_topic_id."'");
		$row=$result->fetch_assoc();
		return $row['sub_topic_name'];
	}
	function getTopicId($topic_name){
		$con=getConnection();
		$result=$con->query("select `topic_id` from `module` where `topic_name`='".$topic_name."'");
		$row=$result->fetch_assoc();
		return $row['topic_id'];
	}
	function getSubTopicId($sub_topic_name){
		$con=getConnection();
		$result=$con->query("select `sub_topic_id` from `sub_module` where `sub_topic_name`='".$sub_topic_name."'");
		$row=$result->fetch_assoc();
		return $row['sub_topic_id'];
	}
	function getQuizName($quiz_id){
		$con=getConnection();
		$result=$con->query("select `quiz_name` from `quiz` where `quiz_id`=".$quiz_id);
		$row=$result->fetch_assoc();
		return $row['quiz_name'];		
	}
	function getQuizId($quiz_name){
		$con=getConnection();
		$result=$con->query("select `quiz_id` from `quiz` where `quiz_name`='".$quiz_name."'");
		$row=$result->fetch_assoc();
		return $row['quiz_id'];		
	}



?>