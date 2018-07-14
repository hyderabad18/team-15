<?php
	class UlbConnection{
		private $db;
		function _constructor($db){
			$this->db=$db;
		}
		function getConnection(){
			$conn=new mysqli("localhost","root","");
			if($conn->connect_error){
				header("location:db_error.php");
			}
			else{
				$conn->select_db("youthseva");
				return $conn;
			}
		}
		function authenticateUlb($ulb_user,$password){
			$con=$this->getConnection();
			$query="select * from `college_details` where `email`=? and `password`=?";
			if($stmt=$con->prepare($query)){
				$stmt->bind_param("ss",$email,$password);
				$email=$ulb_user;
				$password=$password;
				$stmt->execute();
				$result=$stmt->get_result();
					if($result->num_rows==1){

					$con->close();
						return 1;	
					}
					else{
						$con->close();
						return 0;
					}
			}
			else{
				header("location:error.php");
			}
		}
	/*	function getUid($email){
			$con=$this->getConnection();
			$query="select `password` from `college_details` where `email`='"$email"'";
			$result=$con->query($query);
			if($result->num_rows>0){
				$id=$result->fetch_assoc();
			$con->close();	
				return $id['college_id'];

			}
			else return 0;
		}*/

	} 
?>