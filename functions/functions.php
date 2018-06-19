<?php 

require_once "../config.php";
include_once "../classes/Account.php";

function GetTable(string $table)
{
	if(strtolower($table) == "superadmin") return "SuperAdmins";
	elseif (strtolower($table) == "admin") return "Admins";
	elseif (strtolower($table) == "customer") return "Customers";
	else return "invalid";
}

function Register(mysqli $conn, string $type,array $colums, array $values)
{

	$colums_ = implode(", ", $colums);

	$values_ = "(";
	$count = 0;
	foreach($values as $value) 
	{
		if($count) $values_ = $values_.", ";
		$count++;
		if(is_numeric($value)) $values_ = $values_.$value;
		else $values_ = $values_."'".$value."'";
	}
	$values_ = $values_.")";

	$sql1 ="INSERT INTO ".GetTable($type)." (".$colums_.") VALUES ".$values_;

	if($query = mysqli_query($conn,$sql1)) echo "Sucessful";
	else echo "Failed ".mysqli_error($conn);

	echo "<br>";
	
}


function RegisterAccount(Account $account)
{
	// $fname = $account->Get
	$sql1 ="INSERT INTO ".GetTable($type)." (".$colums_.") VALUES ".$values_;
}


function UpdateValue(mysqli $conn, string $table, array $columns_values, array $column_value)
{
	$cols_Vals = implode(",", $columns_values);
	$where = implode("", $column_value);

	$sql = "UPDATE ".GetTable($table)." SET ".$cols_Vals." WHERE ".$where;

	// echo $sql;

	if(mysqli_query($conn,$sql)) echo "Sucessful";
	else echo "Failed ".mysqli_error($conn);
	echo "<br>";
}

function SelectAll(mysqli $conn, string $table)
{

	$sql = "SELECT * FROM ".GetTable($table);

	if(mysqli_query($conn,$sql)) echo "Sucessful";
	else echo "Failed ".mysqli_error($conn);
	echo "<br>";
}


$colums = array("ID","firstName","lastName","userName","age","passCode");
$values = array(102,"Tam","Tam","Tam",10,"Tam");
$reg  = Register($connection, "admin", $colums,$values);

$cv  = array("firstName = 'Duk'","age = '20'");
$cv1 = array("ID = '102'");
$reg1 = UpdateValue($connection, "admin", $cv,$cv1);

$requ =SelectAll($connection,"admin");

// echo $reg;












 ?>