<?php 
include_once "Order.php";
/*
 *	Pre-Order accepts the Quantity of Energy used and determines
 *  the amount of money to be paid for the amount
 */
class PostOrder extends Order
{
	function __construct($quantity)
	{
		parent::__construct();
		$this->SetQuantity($quantity);
	}

	public function GetQuantity()
	{
		return $this->GetQuantityOrdered();
	}
	public function GetAmount()
	{
		return $this->Getprice()*$this->GetQuantity();
	}

	public function GetInvoice()
	{
		return "		Post-Order <br>
				Quantity: 		".$this->GetQuantity()	."KW<br>
			    Price Per KW: 	".$this->GetPrice()		."RWF<br>
			    Total Amount: 	".$this->GetAmount()	."RWF<br>
			    Amount Paid: 	".$this->GetAmountPaid()."RWF<br>
			    Balance: 		".$this->Getbalance()	."RWF<br><br>
			    Order ID: 		".$this->GetOrderId()	."<br><br>";
	}
	
	
}

 ?>