<html>
<head>    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <title>Faucet</title>    
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">    
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap-theme.css">  
	<link rel="stylesheet" type="text/css" href="style/css/font-awesome.css">    
	<link rel="stylesheet" type="text/css" href="style/css/style.css">	
	<script language="javascript" type="text/javascript" src="style/javascript/jquery-1.11.2.min.js">
		
	</script>	
	<script language="javascript" type="text/javascript" src="style/javascript/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-pro navbar-fixed-top">	
		<div class="container">            
			<div class="navbar-header">          
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

			<span class="sr-only">Toggle navigation</span>            
			<span class="icon-bar"></span>           
			 <span class="icon-bar"></span>            
			 <span class="icon-bar"></span>          
			</button>          
			<a class="navbar-brand" href="#">First Faucet</a>       
			 </div>                
			 <div id="navbar" class="collapse navbar-collapse">          <ul class="nav navbar-nav">            
			 	<li><a href="index.php">Home</a></li>                                    
			 	{if !$logged}            
			 	<li><a href="login.php">Login</a></li>            
			 	<li><a href="register.php">Register</a></li>			
			 	<li><a href="howto.php">How It works?</a></li>            {else}                        
			 	<li><a href="withdrawal.php">Withdrawal</a></li>

			 	<li><a href="donate.php">Donate</a></li>                        <li><a href="referral.php">Referral</a></li>                        
			 	<li><a href="pass.php">Change Password</a></li>                                      
			 	<li><a href="logout.php">Logout</a></li>                                                                                    
			 {/if}                                                                                                                      </ul>        
			</div><!--/.nav-collapse -->	
		</div>
		</nav>
		<div class="container">