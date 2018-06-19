<?php 
include_once "Order.php";
/*
 *	Post-Order accepts the amount and determines
 *  the quantity of Energy for the amount
 */
class PreOrder extends Order
{
	function __construct($amount)
	{
		parent::__construct();
		$this->SetAmount($amount);
	}

	public function GetAmount()
	{
		return $this->GetAmountPaid();
	}

	public function GetQuantity()
	{
		return $this->GetAmount()/$this->GetPrice();
	}





	public function GetInvoice()
	{
		return "		Pre-Order <br>
				Amount: ".$this->GetAmountPaid()." RWF<br>
				Price Per KW: ".$this->GetPrice()." RWF<br>
			    Quantity : ".$this->GetQuantity()." KW<br>
			    Total Amount: ".$this->GetAmount()." RWF<br>
			    Balance: ".$this->Getbalance()." RWF<br><br>
			    Order ID: ".$this->GetOrderId()."<br><br>";

	}
	
}


 ?>