<?php
include'dbconnect.php';
$sql="SELECT * FROM product WHERE category='eyeshadow'";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  padding: 20px;
  max-width: 200px;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
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
<div class="btn-group">
  <button class="btn1" ><a href='concealerpage.php'>CONCEALER</a></button>
  <button class="btn2" ><a href='blusherpage.php'>BLUSHER</a></button>
  <button class="btn3" ><a href='powderpage.php'>POWDER</a></button>
  <button class="btn4" ><a href='foundationpage.php'>FOUNDATION</a></button>
  <button class="btn5" ><a href='eyelinerpage.php'>EYELINER</a></button>
  <button class="btn6" ><a href='eyeshadowpage.php'>EYESHADOW</a></button>
  <button class="btn7" ><a href='mascarapage.php'>MASCARA</a></button>
  <button class="btn8" ><a href='lipstickpage.php'>LIPSTICK</a></button>
  <button class="btn9" ><a href='lipglosspage.php'>LIPGLOSS</a></button>
</div>
<h1 style="text-align:center">Eyes</h1><br>
<br>
<table align="center">
  <tr>
  <?php $product_count=0;
  while($product=mysqli_fetch_assoc($result)){?>
    <td align="center">
      <div class="card">
      <form>
      <?php 
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'" alt="cosmetic" style="width:100%"/>';
        echo "<h3>".$product["product_name"]."</h3>";
        echo '<p class="price">RM '.$product["price"]."</p>";
        echo "<p>Code: ".$product["colour"]."</p>";
        $product_count++;?>
        <input type="hidden" name="name" value="<?php echo $product['product_name']?>">
        <input type="hidden" name="productid" value="<?php echo $product['product_id']?>">
        <input type="hidden" name="price" value="<?php echo $product['price']?>">
        <p><button type="submit" formaction="addtocart.php" formmethod="post" name="submit">Add to Cart</button></p>
      </form>
      </div>
    </td>
    <?php if($product_count%4==0 and $product_count!=0)
    echo "</tr><tr>";
  }?>
</table>
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