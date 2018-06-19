<?php 

include_once "Order.php";
include_once "Customer.php";
include_once "SuperAdmin.php";


class ElectriDataSystem
{
	/* 
	 * Attributes
	 * ########################################################################
	 */
	private  $systemName;
	// private $totalPower;
	// private $powerUsed;
	
	#Arrays of different users
	private $superAdmins;
	private $admins;
	private $customers;
	// The system must be accessed with a valid active account
	public  $activeAccount; 

	/* 
	 * Constructor (s);
	 * #########################################################################
	 */
	public function __construct(Account $account)
	{
		$this->systemName = "ElectriData System";
		// There must be an active account to get into the system
		$this->activeAccount = $account;

		$this->superAdmins = array();
		$this->admins     = array();
		$this->customers  = array();
	}

	/* 
	 * Creating objects;
	 * #########################################################################
	 */
	public function CreateSuperAdmin($firstname = "", $lastname="",$age=0)
	{
		$SAdmin = new SuperAdmin($firstname, $lastname,$age);
		array_push($this->superAdmins,$SAdmin);
	}
	public function CreateAdmin($firstname = "", $lastname="",$age=0)
	{
		$admin = new Admin($firstname, $lastname,$age);
		array_push($this->admins,$admin);
	}
	public function CreateCustomer($firstname = "", $lastname="",$age=0)
	{
		$cus = new Customer($firstname, $lastname,$age);
		array_push($this->customers,$cus);
	}
	public function CreatePreOrder(Customer $customer,$amount)
	{
		$order = new PreOrder($amount);
		$customer->AddOrder($order);
	}
	public function CreatePostOrder(Customer $customer,$quantity)
	{
		$order = new PostOrder($quantity);
		$customer->AddOrder($order);
	}

	/*
	 * Listing Objects
	 * #########################################################################
	 */
	
	public function ListCustomers()
	{
		foreach ($this->customers as $cus) {
			echo $cus;
		}
	}
	public function ListAdmins()
	{
		foreach ($this->admins as $admin) {
			echo $admin;
		}
	}
	public function ListSuperAdmins()
	{
		foreach ($this->superAdmins as $Super_Admin) 
		{
			echo $Super_Admin;
		}
	}

	/*
	 * Setters
	 * #########################################################################
	 */
	public function AddAccount()
	{
		# code...
	}

	/*
	 * Getters
	 * #########################################################################
	 */
	public function GetCustomer($by="username")
	{
		if(count($this->customers) > 0) return $this->customers[0];
		return False;
	}
	public function GetDailyUsage()
	{
		# code...
	}
	public function GetMonthlyUsage()
	{
		# code...
	} 

	/*
	 * Class operations
	 * #########################################################################
	 */
	public function FindAccount()
	{
		# code...
	}

}

// $superAdmin = new SuperAdmin("John");

// $system = new ElectriDataSystem($superAdmin);

// $system->CreateCustomer("John");

// $custmer = $system->GetCustomer();

// $system->CreatePreOrder($custmer,7882329.90);

// $system->CreatePostOrder($custmer,3278642.0);

// $system->ListCustomers();










 ?>
