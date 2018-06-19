<?php 
/*

*/
abstract class Order
{
	/* 
	 * Attributes
	 * ########################################################################
	 */
	protected $quantity;	// Ordered Quantity
	protected $amountPaid;		// Amount paid
	protected $pricePerQuantity;	// Selling price

	// Data and time the system recieved the order
	private $dateTime;
	private $orderID;

	/* 
	 * Constructor (s);
	 * ########################################################################
	 */
	function __construct()
	{
		$this->quantity = 0;
		$this->amountPaid = 0;
		$this->pricePerQuantity = 100;

		$this->dateTime = date("Y-m-d H:i:s");
		$this->orderID= rand(100,10000);
	}

	/*
	 * Setters
	 * #########################################################################
	 */
	public function SetQuantity($quantity)
	{
		$this->quantity = $quantity;
	}
	public function SetAmount($amount)
	{
		$this->amountPaid = $amount;
	}
	public function SetPrice($price)
	{
		$this->pricePerQuantity = $price;
	}
	public function SetOrderID($ID)
	{
		$this->orderID = $ID;
	}

	/*
	 * Adders
	 * #########################################################################
	 */
	public function AddQuantity($quant)
	{
		$this->quantity+=$quant;
	}
	public function AddAmount($amount)
	{
		$this->amountPaid+=$amount;
	}

	/*
	 * Getters
	 * #########################################################################
	 */
	public function GetPrice()
	{
		return $this->pricePerQuantity;
	}
	public function GetAmountPaid()
	{
		return $this->amountPaid;
	}
	public function GetQuantityOrdered()
	{
		return $this->quantity;
	}
	public function GetDateTime()
	{
		return $this->dateTime;
	}
	public function GetPaymentStatus()
	{
		if($this->cleared) return "Paid";
		return "Not Paid";
	}

	public function GetOrderId()
	{
		return $this->orderID;
	}


	abstract public function GetAmount();
	abstract public function GetQuantity();

	public function GetBalance()
	{
		return $this->GetAmount() - $this->GetAmountPaid();
	}
	

}



 ?>




