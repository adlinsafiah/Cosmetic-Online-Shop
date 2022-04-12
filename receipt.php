<?php
// Initialize the session
session_start();
 
 include 'dbconnect.php';
//$conn=mysqli_connect("localhost","root","","company");

// if(!$conn)
// 	echo("loser");
// else
// 	echo("you did it!");

$sql="SELECT * FROM cart";
$result=mysqli_query($conn,$sql);

$name=$_POST['firstname'];
//$email=$_POST['email'];
$add=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
//$cardnme=$_POST['cardname'];
//$cardnum=$_POST['cardnumber'];
$bank=$_POST['bankname'];
//$exp=$_POST['expdate'];
//$cvv=$_POST['cvv'];
$price=$_POST['price'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Cart</title>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
header {
  background-color: pink;
  font-family: 'Sofia';
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

.btn-group button {
  background-color: white;  
  color: black; 
  padding: 10px 24px; 
  cursor: pointer; 
  width: 140PX; 
}

.btn-group button{
  border-bottom: none; 
}


.btn-group button, a{
 color:black;
 text-decoration: none; 
}
.btn-group button:hover {
  background-color: pink;
}
.navbar {
  overflow: hidden;
  background-color: pink;
}

.navbar a {
  float: left;
  font-size: 16px;
  font-family: Century Gothic;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  font-family: Century Gothic;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px; 
  font-family: Century Gothic; 
  border: none;
  outline: none;
  color: black;
  padding: 1px 8px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: pink;
}

.dropdown:hover .dropdown-content {
  display: block;
}


.icon-bar {
  width: 50%;
  background-color: pink;
  overflow: auto;
  text-align: center;
}

.icon-bar a {
  float: left;
  width: 16%;
  padding: 12px 0;
  border-radius:180px;
  transition: all 0.3s ease;
  color: black;
  font-size: 26px;
}

.icon-bar a:hover {
  background-color: white;
}
.button { 
  background-color: #FFCCCC;
  font-family:Century Gothic;
  font-style : bold;
  border: none;
  color: black;
  padding: 10px;
  text-align:center;
  text-decoration:none;
  display: inline-block;
  font-size: 20px;

  cursor: pointer;
  
  Button1 : hover{border-radius: 10px;opacity: 1}
  Button2 : hover{border-radius: 10px;opacity: 1}
  Button3 : hover{border-radius: 10px;opacity: 1}
  Button4 : hover{border-radius: 10px;opacity: 1}
  Button5 : hover{border-radius: 10px;opacity: 1}
  Button6 : hover{border-radius: 10px;opacity: 1}
}
table{
	font-family:Century Gothic;
	font-size: 20px;
}
footer {
  background-color: pink;
  padding: 10px;
  text-align: left;
  color: white;
}
</style>
</head>
<body>
<header>
<div class="navbar">
  <a href="proj.html">Home</a>
  <div class="dropdown">
    <button class="dropbtn"><a href="boardmembers.html">About Us</a></button>
    <div class="dropdown-content">
      <a href="About Us.html">About Product</a>
      <a href="boardmembers.html">Company Profile</a>
    </div>
  </div> 
  <a href="registerform.html">Membership</a>
  <div class="dropdown">
    <button class="dropbtn"><a href="product.html">Product</a></button>
    <div class="dropdown-content">
      <a href='concealerpage.php'>Concealer</a>
      <a href='blusherpage.php'>Blusher</a>
      <a href='powderpage.php'>Powder</a>
      <a href='foundationpage.php'>Foundation</a>
      <a href='eyelinerpage.php'>Eyeliner</a>
      <a href='eyeshadowpage.php'>Eyeshadow</a>
      <a href='mascarapage.php'>Mascara</a>
      <a href='lipstickpage.php'>Lipstick</a>
      <a href='lipglosspage.php'>Lipgloss</a>
    </div>
  </div>
  <a href="inquiriesform.html">Ask A Question</a>
  <a href="cartview.php">Your Cart</a>
</div>

  <h2>Kathaleia&#9829;</h2>
</header>
	<br>
	<h1 style="text-align:center">Your payment was successful!</h1><br>
	<table align="center" cellpadding="10px">
		<tr>
      <th colspan="5">RECEIPT</th>
    </tr>
    <tr>
      <td colspan="3"><?php echo $name;?></td>
      <td align="right">No:</td>
      <td><?php $num=rand(); echo $num; ?></td>
    </tr>
    <tr>
      <td colspan="3"><?php echo $add."<br>".$city.",".$zip."<br>".$state; ?></td>
      <td align="right">Date:</td>
      <td><?php echo date("j")."/".date("m")."/".date("Y"); ?></td>
    </tr>
    <tr> </tr>
    <tr> </tr>
    <tr>
      <th>No.</th>
      <th>Item</th>
      <th>Unit Cost</th>
      <th>Quantity</th>
        <th>Price</th>
    </tr>
    <?php $count=1;
    while($row=mysqli_fetch_assoc($result)){ ?>
    <tr align="center">
      <td><?php echo $count;?></td>
      <td><?php echo $row["product_name"];?></td>
      <td><?php echo $row["price"];?></td>
      <td><?php echo $row["quantity"];?></td>
      <td><?php echo $row["total"];?></span></td>
    </tr>
    <?php $count++;} ?>
    <tr>
      <td colspan="4" align="right">Total Amount:</td>
      <td><?php echo "RM ".$price;?></td>
    </tr>
    <tr>
      <td colspan="4" align="right">Amount Paid:</td>
      <td><?php echo "RM ".$price;?></td>
    </tr>
    <tr>
      <td colspan="4" align="right">Bank Name:</td>
      <td><?php echo $bank;?></td>
    </tr>
    <tr>
      <td colspan="5" align="center"> </td>
    </tr>
    <tr>
      <td colspan="5" align="center">Thank you for buying our products.<br>We will sent you an email to keep track of your shipping.</td>
    </tr>
    <tr><td colspan="5" align="center"><button class="button"><a href="signout.php">Sign out</a></button></td></tr>
  </table>
  <?php $sql="DELETE FROM cart";
        $query=mysqli_query($conn,$sql);?>
 <!--if insert to table receipt is neccesary
    <form method=post>
    <input type="hidden" name="receiptNum" value="<?php echo $num; ?>">
    <input type="hidden" name="date" value="<?php echo date('j').'/'.date('m').'/'.date('Y'); ?>">
    <input type="hidden" name="amount" value="<?php echo $price; ?>">
    etc
    <input type="submit" name="insert" value="Back to homepage">
    </form>-->
   <?php //if(isset['insert'])
       // $a=$_POST['receiptNum'];
       // $b=$_POST['date'];
        //$c=$_POST['amount'];
       //$sql2="INSERT INTO receipt VALUES ('$a','$b','$c')";
        //$query=mysqli_query($conn,$sql2);
        //check if query is able to run.
        //recommend to apply this at paymentform.php?>

	<footer>
      <div class="container">
        <h4> Our Address</h4>
        <h4><ul>168, Bukit Bintang Street,<br> Bukit Bintang,<br>5100 Kuala Lumpur,<br>Federal Territory of Kuala Lumpur</ul>
        </h4>
        <h4> Operating Hours</h4>
        <h4><ul> Mon - Sun at 10 a.m. to 10 p.m</ul></h4>
        </div>
      <div class="icon-bar">
	  <a href="#"><i class="fa fa-envelope"></i></a> 
	  <a href="#"><i class="fa fa-globe"></i></a>
	  <a href="#"><i class="fa fa-whatsapp"></i></a>
	  <a href="#"><i class="fa fa-twitter"></i></a>
	  <a href="#"><i class="fa fa-instagram"></i></a>
	  <a href="#"><i class="fa fa-youtube"></i></a>
	</div>
	</footer>
</body>
</html>