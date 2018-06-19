<?php 
include_once "Account.php";
include_once "Order.php";

/**
 * 
 */
class Customer extends Account
{
	private $orders;
	private $meterID;
	private $meterValue;

	function __construct($firstname = "", $lastname="",$age=0)
	{
		parent::__construct($firstname,$lastname,$age);
		$this->orders = array();
		$this->meterID = 0;
		$this->meterValue = 0;
	}

	public function SetMeterID($meterid)
	{
		$this->meterID = $meterid;
	}

	public function AddToMeter($value)
	{
		$this->meterValue+=$value;
	}


	public function AddOrder(Order $order)
	{
		array_push($this->orders, $order);
	}

	public function GetMeterID()
	{
		return $this->meterID;
	}

	public function GetMeterValue()
	{
		return $this->meterValue;
	}
	
	public function GetOrders()
	{
		return $this->orders;
	}
	public function GetOrder($by="")
	{
		// Getting individual Order
	}

	public function __toString()
	{
		$str = "";
		foreach ($this->orders as $order) {
			$str.=$order->GetInvoice();
		}
		return "Name: 		".$this->GetName()."<br>
				UserName:	".$this->GetUserName()."<br>
				Age: 		".$this->GetAge()."<br>
				Account ID: ".$this->GetAccountID()."<br>
				Orders <br>".$str."<br><br>";
	}

	public function RegisterAccount($passCode)
	{
		$values = "(".$this->GetAccountID().", '".$this->GetfName()."', '".$this->GetlName()."', '";
		$values = $values.$this->GetUserName()."', ".$this->GetAge().", '".$passCode."')";
		$sql = "INSERT INTO `Customers` (`ID`, `firstName`, `lastName`, `userName`, `age`, `passCode`)  VALUES ".$values;

		return $sql;
	}

}










 ?>