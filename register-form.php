<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up Form</title>
<style>
header
{
  margin:0;
  background-color:#f2f2f2;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-filter: grayscale(40%); /* Safari 6.0 - 9.0 */
  filter: grayscale(40%);
}

.navbar
{
  overflow: hidden;
  background-color:  #ffffff;     /* BACKGROUND COLOR*/
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a
{
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover
{
  background: #ddd;
  color: black;
}

.main
{
  padding: 0px;
  margin-top: 80px; <!-- Adjust content -->
  height: 1100px; /* Used in this example to enable scrolling */
}

.form {
  background: rgba(19, 35, 47, 0.9); 
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #1873cc;
  color: #ffffff;
}
.tab-group .active a {
  background: DodgerBlue;
  color: #ffffff;
}


</style>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    require 'register.php';
}
?>

<header>
  <div class="navbar">
    <a href="index.html" style="letter-spacing: 3px;">TEXTBOOK EXCHANGE</a>
  </div>
</header>

<body>
<div class="main">
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="login-form.php">Log In</a></li>
      </ul>

        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="register-form.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
              <input type="text" required autocomplete="off" name='firstname' placeholder="Firstname">
            </div>
        
            <div class="field-wrap">
              <input type="text" required autocomplete="off" name='lastname' placeholder="Lastname">
            </div>

            <div class="field-wrap">
              <input type="email" required autocomplete="off" name='email' placeholder="Email">
            </div>
          
            <div class="field-wrap">
              <input type="password" required autocomplete="off" name='password' placeholder="Password">
            </div>
          
            <button type="submit" class="button button-block" name="register">Register</button>
          
          </form>
        
        </div><!-- /signup -->

  </div> <!-- /form -->
</div> <!-- /main -->
</body>
</html>