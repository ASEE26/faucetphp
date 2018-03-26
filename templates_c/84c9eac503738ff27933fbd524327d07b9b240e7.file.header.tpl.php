<?php /* Smarty version Smarty-3.1.21-dev, created on 2018-03-26 05:02:26
         compiled from "template/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3821374065ab0c55c3d2af7-72958645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84c9eac503738ff27933fbd524327d07b9b240e7' => 
    array (
      0 => 'template/header.tpl',
      1 => 1522062144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3821374065ab0c55c3d2af7-72958645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ab0c55c3e07a2_27841461',
  'variables' => 
  array (
    'logged' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab0c55c3e07a2_27841461')) {function content_5ab0c55c3e07a2_27841461($_smarty_tpl) {?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="template/assets/images/favicon.ico">

    <title>The Superior Coin Faucet</title>

    <!-- Bootstrap core CSS -->
    <link href="template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="template/assets/css/carousel.css" rel="stylesheet">
    <link href="template/assets/css/custom.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="template/assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div id="loader-wrapper">
      <div id="loader">
        <img src="template/assets/images/loader.gif" alt="">
      </div>

      <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

    </div>

    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">

        <a class="navbar-brand" href="#">
          <img src="template/assets/images/SuperiorCoinLogoMenu.png" width="200" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">


          		<li class="nav-item"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>                                    
			 	<?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>            
			 	<li class="nav-item"><a class="nav-link"  href="login.php">Login</a></li>            
			 	<li class="nav-item"><a class="nav-link"  href="register.php">Register</a></li>			
			 	<li class="nav-item"><a class="nav-link"  href="howto.php">How It works?</a></li>            <?php } else { ?>                        
			 	<li class="nav-item"><a  class="nav-link" href="withdrawal.php">Withdrawal</a></li>

			 	<li class="nav-item"><a class="nav-link"  href="donate.php">Donate</a></li>                        
			 	<li><a  class="nav-link" href="referral.php">Referral</a></li>                        
			 	<li class="nav-item">
			 		<a  class="nav-link" href="pass.php">Change Password</a>
			 	</li>                                      
			 	<li class="nav-item">
			 		<a  class="nav-link" href="logout.php">Logout</a>
			 	</li>                                                                                    
			 	<?php }?>   
            


			<!--
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Dropdown link
	            </a>
	            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="#">Action</a>
	              <a class="dropdown-item" href="#">Another action</a>
	              <a class="dropdown-item" href="#">Something else here</a>
	            </div>
	          </li>
	      	-->


          </ul>
          
        </div>
      </nav>
    </header>

    <main role="main">






<?php }} ?>
