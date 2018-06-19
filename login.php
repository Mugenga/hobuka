<?php 
require_once "config.php"; 
include "header.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$errorString = "";

	if(empty($_POST["username"])) $errorString = $errorString."<li>UserName is empty<br></li>";
	if(empty($_POST["passID"]))   $errorString = $errorString."<li>PassCode is empty<br></li>";
	if(empty($_POST["admin"]))	  $errorString = $errorString."<li>User Type not indicated<br></li>";


	// Check account info from database

	if($errorString) echo '<div class="errorString">'.$errorString.'</div>';
	else 
	{
		if ($_POST["admin"] == "admin") 
		{
			$sql = "SELECT * FROM Admin WHERE userName = '".$_POST['username']."' AND PassCode = '".$_POST['passID']."'";
		}
		else
		{
			$sql = "SELECT * FROM SuperAdmin WHERE userName = '".$_POST['username']."' AND PassCode = '".$_POST['passID']."'";
		}
		$query = mysqli_query($connection,$sql);
		if( $query && mysqli_num_rows($query) > 0) header("Location: ./");
		else echo "<div class='errorString'> UserName or PassCode do not match</div>";
	}
}

?>

<h1 id="loggingIn">Login Page</h1>

<div class="loginPage">
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label id="username">UserName <input type="text" name="username"></label>
		<label id="passID">  PassCode <input type="password" name="passID"></label>
		
		<label id="userType">
			<div class="category">Choose User Type</div><br>
			<span>SuperAdmin <input type="radio" name="admin" value="superadmin"> </span>
			<span>Admin 		<input type="radio" name="admin" value="admin"></span>
		</label>

		<label id="submitButton"> <input type="submit" name="submit" value="Login"></label>
	</form>
</div>

<?php include "footer.php" ?>