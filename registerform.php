<?php
include 'dbconnect.php';

if(isset($_POST['submit'])){
  
  $email=$_POST["email"];
  $psw=$_POST["psw"];
  $g=$_POST["gender"];
  $dob=$_POST["birthday"];
  $hp=$_POST["phone"];

$sql="INSERT INTO user VALUES ('$email','$psw','$g','$dob','$hp')";
$query=mysqli_query($conn,$sql);

if($query)
  header("Location:registerSuccess.html");
}
?>
<!DOCTYPE html>
<html><head>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'></head>
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

* {box-sizing: border-box;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

btn {
  background-color: pink;
  color: black;
  font-family:'Sofia';
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

btn :hover {
  opacity:1;
  color: white;
}


signupbtn {
  float: left;
  width: 50%;
}

.container1 {
  padding: 16px;
}

.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: white;
  padding-top: 50px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 

.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: black;
  cursor: pointer;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
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
footer {
  background-color: pink;
  padding: 10px;
  text-align: left;
  color: black;
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
</style>
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
</div>

  <h2>Kathaleia&#9829;</h2>
</header>
<center>
<h2>Join Us Now!</h2><br>

<btn onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Continue</btn></center><br>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="post">
    <div class="container1">
      <h1>Register Now!</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Minimum 8 characters" name="psw" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-cfrm" required>

      <label for="gender"><b>Gender</b></label><br><br>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female" checked> Female<br><br>

      <label for="birthday"><b>Date of Birth</b></label>
      <input type="text" placeholder="dd/mm/yyyy" name="birthday" required>
      
      <label for="phone"><b>Mobile Phone</b></label>
      <input type="text" placeholder="Enter mobile phone" name="phone" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">By creating an account you agree to our Terms & Privacy.
      </label><br><br>

      <div class="clearfix">
        <input type="submit" class="btn" name="submit" value = "Sign Up"><br>
      </div>
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<br>
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
