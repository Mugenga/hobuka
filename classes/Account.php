<?php 
/**
 * 
 */
abstract class Account
{
	private $firstName;
	private $lastName;
	private $userName;
	private $age;

	private $accountID;
	private $passCord;

	function __construct($firstname = "", $lastname="",$age=0)
	{
		$this->firstName = $firstname;
		$this->lastName  = $lastname;
		$this->userName  = $firstname;
		$this->age 	 	 = $age;
		$this->accountID = rand(100,10000);
	}

	abstract public function RegisterAccount();

	public function SetFirstName($fname) {$this->firstName = $fname;}
	public function SetLastName($lname)  {$this->lastName  = $lname;}
	public function SetUserName($uname)  {$this->userName  = $uname;}
	public function SetAccountID($ID)	 {$this->accountID = $ID;	}
	public function SetAge($Age) 		 {$this->age	   = $Age;	}

	public function GetName() 		{return $this->firstName." ".$this->lastName;}
	public function GetUserName() 	{return $this->userName;}
	public function GetAge() 		{return $this->age;}
	public function GetAccountID() 	{return $this->accountID;}

	public function GetfName() {return $this->firstName;}
	public function GetlName() {return $this->lastName; }

	public function __toString()
	{
		return "Name: 		".$this->GetName()."<br>
				UserName:	".$this->GetUserName()."<br>
				Age: 		".$this->GetAge()."<br>
				Account ID: ".$this->GetAccountID()."<br><br>";
	}
}


// $customer = new Customer("Sam");
// for ($i=0; $i < 5; $i++) { 
// 	$order = new PreOrder(5*$i);
// 	$customer->AddOrder($order);
// 	$order = new PostOrder(5*$i);
// 	$customer->AddOrder($order);
// }



// $admin = new Admin("Alex");
// $SuperAdmin = new SuperAdmin("JOhn");
// $customer->SetAge(10);
// $admin->SetAge(15);
// $SuperAdmin->SetAge(20);


// echo $customer;
// echo $admin;
// echo $SuperAdmin;



 ?>




