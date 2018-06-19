<?php
include_once "Account.php";

/**
 *
 */
class Admin extends Account
{

	function __construct($firstname = "", $lastname="",$age=0)
	{
		parent::__construct($firstname,$lastname,$age);
		# code...
	}

	public function RegisterAccount(/*$passCode*/)
	{
		$values = "(".$this->GetAccountID().", '".$this->GetfName()."', '".$this->GetlName()."', '";
		$values = $values.$this->GetUserName()."', ".$this->GetAge()."')";
		// $sql = "INSERT INTO `Admins` (`ID`, `firstName`, `lastName`, `userName`, `age`)  VALUES ".$values;




		// $query = mysqli_query($c);

		// if($query && mysqli_num_rows($query) > 0)
		echo $sql;
		return $sql;

	}

}










 ?>
