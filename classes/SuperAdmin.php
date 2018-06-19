<?php 
include_once "Admin.php";

/**
 * 
 */
class SuperAdmin extends Admin
{
	
	function __construct($firstname = "", $lastname="",$age=0)
	{
		parent::__construct($firstname,$lastname,$age);
		# code...
	}

	public function RegisterAccount(/*$passCode*/)
	{
		$values = "(".$this->GetAccountID().", '".$this->GetfName()."', '".$this->GetlName()."', '";
		$values = $values.$this->GetUserName()."', ".$this->GetAge();//.", '".$passCode."')";
		$sql = "INSERT INTO `SuperAdmins` (`ID`, `firstName`, `lastName`, `userName`, `age`)  VALUES ".$values;
	}

}











 ?>