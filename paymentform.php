<?php
//if(isset['submit']){
// $a=$_POST['receiptNum'];
// $b=$_POST['date'];
// $c=$_POST['amount'];
// $d=$_POST['cardnumber'];
// $sql2="INSERT INTO receipt VALUES ('$a','$b','$c')";
// $query=mysqli_query($conn,$sql2);}
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    function validate(){
      var n=document.pay.firstname.value;
      var e=document.pay.email.value;
      var a=document.pay.address.value;
      var c=document.pay.city.value;
      var s=document.pay.state.value;
      var z=document.pay.zip.value;
      var cn=document.pay.cardname.value;
      var cnm=document.pay.cardnumber.value;
      var b=document.pay.bankname.value;
      var exp=document.pay.expdate.value;
      var cv=document.pay.cvv.value;

      if(n==''){
        alert("Please complete the form.");
        return false;
      }
      if(e==''){
        alert("Please complete the form.");
        return false;
      }
      if(a==''){
        alert("Please complete the form.");
        return false;
      }
      if(c==''){
        alert("Please complete the form.");
        return false;
      }
      if(s==''){
        alert("Please complete the form.");
        return false;
      }
      if(z==''){
        alert("Please complete the form.");
        return false;
      }
      if(cn==''){
        alert("Please complete the form.");
        return false;
      }
      if(cnm==''){
        alert("Please complete the form.");
        return false;
      }
      if(b==''){
        alert("Please complete the form.");
        return false;
      }
      if(exp==''){
        alert("Please complete the form.");
        return false;
      }
      if(cv==''){
        alert("Please complete the form.");
        return false;
      }
  </script> 
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

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.paycontainer {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: pink;
  color: black;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: lightpink;
}

b {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
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
footer {
  background-color: pink;
  padding: 10px;
  text-align: left;
  color: black;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
<center><h2>Payment Detail</h2></center>

<div class="row">
  <div class="col-75">
    <div class="paycontainer">
      <form name="pay" method="post" action="receipt.php" >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter your name..." required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email address..." required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter your full address..." required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter your city..." required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter your state..." required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="Enter your zip code..." required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Name on card" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="bank">Bank Name</label>
            <input type="text" id="bank" name="bankname" placeholder="Enter the bank name" required>
            <div class="row">
              <div class="col-50">
                <label for="expdate">Exp Date</label>
                <input type="text" id="expdate" name="expdate" placeholder="Enter the expired date" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Three last number---352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Do you agree that the shipping address above is same as billing?
        </label>
        <input type="hidden" name="price" value="<?php $p=$_GET['p']; echo $p;?>">
        <input type="submit" name="submit" value="Continue for payment" class="btn" onclick="validate();">
      </form>
    </div>
  </div>
</div><br>
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
<div>
<br><center>
<p>&copy; 2019 KathaleiaCosmetic.com<p></center></div></footer>
</body>
</html>
