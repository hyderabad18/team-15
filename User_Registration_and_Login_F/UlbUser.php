<?php
	class UlbUser{
		private $uid;
		private $ulb_user;
		private $ulb_password;
		function setUlbUser($ulb_user){
			$this->ulb_user=$ulb_user;
		}
		function setUlbPassword($ulb_password){
			$this->ulb_password=$ulb_password;
		}
		function setUid($uid){
			$this->uid=$uid;
		}
		function getUlbUser(){
			return $this->ulb_user;
		}
		function getUlbPassword(){
			return $this->ulb_password;
		}
		function getUid(){
			return $this->uid;
		}
	}
?>