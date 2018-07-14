<?php
	class UlbConnection{
		private $db;
		function _constructor($db){
			$this->db=$db;
		}
		function getConnection(){
			$conn=new mysqli("localhost","root","MadhuMysql");
			if($conn->connect_error){
				header("location:db_error.php");
			}
			else{
				$conn->select_db("sih_db");
				return $conn;
			}
		}
		function authenticateUlb($ulb_user){
			$con=$this->getConnection();
			$query="select * from `ulb` where `ulb_user`=? and `ulb_password`=?";
			if($stmt=$con->prepare($query)){
				$stmt->bind_param("ss",$user,$pwd);
				$user=$ulb_user->getUlbUser();
				$pwd=$ulb_user->getUlbPassword();
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
		function getUid($user){
			$con=$this->getConnection();
			$query="select `uid` from `ulb` where `ulb_user`='".$user->getUlbUser()."'";
			$result=$con->query($query);
			if($result->num_rows>0){
				$id=$result->fetch_assoc();
			$con->close();	
				return $id['uid'];

			}
			else return 0;
		}

	} 
?>