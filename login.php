<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="vendor/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="image/png" href="logo/logo_rm.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<style>https://colorlib.com/etc/lf/Login_v4/images/bg-01.jpg
	.login-text{
padding:14px;
		}
		
		body{
			
			}
			
			.login-container{
				    background-image: url(images/bg.jpg);
				    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
				}
				
				.login-button{
					    font-family: Poppins-Medium;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px;
        background: -webkit-linear-gradient(right, #00dbde, #fc00ff);
					}
	</style>
<div class=" login-container">



<div class="card  z-depth-3"	>
	
	  <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#login" id="tab-login">Login</a></li>
        <li class="tab col s3"><a class="active" href="#sign">Create Account</a></li>
      
      </ul>
    </div>
 

	<div class="row">
		
		
    <form class="col s12" id="login">
			<p class="card-title center login-text">Login</p>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Type Your User Name" id="user_name" type="text" class="validate" required>
          <label for="user_name">User Name</label>
        </div>
        
        <div class="input-field col s12">
          <input placeholder="Type Your  Password" id="password" type="password" class="validate" required>
          <label for="password">Password </label>
        </div>

      
        
      </div>


    <div class="login-form-button">
        <button class="waves-effect waves-light btn login-button"   >Log in</button>
     
        </div>      
        <p class="center" >
     <a href="reset_password.php" style="color:#222 !important"> Forget your password? Click  to Reset</a>
   </p>
      <p class="center" >
     <a href="#sign" style="color:#222 !important"  id="already-sign"> Create New Account</a>
   </p>
   
   
    </form>
    
    
    <form class="col s12" id="sign">
			<p class="card-title center login-text">Create Account</p>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="tejaschaudhari038@gmail.com" id="email" type="email" class="validate" required>
          <label for="email">email</label>
        </div>
        
        <div class="input-field col s12">
          <input placeholder="tejas.codes" id="user_name" type="text" class="validate" required>
          <label for="user_name">User Name</label>
        </div>
        
        <div class="input-field col s12">
          <input placeholder="Type Your  Password" id="password" type="password" class="validate" required>
          <label for="password">Passowrd</label>
        </div>

        <div class="input-field col s12">
         <p>
      <label>
        <input type="checkbox" />
        <span>You agree to our <a href="#">Terms of service</a> and <a href="#">Privacy Policy</a></span>
      </label>
    </p>
        </div>
      
        
      </div>


    <div class="login-form-button">
        <button class="waves-effect waves-light btn login-button"   >Create Account</button>
     
        </div>      
        <p class="center" >
     <a href="#login" style="color:#222 !important"  id="already-login"> Already have an account?</a>
  
   
   
    </form>
    
  </div>
        
	
	
	</div>
	
</div>


    
 

        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('ul.tabs').tabs();
  $("#already-login").click(function() {
    $('ul.tabs').tabs('select', 'login');
  });
  
    $("#already-sign").click(function() {
    $('ul.tabs').tabs('select', 'sign');
  });
  
});

	</script>

   <script type="text/javascript" src="vendor/materialize.min.js"></script>
  
</body>

</html>    